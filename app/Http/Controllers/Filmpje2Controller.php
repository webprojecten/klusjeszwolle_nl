<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Filmpje2Controller extends Controller
{
    private $imgStack = [];
    private $imgCounter = 1;

    // todo als er een waarde wordt opgegeven die diet kan, dan moet deze een error geven.
    public function show()
    {
        $clip = [
            0 => [
                'pop' => 'f:/img/21.jpg top:0 left:0 s:130',
                'zoom'=> 's:130 top:5 left:20 d:4000',
            ],
            4000 => [
                'pan' => 'right:20 d:2000',
            ],
            6000 => [
                'fade' => 'f:/img/22.jpg d:500 top:0 right:10 s:100',
                'zoom' => 'bottom:10 left:10 s:150 d:3000',
            ],
            9000 => [
                'clipEnd' => 'stay',
            ]
        ];
        
        $clipDuration = max(array_keys($clip));
        
        if (key_exists('clipEnd', $clip[$clipDuration])) {
            $this->clipEnd($clip[$clipDuration]['clipEnd']);
        } else {
            throw new \Exception('Your last event needs to set the clipEnd property');
        }
        
        foreach ($clip as $time => $actions) {
            $perc = round($time / $clipDuration * 100, 2);
            foreach ($actions as $action => $value) { 
                if (method_exists($this, $action)) {
                    $this->$action($value);
                } else {
                    throw new \Exception($action . " is not a valid action.");
                }
            }
        }
        dd($this->imgStack);
        return view('filmpje_2.index');
    }

    private function clipEnd($string) {
        if ($string === 'stay' || $string === 'revert' || $string === 'none') {
            $this->$string();
        } else {
            throw new \Exception('The clipEnd value has to be either "stay", "revert" or "blank"');
        }
    }
    
    private function stay()
    {
        echo "Clip eindigt op laatse plaatje";
    }
    
    private function revert()
    {
        echo "Clip keert terug naar eerste plaatje.";
    }
    
    private function none()
    {
        echo "Clip eindigt op geen plaatje";
    }
    
    private function pop(string $value)
    {
        $arr = $this->getSeperatedValues($value);
        dd($valuesArr);
    }
    
    private function fade(string $value)
    {

    }
    
    private function zoom(string $value)
    {

    }
    
    private function pan(string $value)
    {

    }

    private function getSeperatedValues($value)
    {
        $filename = $this->getFileName($value);
        $duration = $this->getDuration($value);
        $size = $this->getSize($value);
        $positions = $this->getPositions($value);

        return [
            'file' => $filename, 
            'duration' => $duration, 
            'size' => $size, 
            'positions' => $positions
        ];
    }

    private function getFileName($value)
    {
        if (preg_match('/f:(?<filename>[\s\S]+\.jpg)/', $value, $matches)) {
            $filename = $matches['filename'];
            return $filename;
        } else {
            throw new \Exception('There must be a valid filename for the popped image');
        }
    }

    private function getDuration($value)
    {
        if (preg_match('/d:(?<duration>[\d]+) /', $value, $matches)) {
            $duration = $matches['duration'];
            return $duration;
        } else {
            return 0;
        }
    }

    private function getPositions($value)
    {
        $position = ['top', 'bottom', 'left', 'right'];
        $res = [];

        foreach ($position as $pos) {
            if (preg_match('/' . $pos . ':(?<' . $pos . '>[\d]+) /', $value, $matches)) {
                $res[$pos] = $matches[$pos];
            } else {
                $res[$pos] = 0;
            }
        }

        return $res;
    }

    private function getSize($value)
    {   
        //todo maak dit robuuster, zodat spaties duidelijk de limit aangeven. Misschien explode?
        if (preg_match('/s:(?<size>[\d]+)%?/', $value, $matches)) {
            $size = $matches['size'];
            return $size;
        } else {
            return 100;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandCrontroller extends Controller
{
    public function getAll(){

        $bands = $this->getBands();

        return response()->json([$bands]);
    }

    protected function getBands(){
        return [
            ['id' => 1, 'name' => AC/DC],
            ['id' => 2, 'name' => Metallica],
            ['id' => 3, 'name' => Gorillaz]
        ];
    }

}

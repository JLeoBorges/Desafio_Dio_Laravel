<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BandCrontroller extends Controller
{
    public function getAll(){

        $bands = $this->getBands();

        return response()->json([$bands]);
    }

    public function getByGender($gender){

        $bands = null;

        foreach ($this->getBands()as $_bands){
            if ($_bands['gender'] == $gender)
            $bands = $_bands;
        }

        return $band ? reponse()->json($band): abort(404);
    }

    public function getById($id){

        $band = null;

        foreach ($this->getBands()as $_band){
            if ($_band['id'] == $id)
            $band = $_band;
        }

        return $band ? reponse()->json($band): abort(404);

    }

    public function store(Request $request){

        $validate = $request->Validate([
            'id' => 'numeric',
            'name' => 'required|min:3'

        ]);

        return responde()->json($request->all());
    }


    protected function getBands(){
        return [
            ['id' => 1, 'name' => AC/DC, 'gender' => 'rock'],
            ['id' => 2, 'name' => Metallica, 'gender' => 'rock'],
            ['id' => 3, 'name' => Gorillaz, 'gender' => 'pop']
        ];
    }

  
}

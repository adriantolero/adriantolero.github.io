<?php

namespace App\Controllers;

class Teamtreehouse extends BaseController{

    public function index(){

        $data = [
            'h1' => 'Best online coding classes for at-home learning',
            'h2' => 'Learn to code, design, and more-all on your own time',
             
        ];

        return view('treehouse',$data);

    }

}

?>
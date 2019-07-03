<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke($name,$nickname=null){
        if($nickname){
            return "tu nombre es {$name}, tu nickname es {$nickname}";

        }
        else{
            return "tu nombre es {$name}, tu no tienes nickname";


        }

    }
    //
}

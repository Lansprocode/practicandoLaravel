<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name, $nickname = null)
    {
    	if ($nickname) {

        $name = ucfirst($name);

        return "Bienvenido {$name}, tu apodo es {$nickname}";
	    } else {
	        return "Bienvenido {$name}";
	    }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function me()
    {
        return response("Hello, this is me!!!");
    }

    function generalGreet(Request $request)
    {
        return response("Hello Guest!");
    }

    //greet/title
    function greet(Request $request, $name = "Guest", $title = "Mr.")
    {
        return response("Greetings, {$title} {$name}");
    }
}

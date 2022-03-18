<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return response()->json([
            'message' => 'Hello World'
        ]);
    }

    public function message(Request $request){
        broadcast(new MessageSent($request->all()))->toOthers();;
        // return 'hola';
    }
}

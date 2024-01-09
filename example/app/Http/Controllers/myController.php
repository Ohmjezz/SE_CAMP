<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    private $myvar = "Hello World";
    function __construct()
    {

    }

    function index()
    {
        return view('myfolder.home');
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
}

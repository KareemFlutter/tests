<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    // CRUD 

    public function index () {
        return view('todos.index');
    }

    public function store (Request $request) {
        dd($request->all());
    }

    public function show ($id) {

    } 

    public function edit () {
        
    }

    public function update (Request $request, $id) {

    }

    public function destory ($id) {

    }

}

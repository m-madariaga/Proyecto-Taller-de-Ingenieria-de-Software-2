<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class actionController extends Controller
{
    public function index()
    {
        $action = Action::all();
        return view('action.index', compact('actions'));
    }
    public function create()
    {
        return view('action.create');
    }
    public function store(Request $request)
    {

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update(Request $request,$id){

    }
    public function destroy($id){

    }
}

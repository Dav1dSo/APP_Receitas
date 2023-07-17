<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReceitaForm;

class ReceitaOptions extends Controller
{
    public function index() {
        return view('components.create');
    }
    public function create(ReceitaForm $request) {
        dd($request->all());
    }
}

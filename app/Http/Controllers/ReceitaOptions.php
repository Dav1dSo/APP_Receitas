<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ReceitaOptions extends Controller
{
    public function Create() {
        return view('components.create');
    }
}

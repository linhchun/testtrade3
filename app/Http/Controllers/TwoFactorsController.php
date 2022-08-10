<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactorsController extends Controller
{
    public function index() {
        return view('twofactor');
    }
}

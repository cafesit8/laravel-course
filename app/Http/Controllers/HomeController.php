<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
  function __invoke() {
    return view('welcome');
    // return 'Bienvenido a Larabel 10';
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapungController extends Controller
{
  function index() {
        echo "ini dari controler";
  }
  function pujangga() {
        echo "ini dari controler pujangga";
  }
  function siti() {
        return view('mamalia/kucing');
  }
}

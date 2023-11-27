<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
  public function index(Request $request)
  {
    $series = [
      'Loki',
      'Upload',
      'Game of Thrones',
      'White Colar'
    ];

    return view('series.index')->with('series', $series);
  }

  public function create(Request $request)
  {
    return view('series.create');
  }
}

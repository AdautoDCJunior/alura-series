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

    $http = '<ul>';

    foreach ($series as $serie) {
      $http .= "<li>$serie</li>";
    }

    $http .= '</ul>';

    return $http;
  }
}

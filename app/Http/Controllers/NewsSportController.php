<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsSport;

class NewsSportController extends Controller
{
    public function get_berita() {
      $news = NewsSport::all();

      return $news->toJson();;
    }
}

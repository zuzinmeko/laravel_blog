<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function home($value='')
    {
      return view('home');
    }
   public function rental($value='')
   {
     return view('rental');
   }
   public function service($value='')
   {
    return view('rentalservice');
   }
   public function agency($value='')
   {
      return view('agency');
   }
   public function about($value='')
   {
      return view('about');
   }
   public function contact($value='')
   {
      return view('contact');
   }
}

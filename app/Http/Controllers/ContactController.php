<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
   // Dit is de functie die aangeroepen wordt vanuit Route::get()
   public function index($name=null)
   {
       return "Hallo " . $name . ", dit is ContactController.";
   }
}

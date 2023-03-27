<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
   
   public function Index(){
    return view(('about'));
   } //end method
   public function ContactUs(){
    return view(('contact'));
   } //end method
   public function Register(){
      return view(('register'));
     } //end method
}

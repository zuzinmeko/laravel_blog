<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home($value=''){
    	 return view('welcome');
    }
     
    public function service($value='')
    {
    	$students =array(
    		array('name'=>'mg mg','age'=>23)
    	);
    	return view ('service',['a'=>$students]);
    }
}

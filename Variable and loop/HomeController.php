<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index(){
		return view('kalkulator');
	 }

	 public function kalkulator(request $request){
		$bilangan1 = $request->input('B1');
		$bilangan2 = $request->input('B2');
		$operation = $request->input('operation');
		switch ($operation){
		 case'+':
		    $total = $bilangan1 + $bilangan2;
		    break;
		 case'-':
			$total = $bilangan1 - $bilangan2;
		    break;
 		 case'*':
 			$total = $bilangan1 * $bilangan2;
 			break;
 		 case'/':
 			$total = $bilangan1 / $bilangan2;
 			break;
 		}
		   
		return view('output', compact('bilangan1','bilangan2','operation','total'));
	 }
}

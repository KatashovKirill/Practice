<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class funnycomicslandController extends Controller 
{
		public function main() 
		{
			return view('funnycomicsland.main');
		}
}
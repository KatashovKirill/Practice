<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
use \Illuminate\Support\Facades\DB;
class funnycomicslandController extends Controller 
{
		public function main() 
		{
			return view('funnycomicsland.main');
		}
		
		public function test() 
		{
			$p = DB::table('products') -> get();
			dd($p);
			return view('funnycomicsland.main', compact('p'));
		}
}
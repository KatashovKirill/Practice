<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facedes\DB;
class funnycomicslandController extends Controller 
{
		public function main() 
		{
			return view('funnycomicsland.main');
		}
		
		public function showProduct()
		{
			$p = \APP\MODEL\product::ALL();
			return $p[0];
		}

		public function test() 
		{
			$t = DB::table('products') -> get();
			return view('test', ['arr' => $t]);
		}
}
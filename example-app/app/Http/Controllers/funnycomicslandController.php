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
}
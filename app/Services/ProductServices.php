<?php 
	
namespace App\Services;

use App\Models\Books;

class ProductServices
{
	public function add_product($request)
	{
		$books = Books::create($request->all());
		$books->save();
	}
}
?>
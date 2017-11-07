<?php 
	
namespace App\Services;

use App\Models\Products;

class ProductServices
{
	public function add_product($request)
	{
		$products = Products::create($request->all());
		$products->save();
	}
}
?>
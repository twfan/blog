<?php 
namespace App\Repositories;

use App\Models\Products;
use App\Repositories\EloquentRepository;


class ProductRepository extends EloquentRepository
{
	public function __construct(Products $model)
	{
		parent::__construct($model);
	}

	

}
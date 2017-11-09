<?php 
namespace App\Repositories;

use App\Models\Books;
use App\Repositories\EloquentRepository;


class ProductRepository extends EloquentRepository
{
	public function __construct(Books $model)
	{
		parent::__construct($model);
	}

	

}
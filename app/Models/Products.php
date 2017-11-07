<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Products extends Model{

	protected $table = 'products';
    protected $fillable = ['name', 'description','price'];

    public function users()
    {
    	return $this->belongsTo('App\Models\Users', 'users_id');
    }
}


?>
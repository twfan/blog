<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Permission extends Model{

	protected $table = 'permission';
    
    public function user()
    {
    	return $this->belongsTo('App\Models\Users');
    }

}


?>
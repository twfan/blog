<?php 
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;


class Books extends Model{

	protected $table = 'books';
    protected $fillable = ['judul', 'pengarang','penulis','stock'];

}


?>
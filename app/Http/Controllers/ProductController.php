<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductServices;
use App\Repositories\ProductRepository;
use Illuminate\Routing\Redirector;
use Validator;

class ProductController extends Controller
{

	protected $service;
    protected $users;

	public function __construct(ProductServices $service , ProductRepository $product)
	{
        $this->product = $product;
		$this->service = $service;
	}


	public function tampil_view()
	{
		return view('form_product');
	}
	public function cek_session(Request $request)
	{
		$value = $request->session()->get('logged_in', 'default');
		dd($value);
	}

	public function validate_data_product(Request $request)
	{
		$rules =[
			'name' => 'required',
			'description' => 'required',
			'price' => 'required|numeric',
		];
		$validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return $validator->messages();
        }
        return 'valid';
	}

	public function proses_products(Request $request)
	{
		$validator = $this->validate_data_product($request);
		if($validator=='valid'){
			$this->service->add_product($request);
            return redirect()->route('products')->with('status', 'Berhasil menambahkan product');
		}else
		{
			return redirect()->route('products')->with('status', 'Gagal menambahkan product');
		}
	}
}

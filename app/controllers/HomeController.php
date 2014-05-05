<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getHome()
	{
		return View::make('landing.landing');
	}

	public function getFormDaftar()
	{
		$pendaftar = new DaftarLabpro();
		//var_dump($pendaftar);
		return View::make('labpro.form')->with('pendaftar', $pendaftar);
	}

	public function postFormDaftar()
	{
		$input = Input::all();
		$rules = array(
        	    'email' => 'required|email',
	            'nama_lengkap' => 'required',
	            'nim' => 'required|unique:pendaftar_labpro,nim',
	            'kota_lahir' => 'required',
	            'provinsi_lahir' => 'required',
	            'negara_lahir' => 'required',
	            'tanggallahir' => 'required',
	            'nomor_hp' => 'required',
	            'nilai_pti' => 'required',
	            'nilai_alstrukdat' => 'required',
	            'nilai_oop' => 'required',
	            'apa_kasus' => 'required',
	            'penjelasan_kasus' => 'required_if:apa_kasus,1',
	            'tentang_dosen' => 'required',
	            'punya_barang_1' => 'required',
	            'punya_barang_2' => 'required',
	            'punya_barang_3' => 'required',
	            'punya_barang_4' => 'required',
	            'punya_barang_5' => 'required',
	            'punya_barang_6' => 'required',
	            'punya_barang_7' => 'required',
	            'punya_barang_8' => 'required',
	            'punya_barang_9' => 'required',
	            'punya_barang_10' => 'required',
	            'punya_barang_11' => 'required',
	            'punya_barang_12' => 'required',
	            'punya_barang_13' => 'required'
    		);
		$messages = array(
    		'required' => 'Bagian :attribute diisi dong. ;)',
			'unique' => ':attribute ini udah terdaftar euy'
		);
		$validator = Validator::make(Input::all(), $rules, $messages);

    		if ($validator->fails()) {
			$pendaftar = new DaftarLabpro($input);
			// var_dump($validator);
			return View::make('labpro.form')->with('pendaftar', $pendaftar)->withErrors($validator);
    		} else {
    			$pendaftar = new DaftarLabpro($input);
			$pendaftar->save();
			return View::make('labpro.success');
    		}
	}
}

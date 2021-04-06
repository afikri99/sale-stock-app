<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produkcontorller extends BaseController
{
	var $produk;

	public function __construct()
	{
		$this->produk = new \App\Models\ProdukModel();
	}

	public function index()
	{
		//
	}


	//function untuk mendapatkan semua data
	public function getData(){
		$data = $this->produk->findAll();
		return $this->response->setJSON(['data'=>$data]);
	}

	//function untuk menambahkan data
	public function store(){
		$input = $this->request->getPost();

		if ($this->produk->save($input) === false)
		{
			return  $this->response->setStatusCode(422)
				->setJSON([$this->produk->errors()]);
		}else
			return $this->response->setJSON(["message"=>"data berhasil di tambahkan"]);
	}


	//function untuk menampilkan data berdasarkan id yang dikirim
	public function show($id){
		$data = $this->produk->find($id);
		return $this->response->setJSON($data);
	}

	
	//function untuk merubah data / edit
	public function update($id){
		echo "update";
	}


	//fuction untuk menghapus data
	public function destroy($id){
		echo "destroy";
	}
}
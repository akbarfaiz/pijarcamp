<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\produk_model;

class Home extends BaseController
{
    public function index()
    {
        $model = new produk_model();
        $data = $model->getProduk();
        return view('index', compact('data'));
    }

    public function tambah()
	{
		return view('tambah');
	}

	public function edit($id)
	{
		$model = new produk_model();
        $data = $model->getProdukById($id);
		return view('edit', compact('data'));
	}

    public function data_masuk(){
        $model = new produk_model();
		$nama = $this->request->getPost('nama');
		$keterangan = $this->request->getPost('keterangan');
		$harga = $this->request->getPost('harga');
		$jumlah= $this->request->getPost('jumlah');
		if ($nama == null || $keterangan == null || $harga == null || $jumlah== null) {
			echo "<script>alert('Isi semua kolom!'); history.go(-1);</script>";
		}else{
			$data = array(
				'nama_produk' => $nama,
				'keterangan' => $keterangan,
				'harga' => $harga,
				'jumlah' => $jumlah,
			);
			$model->saveProduk($data);
			return redirect()->to('/Home');
		}
	}

	public function data_delete($id){
        $model = new produk_model();
        $model->deleteProduk($id);
        return redirect()->to('/Home');
    }
    
	public function data_edit(){
        $model = new produk_model();
        $id = $this->request->getPost('id');
		$nama = $this->request->getPost('nama');
		$keterangan = $this->request->getPost('keterangan');
		$harga = $this->request->getPost('harga');
		$jumlah= $this->request->getPost('jumlah');
		if ($nama == null || $keterangan == null || $harga == null || $jumlah== null) {
			echo "<script>alert('Isi semua kolom!'); history.go(-1);</script>";
		}else{
			$data = array(
				'nama_produk' => $nama,
				'keterangan' => $keterangan,
				'harga' => $harga,
				'jumlah' => $jumlah,
			);
			$model->editProduk($data,$id);
			return redirect()->to('/Home');
		}
	}
}
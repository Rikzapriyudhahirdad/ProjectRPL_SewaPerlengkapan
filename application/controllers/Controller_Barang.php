<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_Barang extends CI_Controller {
	function __Construct()
	{
			parent ::__construct();
	}
	function deskripsi_barang($id_barang){
					$data['judul']='Update Data Barang';
			$this->load->model('model_barang');
			$data['daftar_barang']=$this->model_barang->get_barang_where($id_barang);
			$this->load->view('view_deskripsi', $data);
	}
	function katalog(){
					$this->load->model('model_barang');
			$data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
			$data['daftar_barang'] = $this->model_barang->get_barang_all();
			$this->load->view('view_katalog',$data);
	}
	function barang()
		{
				$data['judul'] = 'Insert Data Barang';
				$this->load->view('view_tambahbarang', $data);
		}
	function simpan_barang()
	{
			$this->load->model('model_barang');
      		$config['upload_path']='./gambar/';
      		$config['allowed_types']= 'jpg|gif|png|jpeg';
      		$config['file_name']='gambar'.time();
      		$this->load->library('upload', $config);
      		$gbr = $this->upload->data();
      	 $simpan_data=array(
            'id_barang'  => $this->input->post('id_barang'),
            'nama'      => $this->input->post('nama'),
            'deskripsi'      => $this->input->post('deskripsi'),
            'harga'        => $this->input->post('harga'),
            'gambar'      => $gbr['file_name'],
            'stok'        => $this->input->post('stok')
       );
      		 $this->model_barang->simpan_barang($simpan_data);
			$data['notifikasi'] = 'Data berhasil disimpan';
			$data['judul']='Insert Data Berhasil';
			redirect('Controller_Barang/tampil_barang');

	}

	function tampil_barang()
	{
			$this->load->model('model_barang');
			$data['judul'] = 'Menampilkan Data dari Database Menggunakan Codeigniter';
			$data['daftar_barang'] = $this->model_barang->get_barang_all();
			$this->load->view('view_barang',$data);
	}

	function delete_barang($id_barang)
	{
			$this->load->model('model_barang');
			$username = $this->model_barang->delete_barang($id_barang);
			redirect('controller_barang/tampil_barang');

	}

	function edit_barang($id_barang)
	{
			$data['judul']='Update Data Barang';
			$this->load->model('model_barang');
			$data['edit']=$this->model_barang->edit_barang($id_barang);
			$this->load->view('view_editbarang', $data);
	}

	function simpan_edit_barang()
	{
			$id_barang = $this->input->post('id_barang');
			$nama = $this->input->post('nama');
			$deskripsi = $this->input->post('deskripsi');
			$harga = $this->input->post('harga');
			$stok = $this->input->post('stok');

			$data['judul'] = 'Update Data Codeigniter';
			$this->load->model('model_barang');
			$data['edit'] = $this->model_barang->simpan_edit_barang($id_barang, $nama, $deskripsi, $harga, $stok);
			$data['notifikasi'] = 'Data telah berhasil disimpan';
			//$this->load->view('notifikasi', $data);
			redirect('controller_barang/tampil_barang');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan_Model extends CI_Model {

		public function __construct()
		{
			parent::__construct();
			//Do your magic here
		}	

		public function getPerusahaan()
		{
			$query=$this->db->get('perusahaan');
			return $query->result_array();
		}

		//public function getProduk($id)
		//{
		//	$this->db->select('namaPerusahaan,namaProduk,tanggalProduksi,tanggalKadaluarsa');
		//	$this->db->from('perusahaan');
		//	$this->db->join('produk', 'produk.fk_perusahaan = perusahaan.id');
		//	$this->db->where('perusahaan.id =', $id);
		//	$query = $this->db->get();
		//	return $query->result();
		//}
	//	public function getLokasi($id)
	//	{
	//		$this->db->select('namaPerusahaan,namaLokasi,lokasi.tanggalBerdiri');
	//		$this->db->from('perusahaan');
	///		$this->db->join('lokasi', 'lokasi.fk_perusahaan = perusahaan.id');
		//	$this->db->where('perusahaan.id =', $id);
//			$query = $this->db->get();
//			return $query->result();
//		}

		public function getProduk($id)
		{
			$this->db->select('*');
			$this->db->from('perusahaan');
			$this->db->where('perusahaan.id =', $id);
			$this->db->join('produk', 'perusahaan.id = produk.fk_perusahaan');
			$query=$this->db->get();
			return $query->result_array();
		}
		
		public function getLokasi($id)
		{
			$this->db->select('*');
			$this->db->from('lokasi');
			$this->db->where('perusahaan.id =', $id);
			$this->db->join('perusahaan', 'perusahaan.id = lokasi.fk_perusahaan');
			$query=$this->db->get();
			return $query->result_array();
		}
}

/* End of file Pegawai_Model.php */
/* Location: ./application/models/Pegawai_Model.php */
 ?>
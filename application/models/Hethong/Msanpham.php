<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msanpham extends MY_Model {

	public function getSanPham(){
		$this->db->from("tbl_sanpham");
		$this->db->join("tbl_anhsanpham", "tbl_sanpham.ma_sanpham = tbl_anhsanpham.ma_sanpham","INNER");
		$this->db->join("tbl_donvitinh_sanpham", "tbl_sanpham.ma_donvitinh = tbl_donvitinh_sanpham.ma_donvitinh","INNER");
		$this->db->join("tbl_loaisanpham", "tbl_sanpham.ma_loaisanpham = tbl_loaisanpham.ma_loaisanpham","INNER");
		$this->db->join('tbl_taikhoan', 'tbl_taikhoan.ma_taikhoan = tbl_sanpham.nguoidang_sp', 'INNER');
		$this->db->order_by("tbl_sanpham.ngaydang_sanpham", "DESC");
		return $this->db->get()->result_array();
	}

	function add_sanpham($post_data){
	    $this->db->trans_start();
	    $this->db->insert('tbl_sanpham',$post_data);
	    $this->db->trans_complete();
	    return $this->db->insert_id();
	}
}


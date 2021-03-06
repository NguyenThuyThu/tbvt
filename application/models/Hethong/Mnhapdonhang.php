<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mnhapdonhang extends MY_Model{
	
	public function get_tenSP(){
		$this->db->select('sp.ma_sanpham, sp.ten_sanpham, sp.trangthai_dang_sanpham');
		$this->db->from('tbl_sanpham as sp');
		$this->db->order_by("ten_sanpham", "ASC");
		$query = $this->db->get()->result_array();
		return $query;	
	}

	function getCTphieuNhap(){
		$this->db->from("tbl_phieunhap");
		$this->db->join("tbl_ct_phieunhap", "tbl_ct_phieunhap.ma_phieunhap = tbl_phieunhap.ma_phieunhap");
		$this->db->join("tbl_nhacungcap", "tbl_phieunhap.ma_nhacungcap = tbl_nhacungcap.ma_nhacungcap");
		$this->db->join("tbl_sanpham", "tbl_sanpham.ma_sanpham = tbl_ct_phieunhap.ma_sanpham");
		$query = $this->db->get()->result_array();
		return $query;	
	}
	function add_tbl_phieunhap($post_data){
	    $this->db->insert('tbl_phieunhap',$post_data);
	    $questionid =$this->db->insert_id();
    	return $questionid;
	}
}
?>
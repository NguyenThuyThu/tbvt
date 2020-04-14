<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mphieunhap extends MY_Model{
	
	public function get_tenSP(){
		$this->db->select('sp.ma_sanpham, sp.ten_sanpham, sp.trangthai_dang_sanpham');
		$this->db->from('tbl_sanpham as sp');
		$this->db->order_by("ten_sanpham", "ASC");
		$query = $this->db->get()->result_array();
		return $query;	
	}

	function getCTphieuNhap($mapn){
		$this->db->select("tbl_sanpham.ma_sanpham, tbl_sanpham.dongia_sanpham, tbl_ct_phieunhap.dongia_nhap, tbl_ct_phieunhap.soluong_nhap, tbl_ct_phieunhap.tongtien, tbl_anhsanpham.linkanh_sanpham, tbl_sanpham.ten_sanpham");
		$this->db->from("tbl_ct_phieunhap");
		$this->db->where("tbl_ct_phieunhap.ma_phieunhap", $mapn);
		$this->db->join("tbl_sanpham", "tbl_sanpham.ma_sanpham = tbl_ct_phieunhap.ma_sanpham");
		$this->db->join("tbl_anhsanpham", "tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham");
		$query = $this->db->get()->result_array();
		// pr($this->db->last_query());
		return $query;	
	}

	public function getPhieuNhap(){
		$this->db->from("tbl_phieunhap");
		$this->db->join("tbl_nhacungcap", "tbl_phieunhap.ma_nhacungcap = tbl_nhacungcap.ma_nhacungcap");
		$query = $this->db->get()->result_array();
		return $query;
	}

	function add_tbl_phieunhap($post_data){
	    $this->db->insert('tbl_phieunhap',$post_data);
	    $questionid =$this->db->insert_id();
    	return $questionid;
	}

	public function sumSL($masp){
		$this->db->select_sum("soluong_nhap");
		$this->db->where("ma_sanpham", $masp);
		$query = $this->db->get("tbl_ct_phieunhap")->row_array();
		// pr($this->db->last_query());
		return $query;
	}

	public function update_ctPhieuNhap($mapn, $masp, $data){
		$this->db->where("ma_sanpham", $masp);
		$this->db->where("ma_phieunhap ", $mapn);
		$this->db->update("tbl_ct_phieunhap", $data);
		return $this->db->affected_rows();
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mbctk extends MY_Model{
	public function getDonhang(){
        $this->db->select('hd.ma_hoadonmua, hd.ngaylap, ttgh.ma_trangthai_giaohang, 
        	ttgh.ten_trangthai_giaohang, tv.hoten_thanhvien');
		$this->db->from("tbl_hoadonmua as hd");
        $this->db->join('tbl_taikhoan as tk', 'tk.ma_taikhoan = hd.nguoimuahang', 'INNER');
		$this->db->join("tbl_thanhvien as tv", "tv.ma_thanhvien = tk.ma_thanhvien","INNER");
		$this->db->join("tbl_trangthaigiaohang as ttgh", "ttgh.ma_trangthai_giaohang = hd.ma_trangthai_giaohang","INNER");
        // echo $this->db->last_query();exit();
		return $this->db->get()->result_array();
	}

	public function getSanPham(){
		$this->db->from("tbl_sanpham");
		$this->db->join("tbl_anhsanpham", "tbl_sanpham.ma_sanpham = tbl_anhsanpham.ma_sanpham","INNER");
		$this->db->join("tbl_donvitinh_sanpham", "tbl_sanpham.ma_donvitinh = tbl_donvitinh_sanpham.ma_donvitinh","INNER");
		$this->db->join("tbl_loaisanpham", "tbl_sanpham.ma_loaisanpham = tbl_loaisanpham.ma_loaisanpham","INNER");
		$this->db->join('tbl_taikhoan', 'tbl_taikhoan.ma_taikhoan = tbl_sanpham.nguoidang_sp', 'INNER');
		$this->db->order_by("tbl_sanpham.ngaydang", "ASC");
		return $this->db->get()->result_array();
	}

	public function getSanPhamHD(){
		$this->db->select('*, SUM(soluong_mua)');
		$this->db->from("tbl_hoadonmua as hd");
		$this->db->join("tbl_ct_hoadon as cthd", "cthd.ma_hoadonmua = hd.ma_hoadonmua","INNER");
		$this->db->join("tbl_sanpham as sp", "sp.ma_sanpham = cthd.ma_sanpham","INNER");
		$this->db->group_by("sp.ma_sanpham");
		return $this->db->get()->result_array();
	}
	// public function sumSL(){
	// 	$this->db->select('*,SUM(soluong_mua)');
	// 	$this->db->from("tbl_ct_hoadon");
	// 	$this->db->group_by("ma_sanpham");
	// 	return $this->db->get()->result_array();
	// }


	
// 		}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mdonhang extends MY_Model{
	public function getDonhang(){
        $this->db->select('hd.*,cthd.*,tv.hoten_thanhvien, sp.ten_sanpham, ttgh.ten_trangthai_giaohang');
		$this->db->from("tbl_hoadonmua as hd");
        $this->db->join("tbl_ct_hoadon as cthd", "cthd.ma_hoadonmua = hd.ma_hoadonmua","INNER");
        $this->db->join('tbl_taikhoan as tk', 'tk.ma_taikhoan = hd.nguoimuahang', 'INNER');
		$this->db->join("tbl_thanhvien as tv", "tv.ma_thanhvien = tk.ma_thanhvien","INNER");
		$this->db->join("tbl_trangthaigiaohang as ttgh", "ttgh.ma_trangthai_giaohang = hd.ma_trangthai_giaohang","INNER");
		$this->db->join("tbl_sanpham as sp", "sp.ma_sanpham = cthd.ma_sanpham","INNER");
        // echo $this->db->last_query();exit();
		return $this->db->get()->result_array();
	}
	/*Lấy dữ liêu đầy đủ của một đơn hàng*/
	public function getdulieu($ma_hoadonmua){
		$this->db->select('*');
		$this->db->where('ma_hoadonmua',$ma_hoadonmua);
		return $this->db->get('tbl_hoadonmua')->row_array();
	}
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
*/
class Mdonhang extends MY_Model{
	public function getDonhang(){
        $this->db->select('hd.ma_hoadonmua, hd.ngaylap, ttgh.ma_trangthai_giaohang, 
        	ttgh.ten_trangthai_giaohang,ttgh.ma_trangthai_giaohang, tv.hoten_thanhvien, tv.sodienthoai, tv.ngaysinh');
		$this->db->from("tbl_hoadonmua as hd");
		$this->db->join("tbl_thanhvien as tv", "tv.ma_thanhvien = hd.nguoimuahang","INNER");
		$this->db->join("tbl_trangthaigiaohang as ttgh", "ttgh.ma_trangthai_giaohang = hd.ma_trangthai_giaohang","INNER");
		$this->db->order_by("ttgh.ma_trangthai_giaohang", "ASC");
		return $this->db->get()->result_array();
	}

	function getCTDH($madh){
		$this->db->select("cthd.ma_hoadonmua, cthd.soluong_mua, cthd.giaban, cthd.tongtien, sp.ten_sanpham, sp.ma_sanpham");
		$this->db->from("tbl_ct_hoadon as cthd");
		$this->db->where("cthd.ma_hoadonmua", $madh);
		$this->db->join("tbl_sanpham as sp", "sp.ma_sanpham = cthd.ma_sanpham");
		$query = $this->db->get()->result_array();
		// pr($this->db->last_query());
		return $query;	
	}
	/*Lấy dữ liêu đầy đủ của một đơn hàng*/
	public function getdulieu($ma_hoadonmua){
		$this->db->where('hd.ma_hoadonmua',$ma_hoadonmua);
		$this->db->select('hd.ma_hoadonmua,hd.ngaylap,cthd.soluong_mua,cthd.giaban,cthd.tongtien,tv.hoten_thanhvien,
		 sp.ma_sanpham, sp.ten_sanpham, ttgh.ten_trangthai_giaohang');
		$this->db->from("tbl_hoadonmua as hd");
        $this->db->join("tbl_ct_hoadon as cthd", "cthd.ma_hoadonmua = hd.ma_hoadonmua","INNER");
        $this->db->join('tbl_taikhoan as tk', 'tk.ma_taikhoan = hd.nguoimuahang', 'INNER');
		$this->db->join("tbl_thanhvien as tv", "tv.ma_thanhvien = tk.ma_thanhvien","INNER");
		$this->db->join("tbl_trangthaigiaohang as ttgh", "ttgh.ma_trangthai_giaohang = hd.ma_trangthai_giaohang","INNER");
		$this->db->join("tbl_sanpham as sp", "sp.ma_sanpham = cthd.ma_sanpham","INNER");
		return $this->db->get()->row_array();
	}

	public function donmua($mahd){
			$this->db->select("tbl_anhsanpham.linkanh_sanpham, tbl_sanpham.ten_sanpham, tbl_ct_hoadon.*");
			$this->db->from("tbl_hoadonmua");
			$this->db->where("tbl_ct_hoadon.ma_hoadonmua", $mahd);
			$this->db->join("tbl_ct_hoadon", "tbl_ct_hoadon.ma_hoadonmua = tbl_hoadonmua.ma_hoadonmua");
			$this->db->join("tbl_sanpham", "tbl_sanpham.ma_sanpham = tbl_ct_hoadon.ma_sanpham");
			$this->db->join("tbl_anhsanpham", "tbl_anhsanpham.ma_sanpham = tbl_sanpham.ma_sanpham");
			$this->db->join("tbl_trangthaigiaohang", "tbl_hoadonmua.ma_trangthai_giaohang = tbl_trangthaigiaohang.ma_trangthai_giaohang");
			return $this->db->get()->result_array();
		}
		
// 		public function getDonHang($matv){
// 			$this->db->from("tbl_hoadonmua");
// 			$this->db->where("tbl_hoadonmua.nguoimuahang", $matv);
// 			$this->db->join("tbl_trangthaigiaohang", "tbl_hoadonmua.ma_trangthai_giaohang = tbl_trangthaigiaohang.ma_trangthai_giaohang");
// 			$this->db->join("tbl_hinhthucthanhtoan", "tbl_hinhthucthanhtoan.ma_hinhthucthanhtoan = tbl_hoadonmua.ma_hinhthucthanhtoan");
// 			return $this->db->get()->result_array();
// 		}
}
?>
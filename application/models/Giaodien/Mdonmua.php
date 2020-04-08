<?php 
	/**
	 * 
	 */
	class Mdonmua extends MY_Model
	{	
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
		
		public function getDonHang($matv){
			$this->db->from("tbl_hoadonmua");
			$this->db->where("tbl_hoadonmua.nguoimuahang", $matv);
			$this->db->join("tbl_trangthaigiaohang", "tbl_hoadonmua.ma_trangthai_giaohang = tbl_trangthaigiaohang.ma_trangthai_giaohang");
			$this->db->join("tbl_hinhthucthanhtoan", "tbl_hinhthucthanhtoan.ma_hinhthucthanhtoan = tbl_hoadonmua.ma_hinhthucthanhtoan");
			return $this->db->get()->result_array();
		}

	}
 ?>
<?php 
	/**
	 * 
	 */
	class Mgiohang extends MY_Model
	{
		
		function get_detail_product($matv){
			$this->db->from("tbl_sanpham");
			$this->db->where("tbl_cart.ma_thanhvien", $matv);
			$this->db->select("tbl_sanpham.ma_sanpham, tbl_sanpham.ten_sanpham, tbl_sanpham.dongia_sanpham, tbl_cart.soluong, tbl_anhsanpham.linkanh_sanpham, tbl_cart.ma_thanhvien");
			$this->db->join("tbl_anhsanpham", "tbl_sanpham.ma_sanpham = tbl_anhsanpham.ma_sanpham","INNER");
			$this->db->join("tbl_cart", "tbl_sanpham.ma_sanpham = tbl_cart.ma_sanpham","INNER");
			// $this->db->order_by("tbl_cart.thoigian", "DESC");
			return $this->db->get()->result_array();
		}	

		public function update_giohang($masp, $matv, $soluong){
			$this->db->where("ma_thanhvien", $matv);
			$this->db->where("ma_sanpham", $masp);
			$this->db->set("soluong", $soluong);
			$this->db->set("thoigian", time());
			$this->db->update("tbl_cart");
			return $this->db->affected_rows();
		}
	}
 ?>
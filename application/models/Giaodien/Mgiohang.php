<?php 
	/**
	 * 
	 */
	class Mgiohang extends MY_Model
	{
		
		function get_detail_product($matv){
			// $this->db->select("tbl_ct_hoadon.ma_sanpham");
			// $this->db->where("tbl_hoadonmua.nguoimuahang", $matv);
			// $this->db->join("tbl_ct_hoadon", "tbl_hoadonmua.ma_hoadonmua = tbl_ct_hoadon.ma_hoadonmua");		
			// $rl = $this->db->get("tbl_hoadonmua")->result_array();
			// for ($i = 0; $i< count($rl); $i++) {
			// 	$ma_sp[] = $rl[$i]['ma_sanpham'];
			// }
			$this->db->from("tbl_sanpham");
			$this->db->where("tbl_cart.ma_thanhvien", $matv);
			$this->db->select("tbl_sanpham.ma_sanpham, tbl_sanpham.ten_sanpham, tbl_sanpham.dongia_sanpham, tbl_cart.soluong, tbl_anhsanpham.linkanh_sanpham, tbl_cart.ma_thanhvien");
			$this->db->join("tbl_anhsanpham", "tbl_sanpham.ma_sanpham = tbl_anhsanpham.ma_sanpham","INNER");
			$this->db->join("tbl_cart", "tbl_sanpham.ma_sanpham = tbl_cart.ma_sanpham","INNER");
			$this->db->order_by("tbl_sanpham.ten_sanpham", "ASC");
			// $this->db->where_not_in("tbl_cart.ma_sanpham", $ma_sp);
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
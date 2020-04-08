<?php 
	/**
	 * 
	 */
	class Mthanhtoan extends MY_Model
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

		public function check_sp($masp){
			$this->db->where("ma_sanpham", $masp);
			$row  = $this->db->get("tbl_sanpham")->num_rows();
			if ($row > 0){
				$this->db->select("ma_sanpham, ten_sanpham");
				$this->db->where("ma_sanpham", $masp);
				return $this->db->get("tbl_sanpham")->row_array();
			}else{
				return 0;
			}
		}	

		public function check_sp1($masp, $matv){
			$this->db->select("tbl_cart.*,tbl_sanpham.dongia_sanpham");
			$this->db->where("tbl_sanpham.ma_sanpham", $masp);
			$this->db->where("tbl_cart.ma_thanhvien", $matv);
			$this->db->join("tbl_cart", "tbl_sanpham.ma_sanpham = tbl_cart.ma_sanpham");
			$row  = $this->db->get("tbl_sanpham")->row_array();
			return $row;
		}	

		public function xulydonhang($masp, $matv, $data){
			$this->db->where("tbl_chitiet_phieunhaphang.ma_sanpham", $masp);
			$row = $this->db->get("tbl_chitiet_phieunhaphang")->row_array();
			if($row['soluong_nhap']>0){
				$this->db->where("tbl_chitiet_phieunhaphang.ma_sanpham", $masp);
				$this->db->set("tbl_chitiet_phieunhaphang.soluong_nhap", $row['soluong_nhap'] - 1);
				$this->db->update("tbl_chitiet_phieunhaphang");
				$row = $this->db->affected_rows();
				$this->db->insert("tbl_hoadonmua", $data);
				$row = $this->db->affected_rows();
				return $row;
			}else{
				return 0;
			}
		}

		public function getSanPham($matv){
			$this->db->select("tbl_cart.soluong, tbl_cart.ma_sanpham, tbl_cart.ma_thanhvien, tbl_sanpham.dongia_sanpham");
			$this->db->where("tbl_cart.ma_thanhvien", $matv);
			$this->db->join("tbl_sanpham", "tbl_sanpham.ma_sanpham = tbl_cart.ma_sanpham");
			return $this->db->get('tbl_cart')->result_array();
		}

		function add_HoaDon($post_data){
		    $this->db->insert('tbl_hoadonmua',$post_data);
		    $questionid =$this->db->insert_id();
	    	return $questionid;
		}

		function delete_cart($matv, $masp){
			$this->db->where("tbl_cart.ma_thanhvien", $matv);
			if($masp != ""){
				$this->db->where("tbl_cart.ma_sanpham", $masp);
			}
			$this->db->delete("tbl_cart");
			return $this->db->affected_rows();
		}
	}
 ?>
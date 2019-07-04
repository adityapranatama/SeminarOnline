<?php  
	/**
	 * 
	 */
	class M_seminar extends CI_Model
	{
		
		public function inputseminar($nama_seminar,$tanggal_seminar,$waktu_seminar,$alamat,$harga,$gambar)
		{
			$query=$this->db->query("INSERT INTO seminar(NS,TS,WS,alamat,harga,image) VALUES ('$nama_seminar','$tanggal_seminar','$waktu_seminar','$alamat','$harga','$gambar')");

		}

		public function showSeminar()
		{
			$hsl=$this->db->query("SELECT * FROM seminar ORDER BY id_seminar DESC");
			return $hsl;
		}

		public function hapusSeminar($id_seminar)
		{
			 $this->db->where('id_seminar', $id_seminar);
            return $this->db->delete('seminar');
		}

		public function editSeminar($id_seminar,$nama_seminar,$tanggal_seminar,$waktu_seminar,$alamat,$harga)
		{
			$hsl=$this->db->query("UPDATE seminar SET NS ='$nama_seminar',TS='$tanggal_seminar',WS='$waktu_seminar',alamat='$alamat',harga='$harga' where id_seminar='$id_seminar'");
			return $hsl;
		}

		function edit_beritagambar($modaleditgambarid,$editgambar){
	    $hsl=$this->db->query("UPDATE seminar SET image='$editgambar' WHERE id_seminar='$modaleditgambarid'");
	    return $hsl;
		}


	}



 ?>
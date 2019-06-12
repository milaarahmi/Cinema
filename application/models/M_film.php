<?php
	class M_film extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function index(){
			$query = $this->db->query('SELECT * from movie');
			$data = $query->result_array();
			return $data;
		}

		public function synopsis($movie_id){
			$query = $this->db->query('SELECT * from movie where movie_id = '.$movie_id);
			$data = $query->row_array();
			return $data;
		}

		public function get_artist($artist){
			$a = array();
			$a = explode(',',$artist);
			$data = array();
			$count = count($a);
			for ($i=0; $i < $count; $i++) { 
				$query = $this->db->query('SELECT * from artist where artist_id = '.$a[$i]);
				$data[] = $query->row_array();
			}
			return $data;
		}

		public function get_genre($genre){
			$a = array();
			$a = explode(',',$genre);
			$data = array();
			$count = count($a);
			for ($i=0; $i < $count; $i++) { 
				$query = $this->db->query('SELECT * from genre where genre_id = '.$a[$i]);
				$data[] = $query->row_array();
			}
			return $data;
		}
		public function artist($artist_id){
			$query = $this->db->query('SELECT * from artist where artist_id = '.$artist_id);
			$data = $query->row_array();
			return $data;
		}
		public function get_director($director){
			$f = array();
			$f = explode(',',$director);
			$data = array();
			$count = count($f);
			for ($i=0; $i < $count; $i++) { 
				$query = $this->db->query('SELECT * from director where director_id = '.$f[$i]);
				$data[] = $query->row_array();
			}
			return $data;
		}
		public function director($director_id){
			$query = $this->db->query('SELECT * from director where director_id = '.$director_id);
			$data = $query->row_array();
			return $data;
		}
		public function get_writter($writter){
			$f = array();
			$f = explode(',',$writter);
			$data = array();
			$count = count($f);
			for ($i=0; $i < $count; $i++) { 
				$query = $this->db->query('SELECT * from writter where writter_id = '.$f[$i]);
				$data[] = $query->row_array();
			}
			return $data;
		}
		public function writter($writter_id){
			$query = $this->db->query('SELECT * from writter where writter_id = '.$writter_id);
			$data = $query->row_array();
			return $data;
		}
	}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = array(
				'content'=>$this->load->view('home', null, true)
				
				);
		$this->load->view('welcome_message', $data);
	}
	
	public function film()
	{
		$data['movie'] = $this->m_film->index();
		$data = array(
				'content'=>$this->load->view('film', $data, true)
				
				);
		$this->load->view('welcome_message', $data);
	}

	public function sinopsis($movie_id)
	{	
		$data['movie'] = $this->m_film->synopsis($movie_id);
		$data['artist'] = $this->m_film->get_artist($data['movie']['artist']);
		$data['director'] = $this->m_film->get_director($data['movie']['director']);
		$data['writter'] = $this->m_film->get_writter($data['movie']['writter']);
		$data['genre'] = $this->m_film->get_genre($data['movie']['genre']);
		$data = array(
				'content'=>$this->load->view('sinopsis', $data, true)
				
				);
		$this->load->view('welcome_message', $data);
	}

	public function artist($artist_id)
	{	
		$data['artist'] = $this->m_film->artist($artist_id);
		$data = array(
				'content'=>$this->load->view('artist', $data, true)
				
				);
		$this->load->view('welcome_message', $data);
	}
	public function director($director_id)
	{	
		$data['director'] = $this->m_film->director($director_id);
		$data = array(
				'content'=>$this->load->view('director', $data, true)
				
				);
		$this->load->view('welcome_message', $data);
	}
	public function writter($writter_id)
	{	
		$data['writter'] = $this->m_film->writter($writter_id);
		$data = array(
				'content'=>$this->load->view('writter', $data, true)
				
				);
		$this->load->view('welcome_message', $data);
	}


}

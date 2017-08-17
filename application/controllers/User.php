<?php
class User extends MY_Controller{
	public function index(){

		$this->load->view('public/articles_list');
	}
	public function search(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','Query','required');
		if(! $this->form_validation->run())
			return $this->index();
		$query = $this->input->post('query');

		return redirect("user/search_results/$query");

	}
	public function search_results($query){
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');
		$this->load->library('pagination');
		$config = [
			'base_url' => base_url("user/search_results/$query"),
			'per_page' => 5,
			'total_rows' => $this->articles->count_search_results($query),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'first_tag_open' => "<li>",
			'first_tag_close' => "</li>",
			'last_tag_open' => "<li>",
			'last_tag_close' => "</li>",
			'next_tag_open' => "<li>",
			'next_tag_close' => "</li>",
			'prev_tag_open' => "<li>",
			'prev_tag_close' => "</li>",
			'num_tag_open' => "<li>",
			'num_tag_close' => "</li>",
			'cur_tag_open' => "<li class='active'><a>",
			'cur_tag_close' => "</a></li>",
		];
		$this->pagination->initialize($config);
		$articles = $this->articles->search($query,$config['per_page'],$this->uri->segment(4));
		$this->load->view('public/search_results',compact('articles'));

	}
	public function article($id){
		$this->load->helper('form');
		$this->load->model('articlesmodel','articles');
		$articles = $this->articles->find($id);
		$this->load->view('admin/articles_detail',compact('articles'));
	}

	public function education(){ 
		$this->load->view('public/education'); 
	}
	public function urgenthelp(){
	 $this->load->library('form_validation');
	$this->form_validation->set_rules('monumber','MobileNumber','required|numeric');
	 if($this->form_validation->run()){ 
		return redirect('user');

		}
		else{
			$this->session->set_flashdata('Number_failed','Mobile Number');
				return redirect('user');

		}
	}
	public function maths(){
		$this->load->view('public/maths.php');
	}
	public function science(){
		$this->load->view('public/maths.php');
	}
	public function commerce(){
		$this->load->view('public/maths.php');
	}
	public function art(){
		$this->load->view('public/maths.php');
	}
	public function sanskrit(){
		$this->load->view('public/maths.php');
	}
	public function cooking(){
		$this->load->view('public/maths.php');
	}
	public function stiching(){
		$this->load->view('public/maths.php');
	}
	public function computer(){
		$this->load->view('public/maths.php');
	}
	
}
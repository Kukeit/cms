<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Dashboard extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * http://example.com/index.php/welcome
	 * - or -
	 * http://example.com/index.php/welcome/index
	 * - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		
		// $this->load->view('pages/dashboard_view.php');
		// echo CSS_BOOTS_CORE;
		$data = array (
				'blog_title' => 'My Blog Title',
				'blog_heading' => 'My Blog Heading',
				'css_entries' => array (
						array (
								'css' => 'assets/dist/css/bootstrap.min.css' 
						) 
				),
				'blog_entries' => array (
						array (
								'title' => 'Title 1',
								'body' => $this->load->view ( 'pages/dashboard_view', '', true ) 
						),
						array (
								'title' => 'Title 2',
								'body' => 'Body 2' 
						),
						array (
								'title' => 'Title 3',
								'body' => 'Body 3' 
						),
						array (
								'title' => 'Title 4',
								'body' => 'Body 4' 
						),
						array (
								'title' => 'Title 5',
								'body' => 'Body 5' 
						) 
				) 
		);
		
		$this->load->library ( 'calendar' );
		
		$data1 = array (
				3 =>'dashboard/article/2007/06/07',
				7 => 'http://example.com/news/article/2006/06/07/',
				13 => 'http://example.com/news/article/2006/06/13/',
				26 => 'http://example.com/news/article/2006/06/26/' 
		);
		
		echo $this->calendar->generate ( 2007, 6, $data1 );
		
		$this->parser->parse ( 'template', $data );
	}
	
	public function article($y='',$m='',$d=''){
		echo $y."".$m."".$d;
		//echo "aaa";
		//$this->widget('hero_widget', $args = array());
		
	}
	
	
}

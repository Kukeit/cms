<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
	
	
	public function dashboard($action = '') {
		$subData=array();
		switch ($action) {
			case _ADD :
				$view = 'admin/admin_dashboard_add_view';
				$subData ['prev_page'] = '../dashboard';
				break;
			default :
				$view = 'admin/admin_dashboard_view';
				break;
		}
		
			$data ['body'] = $this->parser->parse ( $view, $subData, true );
			$this->parser->parse ( 'template', $data );
		
	}
	
	public function index(){
		redirect('/admin/dashboard', 'refresh');
	}
}

?>
<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
class Admin extends CI_Controller {
	public function dashboard($action = '') {
		$subData = array ();
		switch ($action) {
			case _ADD :
				/**
				 * css for add
				 */
				$data ['css_entries'] = array (
						array (
								'css' => 'assets/dist/css/bootstrap-datetimepicker.css' 
						),array (
								'css' => 'assets/thirdparty/gallery/source/jquery.fancybox.css?v=2.1.5'
						),array (
								'css' => 'assets/thirdparty/gallery/source/helpers/jquery.fancybox-buttons.css?v=1.0.5'
						) ,array (
								'css' => 'assets/thirdparty/gallery/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7'
						)  						
				);

				$subData ['prev_page'] = '../dashboard';
				$view = 'admin/admin_dashboard_add_view';
				break;
			default :
				$view = 'admin/admin_dashboard_view';
				break;
		}
		
		$data ['body'] = $this->parser->parse ( $view, $subData, true );
		$this->parser->parse ( 'template', $data );
	}
	public function index($action = '') {
		redirect ( '/admin/dashboard', 'refresh' );
	}
}

?>
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
						) 
				)
				;
				
				$data ['js_entries'] = array (
						array (
								'js' => 'assets/dist/js/bootstrap-datetimepicker.js' 
						),
						array (
								'js' => 'assets/dist/js/tinymce/tinymce.min.js' 
						) ,
						array (
								'js' => 'assets/dist/js/tinycode.js' 
						),
						array (
								'js' => 'assets/dist/js/menuSelector.js' 
						),
						array (
								'js' => 'assets/thirdparty/gallery/source/jquery.mousewheel-3.0.6.pack.js' 
						),
						array (
								'js' => 'assets/thirdparty/gallery/source/jquery.fancybox.js?v=2.1.5' 
						),
						array (
								'js' => 'assets/thirdparty/gallery/source/helpers/jquery.fancybox-buttons.js?v=1.0.5' 
						),
						array (
								'js' => 'assets/thirdparty/gallery/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7' 
						),
						array (
								'js' => 'assets/thirdparty/gallery/source/helpers/jquery.fancybox-media.js?v=1.0.6' 
						)
				);
				
				/*
				 * <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/bootstrap-datetimepicker.js"></script> <script type="text/javascript" src='<?php echo base_url();?>assets/dist/js/tinymce/tinymce.min.js'></script> <script type="text/javascript" src='<?php echo base_url();?>assets/dist/js/tinycode.js'></script> <script type="text/javascript" src="<?php echo base_url();?>assets/dist/js/menuSelector.js"></script> <!--javacript for gallery--> <!-- Add mousewheel plugin (this is optional) --> <script type="text/javascript" src="<?php echo base_url();?>assets/thirdparty/gallery/source/jquery.mousewheel-3.0.6.pack.js"></script> <!-- Add fancyBox main JS and CSS files --> <script type="text/javascript" src="<?php echo base_url();?>assets/thirdparty/gallery/source/jquery.fancybox.js?v=2.1.5"></script> <script type="text/javascript" src="<?php echo base_url();?>assets/thirdparty/gallery/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script> <script type="text/javascript" src="<?php echo base_url();?>assets/thirdparty/gallery/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script> <!-- Add Media helper (this is optional) --> <script type="text/javascript" src="<?php echo base_url();?>assets/thirdparty/gallery/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
				 */
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
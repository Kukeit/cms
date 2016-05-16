<?php
/* File: widgets/hero_widget.php */
class hero_widget extends Widget {
	public function display($args = array()) {
		$this->load->view('widgets/hero', $data);
	}
}
?>
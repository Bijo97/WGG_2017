<?php
class template{
	protected $_ci;
	function __construct(){
		$this->_ci =&get_instance();
	}
	function display($template,$data=null,$def){
		if(!$this->is_ajax()){
			$data['_ajax']=$this->_ci->load->view($template,$data,true);
			$this->_ci->load->view($def,$data);
		}
		else {
			$this->_ci->load->view($template,$data);
		}
	}
	function is_ajax(){
		return ($this->_ci->input->server('HTTP_X_REQUESTED_WITH')&&($this->_ci->input->server('HTTP_X_REQUESTED_WITH')=='XMLHttpRequest'));
	}
}
?>
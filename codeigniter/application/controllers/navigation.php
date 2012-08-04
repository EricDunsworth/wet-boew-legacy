<?php 
	/*
	CodeIgniter variant  v1.0 / Variante pour CodeIgniter   v1.0
	Web Experience Toolkit (WET) / Bo�te � outils de l'exp�rience Web (BOEW)
	Terms and conditions of use: http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Terms
	Conditions r�gissant l'utilisation : http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Conditions
*/

class Navigation extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function Left(){
		$this->lang->load('navigation/left');
		$this->load->view('navigation/navigation_left', array());
	}
	
	function Right(){
		$this->lang->load('navigation/right');
		$this->load->view('navigation/navigation_right', array());
	}
	
}
?>
<?php 
	/*
	CodeIgniter variant  v1.0 / Variante pour CodeIgniter   v1.0
	Web Experience Toolkit (WET) / Bo�te � outils de l'exp�rience Web (BOEW)
	Terms and conditions of use: http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Terms
	Conditions r�gissant l'utilisation : http://tbs-sct.ircan.gc.ca/projects/gcwwwtemplates/wiki/Conditions
*/

class Home_Accueil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->lang->load('home_accueil');
		$this->lang->load('pages');
	}
	
	function index()
	{
		$this->load->view('home_accueil', array());
	}
	
}
?>
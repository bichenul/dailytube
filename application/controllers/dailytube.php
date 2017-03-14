<?php
defined ( 'BASEPATH' ) OR exit ( 'No direct script access allowed' );

class dailyTube extends CI_Controller {
    
    public function __construct () {
        
        parent::__construct ();
    } // __construct
    
	public function index () {
        
        $this->load->view ( 'header' );
        $this->load->view ( 'nav' );
		$this->load->view ( 'dailytube' );
        $this->load->view ( 'footer' );
        $this->load->model ( 'mainModel', 'modelDailyTube' );
        
        //$this->modelDailyTube->test ();
	} // index
    
} // dailyTube

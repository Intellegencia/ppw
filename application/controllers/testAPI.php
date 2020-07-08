<?php

// impoert library dari REST_Controller
require APPPATH . 'libbraries/REST_Controller.php';

//extends class dari REST_Controller
class TestApi extends REST_Controller{

    //constructor
    public function __construct(){
        parent::__construct();
    }

    public function index_get(){

        // testing response
        $response['status']=200;
        $response['error']=false;

        //tampilkan response
        $this->response($response);
    }

    public function user_get(){

        //te
    }
}
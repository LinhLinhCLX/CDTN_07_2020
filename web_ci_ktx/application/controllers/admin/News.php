<?php
Class News extends MY_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    function index()
    {

        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

        //load view
        $this->data['temp'] = 'admin/news/index';
        $this->load->view('admin/main', $this->data);
    }

}

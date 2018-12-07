<?php
Class Trip extends CI_Controller{


    function __construct() {
        parent::__construct();
        $this->load->Model('Model_trip');

    }


    public function index()
    {
        $data['trip']=$this->Model_trip->show()->result();
        $this->template->load('template','trip/list',$data);
    }


    public function tambah()
    {
        if(isset($_POST['submit'])){
            $this->Model_trip->add();
            redirect('Trip');
        }else{
            $this->template->load('template','trip/add');
        }

    }

    public function edit()
    {
        if(isset($_POST['submit'])){
              $this->Model_trip->edit();
              redirect('Trip');
      }else{
            $id=$this->uri->segment(3);
            $data['trip']=$this->db->get_where('tbl_trip',array('idtrip'))->row_Array();
            $this->template->load('template','trip/edit',$data);
        }

    }

    public function hapus()
    {
        $id=$this->uri->segment(3);
        $this->db->where('idtrip',$id);
        $this->db->delete('tbl_trip');
        redirect('Trip');
    }

}
?>
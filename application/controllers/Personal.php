<?php
Class Personal extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_personal');

    }

    public function index()
    {
        $data['personal']=$this->Model_personal->show()->result();
        $this->template->load('template','personal/list',$data);
    }

    public function tambah()
    {
        if(isset($_POST['submit'])){
            $this->Model_personal->add();
            redirect('Personal');
        }else{
            $this->template->load('template','personal/add');
        }
    }

    public function show()
    {
        $id=$this->uri->segment(3);
        $data['personal']=$this->db->get_where('tb_personal',array('id_personal'=>$id))->row_Array();
        $this->template->load('template','personal/detail',$data);
    }


    public function edit()
    {
        if(isset($_POST['submit'])){
            $this->Model_personal->edit();
            redirect('Personal');
        }else{
            $id=$this->uri->segment(3);
            $data['personal']=$this->db->get_where('tb_personal',array('id_personal'=>$id))->row_Array();
            $this->template->load('template','personal/edit',$data);
        }

    }

    public function hapus()
    {
       $id=$this->uri->segment(3);
       $this->db->where('id_personal',$id);
       $this->db->delete('tb_personal');
       redirect('Personal');
    }
}

?>
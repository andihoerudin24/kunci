<?php
Class Kendaraan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_kendaraan');

    }

    public function index()
    {
        $data['kendaraan']=$this->Model_kendaraan->show()->result();
        $this->template->load('template','kendaraan/list',$data);
    }

    public function tambah()
    {
        if(isset($_POST['submit'])){
           $this->Model_kendaraan->add();
           redirect('Kendaraan');

        }else{
            $this->template->load('template','kendaraan/add');
        }

    }

    public function show()
    {

        $id=$this->uri->segment(3);
        $data['kendaraan']=$this->db->get_where('tbl_kendaraan',array('nopol'=>$id))->row_Array();
        $this->template->load('template','kendaraan/detail',$data);

    }

     public function edit()
     {
         if(isset($_POST['submit'])){
             $this->Model_kendaraan->edit();
             redirect('Kendaraan');

         }else{
            $id=$this->uri->segment(3);
            $data['kendaraan']=$this->db->get_where('tbl_kendaraan',array('nopol'=>$id))->row_Array();
            $this->template->load('template','kendaraan/edit',$data);
         }

     }

     public function hapus()
     {
         $id=$this->uri->segment(3);
         $this->db->where('nopol',$id);
         $this->db->delete('tbl_kendaraan');
         redirect('Kendaraan');
     }
}

?>
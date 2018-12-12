<?php
class Keyset extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_keyset');

    }

    public function index()
    {

        $keyset['data']=$this->db->get('tbl_keyset')->result();
        $this->template->load('template','keyset/list',$keyset);
    }


    public function tambah()
    {
        if(isset($_POST['submit'])){
               $this->Model_keyset->add();
                 redirect('Keyset');
        }else{
            $data['keyset']=$this->db->get('tbl_wsid')->result();

            $this->template->load('template','keyset/add',$data);
        }
    }

    public function edit()
    {
        if(isset($_POST['submit'])){
            $this->Model_keyset->edit();
            redirect('Keyset');

        }else{
            $id=$this->uri->segment(3);
            $data['keyset']=$this->db->get_where('tbl_keyset',array('idkeyset'=>$id))->row_Array();
            $this->template->load('template','keyset/edit',$data);

        }


    }


    public function show()
    {
        $id=$this->uri->segment(3);
        $data['keyset']=$this->db->get_where('tbl_keyset',array('idkeyset'=>$id))->row_Array();
        $this->template->load('template','keyset/detail',$data);
    }

    public function hapus()
    {
       $id=$this->uri->segment(3);
       $this->db->where('idkeyset',$id);
       $this->db->delete('tbl_keyset');
       redirect('Keyset');
    }
}


?>
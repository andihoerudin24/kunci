<?php
class Bank extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_bank');

    }
    public function index()
    {
        $data['bank']=$this->Model_bank->show()->result();
        $this->template->load('template','bank/list',$data);
    }

    public function tambah()
    {
        if(isset($_POST['submit'])){
          $this->Model_bank->add();
          redirect('Bank');
        }else{
            $this->template->load('template','bank/add');
        }

    }

    public function edit()
    {
        if(isset($_POST['submit'])){
            $this->Model_bank->edit();
            redirect('Bank');
        }else{
            $id=$this->uri->segment(3);
            $data['bank']=$this->db->get_where('tbl_bank',array('idbank'=>$id))->row_Array();
            $this->template->load('template','bank/edit',$data);
        }
    }

    public function show()
    {
        $id=$this->uri->segment(3);
        $data['bank']=$this->db->get_where('tbl_bank',array('idbank'=>$id))->row_Array();
        $this->template->load('template','bank/detail',$data);
    }

    public function hapus()
    {
        $id=$this->uri->segment(3);
        $this->db->where('idbank',$id);
        $this->db->delete('tbl_bank');
        redirect('Bank');

    }

}

?>
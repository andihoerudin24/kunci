<?php
class Wsid extends CI_Controller{


    function __construct() {
        parent::__construct();
        $this->load->Model('Model_wsid');

    }

    public function index()
    {
        $data['wsid']=$this->Model_wsid->show()->result();
        $this->template->load('template','wsid/list',$data);
    }


    public function tambah()
    {
        if(isset($_POST['submit'])){
          $this->Model_wsid->add();
          redirect('Wsid');
        }else{
            $this->template->load('template','wsid/add');
        }

    }

    public function edit()
    {
        if(isset($_POST['submit'])){
          $this->Model_wsid->edit();
          redirect('Wsid');
        }else{
            $id=$this->uri->segment(3);
            $data['wsid']=$this->db->get_where('tbl_wsid',array('idwsid'=>$id))->row_Array();
            $this->template->load('template','wsid/edit',$data);
        }
 }
    public function show()
    {
        $id=$this->uri->segment(3);
        $data['wsid']=$this->db->get_where('tbl_wsid',array('idwsid'=>$id))->row_Array();
        $this->template->load('template','wsid/show',$data);
    }

    public function hapus()
    {
        $id=$this->uri->segment(3);
        $this->db->where('idwsid',$id);
        $this->db->delete('tbl_wsid');
        redirect('Wsid');
    }

    public function show_by_id()
    {
       $id=$_GET['id'];
       $this->db->select('*');
       $this->db->from('tbl_trip');
       $this->db->where('idtrip',$id);
       $trip=$this->db->get()->row_Array();
       $data = array(
        'deskripsi' => $trip['deskripsi'],
    );
    echo json_encode($data);
    }



}
?>
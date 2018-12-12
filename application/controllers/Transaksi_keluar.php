<?php
class Transaksi_keluar extends CI_Controller{

     public function index()
     {
        $this->db->select('*');
        $this->db->from('tbl_keyset');
        $this->db->join('tbl_wsid','tbl_wsid.idwsid = tbl_keyset.idwsid');
        $this->db->join('tbl_bank','tbl_bank.idbank = tbl_wsid.idbank');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_wsid.idtrip');
        $this->db->join('tb_personal','tb_personal.idtrip = tbl_trip.idtrip');
        $this->db->where('tbl_keyset.status',0);
        $data['transaksi']=$this->db->get()->result();
        $this->template->load('template','Transaksi/keluar',$data);
     }

     public function detail()
     {
         $id=$this->uri->segment(3);
         $data['transaksi']=$this->db->get_where('tbl_keyset',array('idkeyset'=>$id))->result();
         $this->template->load('template','Transaksi/out',$data);
     }

     public function insert()
     {
         for($i=1;$i<16;$i++){
             $data=[
                 'statekeyout'.$i=>$this->input->post('statekeyout'.$i),
             ];
             $data=[
                 'id_keyset'=>$this->input->post('id_keyset')
             ];
             $this->db->insert('tbl_kunci_keluar',$data);
         }
         $data=[
             'status'=>1
         ];
         $id=$this->input->post('id_keyset');
         $this->db->where('idkeyset',$id);
         $this->db->update('tbl_keyset',$data);

     }

}


?>
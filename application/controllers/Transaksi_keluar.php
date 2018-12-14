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
       //$this->db->where('tbl_keyset.status',0);
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
            $data=[
                 'statekeyout1'  =>$this->input->post('statekeyout1' ),
                 'statekeyout2'  =>$this->input->post('statekeyout2' ),
                 'statekeyout3'  =>$this->input->post('statekeyout3' ),
                 'statekeyout4'  =>$this->input->post('statekeyout4' ),
                 'statekeyout5'  =>$this->input->post('statekeyout5' ),
                 'statekeyout6'  =>$this->input->post('statekeyout6' ),
                 'statekeyout7'  =>$this->input->post('statekeyout7' ),
                 'statekeyout8'  =>$this->input->post('statekeyout8' ),
                 'statekeyout9'  =>$this->input->post('statekeyout9' ),
                 'statekeyout10'  =>$this->input->post('statekeyout10'),
                 'statekeyout11'  =>$this->input->post('statekeyout11'),
                 'statekeyout12'  =>$this->input->post('statekeyout12'),
                 'statekeyout13'  =>$this->input->post('statekeyout13'),
                 'statekeyout14'  =>$this->input->post('statekeyout14'),
                 'statekeyout15'  =>$this->input->post('statekeyout15'),
                 'id_keyset'=>$this->input->post('id_keyset'),
                 'deskripsi'=>$this->input->post('deskripsi'),
             ];

             $this->db->insert('tbl_kunci_keluar',$data);

         $data=[
             'status'=>1
         ];
         $id=$this->input->post('id_keyset');
         $this->db->where('idkeyset',$id);
         $this->db->update('tbl_keyset',$data);
         redirect('Transaksi_Keluar/Keluar');
     }

     public function Keluar()
     {
        $this->db->select('*');
        $this->db->from('tbl_kunci_keluar');
        $this->db->join('tbl_keyset','tbl_keyset.idkeyset = tbl_kunci_keluar.id_keyset');
        $this->db->join('tbl_wsid','tbl_wsid.idwsid = tbl_keyset.idwsid');
        $this->db->join('tbl_bank','tbl_bank.idbank = tbl_wsid.idbank');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_wsid.idtrip');
        $this->db->join('tb_personal','tb_personal.idtrip = tbl_trip.idtrip');
        $this->db->where('tbl_kunci_keluar.status_induk',0);
        $data['transaksi']=$this->db->get()->result();
        $this->template->load('template','Transaksi/sedang_keluar',$data);
     }

}


?>
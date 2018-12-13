<?php
class Transaksi_kembali extends CI_Controller{

    public function index()
    {

        $this->template->load('template','transaksi_kembali/list');
    }

    public function Kembali()
    {
        if(isset($_POST['idkeyset'])){
            $this->db->select('*');
            $this->db->from('tbl_keyset');
            $this->db->join('tbl_wsid','tbl_wsid.idwsid = tbl_keyset.idwsid');
            $this->db->join('tbl_bank','tbl_bank.idbank = tbl_wsid.idbank');
            $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_wsid.idtrip');
            $this->db->join('tb_personal','tb_personal.idtrip = tbl_trip.idtrip');
            $this->db->join('tbl_kunci_keluar','tbl_kunci_keluar.id_keyset = tbl_keyset.idkeyset');
            $this->db->where('tbl_keyset.status',1);
            $this->db->where('tbl_keyset.idkeyset',$this->input->post('idkeyset'));
            $data['transaksi']=$this->db->get()->result();
            $this->template->load('template','transaksi_kembali/pengembalian',$data);
        }
   }

   public function back()
   {
        $this->db->from('tbl_keyset');
        $this->db->join('tbl_wsid','tbl_wsid.idwsid = tbl_keyset.idwsid');
        $this->db->join('tbl_bank','tbl_bank.idbank = tbl_wsid.idbank');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_wsid.idtrip');
        $this->db->join('tb_personal','tb_personal.idtrip = tbl_trip.idtrip');
        $this->db->join('tbl_kunci_keluar','tbl_kunci_keluar.id_keyset = tbl_keyset.idkeyset');
        $this->db->where('tbl_keyset.status',1);
        $data['transaksi']=$this->db->get()->row_Array();
        $this->template->load('template','transaksi_kembali/kembali',$data);
   }

   public function insert_kembali()
   {
       if(isset($_POST['submit'])){
           $data=[
               'statekeyin1'=>$this->input->post('statekeyin1'),
               'statekeyin2'=>$this->input->post('statekeyin2'),
               'statekeyin3'=>$this->input->post('statekeyin3'),
               'statekeyin4'=>$this->input->post('statekeyin4'),
               'statekeyin5'=>$this->input->post('statekeyin5'),
               'statekeyin6'=>$this->input->post('statekeyin6'),
               'statekeyin7'=>$this->input->post('statekeyin7'),
               'statekeyin8'=>$this->input->post('statekeyin8'),
               'statekeyin9'=>$this->input->post('statekeyin9'),
               'statekeyin10'=>$this->input->post('statekeyin10'),
               'statekeyin11'=>$this->input->post('statekeyin11'),
               'statekeyin12'=>$this->input->post('statekeyin12'),
               'statekeyin13'=>$this->input->post('statekeyin13'),
               'statekeyin14'=>$this->input->post('statekeyin14'),
               'statekeyin15'=>$this->input->post('statekeyin15'),
               'deskripsi'  =>$this->input->post('deskripsi'),
               'id_transaksi_out'=>$this->input->post('id_transaksi_out'),
               'id_person'=>$this->input->post('id_personal')
           ];
           $this->db->insert('tbl_kunci_kembali',$data);
           $update=[
               'status_induk'=>1,
           ];
           $this->db->where('id_transaksi_out',$this->input->post('id_transaksi_out'));
           $this->db->update('tbl_kunci_keluar',$update);
           redirect('Transaksi_kembali/selesai');

       }

   }

   public function selesai()
   {
      $this->template->load('template','transaksi_kembali/selesai');
   }



}
?>
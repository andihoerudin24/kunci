<?php
class Model_kendaraan extends CI_Model{

    function show(){
        $this->db->select('*');
        $this->db->from('tbl_kendaraan');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_kendaraan.idtrip');
        $data=$this->db->get();
        return $data;
    }


    public function add()
    {

        $data=[
            'nopol'       =>str_replace(' ','',$this->input->post('nopol')),
            'nolambung'   => $this->input->post('nolambung'),
            'jenis'       => $this->input->post('jenis'),
            'merk'        => $this->input->post('merk'),
            'descvehicle' => $this->input->post('descvehicle'),
            'idtrip'      => $this->input->post('idtrip')
         ];
     $this->db->insert('tbl_kendaraan',$data);
    }

    public function edit()
    {
        $data=[
            'nolambung'   => $this->input->post('nolambung'),
            'jenis'       => $this->input->post('jenis'),
            'merk'        => $this->input->post('merk'),
            'descvehicle' => $this->input->post('descvehicle'),
            'idtrip'      => $this->input->post('idtrip')
         ];
       $nopol=$this->input->post('nopol');
       $this->db->where('nopol',$nopol);
       $this->db->update('tbl_kendaraan',$data);

    }

}
?>
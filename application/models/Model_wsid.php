<?php
class Model_wsid extends CI_Model{


    public function show()
    {
        $this->db->select('*');
        $this->db->from('tbl_wsid');
        $this->db->join('tbl_bank','tbl_bank.idbank = tbl_wsid.idbank');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tbl_wsid.idtrip');
        $data=$this->db->get();
        return $data;
    }

    public function add()
    {
       $data=[
           'idwsid'=>$this->input->post('idwsid'),
           'typewsid'=>$this->input->post('typewsid'),
           'merkwsid'=>$this->input->post('merkwsid'),
           'idbank'=>$this->input->post('idbank'),
           'idtrip'=>$this->input->post('idtrip'),
           'descwsid'=>$this->input->post('descwsid'),
           'locationwsid'=>$this->input->post('locationwsid')
       ];
       $this->db->insert('tbl_wsid',$data);
    }

    public function edit()
    {
       $data=[
           'typewsid'=>$this->input->post('typewsid'),
           'merkwsid'=>$this->input->post('merkwsid'),
           'idbank'=>$this->input->post('idbank'),
           'idtrip'=>$this->input->post('idtrip'),
           'descwsid'=>$this->input->post('descwsid'),
           'locationwsid'=>$this->input->post('locationwsid')
       ];
       $id=$this->input->post('idwsid');
       $this->db->where('idwsid',$id);
       $this->db->update('tbl_wsid',$data);
    }
}

?>
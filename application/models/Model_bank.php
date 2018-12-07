<?php
Class Model_bank extends CI_Model{

    public function show()
    {
        $data=$this->db->get('tbl_bank');
        return $data;
    }

    public function add()
    {
        $data=[
            'idbank'=>$this->input->post('idbank'),
            'namebank'=>$this->input->post('namebank'),
            'personbank'=>$this->input->post('personbank'),
            'addresbank'=>$this->input->post('addresbank'),
            'telpbank'=>$this->input->post('telpbank'),
        ];
        $this->db->insert('tbl_bank',$data);
    }

    public function edit()
    {
        $data=[
            'namebank'=>$this->input->post('namebank'),
            'personbank'=>$this->input->post('personbank'),
            'addresbank'=>$this->input->post('addresbank'),
            'telpbank'=>$this->input->post('telpbank'),
        ];
        $idbank=$this->input->post('idbank');
        $this->db->where('idbank',$idbank);
        $this->db->update('tbl_bank',$data);
    }
}

?>
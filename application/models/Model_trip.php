<?php
Class Model_trip extends CI_Model{


    public function show()
    {
       $data=$this->db->get('tbl_trip');
       return $data;
    }

    public function add()
    {
        $data=[
           'nametrip'=>$this->input->post('nametrip'),
           'deskripsi'=>$this->input->post('deskripsi')
        ];
        $this->db->insert('tbl_trip',$data);
    }
    public function edit()
    {
        $data=[
            'nametrip'=>$this->input->post('nametrip'),
            'deskripsi'=>$this->input->post('deskripsi')
         ];
         $id=$this->input->post('idtrip');
         $this->db->where('idtrip',$id);
         $this->db->update('tbl_trip',$data);


    }
}

?>
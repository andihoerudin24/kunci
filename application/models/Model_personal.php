<?php
Class Model_personal extends CI_Model{


    public function show()
    {
        $this->db->select('*');
        $this->db->from('tb_personal');
        $this->db->join('tbl_trip','tbl_trip.idtrip = tb_personal.idtrip');
        $data=$this->db->get();
        return $data;

    }

    public function add()
    {
        $data=[
            'id_personal'=>$this->input->post('id_personal'),
            'nama_personal'=>$this->input->post('nama_personal'),
            'dept'=>$this->input->post('dept'),
            'unitkerja'=>$this->input->post('unitkerja'),
            'descperson'=>$this->input->post('descperson'),
            'idtrip'=>$this->input->post('idtrip')
        ];
        $this->db->insert('tb_personal',$data);

    }
    public function edit()
    {
        $data=[
            'nama_personal'=>$this->input->post('nama_personal'),
            'dept'=>$this->input->post('dept'),
            'unitkerja'=>$this->input->post('unitkerja'),
            'descperson'=>$this->input->post('descperson'),
            'idtrip'=>$this->input->post('idtrip')
        ];
        $id_personal=$this->input->post('id_personal');
        $this->db->where('id_personal',$id_personal);
        $this->db->update('tb_personal',$data);

    }
}

?>
<?php
class Model_keyset extends CI_Model{


     function add()
    {
        $total=0;
        $data=[
            [
            'idkeyset' => $this->input->post('idkeyset'),
            'idwsid'   => $this->input->post('idwsid'),
            'jeniskey' => $this->input->post('jeniskey'),
            'ckey1'    => $this->input->post('ckey1'),
            'nckey1'   => $this->input->post('nckey1'),
            'ckey2'    => $this->input->post('ckey2'),
            'nckey2'   => $this->input->post('nckey2'),
            'ckey3'    => $this->input->post('ckey3'),
            'nckey3'   => $this->input->post('nckey3'),
            'ckey4'    => $this->input->post('ckey4'),
            'nckey4'   => $this->input->post('nckey4'),
            'ckey5'    => $this->input->post('ckey5'),
            'nckey5'   => $this->input->post('nckey5'),
            'ckey6'    => $this->input->post('ckey6'),
            'nckey6'   => $this->input->post('nckey6'),
            'ckey7'    => $this->input->post('ckey7'),
            'nckey7'   => $this->input->post('nckey7'),
            'ckey8'    => $this->input->post('ckey8'),
            'nckey8'   => $this->input->post('nckey8'),
            'ckey9'    => $this->input->post('ckey9'),
            'nckey9'   => $this->input->post('nckey9'),
            'ckey10'   => $this->input->post('ckey10'),
            'nckey10'  => $this->input->post('nckey10'),
            'ckey11'   => $this->input->post('ckey11'),
            'nckey11'  => $this->input->post('nckey11'),
            'ckey12'   => $this->input->post('ckey12'),
            'nckey12'  => $this->input->post('nckey12'),
            'ckey13'   => $this->input->post('ckey13'),
            'nckey13'  => $this->input->post('nckey13'),
            'ckey14'   => $this->input->post('ckey14'),
            'nckey14'  => $this->input->post('nckey14'),
            'ckey15'   => $this->input->post('ckey15'),
            'nckey15'  => $this->input->post('nckey15'),
            'desckey'  => $this->input->post('desckey'),
            'total'    =>$total=$total+$this->input->post('ckey1')+$this->input->post('ckey2')+$this->input->post('ckey3')+$this->input->post('ckey4')+$this->input->post('ckey5')+$this->input->post('ckey6')+$this->input->post('ckey7')+$this->input->post('ckey8')+$this->input->post('ckey9')+$this->input->post('ckey10')+$this->input->post('ckey11')+$this->input->post('ckey12')+$this->input->post('ckey13')+$this->input->post('ckey14')+$this->input->post('ckey15'),
            ],

        ];
        $this->db->insert_batch('tbl_keyset',$data);

    }

    public function edit()
    {
        $total=0;
        $data=[

            'idwsid'   => $this->input->post('idwsid'),
            'jeniskey' => $this->input->post('jeniskey'),
            'ckey1'    => $this->input->post('ckey1'),
            'nckey1'   => $this->input->post('nckey1'),
            'ckey2'    => $this->input->post('ckey2'),
            'nckey2'   => $this->input->post('nckey2'),
            'ckey3'    => $this->input->post('ckey3'),
            'nckey3'   => $this->input->post('nckey3'),
            'ckey4'    => $this->input->post('ckey4'),
            'nckey4'   => $this->input->post('nckey4'),
            'ckey5'    => $this->input->post('ckey5'),
            'nckey5'   => $this->input->post('nckey5'),
            'ckey6'    => $this->input->post('ckey6'),
            'nckey6'   => $this->input->post('nckey6'),
            'ckey7'    => $this->input->post('ckey7'),
            'nckey7'   => $this->input->post('nckey7'),
            'ckey8'    => $this->input->post('ckey8'),
            'nckey8'   => $this->input->post('nckey8'),
            'ckey9'    => $this->input->post('ckey9'),
            'nckey9'   => $this->input->post('nckey9'),
            'ckey10'   => $this->input->post('ckey10'),
            'nckey10'  => $this->input->post('nckey10'),
            'ckey11'   => $this->input->post('ckey11'),
            'nckey11'  => $this->input->post('nckey11'),
            'ckey12'   => $this->input->post('ckey12'),
            'nckey12'  => $this->input->post('nckey12'),
            'ckey13'   => $this->input->post('ckey13'),
            'nckey13'  => $this->input->post('nckey13'),
            'ckey14'   => $this->input->post('ckey14'),
            'nckey14'  => $this->input->post('nckey14'),
            'ckey15'   => $this->input->post('ckey15'),
            'nckey15'  => $this->input->post('nckey15'),
            'desckey'  => $this->input->post('desckey'),
            'total'    =>$total=$total+$this->input->post('ckey1')+$this->input->post('ckey2')+$this->input->post('ckey3')+$this->input->post('ckey4')+$this->input->post('ckey5')+$this->input->post('ckey6')+$this->input->post('ckey7')+$this->input->post('ckey8')+$this->input->post('ckey9')+$this->input->post('ckey10')+$this->input->post('ckey11')+$this->input->post('ckey12')+$this->input->post('ckey13')+$this->input->post('ckey14')+$this->input->post('ckey15'),


        ];
        $id=$this->input->post('idkeyset');
        $this->db->where('idkeyset',$id);
        $this->db->update('tbl_keyset',$data);

    }
}

?>
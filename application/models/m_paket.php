<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket extends CI_Model {
    
    public function generate_kode_paket()
    {
        $this->db->select('RIGHT(paket.kode_paket,3) as kode', false);
        $this->db->order_by('kode_paket', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('paket');
        if ($query->num_rows() > 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        }else{
            $kode = 1;
        }
        $kodemax = str_pad($kode,3,"0", STR_PAD_LEFT);
        $kodejadi = "PK".$kodemax;
        return $kodejadi;
        }
        
        public function getAllDataKonsumen()
        {
            return $this->db->get('konsumen')->result();
        }

        public function edit($id)
        {
            $this->db->select('*');
            $this->db->from('konsumen');
            $this->db->where('kode_konsumen', $id);
            return $this->db->get()->row_array();
        }

        public function update($kode_konsumen, $data)
        {
            $this->db->where('kode_konsumen', $kode_konsumen);
            $this->db->update('konsumen', $data);
        }

        public function delete($id)
        {
            $this->db->where('kode_konsumen', $id);
            $this->db->delete('konsumen');
        }

        public function getDataPaket()
        {
            return $this->db->get('paket')->result();
        }

        public function edit_paket($kode_paket)
        {
            $this->db->where('kode_paket', $kode_paket);
            return $this->db->get('paket')->row_array();
        }

        public function update_paket($kode_paket, $data)
        {
            $this->db->where('kode_paket', $kode_paket);
            $this->db->update('paket', $data);
        }

        public function delete_paket($kode_paket)
        {
            $this->db->where('kode_paket', $kode_paket);
            $this->db->delete('paket');
        }

    }
    

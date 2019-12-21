<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ongkir_m extends CI_Model
{



    public function get($id = null)
    {
        $this->db->from('ongkir');
        if ($id != null) {
            $this->db->where('id_ongkir', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params['provinsi_asal'] = $post['provinsi_asal'];
        $params['kota_asal'] = $post['kota_asal'];
        $params['provinsi_tujuan'] = $post['provinsi_tujuan'];
        $params['kota_tujuan'] = $post['kota_tujuan'];
        $params['berat'] = $post['berat'];
        $params['kurir'] = $post['kurir'];
        $params['service'] = $post['service'];
        $this->db->insert('ongkir', $params);
    }
}

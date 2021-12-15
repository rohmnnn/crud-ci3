<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notes_model extends CI_Model
{
    protected $table = 'notes';

    public function select()
    {
        return $this->db->get($this->table)->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function singleData($id)
    {
        return $this->db->get_where('notes', ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->update($this->table, $data, $id);
    }

    public function delete($id)
    {
        return $this->db->delete('notes', $id);
    }
}


/* End of file Notes_model.php and path \application\models\Notes_model.php */

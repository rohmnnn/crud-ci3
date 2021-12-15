<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notes extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('notes_model');
    }

    public function index()
    {
        $data['notes'] = $this->notes_model->select();
        $this->load->view('notes/index', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        if($this->form_validation->run() != false){
            $note = $this->notes_model;
    
            $data = [
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
            ];
    
            $note->save($data);
        } else {
            $data['notes'] = $this->notes_model->select();
            return $this->load->view('notes/index', $data);
        }

        return redirect('notes');
    }

    public function single($id)
    {
        $data['note'] = $this->notes_model->singleData($id);
        return $this->load->view('notes/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
        ];

        $id = ['id' => $id];

        $this->notes_model->update($id, $data);
        return redirect('notes');
    }

    public function delete($id)
    {
        $id = ['id' => $id];

        $this->notes_model->delete($id);
        return redirect('notes');
    }
}

/* End of file Notes.php and path \application\controllers\Notes\Notes.php */

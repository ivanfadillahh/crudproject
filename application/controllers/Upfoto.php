<?php

class Upload extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            // $this->load->helper(array('form', 'url'));
            $image_path = $this->upload->data('file_name');
            $this->model_edit->update_dp($id, $file_name);// pass image name
            $this->load->library('upload');
    }

    public function index()
    {
            $this->load->view('layouts/header');
            $this->load->view('home_page', array('error' => ' ' ));
            $this->load->view('layouts/footer');
    }

    public function do_upload()
    {

            $config['upload_path']          = './uploads/'; #$this->config->item('base_url').
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            // $config['max_size']             = 100;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            // $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                    $error = array('error' => $this->upload->display_errors('<p>','</p>'));

                    $this->load->view('layouts/header');
                    $this->load->view('home_page', $error);
                    $this->load->view('layouts/footer');
            }

            else
            {

                    $this->load->model('model_edit');
                    $id = $this->session->userdata('id');
                    $data = array('upload_data' => $this->upload->data());
                    $image['img'] = $this->upload->data('file_name');


                    $this->model_edit->update_dp($id, $data);

                     #base_url().'upload/'.

                    $this->load->view('layouts/header');
                    // echo $id;
                    $this->load->view('home_page', $image);
                    $this->load->view('layouts/footer');
            }
    }
    }
    ?>
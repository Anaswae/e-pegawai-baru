<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pasword', 'Pasword', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Login';
            $this->load->view('login/index');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('pasword');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['pasword'])) {
                $data = [
                    'username' => $user['username'],
                    'pasword' => $user['pasword']
                ];
            }

            $this->session->set_userdata($data);
            $this->session->set_userdata('id_user', $user['id_user']);

            if ($user['level'] == 1) {
                redirect('admin');
            } else {
                redirect('user');
            }
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'username sudah pernah digunakan'
        ]);
        $this->form_validation->set_rules('pasword1', 'Password', 'required|trim|min_length[3]|matches[pasword2]', [
            'matches' => 'password tidak sama!',
            'min_length' => 'password minimal 3 karakter'
        ]);
        $this->form_validation->set_rules('pasword2', 'Password', 'required|trim|matches[pasword1]');

        if ($this->form_validation->run() == false) {
            $data = array(
                'judul' => 'Registrasi',
            );
            $this->load->view('login/registrasi', $data);
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'pasword' => password_hash($this->input->post('pasword1'), PASSWORD_DEFAULT),
                'level' => 2
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil ditambahkan.!</div>');
            redirect('pegawai');
        }
    }
}

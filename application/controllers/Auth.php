<?php
class Auth extends CI_Controller
{

    public function index()
    {
        // button login pressed
        if (isset($_POST['masuk'])) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->login($username, $password);
        }
        $data['title'] = "Halaman Login";
        $this->load->view('auth/login', $data);
    }

    public function setSession()
    {
        $data = array(
            'user id' => "1",
            'username' => "user",
            'login' => "loged"
        );
        $this->session->set_userdata($data);
    }

    public function login($username, $password)
    {
        // $user = $this->db->get_where('user', ['username' => $username])->row_array();
        // var_dump($user);
        echo "login";
        echo $username;
        echo $password;
        redirect('home');
    }
}

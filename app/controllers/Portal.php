<?php
class Portal extends Controller
{
    private $postModel;
    private $userModel;
    public function __construct()
    {
        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }

    // Load Homepage
    public function index()
    {
        // Index page redirects to registration page
        redirect('portal/register');
    }
    public function register()
    {
        $core = $this->userModel->getCore(1);
        $data = ['core' => $core,];
        $this->view('portal/register', $data);
    }
    public function registered($param)
    {
        $core = $this->userModel->getCore(1);
        $data = [
            'param' => $param,
            'core' => $core,
            'err' => '',
            'rl_code' => '',
        ];
        $this->view('portal/registered', $data);
    }
}

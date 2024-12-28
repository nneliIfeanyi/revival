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

    //////////////////////////////
    /////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public function register()
    {
        $core = $this->userModel->getCore(1);
        $data = ['core' => $core,];
        $this->view('portal/register', $data);
    }

    //////////////////////////////
    /////////////////////////////////////////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public function registered($param)
    {
        $valid = $this->postModel->traceByCode($_SESSION['rlcode']);
        $core = $this->userModel->getCore(1);
        $data = [
            'param' => $param,
            'title' => $valid->title,
            'surname' => $valid->surname,
            'othernames' => $valid->othernames,
            'id2' => $valid->id2,
            'core' => $core,
            'phone' => $valid->phone,
            'email' => $valid->email,
        ];

        $this->view('portal/registered', $data);
    }
}

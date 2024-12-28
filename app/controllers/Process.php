<?php
class Process extends Controller
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
        die('Something went wrong');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $state = strtoupper($_POST['r_state']);
            $state = substr($state, 0, 2);
            $core = $this->userModel->getCore(1);
            $data = [
                'id2' => 'RL-' . $state . rand(10000, 90000),
                'title' => val_entry($_POST['title']),
                'surname' => val_entry($_POST['surname']),
                'othernames' => val_entry($_POST['othernames']),
                'gender' => val_entry($_POST['gender']),
                'phone' => val_entry($_POST['phone']),
                'email' => val_entry($_POST['email']),
                'residence' => val_entry($_POST['residence']),
                'age' => val_entry($_POST['age']),
                'lga' => val_entry($_POST['lga']),
                'm_status' => val_entry($_POST['m_status']),
                'work' => val_entry($_POST['work']),
                'trainedAs' => val_entry($_POST['trainedAs']),
                'l_assembly' => val_entry($_POST['l_assembly']),
                'r_state' => val_entry($_POST['r_state']),
                'createdate' => date('M d, Y'),
                'param' => 'success',
                'core' => $core
            ];
            if ($this->postModel->traceByEmail($data['email'])) {
                echo "<p class='alert alert-danger fade show' role='alert'>
            <i class='bi bi-check-circle'></i>  &nbsp;Email already in use!
            </p>
            ";
            } else {
                $this->postModel->addParticipant($data);
                flash('msg', 'REGISTRATION SUCCESSFULL!');
                $_SESSION['rlcode'] = $data['id2'];
                $redirect = URLROOT . '/portal/registered/success';
                echo "><meta http-equiv='refresh' content='0; $redirect'>
        ";
            }
        } else {
            redirect('portal/register');
        }
    }
    ////////////////////////////////////////////////////////////

    /*


 if ($row = $this->postModel->traceByEmail($data['email'])) {
                $data['id2'] = $row->id2;
                flash('msg', 'Already Registered!');
                $this->view('portal/registered', $data);
                //redirect('portal/registered/success');
            }


*/


    /////////////////////////////////////////////////////////////////////
    public function rlcode()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $core = $this->userModel->getCore(1);
            $data = [
                'param' => 'rlcode',
                'core' => $core,
                'rl_code' => trim($_POST['rl_code']),
                'err' => ''
            ];
            if (empty($data['rl_code'])) {
                $data['err'] = 'Please enter your RL-Code';
                $this->view('portal/registered', $data);
            }
            $valid = $this->postModel->traceByCode($data['rl_code']);
            if (!$valid) {
                $data['err'] = 'Code does not exist, pls crosscheck and try again';
                $this->view('portal/registered', $data);
            } else {
                $_SESSION['rlcode'] = $data['rl_code'];
                redirect('portal/registered/success');
            }
        } else {
            redirect('portal/registered/rlcode');
        }
    }
}

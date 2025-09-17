<?php
class Audio extends Controller
{
    public $audioModel;
    public function __construct()
    {
        // Load Models
        $this->audioModel = $this->model('Audios');
    }

    // Load All Audio
    public function index()
    {
        $audios = $this->audioModel->getAudios();

        $data = [
            'audios' => $audios
        ];

        $this->view('audio/index', $data);
    }

    // Show Single Audio
    public function play($id)
    {
        $audio = $this->audioModel->getAudioById($id);
        $same_category = $this->audioModel->getCategory($audio->category, $id);
        $data = [
            'audio' => $audio,
            'same_category' => $same_category
        ];

        $this->view('audio/play', $data);
    }

    // Add Post
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $file = $_FILES['audio_file'];
            // from here
            $arr = explode('.', $file['name']);
            $extension = strtolower(end($arr));
            $allowedTypes = array('mp3', 'wav', 'm4a');
            if (in_array($extension, $allowedTypes)) {
                // All good so far...
                $upload_folder = 'resources/audio/';
                $file_name = trim($_POST['title']) . '.' . $extension;
                if (is_dir($upload_folder)) {
                    // Folder already exists. Hence, do nothing
                } else {
                    // Folder does not exist, Hence, create it
                    mkdir($upload_folder, 0777, true);
                }
                $DB_file_path = $upload_folder . $file_name;
                $file_path = $upload_folder . $file_name;
            } // Not valid format, yet to implement error feedback to client
            $data = [
                'title' => trim($_POST['title']),
                'preacher' => trim($_POST['preacher']),
                'category' => $_POST['category'],
                'month_year' => trim($_POST['month_year']),
                'file_url' => $DB_file_path,
                'upload' => move_uploaded_file($file['tmp_name'], $file_path)
            ];
            if ($data['upload']) {
                $this->audioModel->addAudio($data);
                flash('msg', 'Audio Upload Successfull!');
                redirect('audio/add');
            } else {
                die('Something went wrong!');
            }
        } else {
            // No Post Request
            $data = [];
            $this->view('audio/add', $data);
        }
    }

    // Edit Post
    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_FILES['audio_file']['name'] != '') {
                $arr = explode('.', $_FILES['audio_file']['name']);
                $extension = strtolower(end($arr));
                $allowedTypes = array('mp3', 'wav');
                if (in_array($extension, $allowedTypes)) {
                    // All good so far...
                    $upload_folder = 'resources/audio/';
                    $file_name = trim($_POST['title']) . '.' . $extension;
                    // if (is_dir($upload_folder)) {
                    //     // Folder already exists. Hence, do nothing
                    // } else {
                    //     // Folder does not exist, Hence, create it
                    //     mkdir($upload_folder, 0777, true);
                    // }
                    $DB_file_path = $upload_folder . $file_name;
                    $file_path = $upload_folder . $file_name;
                } // Not valid format
                $data = [
                    'id' => $id,
                    'title' => trim($_POST['title']),
                    'preacher' => trim($_POST['preacher']),
                    'category' => $_POST['category'],
                    'details' => trim($_POST['details']),
                    'month_year' => trim($_POST['month_year']),
                    'file_url' => $DB_file_path,
                    'is_series' => $_POST['is_series'],
                    'upload' => move_uploaded_file($_FILES['audio_file']['tmp_name'], $file_path)
                ];
                if ($data['upload']) {
                    $this->audioModel->updateAudio($data);
                    flash('msg', 'Audio Update Successfull!');
                    redirect('audio/edit/' . $id);
                } else {
                    die('Something went wrong!');
                }
            } //File EMpty
            // if audio title was edited without re-uploading the audio file
            // File name and audio title does not match
            else {
                $audio = $this->audioModel->getAudioById($id);
                $data = [
                    'id' => $id,
                    'title' => trim($_POST['title']),
                    'preacher' => trim($_POST['preacher']),
                    'category' => $_POST['category'],
                    'month_year' => trim($_POST['month_year']),
                    'details' => trim($_POST['details']),
                    'is_series' => $_POST['is_series'],
                    'file_url' => $audio->file_url
                ];
                if ($this->audioModel->updateAudio($data)) {
                    flash('msg', 'Audio Update Successfull!');
                    redirect('audio/edit/' . $id);
                } else {
                    die('Something went wrong!');
                }
            }
        } else {
            // Get post from model
            $audio = $this->audioModel->getAudioById($id);
            $data = [
                'id' => $id,
                'audio' => $audio
            ];
            if ($data['audio']->is_series === 0) {
                $data['audio']->is_series = 'No';
            } else {
                $data['audio']->is_series = 'Yes';
            }
            $this->view('audio/edit', $data);
        }
    }

    // Delete Post
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Execute
            if ($this->audioModel->deleteAudio($id)) {
                // Redirect to login
                flash('msg', 'Audio Removed');
                redirect('audio');
            } else {
                die('Something went wrong');
            }
        } else {
            redirect('audio');
        }
    }
}

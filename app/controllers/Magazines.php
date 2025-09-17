<?php
class Magazines extends Controller
{
    public $ebookModel;
    public function __construct()
    {
        // Load Models
        $this->ebookModel = $this->model('Magazine');
    }


    public function index()
    {
        //$ebook = $this->ebookModel->getEbookById($id);

        $data = [];

        $this->view('magazines/index', $data);
    }

    // Show Single Post
    public function preview($id)
    {
        $ebook = $this->ebookModel->getEbookById($id);

        $data = [
            'ebook' => $ebook,
        ];

        $this->view('magazines/preview', $data);
    }

    // Add Magazine T DB
    // Add Post
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'unique_id' => date('Ymdhis'),
                'title' => trim($_POST['title']),
                'intro' => trim($_POST['intro']),
                'cover_image' => trim($_POST['cover_image']),
                'pdf_file' => trim($_POST['pdf_file']),
            ];
            if ($this->ebookModel->addEbook($data)) {
                // Insert to chapters table

                // Redirect
                flash('msg', 'Message is sent successfully!');
                redirect('contact');
            } else {
                die('Something went wrong');
            }
        } else {
            // Not a Post Request
            $data = [];
            $this->view('magazines/add', $data);
        }
    }
}

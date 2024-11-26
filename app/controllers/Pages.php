<?php
class Pages extends Controller
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  // Load Homepage
  public function index()
  {
    // Index page redirects to welcome page
    redirect('pages/welcome');
  }


  public function welcome()
  {
    $core = $this->userModel->getCore(1);
    $uploads = $this->userModel->getUploads();
    $articles = $this->userModel->getArticles();
    $verses = $this->userModel->getVerses();
    $data = [
      'core' => $core,
      'uploads' => $uploads,
      'articles' => $articles,
      'verses' => $verses
    ];
    // Welcome page loads index view
    $this->view('pages/index', $data);
  }
  public function resources()
  {
    $core = $this->userModel->getCore(1);
    $data = [
      'core' => $core
    ];

    $this->view('pages/resources', $data);
  }


  public function about()
  {
    //Set Data
    $data = [
      'version' => '1.0.0'
    ];

    // Load about view
    $this->view('pages/about', $data);
  }
}

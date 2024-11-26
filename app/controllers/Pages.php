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
    $events = $this->userModel->getEvents();
    $data = [
      'core' => $core,
      'uploads' => $uploads,
      'articles' => $articles,
      'events' => $events,
      'verses' => $verses
    ];
    // Welcome page loads index view
    $this->view('pages/index', $data);
  }
  public function resources()
  {
    $core = $this->userModel->getCore(1);
    $uploads = $this->userModel->getUploads2();
    $articles = $this->userModel->getArticles2();
    $verses = $this->userModel->getVerses();
    $data = [
      'core' => $core,
      'uploads' => $uploads,
      'articles' => $articles,
      'verses' => $verses
    ];
    $this->view('pages/resources', $data);
  }

  public function study($id)
  {
    $core = $this->userModel->getCore(1);
    $article = $this->userModel->getArticleById($id);
    $data = [
      'article' => $article,
      'core' => $core
    ];

    // Load about view
    $this->view('pages/study', $data);
  }


  public function contact()
  {
    $core = $this->userModel->getCore(1);
    $data = [
      'core' => $core,
    ];

    // Load about view
    $this->view('pages/contact', $data);
  }

  public function events($params)
  {
    $core = $this->userModel->getCore(1);
    $events = $this->userModel->getEvents();
    $event = $this->userModel->getEventById($_GET['id']);
    $data = [
      'params' => $params,
      'events' => $events,
      'event'  => $event,
      'core' => $core,
      'name' => '',
      'theme' => '',
      'details' => '',
      'startDate' => '',
      'endDate' => ''
    ];

    // Load about view
    $this->view('pages/events', $data);
  }

  public function meetings()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $core = $this->userModel->getCore(1);
      $data = [
        'core' => $core,
        'name' => val_entry($_POST['name']),
        'theme' => val_entry($_POST['theme']),
        'details' => val_entry($_POST['details']),
        'startDate' => val_entry($_POST['startDate']),
        'endDate' => val_entry($_POST['endDate'])
      ];
      if ($this->userModel->insertIntoEvents($data)) {
        flash('msg', 'Meeting published successfully!');
        redirect('pages/events/publish');
      } else {
        die('Something went wrong!');
      }
    } else {
      redirect('pages/events/publish');
    }
  }

  public function editMeeting($id)
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id' => $id,
        'name' => val_entry($_POST['name']),
        'theme' => val_entry($_POST['theme']),
        'details' => val_entry($_POST['details']),
        'startDate' => val_entry($_POST['startDate']),
        'endDate' => val_entry($_POST['endDate'])
      ];
      if ($this->userModel->updateEvent($data)) {
        flash('msg', 'Meeting edited successfully!');
        redirect('pages/events/edit?id=' . $id);
      } else {
        die('Something went wrong!');
      }
    } else {
      redirect('pages/events/publish');
    }
  }
}

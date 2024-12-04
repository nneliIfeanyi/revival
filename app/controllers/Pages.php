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
  public function preview($id)
  {
    $core = $this->userModel->getCore(1);
    $sermon = $this->userModel->getUploadById($id);
    $recent = $this->userModel->getSermonsByCategory($id, $sermon->category);
    $data = [
      'sermon' => $sermon,
      'core' => $core,
      'recent' => $recent
    ];

    // Load about view
    $this->view('pages/preview', $data);
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
    if (!$this->isLoggedIn()) {
      redirect('users/login');
    }
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

  // Delete Post
  public function delete($id)
  {
    if ($this->userModel->deleteUpload($id)) {
      unlink($_GET['thumbnail']);
      flash('msg', 'Video Removed', 'alert alert-danger');
      redirect('users/uploads/added');
    } else {
      die('Something went wrong');
    }
  }
  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }  // https://www.youtube.com/embed/VLTj-7dSEJs
  // https://youtu.be/VLTj-7dSEJs?si=F_sohIV4MS6vxv-m

  //  https://www.youtube.com/watch?v=9Oi3j-FNXxw
  // https://youtu.be/9Oi3j-FNXxw?si=zjVEuJFvMAEyUy6k

  // https://www.youtube.com/embed/tgbNymZ7vqY

}

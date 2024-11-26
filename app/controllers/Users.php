<?php
class Users extends Controller
{
  private $userModel;
  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    if (isset($_SESSION['user_id'])) {
      redirect('users/settings/core');
    }
    $data = [
      'username' => '',
      'password' => '',
      'username_err' => '',
      'password_err' => '',
    ];

    // Load View
    $this->view('users/login', $data);
  }

  public function login()
  {
    if (isset($_SESSION['user_id'])) {
      redirect('users/settings/core');
    }
    // Init data
    $data = [
      'username' => '',
      'password' => '',
      'username_err' => '',
      'password_err' => '',
    ];

    // Load View
    $this->view('users/login', $data);
  }

  // Admin Authentication
  public function auth()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'username' => val_entry($_POST['username']),
        'password' => val_entry($_POST['password']),
        'username_err' => '',
        'password_err' => '',
      ];
      // Check for user
      if ($this->userModel->findUser($data['username'])) {
        // User Found
      } else {
        // No User
        $data['username_err'] = 'This user is not registered.';
      }

      // Make sure errors are empty
      if (empty($data['username_err']) && empty($data['password_err'])) {

        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['username'], $data['password']);

        if ($loggedInUser) {
          // User Authenticated!
          $this->createUserSession($loggedInUser);
        } else {
          $data['password_err'] = 'Password incorrect.';
          // Load View
          $this->view('users/login', $data);
        }
      } else {
        // Load View
        $this->view('users/login', $data);
      }
    } else {
      redirect('users/login');
    }
  }
  // Create Session With User Info
  public function createUserSession($user)
  {
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_name'] = $user->name;
    flash('msg', 'WELCOME ADMIN!');
    redirect('users/settings/core');
  }
  /*

  // Views UI Prior to Form Submission //

  // For Site Customization

*/
  public function settings($params)
  {
    $core = $this->userModel->getCore(1);
    $data = [
      'params' => $params,
      'h1' => $core->h1,
      'h1b' => $core->h1b,
      'para' => $core->para,
      'WWA' => $core->WWA,
      'WWB' => $core->WWB,
      'address' => $core->address,
      'phone1' => $core->phone1,
      'phone2' => $core->phone2,
      'core' => $core
    ];

    // Load View
    $this->view('users/settings', $data);
  }

  public function uploads($params)
  {
    $core = $this->userModel->getCore(1);
    $data = [
      'params' => $params,
      'link' => '',
      'title' => '',
      'preacher' => '',
      'details' => '',
      'thumbnail' => '',
      'core' => $core
    ];

    // Load View
    $this->view('users/uploads', $data);
  }

  public function articles($params)
  {
    $core = $this->userModel->getCore(1);
    $articles = $this->userModel->getArticles2();
    $article = $this->userModel->getArticleById($_GET['id']);
    $data = [
      'params' => $params,
      'author' => '',
      'title' => '',
      'content' => '',
      'thumbnail' => '',
      'core' => $core,
      'articles' => $articles,
      'article' => $article,
    ];

    // Load View
    $this->view('users/articles', $data);
  }

  public function verses($params)
  {
    $core = $this->userModel->getCore(1);
    $verses = $this->userModel->getVerses();
    $verse = $this->userModel->getVerseById($_GET['id']);
    $data = [
      'params' => $params,
      'verse' => $verse->verse,
      'content' => $verse->content,
      'core' => $core,
      'verses' => $verses
    ];

    // Load View
    $this->view('users/verses', $data);
  }

  /*

  // Views UI Server Request Post Method //
  // For Site Customization

*/

  public function coreUpdate($id)
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'id' => $id,
        'h1' => val_entry($_POST['h1']),
        'h1b' => val_entry($_POST['h1b']),
        'para' => val_entry($_POST['para']),
        'WWA' => val_entry($_POST['WWA']),
        'WWB' => val_entry($_POST['WWB']),
      ];
      $data['WWA'] = nl2br($data['WWA']);
      $data['WWB'] = nl2br($data['WWB']);
      if (empty($data['h1']) || empty($data['h1b']) || empty($data['para']) || empty($data['WWA']) ||  empty($data['WWB'])) {
        die('Something went wrong!');
      }
      if ($this->userModel->updateCore($data)) {
        flash('msg', 'Changes saved successfully!');
        redirect('users/settings/core');
      } else {
        die('Something went wrong!');
      }
    } else { // Not Post Request
      // Redirect to settings page
      redirect('users/settings/core');
    }
  }

  public function more($id)
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'id' => $id,
        'address' => val_entry($_POST['address']),
        'phone1' => val_entry($_POST['phone1']),
        'phone2' => val_entry($_POST['phone2']),
        'WAG' => val_entry($_POST['WAG']),
        'website' => val_entry($_POST['website']),
        'email' => val_entry($_POST['email']),
      ];
      if (empty($data['address']) || empty($data['phone1']) || empty($data['phone2'])) {
        die('Something went wrong!');
      }
      if ($this->userModel->updateMore($data)) {
        flash('msg', 'Changes saved successfully!');
        redirect('users/settings/more');
      } else {
        die('Something went wrong!');
      }
    } else { // Not Post Request
      // Redirect to settings page
      redirect('users/settings/more');
    }
  }

  public function videoUpload()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // Image Processing 
      $target_dir = "videos/";
      $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
      $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      $data = [
        'link' => val_entry($_POST['link']),
        'title' => val_entry($_POST['title']),
        'preacher' => val_entry($_POST['preacher']),
        'details' => val_entry($_POST['details']),
        'thumbnail' => $target_file,
      ];
      if (empty($data['link']) || empty($data['title']) || empty($data['preacher']) || empty($data['details'])) {
        $data['error'] = 'All fields are required!';
        $this->view('users/uploads', $data);
      }

      // Check if file already exists
      if (file_exists($target_file)) {
        $data['error'] = 'Image file already exist!';
        $this->view('users/uploads', $data);
      }

      // Check file size
      if ($_FILES["thumbnail"]["size"] > 500000) {
        $data['error'] = 'Image file is too large!';
        $this->view('users/uploads', $data);
      }

      // Allow certain file formats
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        $data['error'] = 'File format not supported!';
        $this->view('users/uploads', $data);
      }
      if (empty($data['error'])) {
        move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
        if ($this->userModel->insertIntoUploads($data)) {
          flash('msg', 'Sermon is uploaded successfully!');
          redirect('users/uploads/add');
        } else {
          die('Something went wrong!');
        }
      }
    } else { // Not Post Request
      // Redirect to uploads page
      redirect('users/uploads/add');
    }
  }

  public function articleUpload()
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (!empty($_FILES['thumbnail']['name'])) {
        // Image Processing 
        $target_dir = "articles/";
        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $data = [
          'author' => val_entry($_POST['author']),
          'title' => val_entry($_POST['title']),
          'content' => val_entry($_POST['content']),
          'thumbnail' => $target_file,
        ];
        if (empty($data['author']) || empty($data['title']) || empty($data['content'])) {
          $data['error'] = 'All fields are required!';
          $this->view('users/articles', $data);
        }

        // Check if file already exists
        if (file_exists($target_file)) {
          $data['error'] = 'Image file already exist!';
          $this->view('users/articles', $data);
        }

        // Check file size
        if ($_FILES["thumbnail"]["size"] > 500000) {
          $data['error'] = 'Image file is too large!';
          $this->view('users/articles', $data);
        }

        // Allow certain file formats
        if (
          $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif"
        ) {
          $data['error'] = 'File format not supported!';
          $this->view('users/articles', $data);
        }
        if (empty($data['error'])) {
          move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file);
          $data['content'] = nl2br($data['content']);
          if ($this->userModel->insertIntoArticles($data)) {
            flash('msg', 'Article is saved successfully!');
            redirect('users/articles/add');
          } else {
            die('Something went wrong!');
          }
        }
      } else { // Thumbnail Image is empty
        $data = [
          'author' => val_entry($_POST['author']),
          'title' => val_entry($_POST['title']),
          'content' => val_entry($_POST['content']),
          'thumbnail' => '',
        ];
        if (empty($data['author']) || empty($data['title']) || empty($data['content'])) {
          $data['error'] = 'All fields are required!';
          $this->view('users/articles', $data);
        } else {
          $data['content'] = nl2br($data['content']);
          if ($this->userModel->insertIntoArticles($data)) {
            flash('msg', 'Article is saved successfully!');
            redirect('users/articles/add');
          } else {
            die('Something went wrong!');
          }
        }
      }
    } else { // Not Post Request
      // Redirect to uploads page
      redirect('users/articles/add');
    }
  }


  public function articleEdit($id)
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id' => $id,
        'author' => val_entry($_POST['author']),
        'title' => val_entry($_POST['title']),
        'content' => val_entry($_POST['content']),
        'thumbnail' => '',
      ];
      if ($this->userModel->editArticle($data)) {
        flash('msg', 'Article is saved successfully!');
        redirect('users/articles/edit?id=' . $id);
      } else {
        die('Something went wrong!');
      }
    }
  }

  public function verseUpload($id)
  {
    // Check if POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $data = [
        'id' => $id,
        'content' => val_entry($_POST['content']),
        'verse' => val_entry($_POST['verse']),
      ];
      if (empty($data['content']) ||  empty($data['verse'])) {
        $data['error'] = 'All fields are required!';
        $this->view('users/verses', $data);
      } else {
        $this->userModel->updateVerses($data);
        flash('msg', 'Verse is saved successfully!');
        redirect('users/verses/edit?id=' . $id);
      }
    } else { // Not Post Request
      // Redirect to settings page
      redirect('users/verses/view');
    }
  }


  // Logout & Destroy Session
  public function logout()
  {
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('users/login');
  }

  // Check Logged In
  public function isLoggedIn()
  {
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }
}

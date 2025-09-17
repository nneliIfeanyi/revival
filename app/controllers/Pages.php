<?php
class Pages extends Controller
{
  public $audioModel;
  public $magazineModel;
  public function __construct()
  {
    $this->magazineModel = $this->model('Magazine');
    $this->audioModel = $this->model('Audios');
  }

  // Load Homepage Redirects to welcome page
  public function index()
  {
    redirect('pages/welcome');
  }

  public function welcome()
  {
    $magazines = '';
    $audios = $this->audioModel->getAudios8();
    //Set Data
    $data = [
      'magazines' => $magazines,
      'audios' => $audios
    ];

    // Load about view
    $this->view('pages/welcome', $data);
  }

  public function resources()
  {
    $magazines = '';
    $audios = $this->audioModel->getAudios8();
    //Set Data
    $data = [
      'magazines' => $magazines,
      'audios' => $audios
    ];

    // Load about view
    $this->view('pages/resources', $data);
  }

  public function about()
  {
    $magazines = '';
    $audios = $this->audioModel->getAudios();
    //Set Data
    $data = [
      'magazines' => $magazines,
      'audios' => $audios
    ];

    // Load about view
    $this->view('pages/about', $data);
  }
}

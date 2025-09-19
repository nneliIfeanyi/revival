<?php
class Contact extends Controller
{
  public $contactModel;
  public function __construct()
  {
    $this->contactModel = $this->model('Contacts');
  }

  public function index()
  {
    $data = [];
    $this->view('contact/index', $data);
  }

  // Send Message
  public function send_message()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'names' => trim($_POST['names']),
        'message_body' => trim($_POST['message_body']),
        'phone' => trim($_POST['phone']),
      ];
      if ($this->contactModel->sendMessage($data)) {
        // Redirect
        flash('msg', 'Message is sent successfully!');
        redirect('contact');
      } else {
        die('Something went wrong');
      }
    } else {
      // Not a Post Request
      redirect('contact');
    }
  }
}

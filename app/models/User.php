<?php
class User
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  /*

  INSERTING | INTO DB

*/

 
  public function insertIntoUploads($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO uploads (link, title, preacher, details, thumbnail) 
      VALUES (:link, :title, :preacher, :details, :thumbnail)');

    // Bind Values
    $this->db->bind(':link', $data['link']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':preacher', $data['preacher']);
    $this->db->bind(':details', $data['details']);
    $this->db->bind(':thumbnail', $data['thumbnail']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function insertIntoArticles($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO articles (author, title, content, thumbnail) 
      VALUES (:author, :title, :content, :thumbnail)');

    // Bind Values
    $this->db->bind(':author', $data['author']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':content', $data['content']);
    $this->db->bind(':thumbnail', $data['thumbnail']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function insertIntoVerses($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO verses (content, verse) 
      VALUES (:content, :verse)');

    // Bind Values
    $this->db->bind(':content', $data['content']);
    $this->db->bind(':verse', $data['verse']);
    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  
  /*

  PULLING | FETCHING FROM DB AS RESULT-SET

*/

  public function getCore($id)
  {
    $this->db->query("SELECT * FROM core WHERE id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function getUploads()
  {
    $this->db->query("SELECT * FROM uploads ORDER BY id DESC LIMIT 6;");
    $rows = $this->db->resultset();

    return $rows;
  }

  public function getArticles()
  {
    $this->db->query("SELECT * FROM articles ORDER BY id DESC LIMIT 6;");
    $rows = $this->db->resultset();

    return $rows;
  }

  public function getUploads2()
  {
    $this->db->query("SELECT * FROM uploads ORDER BY id DESC;");
    $rows = $this->db->resultset();

    return $rows;
  }

  public function getArticles2()
  {
    $this->db->query("SELECT * FROM articles ORDER BY id DESC;");
    $rows = $this->db->resultset();

    return $rows;
  }

  public function getVerses()
  {
    $this->db->query("SELECT * FROM verses ORDER BY id DESC;");
    $rows = $this->db->resultset();

    return $rows;
  }




  /*

  PULLING | FETCHING FROM DB AS SINGLE-SET

*/

  // Find USer BY Email
  public function findUser($username)
  {
    $this->db->query("SELECT * FROM auth WHERE username = :username");
    $this->db->bind(':username', $username);

    $row = $this->db->single();

    //Check Rows
    if ($this->db->rowCount() > 0) {
      return true;
    } else {
      return false;
    }
  }

  // Login / Authenticate User
  public function login($username, $password)
  {
    $this->db->query("SELECT * FROM auth WHERE username = :username");
    $this->db->bind(':username', $username);

    $row = $this->db->single();

    $hashed_password = $row->password;
    if (password_verify($password, $hashed_password)) {
      return $row;
    } else {
      return false;
    }
  }

  // Find User By ID
  public function getUserById($id)
  {
    $this->db->query("SELECT * FROM users WHERE id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  // Find User By ID
  public function getVerseById($id)
  {
    $this->db->query("SELECT * FROM verses WHERE id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }




  /*
    ////////////////////////////////
  UPDATING | DB       //////////////
    ///////////////////////////////
*/

  public function updateCore($data){
      // Prepare Query
      $this->db->query('UPDATE core SET h1 = :h1, h1b = :h1b, para = :para, WWA = :WWA, WWB = :WWB WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':h1', $data['h1']);
      $this->db->bind(':h1b', $data['h1b']);
      $this->db->bind(':para', $data['para']);
      $this->db->bind(':WWA', $data['WWA']);
      $this->db->bind(':WWB', $data['WWB']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updateMore($data){
      // Prepare Query
      $this->db->query('UPDATE core SET address = :address, phone1 = :phone1, phone2 = :phone2 WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':address', $data['address']);
      $this->db->bind(':phone1', $data['phone1']);
      $this->db->bind(':phone2', $data['phone2']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    public function updateUploads($data){
      // Prepare Query
      $this->db->query('UPDATE uploads SET link = :link, title = :title, preacher = :preacher, details = :details, thumbnail = :thumbnail WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':link', $data['link']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':preacher', $data['preacher']);
      $this->db->bind(':details', $data['details']);
      $this->db->bind(':thumbnail', $data['thumbnail']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updateVerses($data){
      // Prepare Query
      $this->db->query('UPDATE verses SET content = :content, verse = :verse WHERE id = :id');

      // Bind Values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':content', $data['content']);
      $this->db->bind(':verse', $data['verse']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
}

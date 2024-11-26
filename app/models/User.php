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

  public function insertIntoEvents($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO events (name, theme, details, startDate, endDate) 
      VALUES (:name, :theme, :details, :startDate, :endDate)');

    // Bind Values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':theme', $data['theme']);
    $this->db->bind(':details', $data['details']);
    $this->db->bind(':startDate', $data['startDate']);
    $this->db->bind(':endDate', $data['endDate']);

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

  public function getEvents1()
  {
    $this->db->query("SELECT * FROM events WHERE status = :status ORDER BY id DESC;");
    $this->db->bind(':status', '1');
    $rows = $this->db->resultset();

    return $rows;
  }

  public function getEvents2()
  {
    $this->db->query("SELECT * FROM events WHERE status = :status ORDER BY id DESC;");
    $this->db->bind(':status', '0');
    $rows = $this->db->resultset();

    return $rows;
  }
  public function getEvents()
  {
    $this->db->query("SELECT * FROM events ORDER BY id DESC;");
    //$this->db->bind(':status', '0');
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

  public function getEventById($id)
  {
    $this->db->query("SELECT * FROM events WHERE id = :id");
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function getArticleById($id)
  {
    $this->db->query("SELECT * FROM articles WHERE id = :id");
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

  public function updateCore($data)
  {
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
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateMore($data)
  {
    // Prepare Query
    $this->db->query('UPDATE core SET address = :address, phone1 = :phone1, phone2 = :phone2, email = :email, website = :website, WAG = :WAG WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':address', $data['address']);
    $this->db->bind(':phone1', $data['phone1']);
    $this->db->bind(':phone2', $data['phone2']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':website', $data['website']);
    $this->db->bind(':WAG', $data['WAG']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function editArticle($data)
  {
    // Prepare Query
    $this->db->query('UPDATE articles SET author = :author, title = :title, content = :content WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':author', $data['author']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':content', $data['content']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateUploads($data)
  {
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
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateEvent($data)
  {
    // Prepare Query
    $this->db->query('UPDATE events SET name = :name, theme = :theme, startDate = :startDate, details = :details, endDate = :endDate WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':theme', $data['theme']);
    $this->db->bind(':startDate', $data['startDate']);
    $this->db->bind(':details', $data['details']);
    $this->db->bind(':endDate', $data['endDate']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateVerses($data)
  {
    // Prepare Query
    $this->db->query('UPDATE verses SET content = :content, verse = :verse WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':content', $data['content']);
    $this->db->bind(':verse', $data['verse']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}

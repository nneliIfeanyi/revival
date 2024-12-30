<?php
class Post
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function traceByCode($code)
  {
    $this->db->query("SELECT * FROM participants WHERE id2 = :id");
    $this->db->bind(':id', $code);
    $row = $this->db->single();

    if ($this->db->rowCount() > 0) {
      return $row;
    } else {
      return false;
    }
  }

  public function traceByEmail($email)
  {
    $this->db->query("SELECT * FROM participants WHERE email = :email");
    $this->db->bind(':email', $email);
    $row = $this->db->single();

    if ($this->db->rowCount() > 0) {
      return $row;
    } else {
      return false;
    }
  }

  public function allRegistered()
  {
    $this->db->query("SELECT * FROM participants ORDER BY surname;");
    $rows = $this->db->resultset();

    if ($this->db->rowCount() > 0) {
      return $rows;
    } else {
      return false;
    }
  }
  // Add Post
  public function addParticipant($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO participants (id2, title, surname, othernames, gender, residence, lga, r_state, phone, email, age, m_status, work, trainedAs,l_assembly,createdate) 
      VALUES (:id2, :title, :surname, :othernames,:gender,:residence,:lga,:r_state,:phone,:email,:age,:m_status,:work,:trainedAs,:l_assembly,:createdate)');

    // Bind Values
    $this->db->bind(':id2', $data['id2']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':surname', $data['surname']);
    $this->db->bind(':othernames', $data['othernames']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':residence', $data['residence']);
    $this->db->bind(':lga', $data['lga']);
    $this->db->bind(':r_state', $data['r_state']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':age', $data['age']);
    $this->db->bind(':m_status', $data['m_status']);
    $this->db->bind(':work', $data['work']);
    $this->db->bind(':trainedAs', $data['trainedAs']);
    $this->db->bind(':l_assembly', $data['l_assembly']);
    $this->db->bind(':createdate', $data['createdate']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  public function updateParticipant($data)
  {
    // Prepare Query
    $this->db->query('UPDATE participants SET title = :title, surname = :surname, othernames = :othernames,
      gender = :gender, residence = :residence, lga = :lga, r_state = :r_state, phone = :phone, email = :email,
      age = :age, m_status = :m_status, work = :work, trainedAs = :trainedAs, l_assembly = :l_assembly WHERE id2 = :id2');

    // Bind Values
    $this->db->bind(':id2', $data['id2']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':surname', $data['surname']);
    $this->db->bind(':othernames', $data['othernames']);
    $this->db->bind(':gender', $data['gender']);
    $this->db->bind(':residence', $data['residence']);
    $this->db->bind(':lga', $data['lga']);
    $this->db->bind(':r_state', $data['r_state']);
    $this->db->bind(':phone', $data['phone']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':age', $data['age']);
    $this->db->bind(':m_status', $data['m_status']);
    $this->db->bind(':work', $data['work']);
    $this->db->bind(':trainedAs', $data['trainedAs']);
    $this->db->bind(':l_assembly', $data['l_assembly']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }


  public function deleteUser($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM participants WHERE id2 = :id');

    // Bind Values
    $this->db->bind(':id', $id);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }
}

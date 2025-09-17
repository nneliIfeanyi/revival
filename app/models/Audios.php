<?php
class Audios
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  // Get Audio For Landing Page LIMIT 8
  public function getAudios8()
  {
    $this->db->query("SELECT * FROM audio_sermons ORDER BY RAND() LIMIT 8;");
    $results = $this->db->resultset();
    return $results;
  }

  // Get All Audio For Audio index Page
  public function getAudios()
  {
    $this->db->query("SELECT * FROM audio_sermons ORDER BY created_at DESC;");
    $results = $this->db->resultset();
    return $results;
  }
  // Get same category
  public function getCategory($category, $id)
  {
    $this->db->query("SELECT * FROM audio_sermons WHERE category = :category AND id != :id");
    $this->db->bind(':category', $category);
    $this->db->bind(':id', $id);
    $results = $this->db->resultset();
    return $results;
  }

  public function getAudioCategory($category)
  {
    $this->db->query("SELECT * FROM audio_sermons WHERE category = :category");
    $this->db->bind(':category', $category);
    $results = $this->db->resultset();
    return $results;
  }


  // Get Audio By ID
  public function getAudioById($id)
  {
    $this->db->query("SELECT * FROM audio_sermons WHERE id = :id");

    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }



  // Add Post
  public function addAudio($data)
  {
    // Prepare Query
    $this->db->query('INSERT INTO audio_sermons (title, preacher, category, file_url, month_year) 
      VALUES (:title, :preacher, :category, :file_url, :month_year)');

    // Bind Values
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':preacher', $data['preacher']);
    $this->db->bind(':category', $data['category']);
    $this->db->bind(':file_url', $data['file_url']);
    $this->db->bind(':month_year', $data['month_year']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Update Post
  public function updateAudio($data)
  {
    // Prepare Query
    $this->db->query('UPDATE audio_sermons SET title = :title, preacher = :preacher, category = :category, details = :details, is_series = :is_series, file_url = :file_url, month_year = :month_year WHERE id = :id');

    // Bind Values
    $this->db->bind(':id', $data['id']);
    $this->db->bind(':title', $data['title']);
    $this->db->bind(':preacher', $data['preacher']);
    $this->db->bind(':category', $data['category']);
    $this->db->bind(':details', $data['details']);
    $this->db->bind(':is_series', $data['is_series']);
    $this->db->bind(':file_url', $data['file_url']);
    $this->db->bind(':month_year', $data['month_year']);

    //Execute
    if ($this->db->execute()) {
      return true;
    } else {
      return false;
    }
  }

  // Delete Post
  public function deleteAudio($id)
  {
    // Prepare Query
    $this->db->query('DELETE FROM audio_sermons WHERE id = :id');

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

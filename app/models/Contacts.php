<?php
class Contacts
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Get All Posts
    public function getMessages()
    {
        $this->db->query("SELECT * FROM uploads WHERE category = :category ORDER BY createdAt DESC;");
        $this->db->bind(':category', 'audio');
        $results = $this->db->resultset();

        return $results;
    }

    // Get Post By ID
    public function getMessageById($id)
    {
        $this->db->query("SELECT * FROM posts WHERE id = :id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    // Add Post
    public function sendMessage($data)
    {
        // Prepare Query
        $this->db->query('INSERT INTO contacts (names, phone, message_body) 
      VALUES (:names, :phone, :message_body)');

        // Bind Values
        $this->db->bind(':names', $data['names']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':message_body', $data['message_body']);

        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

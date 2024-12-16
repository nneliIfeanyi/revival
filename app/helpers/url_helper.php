<?php
// Simple page redirect
function redirect($page)
{
  header('location: ' . URLROOT . '/' . $page);
}


  /*

  if (is_array($_FILES)) {
        $file = $_FILES['photo']['tmp_name'];
        $source_properties = getimagesize($file);
        $image_type = $source_properties[2];
        if ($image_type == IMAGETYPE_JPEG) {
          $image_resource_id = imagecreatefromjpeg($file);
          $target_layer = fn_resize($image_resource_id, $source_properties[0], $source_properties[1]);
          imagejpeg($target_layer, "assets/img/" . $_FILES['photo']['name']);
          $db_image_file =  "assets/img/" . $_FILES['photo']['name'];
          if ($this->userModel->editPhoto($id, $db_image_file)) {
            setcookie('photo', $db_image_file, time() + (86400 * 365), '/');
            //$_SESSION['photo'] = $db_image_file;
            flash('msg', 'Profile photo updated..');
            echo "<script>
                history.go(-2)
          </script>";
          } else {
            die('Something went wrong, try again later.');
          }
        } elseif ($image_type == IMAGETYPE_PNG) {
          $image_resource_id = imagecreatefrompng($file);
          $target_layer = fn_resize($image_resource_id, $source_properties[0], $source_properties[1]);
          imagepng($target_layer, "assets/img/" . $_FILES['photo']['name']);
          $db_image_file =  "assets/img/" . $_FILES['photo']['name'];
          if ($this->userModel->editPhoto($id, $db_image_file)) {
            setcookie('photo', $db_image_file, time() + (86400 * 365), '/');
            //$_SESSION['photo'] = $db_image_file;
            flash('msg', 'Profile photo updated..');
            echo "<script>
                history.go(-2)
          </script>";
          } else {
            die('Something went wrong, try again later.');
          }
        }
      } // End if is_array

    */
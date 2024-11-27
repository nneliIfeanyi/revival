<?php
session_start();

// Flash message helper
function flash($name = '', $message = '', $class = 'alert alert-success')
{
  if (!empty($name)) {
    //No message, create it
    if (!empty($message) && empty($_SESSION[$name])) {
      if (!empty($_SESSION[$name])) {
        unset($_SESSION[$name]);
      }
      if (!empty($_SESSION[$name . '_class'])) {
        unset($_SESSION[$name . '_class']);
      }
      $_SESSION[$name] = $message;
      $_SESSION[$name . '_class'] = $class;
    }
    //Message exists, display it
    elseif (!empty($_SESSION[$name]) && empty($message)) {
      $class = !empty($_SESSION[$name . '_class']) ? $_SESSION[$name . '_class'] : 'success';
      echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
      unset($_SESSION[$name]);
      unset($_SESSION[$name . '_class']);
    }
  }
}

function val_entry($input)
{
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}


function fn_resize($image_resource_id, $width, $height)
{

  $target_width = 392;
  $target_height = 270;
  $target_layer = imagecreatetruecolor($target_width, $target_height);
  imagecopyresampled($target_layer, $image_resource_id, 0, 0, 0, 0, $target_width, $target_height, $width, $height);
  return $target_layer;
}

<?php

/**
* Get the message
*
*@param boolean $morning true if morning, false otherwise
*
*@return string a message relevant to if it's morning or not
*/

function showMessage($morning) {
  if ($morning) {
    return "Good morning";
  } else {
      return "Good afternoon";
  }
}

$message = showMessage(true);

echo $message;

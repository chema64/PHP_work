<?php

/**
*Get the database connection
*
*@return object Connection to a MySQL server
*/

function getDB()
{
  $db_host = "localhost";
  $db_name = "cms";
  $db_user = "cms_www";
  $db_pass = "Y3O/byd9[tTDL2k0";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
  }

  echo "connected successfully";

  return $conn;
}

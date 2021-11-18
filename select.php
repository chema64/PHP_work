<?php

$db_host = "localhost";

$db_name = "cms";

$db_user = "cms_www";

$db_pass = "Y3O/byd9[tTDL2k0";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);  // 1. Pass the above variables to this function, in the correct order

$sql = "SELECT
        id, name, created_at
        FROM product
        ORDER BY created_at";  // 2. Write the required SQL in this variable

$results = mysqli_query($conn, $sql);

if($results === false) {
    echo mysqli_error($conn);
}
else {
   $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
   var_dump($articles);
}


?>

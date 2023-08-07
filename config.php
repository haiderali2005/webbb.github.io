<?php
define('db_server', 'localhost');
define('db_user', 'root');
define('db_pwd', '');
define('db_name', 'ebook_3');


$con = mysqli_connect(db_server, db_user, db_pwd, db_name);

if($con === false){
    die(mysqli_connect_error());
} else {
    // echo "Connection Successful";
}


?>
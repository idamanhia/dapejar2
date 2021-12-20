<?php 
//$con = mysqli_connect('localhost', 'tordaid_niascoder', '4n_eZXRw^dwV', 'tordaid_niascoder');

if (mysqli_connect_errno() == 1203) {
  // 1203 == ER_TOO_MANY_USER_CONNECTIONS (mysqld_error.h)
  // header("Location: http://gemanias.org/error/errors_500.php");
  echo "error connection";
  exit;
}


function db() {
    static $con;
    if ($con===NULL){ 
        $con = mysqli_connect('localhost', 'root', '', 'kominfo');
    }
    return $con;
}
function db_close($con){
  return mysqli_close($con);
}
?>
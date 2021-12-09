<?php
$servername = "localhost";
$username = "greenli2_remote";
$password = "admin@2020";
$dbname = "greenli2_nsbm";


$conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("connection failed".$conn->connect_error);
    }
    else
    {
        $userid = $_REQUEST['userid'];
        $searchuser = "SELECT * FROM login WHERE userID = '$userid';";
        $result1 = $conn->query($searchuser);
        $row1 = mysqli_fetch_array($result1);
        
        if($row1 == true)
        {
            $deleteuserquery = "DELETE  FROM login WHERE userID = '$userid';";
            $result = $conn->query($deleteuserquery);
        
            if($result == true)
            {
               echo'<script> alert("The user deleted successfully.");</script>';
               echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
            }
            else
            {
               echo'<script> alert("The process failed.");</script>';
               echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
            }
         }
         else
         {
              echo'<script> alert("The userID does not exsits.Please Re-enter a proper one and try again");</script>';
              echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
         }
    }
mysqli_close($conn);
?> 
    
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
        
        $uid = $_REQUEST['uid'];
        $searchuser = "SELECT * FROM login WHERE userID = '$uid';";
        $result1 = $conn->query($searchuser);
        $row1 = mysqli_fetch_array($result1);
        
         if($row1 == true)
        {
            $cadminquery = "UPDATE login SET type = 'Admin' WHERE userID = '$uid';";
            $result = $conn->query($cadminquery);
            
            if($result == true)
            {
               echo'<script> alert("The user successfully changed as an Admin of this site.");</script>';
               echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
            }
            else
            {
               echo'<script> alert("The Process failed.");</script>';
               echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
            }
        }
        else
        {
            echo'<script> alert("The username does not exsist.Please Re-enter a proper one and try again");</script>';
            echo'<script> window.location.href="https://darkfighters.greenline.lk/Admin/admin.html"</script>';
        }
    }
    mysqli_close($conn);
?>
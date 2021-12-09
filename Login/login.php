<?
$servername = "localhost";
$username = "greenli2_remote";
$password = "admin@2020";
$dbname = "greenli2_nsbm";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
die ("connection failed".$conn->connect_error);
}
else
{
    $uname = $_REQUEST['uname'];
    $password = $_REQUEST['pwd'];
    
    $retreivequery = "SELECT username,password,type FROM login WHERE username = '$uname' && password = '$password';";
    $result = $conn->query($retreivequery);
    $row = mysqli_fetch_array($result);
    
    if($row == true)
    {
        if($row['type'] == user)
        {
             header('Location: https://darkfighters.greenline.lk');
        }
        else if($row['type'] == Admin)
        {
             header('Location: https://darkfighters.greenline.lk/Admin/admin.html');
        }
    }
    else
    {
        echo'<script> alert("Incorrect username,password. If you do not have any account please create account first.");</script>';
        echo'<script> window.location.href="https://darkfighters.greenline.lk/Login/login.html"</script>';
    }

     mysqli_close($conn);
}

?>    
    

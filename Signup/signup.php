<?
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
    $uname = $_REQUEST['uname'];
    $pwd = $_REQUEST['pwd'];
    
    $verifyquery = "SELECT * FROM login WHERE username = '$uname' && password = '$pwd';";
    $result1 = $conn->query($verifyquery);
    $row1 = mysqli_fetch_array($result1);
    
    if($row1 == true)
    {
        echo'<script> alert("Your username and password alreay exits. Please change your username or password.");</script>';
        echo'<script> window.location.href="https://darkfighters.greenline.lk/Signup/signup.html"</script>';
    }
    else
    {
        $maxidquery = "SELECT MAX(userID) FROM login;";
        $result2 = $conn->query($maxidquery);
        $row2 = mysqli_fetch_array($result2);
        
        if($row2 == true)
        {
            $cid = $row2['MAX(userID)'];
            $cid++;
        }
        else
        {
            $cid = 1;
        }
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $uname = $_REQUEST['uname'];
        $email = $_REQUEST['email'];
        $mobile = $_REQUEST['mobile'];
        $gen = $_REQUEST['gen'];
        $bday = $_REQUEST['bday'];
        $pwd = $_REQUEST['pwd'];
        $cpwd = $_REQUEST['cpwd'];
        $date = date('Y-m-d ');
        $time = date("h:i:sa");
        
        $insertquery = "INSERT INTO login (userID,firstname,lastname,username,email,mobile,gender,birthday,password,cpassword,type,date,time,approval,other) 
        VALUES ('$cid','$fname','$lname','$uname','$email','$mobile','$gen','$bday','$pwd','$cpwd','user','$date','$time','ok','none');";
        
        if($conn->query($insertquery) == true)
        {
            echo'<script> alert("Signup successful.");</script>';
            echo'<script> window.location.href="https://darkfighters.greenline.lk/Login/login.html"</script>';
        }
        else
        {
            echo"Signup failed";
        }
    }
}
    mysqli_close($conn);

   
    
  ?>     
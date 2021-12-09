<?

$servername = "localhost";
$username = "greenli2_remote";
$password = "admin@2020";
$dbname = "greenli2_nsbm";

/*
 function getUserIpAddr()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            // ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            // ip from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    */
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
else
{
    
    
    $fullname = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mobile = $_REQUEST['phone'];
    $message = $_REQUEST['message'];
    $date = date('Y-m-d ');
    $time = date("h:i:sa");
    
    $insertquery = "INSERT INTO contact (ip,fullname,email,mobile,message,date,time) 
    VALUES ('12345','$fullname','$email','$mobile','$message','$date','$time');";
    
    if($conn->query($insertquery) == true)
    {
       header('Location: https://darkfighters.greenline.lk/Contact/contact.html');
    }
    else
    {
        echo"Error";
    }
    
    mysqli_close($conn);

}

?>
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
    $email = $_REQUEST['email'];
    $date = date('Y-m-d ');
    $time = date("h:i:sa");
    
    $insertquery = "INSERT INTO subscribers (ip,email,date,time) 
    VALUES ('12345','$email','$date','$time');";
    
        if($conn->query($insertquery) == true)
        {
           header('Location: https://darkfighters.greenline.lk');
        }
        else
        {
            echo"Error";
        }
    
    mysqli_close($conn);
}

?>
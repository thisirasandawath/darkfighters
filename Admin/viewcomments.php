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
        $retreiveuser = "SELECT ip,fullname,email,mobile,message,date,time FROM contact;";
        $result = $conn->query($retreiveuser);
        $row = mysqli_fetch_array($result);
        
        echo "<table border='1' width = '100%'>
        <tr>
        <th>IP</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Message</th>
        <th>Date</th>
        <th>Time</th>
        </tr>";
    
        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['ip'] . "</td>";
        echo "<td>" . $row['fullname'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['message'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "</tr>";
        }
        echo "</table>"; 
    }
    mysqli_close($conn);
?>
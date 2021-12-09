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
        $retreiveuser = "SELECT userID,firstname,lastname,username,email,mobile,gender,birthday,password,type,date,time,approval,other FROM login;";
        $result = $conn->query($retreiveuser);
        
        echo "<table border='1' width = '100%'>
        <tr>
        <th>UserID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Gender</th>
        <th>Birthday</th>
        <th>Password</th>
        <th>Type</th>
        <th>Date</th>
        <th>Time</th>
        <th>Approval</th>
        <th>Other</th>
        </tr>";
    
    while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row['userID'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "<td>" . $row['birthday'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['type'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['time'] . "</td>";
        echo "<td>" . $row['approval'] . "</td>";
        echo "<td>" . $row['other'] . "</td>";
        echo "</tr>";
        }
        echo "</table>";

    }
   
mysqli_close($conn);
?>
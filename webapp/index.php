<?php
// Create database connection using config file
include_once("conn.php");
 
// Fetch all users data from database
$query = mysqli_query($conn, "SELECT * FROM tbl_karyawan ORDER BY idkaryawan DESC");
?>
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="registrasi.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama Karyawan</th> 
        <th>No Kartu</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($query)) {         
        echo "<tr>";
        echo "<td>".$user_data['namakaryawan']."</td>";
        echo "<td>".$user_data['nokartu']."</td>";
        echo "<td>".$user_data['email']."</td>";        
        echo "<td><a href='edit.php?idkaryawan=$user_data[idkaryawan]'>Edit</a> | <a href='delete.php?id=$user_data[idkaryawan]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>
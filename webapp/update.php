<?php
    include "conn.php";
     if(isset($_POST['submit'])) {
        $idkaryawan = $_POST['idkaryawan'];
        $nokartu = $_POST['id'];
        $namakaryawan = $_POST['namakaryawan'];
        $email = $_POST['email'];
        
        // include database connection file
        
                
        // Insert user data into table
         $conn = mysqli_query($conn, "UPDATE tbl_karyawan SET namakaryawan='$namakaryawan', nokartu='$nokartu',email='$email'WHERE idkaryawan=$idkaryawan");

                
        // Show message when user added
         echo "User added successfully. <a href='index.php'>View Karyawan</a>";
    }


?>
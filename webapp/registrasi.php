<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);

    if(isset($_POST['submit'])) {
        $nokartu = $_POST['id'];
        $namakaryawan = $_POST['namakaryawan'];
        $email = $_POST['email'];
        
        // include database connection file
        include_once("conn.php");
                
        // Insert user data into table
         $conn = mysqli_query($conn, "INSERT INTO tbl_karyawan(namakaryawan,nokartu,email) VALUES('$namakaryawan','$nokartu','$email')");

        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Karyawan</a>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>		
		<script src="jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				 $("#getUID").load("UIDContainer.php");
				setInterval(function() {
					$("#getUID").load("UIDContainer.php");
				}, 500);
			});
		</script>		
	</head>
	
	<body>		

		<div>
			<br>
			<div>
				<div class="row">
					<h3 align="center">Registration Form</h3>
				</div>
				<br>
				<form action="registrasi.php" method="post" >
                    <table>
                        <tr>
                            <td>Kartu ID</td>
                            <td>
                                <textarea name="id" id="getUID" placeholder="Please Scan your Card / Key Chain to display ID" rows="1" cols="1" required style="width:450px;"></textarea></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" name="namakaryawan" style="width:450px;"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" style="width:450px;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Add"></td>
                        </tr>
                    </table>								
				</form>
				
			</div>               
		</div> <!-- /container -->	
	</body>
</html>
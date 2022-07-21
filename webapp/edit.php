<?php
    include_once("conn.php");
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);   
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
                <?php
                    $idkaryawan = $_GET['idkaryawan'];
                    $data = mysqli_query($conn, "SELECT * from tbl_karyawan where idkaryawan='$idkaryawan'");
                    while ($d = mysqli_fetch_array($data)) {
                ?>
				<form action="update.php" method="post" >
                    <table>
                        <tr hidden="">
                            <td>ID Pegawai</td>
                            <td><input type=text name=idkaryawan value="<?php echo $d['idkaryawan'];?>"></td>
                        </tr>
                        <tr>
                            <td>Kartu ID</td>
                            <td><textarea name="id" id="getUID" rows="1" cols="1" required style="width:450px;"><?php echo $d['nokartu'];?></textarea></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" name="namakaryawan" value="<?php echo $d['namakaryawan'];?>"style="width:450px;"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" style="width:450px;" value="<?php echo $d['email'];?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="Update"></td>
                        </tr>
                    </table>								
				</form>
				<?php } ?>
			</div>               
		</div> <!-- /container -->	
	</body>
</html>
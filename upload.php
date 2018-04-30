<?php 
$j=mysqli_connect('localhost','root','','hospital');
if (isset($_POST['names'])) {
# code...
$target_dir="uploads/";
$num=rand(2000,2000000);
$target_file=$target_dir.$num.basename($_FILES['fileToUpload']['name']);
if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_file)) {
# code...
extract($_POST);
$sql="INSERT INTO  upload(id,names,path) VALUES (null,'$names','$target_file')";

mysqli_query($j,$sql);

if ($j) {
			# code...
					# code...
			$redirectUrl='http://localhost/landingPage/index.php';
		echo '<script type="application/javascript">alert("You have successfully submitted your details"); window.location.href = "'.$redirectUrl.'";</script>';
				 
		}
 
}
else{
# code...
echo "FAILED TO UPLOAD";	
}	
}

 ?>
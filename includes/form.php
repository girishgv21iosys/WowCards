<?php 
	include_once '../includes/db.inc.php';
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$telephone = $_POST['telephone'];
		$cname = $_POST['cname'];
		$tagline = $_POST['tagline'];
		$designation = $_POST['designation'];
		$website = $_POST['website'];
		// $cat = strtolower(str_replace(' ','',$category));

		$target_dir = "../uploads/";
	    $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
	    $uploadOk = 1;
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	    if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["imageUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }

	    $image=basename( $_FILES["imageUpload"]["name"],".jpg"); // used to store the filename in a variable

	    echo "Your add has been submited, you will be redirected to your account page in 3 seconds....";
	    header( "Refresh:3; url=../index.php", true, 303);

		$sql = "insert into cards (name, email, phone, telephone, company, tagline, designation, logo, website) values('$name', '$email', '$phone', '$telephone', '$cname', '$tagline', '$designation', '$image', '$website');";
		$res = mysqli_query($conn, $sql);
		if (!$res) {
			header("Location: ../index.php?result=fail");
		} else {
			?>
			<script type="text/javascript">
				alert("Item Added Successfully!!");
				location.replace("../index.php");
			</script>
			<?php
		}
	}
?>
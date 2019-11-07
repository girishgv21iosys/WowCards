<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<form action="includes/form.php" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div>
				<label for="name">Name</label>
				<input type="text" id="name" name="name">
			</div>
			<div>
				<label for="cname">Company Name</label>
				<input type="text" id="cname" name="cname">
			</div>
		</div>
		<div class="row email">
			<div>
				<label for="cname">Email</label>
				<input type="email" id="cname" name="email">
			</div>
		</div>
		<div class="row">
			<div>
				<label for="cname">Logo</label>
				<input type="file" id="cname" name="imageUpload">
			</div>
			<div>
				<label for="cname">Website</label>
				<input type="text" id="cname" name="website">
			</div>
		</div>
		<div class="row">
			<div>
				<label for="cname">Phone</label>
				<input type="text" id="cname" name="phone">
			</div>
			<div>
				<label for="cname">Telephone</label>
				<input type="text" id="cname" name="telephone">
			</div>
		</div>
		<div class="row">
			<div>
				<label for="cname">Tag Line</label>
				<input type="text" id="cname" name="tagline">
			</div>
			<div>
				<label for="cname">Designation</label>
				<input type="text" id="cname" name="designation">
			</div>
		</div>
		<div class="row">
			<div>
				<button type="submit" name="submit">Submit</button>
			</div>
		</div>
	</form>
</body>
</html>
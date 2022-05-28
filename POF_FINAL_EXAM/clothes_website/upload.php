<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
	<input type="text" name="title"/>
	<input type="text" name="des"/>
	<input type="file" name="image[]" />
    <button type="submit">Upload</button>
</form>
</body>
</html>
<?php
include 'dbh.inc.php';
$conn=mysqli_connect("localhost","root","","p1n") or die("Could not Connect My Sql");
$output_dir = "upload/";/* Path for file upload */
	$RandomNum   = time();
	$ImageName      = str_replace(' ','-',strtolower($_FILES['image']['name'][0]));
	$ImageType      = $_FILES['image']['type'][0];
 
	$ImageExt = substr($ImageName, strrpos($ImageName, '.'));
	$ImageExt       = str_replace('.','',$ImageExt);
	$ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
	$NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
    $ret[$NewImageName]= $output_dir.$NewImageName;
	
	/* Try to create the directory if it does not exist */
	if (!file_exists($output_dir))
	{
		@mkdir($output_dir, 0777);
	}               
	move_uploaded_file($_FILES["image"]["tmp_name"][0],$output_dir."/".$NewImageName );
		$t  = $_POST['title'];
		$d  = $_POST['des'];
	     $sql = "INSERT INTO `img`(`title`,`des`,`photo`) VALUES ('$t','$d','$NewImageName')";
		if (mysqli_query($conn, $sql)) {
			echo "successfully !";
		}
		else {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }

?>
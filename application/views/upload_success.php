<html>
<head>
<title>Upload Form</title>
</head>
<body>
	<?php 
	$filename = $upload_data['file_name'];
	echo $filename;
	echo "<br>";
	echo $upload_data['file_name'];
	?>
<h3>Your file was successfully uploaded!</h3>

<ul>

	<br>

</ul>

<p><?php echo anchor('test', 'Upload Another File!'); ?></p>

</body>
</html>
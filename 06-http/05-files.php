<?php

$uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
$targetFilename = $uploadsDir . DIRECTORY_SEPARATOR . "my-image.png";
$relativeFilename = substr($targetFilename, strlen(__DIR__));

if(array_key_exists('uploadFile', $_FILES)) {
	$uploadInfo = $_FILES['uploadFile'];
	echo "<pre>";
	print_r($uploadInfo);
	echo "</pre>";
	switch($uploadInfo['error']) {
		case UPLOAD_ERR_OK:
			if(mime_content_type($uploadInfo['tmp_name']) !== 'image/png') {
				echo "The uploaded file $targetFilename is not a PNG image";
			} else {
				if(move_uploaded_file($uploadInfo['tmp_name'], $targetFilename)) {
					echo 'The file was uploaded successfuly.';
				} else {
					echo 'Cannot save the uploaded image.';
				}

			}
			break;
		case UPLOAD_ERR_INI_SIZE:
			printf("Failed to upload %s: the file is too big.", $uploadInfo['name']);
			break;
		case UPLOAD_ERR_NO_FILE:
			printf("No file was uploaded");
			break;
		default:
			printf('Failed to upload file %s: error code [%d].', $uploadInfo['name'], $uploadInfo['error']);
	}
}

if(file_exists($targetFilename)) {
	$html = "<br><img src='$relativeFilename' style='max-width=500px; height: auto;' alt='my uploaded image'>";
	echo $html;
}

?>

<form action="05-files.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="uploadFile">
	<input type="submit" value="Upload">
</form>

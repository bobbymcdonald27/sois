<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Check for an uploaded file:
	if (isset($_FILES['upload'])) {
		// Move the file over.
			if (move_uploaded_file ($_FILES['upload']['tmp_name'], "./uploads/{$_FILES['upload']['name']}")) {
				echo '<p><em>The file has been uploaded!</em></p>';
			} // End of move... IF.
		
	}
}

?>


<form enctype="multipart/form-data" action="<?php echo basename(__FILE__);  ?>" method="post">
	<legend>Select a file to upload</legend>
	<p><b>File:</b> <input type="file" name="upload" /></p>
	
	
	<div align="center"><input type="submit" name="submit" value="Submit" /></div>
</form>
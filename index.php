<!DOCTYPE html>
<html>
<head>
	<title>choose the csv file</title>
</head>
<body>
<form class="form-horizontal" action="upload.php" method="post" name="uploadCsv" enctype="multipart/form-data">
	<label>Choose CSV File</label>
	<input type="file" name="file" accept=".csv">
	<button type="submit" name="import">Import</button>
	
</form> 	

</body>
</html>
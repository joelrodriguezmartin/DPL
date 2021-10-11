<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="UTF-8">
	    <title>Title</title>
	</head>
	<body>
	    <form action="" method="get" enctype="multipart/form-data">
	    	<input type="text" name="dia" maxLength=2>
	    	<select><?php 
	    	for ($i = 1; $i <= 12; $i++){
	    	    echo "<option>$i</option>";
	    	};
	    	?></select>
	    	<select><?php 
	    	for ($i = 1920; $i <= 2021; $i++){
	    	    echo "<option>$i</option>";
	    	};
	    	?></select> 	
	    </form>	    	
	</body>
</html>



<!DOCTYPE html>

<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta charset="UTF-8">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		<!-- https://www.bootstrapcdn.com/bootswatch/ for themes -->
		<link type="image/x-icon" rel="shortcut icon" href="favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="page.css"/>
		
		<title>Search Data!</title>
	</head>
	
	<body style="font-family: 'Quicksand', sans-serif; background-color: #EDE1D1;">
		<div class="main" style="margin-top: 100px;">
			<h1 style="text-align: center;">Input Your Zipcode!</h1>
		</div>
		<div style="margin-top: 50px;">
			<form id="zipSearch" method="post" action="result.php" style="text-align: center;">
				<input type="text" name="zipcode" placeholder="Zipcode...">
				<input type="submit">
			</form>
		</div>
	</body>
</html>
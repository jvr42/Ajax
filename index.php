<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajax - Bootstrap</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  	<button onclick="doAjax()">Click me to get message from server without refreshing....</button>
    <h1 id="header"></h1>

	<script>
	function doAjax()
	{
		$.ajax('mensaje.php',{
			success: function(data)
			{
				$('#header').html(data);
			}
		});
	}
	</script>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
	<title>{{$title}}</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- CSS и JavaScript -->
	<style>
	    .panel-heading{
		margin-bottom: 10px;
	    }
	    tr{
/*		 position:relative;   */
	    }
	    .description{
		display:none;
/*		margin-left:-350px;*/
/*		margin-top:17px;*/
		background:#f3f3f3;
/*		height:40px;*/
		-moz-box-shadow:0 5px 5px rgba(0,0,0,0.3);
		-webkit-box-shadow:0 5px 5px rgba(0,0,0,0.3);
		box-shadow:0 5px 5px rgba(0,0,0,0.3);
/*		float:right;*/
width: 100px;
	    }
	    tr:hover .description{
		display:block;
/*		position:absolute;*/
/*		top:100px;*/
/*		z-index:9999;*/
/*		width:400px;*/
		transition: 5s ease-in-out;
		text-align: center;
		width: 100px;
	    }
	</style>
    </head>

    <body>
	<div class="container">
	    <nav class="navbar navbar-default">
		<div class="navbar-header">
		    <a class="navbar-brand" href="#">Logo</a>
		</div>
	    </nav>
	</div>
	@yield('content')<!--подключает блок контент-->
    </body>
</html>
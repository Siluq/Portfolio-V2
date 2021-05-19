<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		.button {
			background: #149ddd;
			border: 0;
			padding: 10px 24px;
			color: #fff;
			transition: 0.4s;
			border-radius: 4px;
			text-decoration: none;
		}

		.button:hover {
			background: #37b3ed;
			color: #fff;
			text-decoration: none;
		}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>
				<br />
				<p><a class="button" href="http://portfolio.dev/#portfolio">Back</a></p>
			</div>
		</div>
	</div>

</body>
</html>
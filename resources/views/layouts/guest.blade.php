<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<base href="{{ asset('') }}">
	<title>Nguyet Anh Store</title>
	<link rel="preconnect" href="https://fonts.googleapis.com"/>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/owl-carousel-2/2.3.4/owl.carousel.css"/>
	<link rel="stylesheet" href="assets/owl-carousel-2/2.3.4/owl.theme.default.css"/>
	<link rel="stylesheet" href="assets/font-awesome-6/6.1.1/css/all.min.css"/>
	<link rel="stylesheet" href="assets/css/main.css"/>
	<script src="https://cdn.tailwindcss.com"></script>
	<script src="assets/js/tailwind.config.js"></script>
</head>

<body>
	{{ $slot }}

	<script src="assets/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/owl-carousel-2/2.3.4/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>

</html>
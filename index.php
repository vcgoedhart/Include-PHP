<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Localhost</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	<body>
		<style type="text/css">
			body {
				margin: 0;
				padding: 0;
				font-family: 'Roboto', sans-serif;
			}

			ul {
				list-style-type: none;
				overflow: hidden;
				display: block;
				margin: 0;
			}

			a {
				text-decoration: none;
			}

			header ul {
				width: 100%;
				height: 70px;
				background-color: #35424a;
				padding: 0;
			}

			header ul > li { 
				float: left;
			}

			header ul > li > a {
				text-decoration: none;
				color: white;
				line-height: 67px;
				padding: 26px 20px;
			}

			header ul > li > a:hover {
				border-bottom: solid white;
			}
			section {
				padding-top: 40px;
				grid-template-columns: auto auto auto;
				width: 1000px;
				margin: 0 auto;
				display: block;
			}

			section > div {
				width: 300px;
				height: 300px;
				border: solid black 0.1px;
				display: inline-block;
				padding: 5px;
			}

			section ul {
				padding: 12px 0 0 20px;
			}

			section ul > li > a {
				color: black;
				font-size: 1.3rem;
			}

			section ul > li > a:hover {
				text-decoration: underline;
			}

			footer {
				height: 50px;
				background-color: #35424a;
				color: white;
			}

			footer p {
				line-height: 50px;
			}
		</style>
		<header>
			<?php include 'include/header.php'; ?>
		</header>
		<section>
			<?php include 'include/menu.php'; ?>
		</section>
		<footer>
			<?php include 'include/footer.php'; ?>
		</footer>
	</body>
</html>
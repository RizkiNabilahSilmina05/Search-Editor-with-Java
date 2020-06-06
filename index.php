<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Editor</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #061C30;">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php"><i class="fas fa-edit"></i> DATA EDITOR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              	<span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
					<a class="nav-link" href="editor.php">Editor</a>
					</li>
					<li class="nav-item active">
					<a class="nav-link" href="about.php">About Me</a>
					</li>
				</ul>
            </div>
        </div>
	</nav>
	<!-- <div class="container"> -->
		<div class="text-center mt-3">
            <h1 class="display-4">Welcome!</h1>
            <br>
            <hr>
			<h5>This website displays editor information on the site detik.com article along with the edited article <br>The data obtained comes from the hash data structure that is integrated with the web</h5>
            <br>
            <a class="btn btn-lg" href="https://github.com/mr1dha/java-hash-structure-implemented-to-web" style ="background-color:rosybrown"><i class="fab fa-github" style ="font-family: 'marck script',cursive;"></i> Kunjungi Github</a>
		</div>
		<!-- <div class="row justify-content-end">
			<div class="col-lg-4">
				<div class="input-group my-3">
					<input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control input" placeholder="Editor Name..." type="text">
					<div class="input-group-append">
						<a class="btn btn-primary search text-white" id="button-addon2" type="button">
							<span class="fas fa-search fa-sm">Search</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="result text-center"></div> -->
	<!-- </div> -->

	<script src="assets\js\jquery.min.js"></script>
	<script src="assets\js\bootstrap.min.js"></script>
</body>
</html>
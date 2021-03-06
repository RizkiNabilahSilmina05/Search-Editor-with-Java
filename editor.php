<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Data Editor</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #008B8B;">
        <div class="container">
            <a class="navbar-brand font-weight-bold"><i class="fas fa-edit"></i> DATA EDITOR</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
					<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item active">
					<a class="nav-link" href="editor.php">Data</a>
					</li>
					<li class="nav-item active">
					<a class="nav-link" href="about.php">About Me</a>
					</li>
				</ul>
            </div>
        </div>
	</nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="input-group mb-3 mt-5 w-50 mx-auto">
                    <input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control input" placeholder="Editor Name" type="text">
                        <div class="input-group-append">
                            <a class="btn btn-primary search text-white" id="button-addon2" style ="background-color:mediumaquamarine" type="button">
                                <span class="fas fa-search fa-sm">Search</span>
                            </a>
                        </div>
                    </input>
                </div>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="result d-flex justify-content-center mt-4"></div>
            </div>
        </div>
    </div>

    <script src="assets\js\bootstrap.min.js"></script>
    <script src="assets\js\jquery.min.js"></script>
</body>
</html>

<script>
	loadData();
	function loadData() {
		$.get('core/get.php?q=show', function(data){
			$(".result").html(data);
		});
	}

	$(".search").click(function() {
		loadCari();
	});

	function loadCari() {
		$.get('core/get.php?q="'+$(".input").val()+'"', function(data){
			$(".result").html(data);
		});
	}
</script>

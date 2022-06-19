<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pay now | Payments APP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Payments APP</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="paynow.php">Paynow!</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="transactions.php">Payments</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-8">
	    <div class="card ">
		  <div class="card-header">
		    Paynow
		  </div>
		  <div class="card-body">
		  	<form>
		  		<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Phone number</label>
				  <input type="number" name="phoneNumber" class="form-control" id="exampleFormControlInput1" placeholder="Fadlan geli telifoonkaaga">
				</div>
				<div class="mb-3">
				  <label for="exampleFormControlInput1" class="form-label">Amount</label>
				  <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="Fadlan geli lacagta">
				</div>
				<div class="mb-3">
					<button type="button" name="submit" class="btn btn-primary">pay now!</button>
				</div>
		  	</form>

		  </div>
		</div>
    </div>
  </div>
</div>
</body>
</html>
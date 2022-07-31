<html>

<head>
	<!--<script src=
		"https://code.jquery.com/jquery-3.2.1.min.js">
	</script>-->

	<!--<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		type="text/javascript">
	</script>-->
	
	<!--<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
</head>

<body>
    <!--customer_no | name | phone_no-->
	<div class="container">
		<h1>GeeksForGeeks</h1>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>User Id</label>
					<input type='text' name="customer_no"
						id='customer_no' class='form-control'
						placeholder='Enter customer_no'
						onkeyup="GetDetail(this.value)" value="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>name:</label>
					<input type="text" name="name"
						id="name" class="form-control"
						placeholder='Name'
						>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group">
					<label>phone_no:</label>
					<input type="text" name="phone_no"
						id="phone_no" class="form-control"
						placeholder='phone_no'
						>
				</div>
			</div>
		</div>
	</div>
	<script>

		// onkeyup event will occur when the user
		// release the key and calls the function
		// assigned to this event
		function GetDetail(str) {
			if (str.length == 0) {
				document.getElementById("name").value = "";
				document.getElementById("phone_no").value = "";
				return;
			}
			else {

				// Creates a new XMLHttpRequest object
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {

					// Defines a function to be called when
					// the readyState property changes
					if (this.readyState == 4 &&
							this.status == 200) {
						
						// Typical action to be performed
						// when the document is ready
						var myObj = JSON.parse(this.responseText);

						// Returns the response data as a
						// string and store this array in
						// a variable assign the value
						// received to first name input field
						
						document.getElementById
							("name").value = myObj[0];
						
						// Assign the value received to
						// last name input field
						document.getElementById(
							"phone_no").value = myObj[1];
					}
				};

				// xhttp.open("GET", "filename", true);
				xmlhttp.open("GET", "searchdbs.php?customer_no=" + str, true);
				
				// Sends the request to the server
				xmlhttp.send();
			}
		}
	</script>
</body>

</html>

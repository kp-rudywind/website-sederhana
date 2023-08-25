<?php
if(isset($_POST['kirim'])) {
$name = mysqli_real_escape_string($conn, $_POST['receiver']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$priority = mysqli_real_escape_string($conn, $_POST['priority']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
$received = date("Y-m-d H:i:s");


$sql = "INSERT INTO email (name, email, subject, priority, message, received) VALUES ('$name', '$email', '$subject', '$priority', '$message', '$received')";

if ($conn->query($sql) === TRUE) {
echo "<script>alert('Your email has been sent successfully')</script>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>



<div class="container-fluid bg-warning p-5 text-center">
	<div class="f20 fw800">
		KONTAK
	</div>
</div>

<div class="container py-3">
	<h2 class="h1title">GET IN TOUCH</h2>
	<p>litora postea aliquam interdum solum eam adversarium quis ante persecuti.</p>
	
	<div class="row mb-4">
		<div class="col-12 mb-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="orange" d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25c1.12.37 2.32.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1A17 17 0 0 1 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2Z"/></svg> +000-000-000
		</div>
		<div class="col-12 mb-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="orange" d="M18.27 6c1.01 2.17.78 4.73-.33 6.81c-.94 1.69-2.29 3.12-3.44 4.69c-.5.7-1 1.45-1.37 2.26c-.13.27-.22.55-.32.83c-.1.28-.19.56-.28.84c-.09.26-.2.57-.53.57c-.39 0-.5-.44-.58-.74c-.24-.73-.48-1.43-.85-2.1c-.42-.79-.95-1.52-1.49-2.23L18.27 6M9.12 8.42l-3.3 3.92c.61 1.29 1.52 2.39 2.39 3.49c.21.25.42.51.62.78L13 11.67l-.04.01c-1.46.5-3.08-.24-3.66-1.68c-.08-.17-.14-.37-.18-.57a3.05 3.05 0 0 1 0-1v-.01m-2.54-3.8l-.01.01c-1.62 2.05-1.9 4.9-.93 7.31L9.63 7.2l-.05-.05l-3-2.53m7.64-2.26L11 6.17l.04-.01c1.34-.46 2.84.12 3.52 1.34c.15.28.27.58.31.88c.06.38.08.65.01 1.02v.01l3.2-3.8a6.988 6.988 0 0 0-3.85-3.24l-.01-.01M9.89 6.89l3.91-4.65l-.04-.01C13.18 2.08 12.59 2 12 2c-1.97 0-3.83.85-5.15 2.31l-.02.01l3.06 2.57Z"/></svg> Medan, Sumatera Utara
		</div>
		<div class="col-12 mb-1">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="orange" d="m20 8l-8 5l-8-5V6l8 5l8-5m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"/></svg> mail@domain.com
		</div>
	</div>
	
	<div class="card mb-4">
		<div class="card-body">
			<form method="post">
				<div class="form-row">
    <div class="col-6 mb-3">
    	<label>Your Name</label>
      <input type="text" class="form-control" placeholder="Your name..." name="receiver" required>
    </div>
    <div class="col-6 mb-3">
    	<label>Your Email</label>
      <input type="email" class="form-control" placeholder="Your Email..." name="email" required>
    </div>
    <div class="col-8 mb-3">
    	<label>Subject</label>
      <input type="text" class="form-control" placeholder="Your Subject..." name="subject"required>
    </div>
    <div class="col-4 mb-3">
    	<label>Priority</label>
      <select class="form-control" name="priority"required>
      		<option value="Informational">Informational</option>
      	<option value="Very Urgent">Very Urgent</option>
      	<option value="Urgent">Urgent</option>
      	<option value="Important">Important</option>
      	<option value="Normal">Normal</option>      
      	<option value="Low">Low</option>
      	      	</select>
    </div>
    <div class="col-12 mb-3">
    	<label>Your Message</label>
    	<textarea class="form-control" name="message" style="height:400px"required></textarea>
    </div>       
  </div>					
  <button type="submit" class="btn bg-black text-light" name="kirim">Submit</button>
</form>
		</div>
	</div>
	
	<div class="embed-responsive embed-responsive-1by1 py-3">
    		<iframe
  class="embed-responsive-item"
  loading="lazy"
  allowfullscreen
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBZIhqO3ubjcnFqOkRbh4hBRHKkC-ZudwM%20&q=Jl.%20Gaharu%20Lorong%20I,%20Gaharu,%20Kota%20Medan,%20Sumatera%20Utara">
</iframe>
    </div>
	
</div>

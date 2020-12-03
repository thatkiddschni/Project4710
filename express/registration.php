<!doctype html>
<html lang="en">

<head>
  <title>Sign up Form</title>
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="con-12 col-sm-6 col-md-3">
        <form class="form-container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <h1>Sign up</h1>
          <div class="form-group">
            <input type="username" class="form-control" name="uname" id="usernameInput" value="<?php echo $name?>">
            <label for="usernameInput">Username</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              value="<?php echo $name?>" name="email">
            <label for="exampleInputEmail1">Email address</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $name?>" name="pass">
            <label for="exampleInputPassword1">Password</label>
          </div>
          <div class="form-group">
            <label for="userInput">User Level</label>
            <select id="userInput" class="form-control" value="<?php echo $name?>">
              <option selected>SuperAdmin...</option>
              <option>Admin</option>
              <option>Participant</option>
            </select>
          </div>
          <button type="submit" class="btn btn-warning btn-block mt-2 mb-3">Submit</button>
        </form>
      </section>
    </section>
  </section>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- End Page Content -->
  </div>

  <!-- Image of location/map -->
  <img src="https://www.w3schools.com/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </footer>

  <script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 4000);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
</body>

</html>


<?php

function parse_inp($inp) {
  $inp = htmlspecialchars($inp);
  $inp = trim($inp);
  $inp = stripslashes($inp);
  return $inp;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = parse_inp($_POST["uname"]);
    $pass = parse_inp($_POST["pass"]);
    $email = parse_inp($_POST["email"]);
    $type = parse_inp($_POST["type"]);
}


$db_servername = "localhost";
$db_username = "gph";
$db_password = "153r@15e!";

$conn = new mysqli($db_servername, $db_username, $db_password);

if ($conn->connect_error) {
  die("rip db connection");
}

$sql = "INSERT INTO gph.users (username, password, email, level) VALUES ('" . $uname . "', '" . $pass."', '" . $email. "', '" . $type ."')";


if ($conn->query($sql) == TRUE) {
	echo("User Created\n");
}

else {
	echo("User Not Created\n");
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ticketgetter</title>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Ticketgetter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" onclick="location.href='file:///C:/Users/stett/Downloads/Examensarbete/v1.0/v1.0.html';" href="#">Hem <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inrikes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Utrikes</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Sista Minuten</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Kundservice
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Kontakt</a>
                        <a class="dropdown-item" href="#">Chat</a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logga in</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Registrera</a>
                </li>

            </ul>
            
        </div>
    </nav>
    <!-- End of Navbar! -->
    
    <form action="v1.1.php" method="POST">
    <div class="container">
      <h1>Sök resa</h1>
      <label for="email"><b>Avresa</b></label>
      <input type="text" placeholder="Sök Stad" name="search" id="email" required>
    <!--  <label for="psw"><b>Hemresa</b></label>
      <input type="text" placeholder="Sök stad" name="search" id="psw" required>
      <input type="submit" class="registerbtn" value="Sök">
    </div> -->
  </form>
  <?php
// (B) PROCESS SEARCH WHEN FORM SUBMITTED
if (isset($_POST['search'])) {
  // (B1) SEARCH FOR USERS
  require "2-search.php";

  // (B2) DISPLAY RESULTS
  if (count($results) > 0) {
    foreach ($results as $r) {
      printf("<div>%s - %s</div>", $r['DESTINATION'], $r['DEPARTURE']);
    }
  } else { echo "Hittade inga tillgängliga resor"; }
}
?>
<!--
<form onsubmit="return fetch();">
  <h1>SEARCH FOR USERS</h1>
  <input type="text" id="search" required/>
  <input type="submit" value="Search"/>
</form>
-->
<!-- (B) SEARCH RESULTS -->
<!--
<div id="results"></div>

<script>
function fetch() {
  // (A) GET SEARCH TERM
  var data = new FormData();
  data.append('search', document.getElementById("search").value);
  data.append('ajax', 1);
 
  // (B) AJAX SEARCH REQUEST
  var xhr = new XMLHttpRequest();
  xhr.open('POST', "2-search.php");
  xhr.onload = function () {
    var results = JSON.parse(this.response),
    wrapper = document.getElementById("results");
    if (results.length > 0) {
      wrapper.innerHTML = "";
      for (let res of results) {
        let line = document.createElement("div");
        line.innerHTML = `${res['name']} - ${res['email']}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "No results found"; }
  };
  xhr.send(data);
  return false;
}
</script>
-->
 
</body>

</html>
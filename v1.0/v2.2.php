<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ticketgetter</title>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="style.css">
</head>

<body class="body">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="v1.1.php">Ticketgetter</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link"  href="v1.1.php">Sök resa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="v2.1.php">Alla resor</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="v2.2.php">Utvalda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="v1.1_login.html">Logga in</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="v1.1_register.html">Registrera</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" onclick="stopTimer()" href="logout.php">Logga ut</a>
                </li>
                <li>
                    <div id="timer">
                        00:00:00
                    </div>
                </li>
            </ul>
            
        </div>
    </nav>
    <!-- End of Navbar! -->
    
    <form action="v2.1.php" method="POST">
    <div class="container">
      <h1>Sök resa</h1>
      
      <input type="hidden" placeholder="Sök Stad" name="search" id="test"> 
      <button type="hidden" value="sök" name="ressearch">Sök</button>
      <ul>
        <div id="first">
          <li>
            <label id="test1" type="submit">Stockholm</label>
          </li>
          <li>
            <label>Helsingfors</label>
          </li>
          <li>
            <label>Köpenhamn</label>
          </li>
        </div>
        <div id="second" style="visibility: visible;">
          <li>
            <label>Oslo</label>
          </li>
          <li>
            <label>Bogota</label>
          </li>
          <li>
            <label>Bangkok</label>
          </li>
        </div>
        <div id="33">
          <li>
            <label>Washington</label>
          </li>
          <li>
            <label>Kabul</label>
          </li>
          <li>
            <label>Tirana</label>
          </li>
        </div>
        <div id="43">
          <li>
            <label>Algiers</label>
          </li>
          <li>
            <label>Andorra la Vella</label>
          </li>
          <li>
            <label>Luanda</label>
          </li>
      </div>
      </ul>

      <div class="pagination">
  <a href="#">&laquo;</a>
  <a onclick="myFunction()" href="#">1</a>
  <a onclick="myFunction2()" href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>
    <!--  <label for="psw"><b>Hemresa</b></label>
      <input type="text" placeholder="Sök stad" name="search" id="psw" required>
      <input type="submit" class="registerbtn" value="Sök">
    </div> -->
  </form>
  <?php

if (isset($_POST['search'])) {
  // sök
  require "2-search.php";

  // Visa div med resor som hittades
  if (count($results) > 0) {
    foreach ($results as $r) {
   
      echo "<div>";
      echo "<a href='boka.php?ticknr=". $r['TICKETNUMBER']."'>";
      echo $r['DESTINATION'];
      echo " - ";
      echo $r['DEPARTURE'];
      echo " - ";
      echo $r['TICKETNUMBER'];
      echo " - ";
      echo $r['REGDATE'];
      echo "</a>";
      echo "</div>";

      

    }
  } else { echo "Hittade inga tillgängliga resor"; }
}


?>
<script>
function myFunction() {
  document.getElementById("first").style.visibility = "hidden";
}
function myFunction2() {
  document.getElementById("second").style.visibility = "hidden";
}
</script>
<script src="main.js"></script>
</body>

</html>
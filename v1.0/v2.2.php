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
    
    <form action="v2.2.php" method="POST">
    <div class="container">
      <h1>Sök resa</h1>
      
      <input type="hidden" placeholder="Sök Stad" name="search" id="test"> 
     <!-- <button type="hidden" value="sök" name="ressearch">Sök</button> -->
      <ul>
        <div id="first">
          <li>
            <button type="submit" value="Stockholm" name="test1">Stockholm</buttton>
          </li>
          <li>
            <button type="submit" value="Helsingfors" name="test1">Helsingfors</button>
          </li>
          <li>
            <button type="submit" value="Köpenhamn" name="test1">Köpenhamn</button>
          </li>
        </div>
        <div id="second">
          <li>
            <button type="submit" value="Oslo" name="test1">Oslo</button>
          </li>
          <li>
            <button type="submit" value="Bogota" name="test1">Bogota</button>
          </li>
          <li>
            <button type="submit" value="Bangkok" name="test1">Bangkok</button>
          </li>
        </div>
        <div id="third">
          <li>
            <button type="submit" value="Washington" name="test1">Washington</button>
          </li>
          <li>
            <button type="submit" value="Kabul" name="test1">Kabul</button>
          </li>
          <li>
            <button type="submit" value="Tirana" name="test1">Tirana</button>
          </li>
        </div>
        <div id="forth">
          <li>
            <button type="submit" value="Algiers" name="test1">Algiers</button>
          </li>
          <li>
            <button type="submit" value="Andorra la Vella" name="test1">Andorra la Vella</button>
          </li>
          <li>
            <button type="submit" value="Luanda" name="test1">Luanda</button>
          </li>
      </div>
      </ul>

      <div class="pagination">
  
        <a onclick="myFunction()" href="#">1</a>
        <a onclick="myFunction2()" href="#">2</a>
        <a onclick="myFunction3()" href="#">3</a>
        <a onclick="myFunction4()" href="#">4</a>
  
      </div>
    <!--  <label for="psw"><b>Hemresa</b></label>
      <input type="text" placeholder="Sök stad" name="search" id="psw" required>
      <input type="submit" class="registerbtn" value="Sök">
    </div> -->
  </form>
  <?php

if (isset($_POST['test1'])) {
  // sök
  echo "<h1>HELLOOO</h1>";
  
  require "3-search.php";

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
  document.getElementById("first").style.visibility = "visible";
  document.getElementById("second").style.visibility = "hidden";
  document.getElementById("third").style.visibility = "hidden";
  document.getElementById("forth").style.visibility = "hidden";
}
function myFunction2() {
  document.getElementById("first").style.visibility = "hidden";
  document.getElementById("second").style.visibility = "visible";
  document.getElementById("third").style.visibility = "hidden";
  document.getElementById("forth").style.visibility = "hidden";
}

function myFunction3() {
  document.getElementById("first").style.visibility = "hidden";
  document.getElementById("second").style.visibility = "hidden";
  document.getElementById("third").style.visibility = "visible";
  document.getElementById("forth").style.visibility = "hidden";
}

function myFunction4() {
  document.getElementById("first").style.visibility = "hidden";
  document.getElementById("second").style.visibility = "hidden";
  document.getElementById("third").style.visibility = "hidden";
  document.getElementById("forth").style.visibility = "visible";
}
</script>
<script src="main.js"></script>
</body>

</html>
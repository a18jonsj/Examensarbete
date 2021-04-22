<?php
session_start();
if (!isset( $_GET['ticknr'])){
    header("location: v1.1.php");
}

?>
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
                    <a class="nav-link" href="#">Inrikes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="v2.2.php">Utvalda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="v1.1_login.html">Logga in</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="v1.1_register.html">Registrera</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="logout.php">Logga ut</a>
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
<form>
    <div class="container">
    <h1>Din biljett</h1>
      <hr>
      <label for="Personnummer"><b>Personnummer</b></label>
      <input type="text" value="<?php echo $_SESSION['ssn'] ?>" name="pnr" id="pnr">
      

      <label for="förnamn"><b>Förnamn</b></label>
      <input type="text" value=" <?php echo $_SESSION['namn'] ?>" name="Förnamn" id="Förnamn" required>

      <label for="Efternamn"><b>Efternamn</b></label>
      <input type="text" value=" <?php echo $_SESSION['efternamn'] ?>" name="Efternamn" id="Efternamn" required>

      <label for="email"><b>Email</b></label>
      <input type="text" value=" <?php echo $_SESSION['email'] ?>" name="email" id="email" required>

      <label for="email"><b>Biljetnummer</b></label>
      <input type="text" value="<?php echo $_GET['ticknr'] ?>" name="ticketnumber" id="ticketnumber" required>
      <input type="button" onclick="stopTimer()" class="registerbtn" value="Boka">
      
  
    
    </div>
  </form> 
  <script src="main.js"></script>
</body>
</html>
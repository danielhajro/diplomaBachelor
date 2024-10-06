
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Market</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
    <header class="header12">
        <nav class="navbar1">
            <a href="index.php"><img src="photo/pngwing.com (12).png" alt=""></a>
            <ul class="nav-menu1">
                <li class="nav-item1">
                    <a href="index.php" class="nav-linkk ">Kryefaqja</a>
                </li>
                <li class="nav-item1">
                    <a href="about.php" class="nav-linkk">Rreth Nesh</a>
                </li>
                <li class="nav-item1">
                    <a href="produkte.php" class="nav-linkk">Produkte</a>
                </li>
                <li class="nav-item1">
                    <a href="login.php" class="nav-linkk klikuar">Log In</a>
                </li>
                <li class="nav-item1">
                    <a href="adminlogin.php" class="nav-linkk  ">Admin</a>
                </li>
                
            </ul>
            <div class="hamburger1">
                <span class="bar1"></span>
                <span class="bar1"></span>
                <span class="bar1"></span>
            </div>
        </nav>
    </header>

    <div class="signup">
        <div class="kuti1">
            <h1>Pershendetje, Regjistohuni</h1> <br>    
            <form action="register.php" method="POST">
                    
                    <h4>Emri </h4>
                    <input type="text" name="emri" id="emri" required placeholder="Shkruani Emrin tuaj"> <br>
                    <h4>Mbiemri </h4>
                    <input type="text" name="mbiemri" id="mbiemri" required placeholder="Shkruani Mbiemrin tuaj"> <br>
                    <h4>Password:</h4>
                    <input type="password" name="password" id="password" required placeholder="Shkruani passwordin tuaj"><br>
                    <h4>Qyteti</h4><br>
                    <input type="text" name="qyteti" id="qyteti" required placeholder="Shkruani Qytetin Tuaj"><br>
                    <h4>Nr.Telefoni</h4><br>
                    <input type="text" name="numri" id="numri" required placeholder="Shkruani numrin tuaj"><br>
                    
                    
                    <button type="submit" name="submitreg" id="submit_log">Regjistrohu</button>
            
                </form>
                    <h4>Keni llogari? <a href="login.php">Kliko Ketu</a> </h4>
        </div>
       
        </div>
        


  





  













    <!-- FOOTER-->
<footer>
    <div class="mbarim">
            <div class="foot-con">
                <div class="foot-col">
                    <h4>General</h4>
                    <ul>
                    <li><a href="index.php">Kryefaqja</a></li>
                        <li><a href="produkte.php">Produkte</a></li>
                        <li><a href="about.php">Rreth Nesh</a></li>
                        

            
                    </ul>
                </div>
                <div class="foot-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><a href="https://mail.google.com/">Kontakto</a></li>
                        <li><a href="#">FAQ</a></li>
                        
                        
                       
                    </ul>
                </div>
                <div class="foot-col socially">
                    <h4>Follow Us</h4>
                    <ul>
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        
                        

                
                    </ul>
                </div>
            </div>
    </div>
</footer>

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
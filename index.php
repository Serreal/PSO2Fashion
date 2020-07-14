<?php
	include 'settings.php';

	echo "hello";	

	$sql = "SELECT * FROM main";
	$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PSO2 Fashion is an upcomming site where you will be able to share and browse various looks for your Phantasy Star Online 2 character.">
    <meta name="keywords" content="phantasy star online 2, pso2, fashion, catalogue, glamour">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js" nonce=""></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview');
    </script>
    <style>
        .card {
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="./PSO2FashionCSS.css">
    <link rel="fontloader" href="https://fonts.gstatic.com/">
    <title>PSO2 Fashion Site</title>
</head>

<body style="background-color:#122733">
<?php echo "hello" ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="">
            <img src="./ScuffedLogo.png" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropDown" aria-controls="navbarDropDown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
        <div class="collapse navbar-collapse" id="navbarDropDown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropDownGender" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">By Gender</a>
                    <div class="dropdown-menu" aria-labelledby="dropDownGender">
                        <a class="dropdown-item" href="">Male</a>
                        <a class="dropdown-item" href="">Female</a>
                        <a class="dropdown-item" href="">Unisex</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropDownRace" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">By Race</a>
                    <div class="dropdown-menu" aria-labelledby="dropDownRace">
                        <a class="dropdown-item" href="">Humans</a>
                        <a class="dropdown-item" href="">Newmans</a>
                        <a class="dropdown-item" href="">Cast</a>
                        <a class="dropdown-item" href="">Deuman</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropDownClass" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">By Class</a>
                    <div class="dropdown-menu" aria-labelledby="dropDownClass">
                        <a class="dropdown-item" href="">Hunter</a>
                        <a class="dropdown-item" href="">Ranger</a>
                        <a class="dropdown-item" href="">Force</a>
                        <a class="dropdown-item" href="">Fighter</a>
                        <a class="dropdown-item" href="">Gunner</a>
                        <a class="dropdown-item" href="">Techer</a>
                        <a class="dropdown-item" href="">Braver</a>
                        <a class="dropdown-item" href="">Bouncer</a>
                        <a class="dropdown-item" href="">Summoner</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Outfits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">About</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="jumbotron">
        <h1>The Phantasy Star Online 2 Fashion Site!</h1>
        <hr class="my-4">
        <p class="lead">Currently being worked on by Surreal and Karahu</p>
    </div>
    <div class="container">
        <div class="row" id="cosmetics">
<?php
	if($result -> num_rows > 0){
	 while($row = $result -> fetch_assoc()){
          echo '  <div class="col">';
          echo '      <div class="card mx-auto border-info">';
          echo '          <div class="row no-gutters">';
	  echo '	    <img src="' . $row["img"] .'" class="card-img">';
          echo '  	           <div class="card-img-overlay">';
          echo '                  <div class="card-body" style="bottom: 0;position: absolute;">';
          echo '                      <h5 class="card-title">'.$row["title"]. '</h5>';
          echo '                      <div class="row">';
          echo '                          <div class="col">'. $row["userName"].'</div>';
          echo '                      </div>';
          echo '                  </div>';
          echo '              </div>';
          echo '          </div>';
          echo '      </div>';
	  echo '	</div>';
	 }
	}
	mysqli_close($conn);
?>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="cosmetics2">
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mx-auto border-info">
                    <div class="row no-gutters">
                        <img src="./TestCharacter.png" class="card-img">
                        <div class="card-img-overlay">
                            <div class="card-body" style="bottom: 0;position: absolute;">
                                <h5 class="card-title">Gothic Loli</h5>
                                <div class="row">
                                    <div class="col">Bob from Discord</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="bottom: 0;text-align: center;position: relative;width: 100%;color: white;">
        <small>Copyright &copy;2020 PSO2Fashion, All rights reserved</small>
    </footer>
</body>

</html>

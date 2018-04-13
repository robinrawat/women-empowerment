<?php
SESSION_START();

?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script rel="jquery" type="text/javascript" src="myjs.js"></script>    
		<link rel="stylesheet" type="text/css" href="mycss.css">
	</head>
	<body>
        
        <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                    <div class="navbar-header">
                          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                          </button>
                        <a class="navbar-brand" href="#">Empowerment</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav">
                            <li ><a href="index3.php">Home</a></li>
                              <?php

                                    $con=mysqli_connect('localhost','id5388810_robin','abcdefgh','id5388810_wep');
                                    $c=$_SESSION['user'];
                                    $sql=("SELECT *   FROM login where email='".$c."';");
                                    $records=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($records);
//                                    echo '<span class="glyphicon glyphicon-user">';
                                     $un = $row['username'];
//                                    echo '</span>';
                                    
                              ?>
                                    
                                
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" ><span class="glyphicon glyphicon-user"></span>Welcome 
                                
                                <?php

                                    $con=mysqli_connect('localhost','id5388810_robin','abcdefgh','id5388810_wep');
                                    $c=$_SESSION['user'];
                                    $sql=("SELECT *   FROM login where email='".$c."';");
                                    $records=mysqli_query($con,$sql);
                                    $row=mysqli_fetch_assoc($records);
//                                    echo '<span class="glyphicon glyphicon-user">';
                                    echo $row['username'];
//                                    echo '</span>';
                                ?>
                                
                                </a></li>
                            <li><a href="unset.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
                          </ul>
                    </div>
              </div>
        </nav>
           
                <div class="page_content">
                    <h3>Constitutional Rights to Women:</h3>
                    <ul>
                        <li>The state shall not discriminate against any citizen of India on the ground of sex [Article 15(1)].
                        </li>
                        <li>The state is empowered to make any special provision for women. In other words, this provision enables the state to make affirmative discrimination in favour of women [Article 15(3)].
                        </li>
                        <li>No citizen shall be discriminated against or be ineligible for any employment or office under the state on the ground of sex [Article 16(2)].
                        </li>
                        <li>Traffic in human beings and forced labour are prohibited [Article 23(1)].
                        </li>
                        <li>The state to secure for men and women equally the right to an adequate means of livelihood [Article 39(a)].
                        </li>
                    </ul>
                    <h3>Legal Rights to Women:</h3>
                    <ul>
                        <li>Protection of Women from Domestic Violence Act (2005) is a comprehensive legislation to protect women in India from all forms of domestic violence. It also covers women who have been/are in a relationship with the abuser and are subjected to violence of any kind—physical, sexual, mental, verbal or emotional.
                        </li>
                        <li>Immoral Traffic (Prevention) Act (1956) is the premier legislation for prevention of trafficking for commercial sexual exploitation. In other words, it prevents trafficking in women and girls for the purpose of prostitution as an organised means of living.
                        </li>
                        <li>Indecent Representation of Women (Prohibition) Act (1986) prohibits indecent representation of women through advertisements or in publications, writings, paintings, figures or in any other manner.
                        </li>
                        <li>Commission of Sati (Prevention) Act (1987) provides for the more effective prevention of the commission of sati and its glorification on women.
                        </li>
                        <li>Dowry Prohibition Act (1961) prohibits the giving or taking of dowry at or before or any time after the marriage from women.
                        </li>
                    </ul>
                </div>
        
	</body>
</html>
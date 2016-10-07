<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="../css/commun.css" />
    	<link rel="stylesheet" href="../css/rehabilitation.css">
      <link href="https://fonts.googleapis.com/css?family=Cantarell|Vollkorn" rel="stylesheet">
    	<script src="js/prefixfree.min.js"></script>
		<title>Logements réhabilitation</title>
	</head>

	<body>
		<div id="bloc_page">
			<?php include("header_ref.php"); ?>
      <div id="transition"></div>

			<nav>
                <ul id="navigation">
                    <li id="ext"><a href="../index.php">Accueil</a></li>
                    <li id="ext"><a href="../team.php">La Team</a></li>
                    <li id="ext"><a href="../moyen.php">Nos moyens</a></li>
                    <li id="en-cours"><a href="../main_references.php">Nos références</a></li>
                    <li id="ext"><a href="../qualifications.php">L'ingénierie qualifiée</a></li>
                    <li id="ext"><a href="../projet.php">Projet en cours</a></li>
                    <li id="ext"><a href="../partenaires.php">Nos partenaires</a></li>
                    <li id="ext"><a href="../contact.php">Nous contacter</a></li>
                </ul>
			</nav>

			<div id="wrap">
      <div id="contenu_page">

				<aside id="bandereau">
					<img src="../images/EOLE_bandereau.png" alt="" />
				</aside>

				<div id="theme">
					<h1>Logements réhabilitation</h1>
				</div>

				<div class="container">
    				<div class="carousel">
       					<a href="rehabilitation/8_hussigny.php"><div class="item a" onmouseover="mouseOver('.a')" onmouseout="mouseOut('.a')"><span class="caption"> 8 Hussigny</span></div></a>
      					<a href="rehabilitation/72_toul.php"><div class="item b" onmouseover="mouseOver('.b')" onmouseout="mouseOut('.b')"><span class="caption">72 Toul</span></div></a>
      					<a href="rehabilitation/34_joinville.php"><div class="item c" onmouseover="mouseOver('.c')" onmouseout="mouseOut('.c')"><span class="caption">34 Joinville</span></div></a>
      					<a href="rehabilitation/68_verdun.php"><div class="item d" onmouseover="mouseOver('.d')" onmouseout="mouseOut('.d')"><span class="caption">68 Verdun</span></div></a>
      					<a href="rehabilitation/ftm_procheville.php"><div class="item e" onmouseover="mouseOver('.e')" onmouseout="mouseOut('.e')"><span class="caption">FTM Procheville</span></div></a>
      					<a href="rehabilitation/102_jarville.php"><div class="item f" onmouseover="mouseOver('.f')" onmouseout="mouseOut('.f')"><span class="caption">102 Jarville</span></div></a>
   					</div>
  				</div>
  				<div class="next">Suivant</div>
  				<div class="prev">Précédent</div>
 				<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  				<script src="références.js"></script>
  				<div class="bouton">
					<p>
    					<a href="../main_references.php">Retour</a>
  					</p>
				</div>

			</div>
      </div>
			<?php include("footer_ref.php"); ?>
		</div>

    <script type="text/javascript">
function mouseOver(arg)
{
var query = document.querySelector(arg+' .caption');
query.style.bottom = "0";
query.style.transitionDuration = "0.8s";
}
function mouseOut(arg)
{
document.querySelector(arg+' .caption').style.bottom = "-60px";
}
    </script>


	</body>
</html>
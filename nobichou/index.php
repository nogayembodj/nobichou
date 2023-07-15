<?php
require("config/commandes.php");
$Produits = afficher();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Site de commerce 2AN</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

         
    <style>
.anime {
display: block;
height: 40px;
width:  60px;
border-radius: 50%;
overflow: hidden;
box-shadow: 2px 4px 5px gold;
animation: shadow-anime infinite 1s;
animation-name: logo-anime;
animation-duration: 2s;
animation-iteration-count: infinite;
animation-direction: alternate;
animation-timing-function: ease-in-out;
margin-right: 150px;
}
.anime a{
  color: black;
}
span{
padding-left: 10px;
text-align: center;
line-height: 40px;
color: gold;
}
@keyframes logo-anime {
0%{
  box-shadow: 0px 0px 0px gold;
}
100%{
  box-shadow: 0px 0px 30px gold;
}
}
.titre{
  text-align: center;
  text-transform: capitalize; 
}
.marquee{
  background:rgba(238, 6, 207, 0.39);
color: rgb(255, 255, 255);
font-size: 3em;
text-transform: capitalize; 

}
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .menu {
            background-color: #f2f2f2;
            padding: 10px;
        }

        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .menu li {
            margin-right: 20px;
        }

        .menu li a {
            text-decoration: none;
            color: #333;
            position: relative;
            transition: color 0.3s;
        }

        .menu li a::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #007bff;
            transform: scaleX(0);
            transition: transform 0.3s;
        }

        .menu li a:hover {
            color: #007bff;
        }

        .menu li a:hover::before {
            transform: scaleX(1);
        }

        #scroll{
width: 40px; 
height: 40px;
display: block;
line-height: 40px;
text-align: center;
font-size: 25px; 
border: 1px solid gold;
border-radius:50%; 
color: gold; 
background-color: rgb(24, 24, 23);
box-shadow: 2px 4px 5px rgba(0,0,0,0.2); 
cursor: pointer;  
position: fixed;   
bottom: 25px;  
right: 40px;
} 
.cont img{
  width: 50px;
  height: 50px;
}

.coloborateur{
  display: flex;
  justify-content: space-between;
 
}
h1{
  text-align:center;
}
.coloborateur img{
  width: 50px;
  height: 50px;
  padding: 0;
  margin: 0;
}
    </style>

</head>

<body>
    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">About</h4>
                        <p class="text-muted">Add some information about the album below, the author,
                            or any other background context. Make it a few sentences long so f pick up some informative
                            tidbits. Then, link them off to some social networking sites or contact information.</p>
                    </div>
                    <div class="
                    col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Sign in</h4>
                        <ul class="list-unstyled">
                            <li><a href="admin/index.php" class="text-white">connexion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
                    
                    <nav class="menu">
        <ul>
        <div class="anime">
       
       <span>2A</span>N
       </div> 
            <li><a href="#">Accueil</a></li>    
            <li><a href="#">Produits</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
                   
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>


    </nav>
    <h1 class="titre"  ><span>Q</span>ue Des Sacs de Qualité</h1> 
          <marquee class="marquee"><h1>2AN vous souhaite la Bienvenue !</h1></marquee>
          
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php foreach ($Produits as $produits) : ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <title><?= $produits->nom ?></title>
                                <img src="<?= $produits->image ?>">

                                <div class="card-body">
                                    <p class="card-text"><?= substr($produits->description, 0, 200) ?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Acheter
                                            </button>
                                        </div>
                                        <small class="text-muted"><?= $produits->prix ?>FCFA</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>
    <div id="scroll" onclick="scrollUp()">
        ^ 
    </div>
    <h1><SPan>N</SPan>os fidéle coloborateur:</h1>
      <div class="coloborateur">
      <div><img src="wave.webp" alt=""></div>
      <div><img src="orange money.jpg" alt=""></div>
      <div><img src="ECOBANK.jpg" alt=""></div>
      <div><img src="wizzal.png" alt=""></div>
      <div><img src="free-money.png" alt=""></div>
      <div><img src="one touch.jpg" alt=""></div>
</div> 
    <script>
        function scrollUp(){
    window.scrollTo(0,0)
}                      
    </script>
</body> 
</html>  

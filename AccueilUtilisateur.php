<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bomohgfotstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
<body>
<div class="container" style="padding-bottom: 40px;text-align: center;padding-top: 50px;">
<h1 id ="mi" style="color: gray">Bienvenue dans notre agence EasyLife : Portail Utilisateurs</h1>
                <img src="Capture du 2018-01-06 13-11-45.png" alt="" >
                
 <ul class="row" >
        <li class="liste col-lg-4"><a href="Accueil.php">Accueil</a></li>
        <li class="liste col-lg-4"><a href="formUser.php">Nouveau Utilisateur</a></li>

<div  id="drop" class="col-lg-2">
    <li data-toggle="dropdown"> <a href="#">Mon Compte</a>
        <p></p>

        <ul class="dropdown-menu">
            <li class="dropdown-item">
                <a href="#">Lien sous menu 2</a>
            </li>
            <li class="dropdown-item">
                <a href="#">Lien sous menu 2</a>
            </li>
            <li class="dropdown-item">
                <a href="#">Lien sous menu 2</a>
            </li>

        </ul>
    </li>

</div>    </ul>
    
    <div class="" style="padding-bottom:50px">
               <!-- <form class="form-group col-12 col-sm-4" action="#" method="post" style="border:2px solid grey;width:580px;height:200px">
                      <i class="fa fa-search" aria-hidden="true"></i>  <h3>Rechercher une catégorie d'article</h3>
            <select class="form-group custom-select form-control" style="margin-left: 4px;width: 510px; height: 35px;border-radius:0px" name="Nom" id="Nservice" required="required">
                            <option value="" >Le Catégorie</option>
                        <?php
                        /*include 'connexion.php';
                        $ligne0 = $bdd->query('SELECT Nom, IdType FROM TypeBien');
                        while ($donnee0 = $ligne0->fetch())
                        {
                        ?>
                            <option value="<?php echo $donnee0['IdType'];?>"> <?php echo $donnee0['Nom'];?> </option>
                        <?php
                        }*/
                        ?>
                        </select>
                        <br/>
                        <input name="RechBien" id="RechBien" class="btn btn-dark" type="submit" value="Rechercher" style="padding-bottom:5px">
                    </form>-->
                    <div>
                    <form class="form-inline row">
                    <label for="" class="col-lg-2">Catégories :</label>
            <input type="password" class="form-control col-lg-6" id="form" name="pwd"  required='required'><br/><br/>
            <input type="submit" value="Connexion" name="Connexion" class="btn btn-primary col-lg-2">

            </form>

            </div>
           <ul id="list" class="row" name="list">
       
        </ul>
        <ul id="affichage"></ul>
                    <div class="row ">
                    <div class="card">
  <div class="card-block">
    <h4 class="card-title">MOBILES</h4>
    <ul class="card-text lis">
    <li class="mol">
 <a href="#"><img src="">MODE FEMME <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">MODE HOMME <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">BEAUTÉ, HYGIÉNE & SANTÉ <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">BÉBÉ ENFANTS & JOUETS <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">TÉLÉPHONIE ET TABLETTES <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">TÉLÉPHONIE ET TABLETTES <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">INFORMATIQUES <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">ÉLECTROMÉNAGERS <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">TV,PHOTO & AUDIO <i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol" >
 <a href="#"><img src="">MAISON<i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">SPORT ET LOISIR<i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
                                <li class="mol">
 <a href="#"><img src="">AUTRES CATÉGORIES<i class="fa fa-angle-right fa-lg" aria-hidden="false"></i></a>
 <div></div>
                                </li>
    </ul>
   
  </div>
</div>
                    <div class="card">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text"></p>
   
  </div>
</div>
<div class="card">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text"></p>
   
  </div>
</div>
<div class="card">
  <img class="card-img-top" src="img_avatar1.png" alt="Card image cap">
  <div class="card-block">
    <h4 class="card-title">Card title</h4>
    <p class="card-text"></p>
   
  </div>

</div>
                    </div>
                <div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:20px;">
 
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="1" style="margin-top:-40px"></li>
                        <li data-target="#demo" data-slide-to="2" style="margin-top:-40px"></li>
                    </ul>
    
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        </div>
                        <div class="carousel-item active">
                            <img src="01.jpg" class=img-responsive alt="Los Angeles">
                        <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>
   
                        </div>
                        <div class="carousel-item">
                            <img src="02.jpg" class=img-responsive alt="Chicago">
                       <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>
   
                        </div>
                        <div class="carousel-item">
                            <img src="03.jpg" class=img-responsive alt="New York">
                        
                        <footer id="fin"><h3 style="float: left;margin-top:1px;">Simplifiez votre vie avec EasyLife</h3><a href="connect.php"><input type="button" name="connect" value="Connectez Vous"></a></footer>
   
                        </div>
                    </div>
    
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
     
                </div>
   
                
                    </div>
    </div>
</body>

    <script>
   $("#mi").hide();
   $(document).ready(function() {
  // Action qui est exécutée quand le formulaire est envoyé ( #connexion est l'ID du formulaire)

        $.ajax({
      url: 'Categorie.php', // On récupère l'action (ici action.php)
      type: 'post', // On récupère la méthode (post)
     // data: '', // On sérialise les données = Envoi des valeurs du formulaire
      dataType:'JSON',
      success: function(data){
        console.log(data);
        for (var i=0 ;  i<data.length ; i++)
    {
        var NomCategorie=data[i];
       $("#list").append('<li class="lir" id="' + data[i] +'"  name="'+NomCategorie+'"><a href="SousCategorie.php?val="' +NomCategorie+ '">' + data[i] + '</a></li>');
       var dataString = 'NomCategorie=' + NomCategorie;
    }
      $(this).on('click', function() {
        $.ajax({
      url: $(this).attr('href'), // On récupère l'action (ici action.php)
      type: 'post', // On récupère la méthode (post)
       data: dataString, // On sérialise les données = Envoi des valeurs du formulaire
      dataType:'JSON',
      success: function(donnee){
        console.log(donnee);
        jQuery.each($('#list li'),
        function() {
           // $(this).on('click', function() {
                    for (var j = 0; j < donnee.length; j++) {
                    //var r = $(this).text()
                    $('#affichage').append("<li>" + donnee[j] + "</li>");
                }
            });
          //  });


        },
        })
    });
      },
    });

          /*   jQuery.each($('#list li'),
        function() {

            $(this).on('click',function(){
                    $('#affichage').html("");
                //  for (var i = 1; i <= 6; i++) {*/
       
   });

    </script>
    <style>
    
    .row{
        border:1px solid white;
        padding:10px;
    }
#fin {
                width: 776px;
                height: 40px;
                background: rgb(73, 70, 70);
                opacity: 0.6;
                -ms-filter: "alpha(opacity=10)";
                margin-top: -40px;
                margin-left: 206px;
                         }
.fa-angle-right{
    float:right;
    margin-top:3px;
}
#list li {
margin-left:90px;
}
.lis{
line-height:20px;
padding-right:10px;
}
.liste {
        margin-left: 15px;
        border: 2px solid grey;
        width: 300px;
        text-align: center;
        padding-top: 20px;
        height: 60px;
        border-top-left-radius: 10px;
        border-bottom-right-radius: 10px;
        margin-top: 10px;
    }
    .liste:hover {
        background: grey;
        border: 2px solid pink;
    }
    a {
        text-decoration: none;
        color: black;
    }
    .card {
        width:200px;
        height:300px;
        margin-left:20px;
        text-align:left;
        font-size:xx-small;
    }
    ul {
        list-style-type:none;
    }
    .container{
        color:black;
        background:#FAFAD2;
        box-shadow:1px 1px 1px 1px inset;
    }
    </style>
</html>
<?php
 include 'SpaceName.php';
$yp = new location\dao\Biens();
$ligne1 = $yp->listeBYtype();
 if(isset($_POST['RechBien']))
 {
     extract($_POST);
     $yp->Nom = $Nom;


     ?>
                     <div class="bg-info" style="padding-bottom:50px">

     <h4>Les articles liés :</h4>
                                <table border="2" style="width: 100%; margin-bottom: 10px;">
 <tr  style="background: grey;height: 35px">
 <th>Type du bien</th>

 <th>Nom Bien</th>
            <th>Addresse</th>
            <th>Price</th>

            <th>Commission</th>
 </tr>
 <?php   //$donn = $Biens->listeBien();
                                
 while ($row = $ligne1->fetch())            //Affichage de manière des champs du table service dans une tabe html
 { if($row['IdType']==$Nom) {         ?>         <tr>         <th><?php echo $row['Nom']?></th>
         <th><?php echo $row['NomBien']?></th>
                <th><?php echo $row['Addresse']?></th>
                <th><?php echo $row['Price']?></th>
                <th><?php echo $row['Commission']?></th>         </tr>         <?php         $verif=true;     }     else     {         $verif=false;     } }


                                ?>
                                </table>
                                </div>
                                <?php
 }
 ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bomohgfotstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
  </head>
  <style>
      footer{
          width:500px;
          height:30px;
          margin-left:150px;
          background: ;
          padding-top:20px;
          

      }
      a {
        color:#2F4F4F;
      }
     footer a {
         font-size: xx-small;
      }
      .mike {
          width:500px;
          background:url('background.png');
          margin-top:-158px;
          margin-left:150px;
border:2px solid grey;
padding:10px;
box-shadow:2px 2px 2px #C0C0C0 inset;      }
    .vat {
          margin-top:-10px
      }
      .va {
          margin-top:-30px
      }
      .btn {
         margin-right:5px;
          float:right;
          background:#2F4F4F;
          color:#C1CDCD;
      }

      #control{
width:400px;
margin-left: 60px;
border-radius:0px;
      }
      #form{
width:400px;
margin-left: 60px;
border-radius:0px;
      }
    .mark {
          float:left;
          margin-top:-38px;
          margin-left:28px;
          width:35px;
          height:38px;
          background:#C1CDCD;
          padding-left:12px;
          padding-top:8px;
          border-top-left-radius:2px;
          border-bottom-left-radius:2px;
      }
  .mark i {
          color:#2F4F4F;
      }
      #mie span{
        float:left;
          margin-top:32px;
          margin-left:;
          width:35px;
          height:38px;
          background:#C1CDCD;
          padding-left:12px;
          padding-top:8px;
          border-top-left-radius:2px;
          border-bottom-left-radius:2px;
      
      }
      .loader {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 2s linear infinite;
        visibility:hidden;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
  </style>
  <body>
<div class="container " id="mina">
  <img src="Capture du 2018-01-06 13-11-45.png" alt="" style="margin-left:220px;margin-top:60px">
  <img src="pont.png" alt="" style="margin-left:145px;margin-top:-170px">
  <form class="form mike" action="connecte.php" method="post" id="con" >
    <fieldset >
        <legend>EasyConnexion</legend>
        <div class="alert alert-danger" id="ni">
        <div class="loader"></div> 
<strong>Danger!</strong>Remplir correctement   <ul></ul>
</div>
        <label for="">Login :</label>
        <input type="text" class="form-control log" id="control" name="Login" val-champ="Login" >           <span> <i class="fa fa-user fa-dark" aria-hidden="true"></i></span>
<br/>
        <h6 class="vat" ></h6>
        <label for="">Mot de passe :</label>
        <input type="password" class="form-control" id="form" name="Password" val-champ="Password" ><span>   <i class="fa fa-lock" aria-hidden="true"></i>
</span><br/><br/>
        <h6 class="va" ></h6>
        <small><a href="#" id="pwd">Mot de passe oubliée?</a></small><br/><br/>
     <a href="#" style="float:right;margin-top:8px;text-decoration:underline;" id="tik"> S'inscrire </a>
     <input type="submit" value="Connexion" name="Connexion" id="Connexion" />

    </fieldset>
</form>
  <!--<form class="form mike" action="connecte.php" method="post" id="con" >
    <fieldset >
        <legend>EasyConnexion</legend>
        <div class="alert alert-danger row" id="ni">
        <div class="loader"></div>
    
        <strong>Danger!</strong>Remplir correctement   <ul></ul>
      </div>
              
                 <small><a href="#" id="li">J'ai déjà un compte</a></small> <br/><br/>
                  <label for="">Prenom de l'utilisateur :</label>
                  <input type="text" id="Prenom" class="form-control" name="Prenom" style="" value=""><br/>
                  <label for="">Nom de l'utilisateur :</label>
                  <input type="text" id="Nom" class="form-control" name="Nom" style="" value=""><br/>
                  <label for="">Login :</label>
                  <input type="text" id="Login" class="form-control log" name="Login" style="" val-champ="Login"  value=""><br/>
                  <label for="">Mot de passe :</label>
                  <span>   <i class="fa fa-lock" aria-hidden="true"></i>
      </span> <input type="password" id="Password" class="form-control" name="Password" style=""  ><br/><br/>
      <input type="submit" value="Enregistrer" name="Enregistrer" id="Enregistrer" />
            </fieldset>
      
          </form>-->
          
      </div>
</div>
</body>
</html>
<script>
$(document).ready(function() {

 


  // Action qui est exécutée quand le formulaire est envoyé ( #connexion est l'ID du formulaire)
  $('.mike').on('submit', function(e) {
    e.preventDefault(); // On empêche de soumettre le formulaire
 
    // L'objet jQuery du formulaire
    var formData = $(this).serialize();   // retourne une chaîne au format champ1=valeur1&champ2=valeur2..
    console.log(formData);


    // Envoi de la requête HTTP en mode asynchrone
    $.ajax({
      url: $(this).attr('action'), // On récupère l'action (ici action.php)
      type: $(this).attr('method'), // On récupère la méthode (post)
      data: formData, // On sérialise les données = Envoi des valeurs du formulaire
      dataType:'json', // JSON
        success: function(json){
      //pour debuguer au cas ou...
      // utilise la console de ton navigateur
      // et regarde ce que t'affiche l'instruction
      
                   if (json.valid ==1) {
        var myVar = data.myVar;
               console.log(json);
               
                   }else{
                      // $('.alert').html(reponse);
                   }
                },
      error: function (request, status, error) {
                   alert(request);
               }
            });
              return false;
        }
    });
    $(".loader").ajaxStart(function(){ // Nous ciblons l'élément #loading qui est caché
        $(this).show(); // Nous l'affichons quand la requête AJAX démarre
    });

});
});

/*$(function() {

$('#con').submit(function(event) {

    event.preventDefault();    // il faut empêcher le comportement par défaut du bouton sinon la page fera un postback

    enregistrement();            

});

});



function enregistrement() {

// validation côté client

var Login = $('#Login').val();
var Password = $('#Password').val();
var Prenom = $('#Prenom').val();
var Nom = $('#Nom').val();


    var formData = $("#con").serialize();   // retourne une chaîne au format champ1=valeur1&champ2=valeur2..
    console.log(formData);


    var jqxhr = $.ajax({

        type: 'post',

        url: 'ajoutuser.php',

        dataType: "json",

        contentType: "application/x-www-form-urlencoded; charset=UTF-8",

        data: formData

    })
 

    .done(function (response, textStatus, jqXHR) {

        // Appel réussi : on réagit à la valeur de retour du code serveur

        if (response === true) {

            $("#con").html("");   // on efface le formulaire

           // $("#con").html(");
            console.log(response);
        }

        else {

            $("#con:input").attr("disabled", true);   // on désactive le formulaire

            $("#con").html("Un problème empêche l'enregistrement de votre compte.");

        }

    })

    .fail(function (jqXHR, textStatus, errorThrown) {
//console.log(jqXHR, textStatus, errorThrown);
        // Réagit si le code serveur n'a pas pu être appelé par AJAX ou s'il a planté

        $("#con:input").attr("disabled", true);   // on désactive le formulaire

        $(".alert").html("Un problème empêche l'enregistrement de votre compte.");

    })

}
/* $(function() {

$('#con').submit(function(event) {

    event.preventDefault();    // il faut empêcher le comportement par défaut du bouton sinon la page fera un postback

    enregistrement();            

});

});



function enregistrement() {

// validation côté client

var Login = $('#Login').val();
var Password = $('#Password').val();
var Prenom = $('#Prenom').val();
var Nom = $('#Nom').val();


    var formData = $("#con").serialize();   // retourne une chaîne au format champ1=valeur1&champ2=valeur2..
    console.log(formData);


    var jqxhr = $.ajax({

        type: 'post',

        url: 'ajoutuser.php',

        dataType: "json",

        contentType: "application/x-www-form-urlencoded; charset=UTF-8",

        data: formData

    })
 

    .done(function (response, textStatus, jqXHR) {

        // Appel réussi : on réagit à la valeur de retour du code serveur

        if (response === true) {

            $("#con").html("");   // on efface le formulaire

            $(".alert").html("Votre compte a été enregistré.");
            console.log(response);
        }

        else {

            $("#con:input").attr("disabled", true);   // on désactive le formulaire

            $(".alert").html("Un problème empêche l'enregistrement de votre compte.");

        }

    })

    .fail(function (jqXHR, textStatus, errorThrown) {
//console.log(jqXHR, textStatus, errorThrown);
        // Réagit si le code serveur n'a pas pu être appelé par AJAX ou s'il a planté

        $("#con:input").attr("disabled", true);   // on désactive le formulaire

        $(".alert").html("Un problème empêche l'enregistrement de votre compte.");

    })

}*/


</script>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
  <title>Exercice n°1</title>
</head>
<body>

  <!--Menu-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">ExoPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#thenavbar" aria-controls="thenavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="thenavbar">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Accueil</a>
        <a class="nav-item nav-link" href="#">L'enseignement</a>
        <a class="nav-item nav-link" href="#">Nos succès</a>
      </div>
    </div>
  </nav>

  <!--Carrousel-->
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/design.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">
              <?php
              $firstname = 'Robin'; // initialisation d'une variable
              $lastname = 'Halberda';
              $age = 19;
              echo 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.'ans.'; // affichage de la valeur
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/parabole.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">
              <?php
              $result = 3+4; // initialisation d'une variable
              $result2 = 5*20;
              $result3 = 45/5;
              echo 'Varibale 1 = '.$result.', variable 2 = '.$result2.' et la varible 3 = '.$result3; // affichage de la valeure
              ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/library.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="row">
      <div class="col"><p>© Tous droits réservés - RH compagnie - 2018</p></div>
      <div class="col"><a href="#">Mentions légales</a></div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

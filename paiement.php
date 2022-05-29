<?php  session_start(); ?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Checkout example for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="paiement.css" rel="stylesheet">
</head>

<body>
  <div id="wrap">
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/omnes.jfif" alt="" width="82" height="82">
        <h2>Paiement</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Votre panier</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Produit</h6>

              </div>
              <span class="text-muted">25$</span>
            </li>


            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong>25$</strong>
            </li>
          </ul>
          <a href="http://localhost/testpaiement/paiementvalide.php" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">payer</a>
        </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Adresse de Paiement</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="" value="" required>
                <div class="invalid-feedback">
                  nom non valide
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="prenom">prenom</label>
                <input type="text" class="form-control" id="prenom" placeholder="" value="" required>
                <div class="invalid-feedback">
                  prenom no valide
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                entrer un email valide
              </div>
            </div>

            <div class="mb-3">
              <label for="addresse">Addresse</label>
              <input type="text" class="form-control" id="addresse" placeholder="rue de ..." required>
              <div class="invalid-feedback">
                entrer l'adresse de livraison
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="pays">Pays</label>
                <select class="custom-select d-block w-100" id="pays" required>
                  <option value="">Choisir...</option>
                  <option>France</option>
                </select>
                <div class="invalid-feedback">
                  mettre un pays valide
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="region">region</label>
                <select class="custom-select d-block w-100" id="region" required>
                  <option value="">Choisir...</option>
                  <option>Ile de france</option>
                </select>
                <div class="invalid-feedback">
                  mettre une region valide
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  code postal requis
                </div>
              </div>
            </div>

            <h4 class="mb-3">Payment</h4>


            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <div class="invalid-feedback">
                  Nom requis
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Numero credit card requis
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Date d'expiration requis
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Code de securite requis
                </div>
              </div>
            </div>
            <hr class="mb-4"><hr class="mb-4"><hr class="mb-4">

          </form>
        </div>
      </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
      window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </div>
</body>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Inscription</title>
    <meta charset="uft-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="design/style.css">
</head>

<body>
    <?php include 'include/menu_navigation_principal.php'; ?>
    <?php include 'include/menu_navigation_moncompte.php'; ?>
    <?php include 'include/database.php' ?>
    <?php include 'include/menu_nav.php'; ?>
    <form method="post">
        <table>
            <p>
            <h1>Clients</h1>
            </p>
            <tr>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" id="nom" placeholder="" value="" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" id="prenom" placeholder="" value="" required>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="col-md-6 mb-3">
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
            </tr>

            <tr>
                <div class="col-md-6 mb-3">
                    <label for="born">Naissance</label>
                    <input type="date" class="form-control" id="born" placeholder="you@example.com">
                </div>
            </tr>

            <tr>
                <div class="row">

                    <div class="col-md-3 mb-3">
                        <label for="num_carte">Credit card number</label>
                        <input type="number" class="form-control" id="num_carte" placeholder="" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="exp_carte">Expiration</label>
                        <input type="month" class="form-control" id="exp_carte" placeholder="" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="cvv_carte">CVV</label>
                        <input type="number" class="form-control" id="cvv_carte" placeholder="" required>

                    </div>
                </div>
            </tr>
            <tr>
                <div class="col-md-6 mb-3">
                    <label for="mp">Mot de passe</label>
                    <input type="password" class="form-control" id="mp" placeholder="">
                </div>
            </tr>           
            <tr>
                <div class="col-md-6 mb-3">
                    <label for="cmp">Confirmation Mot de passe</label>
                    <input type="password" class="form-control" id="cmp" placeholder="">
                </div>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="formsend" id="formsend" value="Soumettre">
                </td>
            </tr>
        </table>
    </form>

    <form method="post">
        <table>
            <h1>
                Administrateur
            </h1>

            <tr>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <label for="anom">Nom</label>
                        <input type="text" class="form-control" id="anom" placeholder="" value="" required>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="aprenom">Prenom</label>
                        <input type="text" class="form-control" id="aprenom" placeholder="" value="" required>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="col-md-6 mb-3">
                    <label for="aemail">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="aemail" placeholder="you@example.com">
                </div>
            </tr>

            <tr>
                <div class="col-md-6 mb-3">
                    <label for="amp">Mot de passe</label>
                    <input type="password" class="form-control" id="amp" placeholder="">
                </div>
            </tr>           
            <tr>
                <div class="col-md-6 mb-3">
                    <label for="acmp">Confirmation Mot de passe</label>
                    <input type="password" class="form-control" id="acmp" placeholder="">
                </div>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="aformsend" id="aformsend" value="Soumettre">
                </td>
            </tr>
        </table>
    </form>
    <?php include 'include/inscription.php' ?>
    <?php include 'include/ainscription.php' ?>
    <br><br>
    <?php include 'include/footer.php'; ?>

</body>
</html>
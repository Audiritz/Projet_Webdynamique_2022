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
   <!--  <?php include 'include/menu_navigation_principal.php'; ?>
    <?php include 'include/menu_navigation_moncompte.php'; ?> -->
    <?php include 'include/database.php' ?>
    <?php include 'include/menu_nav.php'; ?><br><br><br><br><br><br><br>

    <form method="post">
        <table>
            <p>
            <h1>Clients</h1>
            </p>
            <tr>
                <td>Nom:</td>
                <td><input type="text" step="0.01" name="nom" id="nom"></td>
                <td>Prénom:</td>
                <td><input type="text" step="0.01" name="prenom" id="prenom"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" step="0.01" name="email" id="email"></td>
            </tr>

            <tr>
                <td>Naissance:</td>
                <td><input type="date" step="0.01" name="born" id="born"></td>
            </tr>

            <tr>
                <td>Numéro de carte:</td>
                <td><input type="number" step="0.01" name="num_carte" id="num_carte"></td>
                <td>Date d'expiration:</td>
                <td><input type="month" step="0.01" name="exp_carte" id="exp_carte"></td>
                <td>CVV:</td>
                <td><input type="number" step="0.01" name="cvv_carte" id="cvv_carte"></td>
            </tr>
            <tr>
                <td>Mot de passe:</td>
                <td><input type="password" step="0.01" name="mp" id="mp"></td>
            </tr>
            <tr>
                <td>Confirmation mot de passe:</td>
                <td><input type="password" step="0.01" name="cmp" id="cmp"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="formsend" id="formsend" value="Soumettre">
                </td>
            </tr>
        </table>
    </form>

    <form method="post">
        <table><br><br><br><br><br>
            <h1>
                Administrateur
            </h1>
            <tr>
                <td>Nom:</td>
                <td><input type="text" step="0.01" name="anom" id="anom"></td>
            </tr>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" step="0.01" name="aprenom" id="aprenom"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" step="0.01" name="aemail" id="aemail"></td>
            </tr>

            <tr>
                <td>Mot de passe:</td>
                <td><input type="password" step="0.01" name="amp" id="amp"></td>
            </tr>

            <tr>
                <td>Confirmation mot de passe:</td>
                <td><input type="password" step="0.01" name="acmp" id="acmp"></td>
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
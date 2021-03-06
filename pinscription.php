<?php  session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <meta charset="uft-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="design/style.css">
</head>
<body>
	Inscription
	<?php include 'include/menu_navigation_principal.php';?>
	<?php include 'include/menu_navigation_moncompte.php';?>
    <?php include 'include/database.php'?>
    <?php include 'include/menu_nav.php';?>
    <form method="post">
        <table>
            <tr>
                <td>Pseudo:</td>
                <td><input type="text" step="0.01" name="pseudo" id="pseudo"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><input type="text" step="0.01" name="email" id="email"></td>
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
                <td>Statut:</td>
                <td>
                    <input type="radio" name="statut" id="statut" value="coach">Coach <br>
                    <input type="radio" name="statut" id="statut"  value="admin">Administrateur <br>
                    <input type="radio" name="statut" id="statut"  value="client">Client <br>
                    
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="formsend" id="formsend" value="Soumettre">
                </td>
            </tr>
        </table>
    </form>
    <?php include 'include/inscription.php'?>
    <?php include 'include/footer.php'; ?>
</body>
</html>
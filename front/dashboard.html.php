<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Super StartUp - Dashboard</title>

        <!-- Material bootstrap -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

        <!-- Feuille de style -->
        <link rel="stylesheet" type="text/css" href="CSS/style.css"/>
    </head>

    <body>
        <?php include ('menu.html.php'); ?>
        <h1>Dashboard Super StartUp</h1>

        <table>
            <tbody>
                <tr>
                    <th>Date</th>
                    <th>Prénom & nom</th>
                    <th>Entreprise</th>
                    <th>Type d'action</th>
                    <th>Provenance du contact</th>
                    <th>Echéance de la prochaine action</th>
                    <th>Commentaires</th>
                    <th>Pièce jointe</th>
                </tr>
                <tr>
                    <td>05/05/2019</td>
                    <td>Larry Page</td>
                    <td>Google</td>
                    <td>1er contact </td>
                    <td>Apport d'affaires</td>
                    <td>A faire</td>
                    <td>/</td>
                    <td>/</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
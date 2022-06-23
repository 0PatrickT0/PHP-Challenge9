<html>

<head>
    <title>Page2</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $user_lastname = $_POST['user_lastname'];
        $user_surname = $_POST['user_surname'];
        $user_mail = $_POST['user_mail'];
        $user_phone = $_POST['user_phone'];
        $user_subject = $_POST['user_subject'];
        $user_message = $_POST['user_message'];
        if ($user_lastname == "" || $user_surname == "" || $user_mail == "" || $user_phone == "" || $user_subject == "" || $user_message == "") {
            echo "Le formulaire n'a pas été envoyé";
            echo "<br>";
            echo "<br>";
            echo "Les champs ci-dessous n'ont pas été renseignés:";
            echo "<br>";
            echo "<br>";
            if ($user_lastname == "") {
                echo "- Nom";
                echo "<br>";
            }
            if ($user_surname == "") {
                echo "- Prénom";
                echo "<br>";
            }
            if ($user_mail == "") {
                echo "- Email";
                echo "<br>";
            } elseif (filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
                echo "";
            } else {
                echo "- Email (format incorrect)";
            }
            if ($user_phone == "") {
                echo "- Téléphone";
                echo "<br>";
            }
            if ($user_subject == "") {
                echo "- Objet";
                echo "<br>";
            }
            if ($user_message == "") {
                echo "- Message";
                echo "<br>";
            }
        }
            else {
            echo "Merci $user_surname $user_lastname de nous avoir contacté à propos de $user_subject.";
            echo "<br>";
            echo "<br>";
            echo "Un de nos conseiller vous contactera soit à l'adresse $user_mail ou par téléphone au $user_phone dans les plus brefs délais pour traiter votre demande :";
            echo "<br>";
            echo "<br>";
            echo "$user_message";
            }
    }
    ?>
</body>

</html>
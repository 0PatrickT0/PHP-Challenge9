<html>

<head>
    <title>Page1</title>
    <meta charset="UTF-8">
    <style>
        form {
            margin: 0 auto;
            width: 400px;
            padding: 1em;
            border: 1px solid #CCC;
            border-radius: 1em;
        }

        form div+div {
            margin-top: 1em;
        }

        label {
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input,
        textarea {
            font: 1em sans-serif;
            width: 300px;
            box-sizing: border-box;
            border: 1px solid #999;
        }

        input:focus,
        textarea:focus {
            border-color: #000;
        }

        textarea {
            vertical-align: top;
            height: 5em;
        }

        .button {
            padding-left: 90px;
        }

        button {
            margin-left: .5em;
        }
    </style>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="user_lastname" required>
        </div>
        <div>
            <label for="surname">Prenom :</label>
            <input type="text" id="surname" name="user_surname" required>
        </div>
        <div>
            <label for="mail">E-mail:</label>
            <input type="email" id="mail" name="user_mail" required>
        </div>
        <div>
            <label for="phone">Téléphone:</label>
            <input type="phone" id="phone" name="user_phone" required>
        </div>
        <div>
            <label for="subject">Objet:</label>
            <select id="subject" name="user_subject" required>
                <option value="Subject 1">Objet 1</option>
                <option value="Subject 2">Objet 2</option>
                <option value="Subject 3">Objet 3</option>
                <option value="Subject 4">Objet 4</option>
                <option value="Subject 5">Objet 5</option>
            </select>
        </div>
        <div>
            <label for="msg">Message :</label>
            <textarea id="msg" name="user_message" required></textarea>
        </div>
        <div class="button">
            <button type="submit" name="submit">Envoyer le message</button>
        </div>
    </form>
</body>

</html>
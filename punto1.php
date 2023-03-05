<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Compiladores PHP</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="" />
</head>

<body>
    <input type="text" name="email" id="email" placeholder="Ingrese su email" required />
    <button onclick='probarValor()'>Validar E-mail</button>
    <script>
        <?php
        /*Validar_email valida un email con el patron especificado
          @param email string
          @return true si el email es valido
          */
        function validar_email($email)
        {
            $patron = '/^[a-z0-9]+([._-][a-z0-9]+)*@[a-z0-9]+([_-][a-z0-9]+)*(\.[a-z0-9]+([_-][a-z0-9]+)*){1}$/i';
            return preg_match($patron, $email);
        }

        /*Valida correo electrónico:
          @param email string
          @return un mensaje de éxito si el correo es válido
          @return un mensaje de invalido si el correo es no es válido
          */
        function validar($email)
        {
            if (validar_email($email)) {
                return "La dirección de correo electrónico es válida.";
            } else {
                return "La dirección de correo electrónico no es válida.";
            }
        }
        ?>

        function probarValor() {
            var emailInput = document.getElementById("email");
            alert(validar(emailInput));
        }
    </script>
    <script src="punto1.php"></script>
</body>

</html>
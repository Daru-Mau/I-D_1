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
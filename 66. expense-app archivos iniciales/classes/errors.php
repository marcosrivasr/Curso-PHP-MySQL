<?php

class Errors{
    //ERROR|SUCCESS
    //Controller
    //method
    //operation
    
    //const ERROR_ADMIN_NEWCATEGORY_EXISTS = "El nombre de la categoría ya existe, intenta otra";
    const ERROR_ADMIN_NEWCATEGORY_EXISTS        = "1f8f0ae8963b16403c3ec9ebb851f156";
    const ERROR_EXPENSES_DELETE                 = "8f48a0845b4f8704cb7e8b00d4981233";
    const ERROR_EXPENSES_NEWEXPENSE             = "8f48a0845b4f8704cb7e8b00d4981233";
    const ERROR_EXPENSES_NEWEXPENSE_EMPTY       = "a5bcd7089d83f45e17e989fbc86003ed";
    const ERROR_USER_UPDATEBUDGET               = "e99ab11bbeec9f63fb16f46133de85ec";
    const ERROR_USER_UPDATEBUDGET_EMPTY         = "807f75bf7acec5aa86993423b6841407";
    const ERROR_USER_UPDATENAME_EMPTY           = "0f0735f8603324a7bca482debdf088fa";
    const ERROR_USER_UPDATENAME                 = "98217b0c263b136bf14925994ca7a0aa";
    const ERROR_USER_UPDATEPASSWORD             = "365009a3644ef5d3cf7a229a09b4d690";
    const ERROR_USER_UPDATEPASSWORD_EMPTY       = "0f0735f8603324a7bca482debdf088fa";
    const ERROR_USER_UPDATEPASSWORD_ISNOTTHESAME = "27731b37e286a3c6429a1b8e44ef3ff6";
    const ERROR_USER_UPDATEPHOTO                 = "dfb4dc6544b0dae81ea132de667b2a5d";
    const ERROR_USER_UPDATEPHOTO_FORMAT          = "53f3554f0533aa9f20fbf46bd5328430";
    const ERROR_LOGIN_AUTHENTICATE               = "11c37cfab311fbe28652f4947a9523c4";
    const ERROR_LOGIN_AUTHENTICATE_EMPTY         = "2194ac064912be67fc164539dc435a42";
    const ERROR_LOGIN_AUTHENTICATE_DATA          = "bcbe63ed8464684af6945ad8a89f76f8";
    const ERROR_SIGNUP_NEWUSER                   = "1fdce6bbf47d6b26a9cd809ea1910222";
    const ERROR_SIGNUP_NEWUSER_EMPTY             = "a5bcd7089d83f45e17e989fbc86003ed";
    const ERROR_SIGNUP_NEWUSER_EXISTS            = "a74accfd26e06d012266810952678cf3";


    private $errorsList = [];

    public function __construct()
    {
        $this->errorsList = [
            Errors::ERROR_ADMIN_NEWCATEGORY_EXISTS => 'El nombre de la categoría ya existe, intenta otra',
            Errors::ERROR_EXPENSES_DELETE           => 'Hubo un problema el eliminar el gasto, inténtalo de nuevo',
            Errors::ERROR_EXPENSES_NEWEXPENSE       => 'Hubo un problema al crear el gasto, inténtalo de nuevo',
            Errors::ERROR_EXPENSES_NEWEXPENSE_EMPTY => 'Los campos no pueden estar vacíos',
            Errors::ERROR_USER_UPDATEBUDGET         => 'No se puede actualizar el presupuesto',
            Errors::ERROR_USER_UPDATEBUDGET_EMPTY   => 'El presupuesto no puede estar vacio o ser negativo',
            Errors::ERROR_USER_UPDATENAME_EMPTY     => 'El nombre no puede estar vacio o ser negativo',
            Errors::ERROR_USER_UPDATENAME           => 'No se puede actualizar el nombre',
            Errors::ERROR_USER_UPDATEPASSWORD       => 'No se puede actualizar la contraseña',
            Errors::ERROR_USER_UPDATEPASSWORD_EMPTY => 'El nombre no puede estar vacio o ser negativo',
            Errors::ERROR_USER_UPDATEPASSWORD_ISNOTTHESAME => 'Los passwords no son los mismos',
            Errors::ERROR_USER_UPDATEPHOTO          => 'Hubo un error al actualizar la foto',
            Errors::ERROR_USER_UPDATEPHOTO_FORMAT   => 'El archivo no es una imagen',
            Errors::ERROR_LOGIN_AUTHENTICATE        => 'Hubo un problema al autenticarse',
            Errors::ERROR_LOGIN_AUTHENTICATE_EMPTY  => 'Los parámetros para autenticar no pueden estar vacíos',
            Errors::ERROR_LOGIN_AUTHENTICATE_DATA   => 'Nombre de usuario y/o password incorrectos',
            Errors::ERROR_SIGNUP_NEWUSER            => 'Hubo un error al intentar registrarte. Intenta de nuevo',
            Errors::ERROR_SIGNUP_NEWUSER_EMPTY      => 'Los campos no pueden estar vacíos',
            Errors::ERROR_SIGNUP_NEWUSER_EXISTS     => 'El nombre de usuario ya existe, selecciona otro',
        ];
    }

    function get($hash){
        return $this->errorsList[$hash];
    }

    function existsKey($key){
        if(array_key_exists($key, $this->errorsList)){
            return true;
        }else{
            return false;
        }
    }
}
?>
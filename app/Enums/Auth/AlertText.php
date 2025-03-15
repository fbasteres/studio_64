<?php

namespace App\Enums\Auth;

enum AlertText: string
{
    case ERROR_CREDENCIALES = 'Credenciales inválidas.';
    case LOGIN_CORRECTO = 'Inicio de sesión exitoso.';
    case ERROR_INESPERADO = 'Error al conectar al servidor, intente de nuevo.';
}


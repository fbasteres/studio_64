<?php

namespace App\Enums\Auth;

enum AlertText: string
{
    case INICIO_EXITOSO = 'Inicio de sesion exitoso';
    case ERROR_CREDENCIALES = 'Credenciales incorrectas';
    case ERROR_INESPERADO   = 'Error inesperado, intente de nuevo en unos minutos.';
}

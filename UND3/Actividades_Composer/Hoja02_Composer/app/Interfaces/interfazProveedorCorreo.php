<?php

namespace app\Interfaces;

interface interfazProveedorCorreo {
    public function enviarCorreo(string $paraQuien, string $asunto, string $cuerpoMensaje): bool;
}




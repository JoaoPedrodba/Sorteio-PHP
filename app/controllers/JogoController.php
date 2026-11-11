<?php

require_once __DIR__ . '/../models/Evento.php';

class JogoController
{
    public function inicio()
    {
        require_once __DIR__ . '/../views/inicio.php';
    }

    public function explorar()
    {
       
        $eventoModel = new Evento();

        
        $resultado = $eventoModel->sortearAcao();

        require __DIR__ . '/../views/resultado.php';
    }
}
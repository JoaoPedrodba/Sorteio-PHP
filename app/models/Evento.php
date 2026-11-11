<?php

class Evento
{
    public function sortearAcao()
    {
        // 1. O sorteio acontece aqui:
        $numero = rand(1, 10);

        // 2. A lista de ações da história para cada número:
        $acoes = [
            1 => 'O assoalho range alto! Uma horda de zumbis acorda no porão e você foge ferido.',
            2 => 'Um zumbi solitário salta de trás da porta da cozinha e arranha o seu braço.',
            3 => 'Você ouve passos assustadores, mas era apenas um gato fugindo pela janela.',
            4 => 'Você revira todos os armários, mas a despensa foi saqueada há muito tempo. Nada aqui.',
            5 => 'Você encontra uma garrafa de água lacrada e uma caixa de fósforos.',
            6 => 'Em uma gaveta trancada, você encontra pilhas novas e ataduras limpas.',
            7 => 'No alto do armário, você acha latas de conserva intactas e um abridor.',
            8 => 'Atrás da porta, você encontra um pé de cabra reforçado e comida para dois dias.',
            9 => 'O andar de cima é seguro! Porta reforçada, cama confortável e água limpa.',
            10 => 'Sorte grande! Uma mochila com remédios, munição e um rádio comunicador com sobreviventes.'
        ];

    
        return [
            'numero' => $numero,
            'texto'  => $acoes[$numero]
        ];
    }
}
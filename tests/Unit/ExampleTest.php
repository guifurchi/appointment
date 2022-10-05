<?php

namespace Tests\Unit;

use App\Http\Controllers\authController;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function deveAutenticarUsuarioQuandoLogado()
    {
        //instancia da Classe a ser testada
        $autentica = new authController;
        $autentica->auth($_POST['email'], $_POST['password']);
        //Preparação do Teste
        $experado = true;
        //Asserção

        $this->assertTrue($experado,  );
    }
}

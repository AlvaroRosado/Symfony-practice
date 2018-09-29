<?php
// src/Controller/Home.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Home
{
    public function HelloWorld()
    {
        return new Response(
            '<html><body>Hola Mundo</body></html>'
        );
    }
}

?>
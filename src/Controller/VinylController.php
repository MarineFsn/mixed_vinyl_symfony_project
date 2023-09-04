<?php

namespace App\Controller;

use function Symfony\Component\String\u;
use Doctrine\ORM\Query\AST\Functions\UpperFunction;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage(): Response
    {
        return new Response('Title: PB and Jams');
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null): Response 
    {
        if($slug){
        $title = 'Genre: '.u(str_replace('-',' ',$slug))->title(true);
    } else {
        $title ='all Genres';
    }
        return new Response('Genre: ' .$title);
    }
}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("What a controller we have conjured!");
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {

        return new Response(sprintf('Future page to show the questions "%s" !',
       ucwords(str_replace('-',' ', $slug))
        ));
    }
}
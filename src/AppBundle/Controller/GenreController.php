<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GenreController extends Controller
{
    /**
     * @Route("/genre/{genre}", name="genre_filter")
     */
    public function indexAction($genre)
    {
     $book = $this->getDoctrine()
                    ->getRepository('AppBundle:Book')
                    ->findAll();

        return $this->render('genre/index.html.twig',array(
  'books' => $book,
  'genreBy' => $genre
        ));
    }
}

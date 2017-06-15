<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * @Route("/book/{nameOfBook}", name="book_detail")
     */
    public function indexAction($nameOfBook)
    {
     $book = $this->getDoctrine()
                ->getRepository('AppBundle:Book')
                ->findOneByName($nameOfBook);

        return $this->render('book/index.html.twig', array(
            'book' => $book
        ));
    }
}

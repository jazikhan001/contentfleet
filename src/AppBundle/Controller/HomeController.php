<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, EntityManagerInterface $em)
    {


        $query = $em->createQuery('SELECT p FROM AppBundle:Book p')->setFirstResult(0)->setMaxResults(5);
        $books = $query->getResult();

        if($this->getUser()=='admin')
        {
        return $this->render('default/admin/index.html.twig', array(
        'books' => $books
        ));
        }
        else{
        return $this->render('default/user/index.html.twig', array(
        'books' => $books
        ));
        }

    }

     /**
         * @Route("/ajax", name="home_Loadmore")
         */
        public function loadMoreAction(Request $request, EntityManagerInterface $em)
        {
            $query = $em->createQuery('SELECT p FROM AppBundle:Book p')->setFirstResult(5)->setMaxResults(5);
            $books = $query->getResult();

            if($this->getUser()=='admin')
            {
            return $this->render('default/admin/loadmore.html.twig', array(
            'books' => $books
            ));
            }
            else{
            return $this->render('default/user/loadmore.html.twig', array(
                    'books' => $books
                ));
            }





        }
}

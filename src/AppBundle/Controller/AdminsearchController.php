<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchase;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Admin controller.
 *
 * @Route("/")
 */
class AdminsearchController extends Controller
{
    /**
     *
     * @Route("admin1/search", name="admin_search")
     *@Method({"GET", "POST"})
     */
    public function searchAction(Request $request)
    {





     if ($request->isMethod('POST'))
        {



                     $query = $this->getDoctrine()
                          ->getManager()
                           ->getRepository('AppBundle:Purchase')->createQueryBuilder('p')
                           ->where('p.datePurchase <:date2')
                           ->andwhere('p.datePurchase >:date1')
                           ->setParameter('date1',$request->request->get('date1'))
                           ->setParameter('date2',$request->request->get('date2'))
                           ->getQuery();

                        //  $query = $repo->createQueryBuilder('p')->getQuery();

     

                     $result = $query->getResult();

    
                  return $this->render('admin/search/result.html.twig', array(
                    'query' => $result
                       ));

        }


       
        return $this->render('admin/search/searchView.html.twig');
    }

  

 
   
}

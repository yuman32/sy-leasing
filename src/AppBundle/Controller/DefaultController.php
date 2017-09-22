<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	// return $this->redirectToRoute('category_index');
        // replace this example code with whatever you need
        $session = $this->get('session');
        $purchase = $session->get('purchase');
        $em = $this->getDoctrine()->getManager();
        if($this->getuser()){
            $member = $em->getRepository('AppBundle:MemberAccount')->findOneBy(['account' => $this->getUser()->getId()]);
            
            if(!empty($purchase)){
                $pmember = $purchase->getMember();
                if(empty($member) && empty($member)){
                    return $this->redirectToRoute('member_details_new');
                }
                else{
                    // dump($member);
                    $purchase->setMember($member->getId());
                    $purchase->setConfirm(0);
                    $session->set('purchase', $purchase);
                    // dump($purchase);
                    
                    $em->persist($purchase);
                    $em->flush();
                    // die('here');
                    return $this->redirectToRoute('purchase_confirm');                
                }
            }
        }



        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
}

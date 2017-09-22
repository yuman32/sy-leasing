<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Purchase controller.
 *
 * @Route("purchase")
 */
class PurchaseController extends Controller
{
    /**
     * Lists all purchase entities.
     *
     * @Route("/", name="purchase_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $purchases = $em->getRepository('AppBundle:Purchase')->findAll();

        return $this->render('purchase/index.html.twig', array(
            'purchases' => $purchases,
        ));
    }

    /**
     * Creates a new purchase entity.
     *
     * @Route("/new", name="purchase_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $purchase = new Purchase();
        $session = $this->get('session');
        $product = $session->get('purchase_product');

        $purchase->setAmount($product->getMinPrice());
        $purchase->setProduct($product->getId());

        $form = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $purchase->setDatePurchase(new \DateTime());
            $purchase->setDatePurchase(new \DateTime());
            $duration = ceil($product->getPrice() / $purchase->getAmount());
            $purchase->setDuration($duration);
            $session->set('purchase', $purchase);
            if($this->getUser()){
                $member = $em->getRepository('AppBundle:MemberAccount')->findOneBy(['account' => $this->getUser()->getId()]);
                // dump($member);
                $purchase->setMember($member->getId());
                // dump($purchase);
                $purchase->setConfirm(0);
                $em->persist($purchase);
                $em->flush();
                return $this->redirectToRoute('purchase_confirm');                
            }
            else{
                return $this->redirectToRoute('fos_user_security_login');                
            }

            // return $this->redirectToR<<oute('purchase_show', array('id' => $purchase->getId()));
        }

        return $this->render('purchase/new.html.twig', array(
            'purchase' => $purchase,
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a purchase entity.
     *
     * @Route("/conf/purchase/", name="confirm")
     * @Method("GET")
     */
    public function confAction(Request $request)
    {
        $session = $this->get('session');
        $purchase =  $session->get('purchase');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $purchase->getProduct()]);
        $em = $this->getDoctrine()->getManager();

        $purchase->setConfirm(1);
        $em->persist($purchase);
        $em->flush();

        return $this->render('purchase/confirmed.html.twig', array(
            'purchase' => $purchase,
            'product' => $product,
        ));
    }
    

    /**
     * Finds and displays a purchase entity.
     *
     * @Route("/confirm/purchase/", name="purchase_confirm")
     * @Method("GET")
     */
    public function confirmAction(Request $request)
    {
        $session = $this->get('session');
        $purchase =  $session->get('purchase');
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AppBundle:Product')->findOneBy(['id' => $purchase->getProduct()]);

        return $this->render('purchase/confirm.html.twig', array(
            'purchase' => $purchase,
            'product' => $product,
        ));
    }

    /**
     * Finds and displays a purchase entity.
     *
     * @Route("/purchase/details/{id}", name="purchase_show")
     * @Method("GET")
     */
    public function showAction(Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);

        return $this->render('purchase/show.html.twig', array(
            'purchase' => $purchase,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing purchase entity.
     *
     * @Route("/update/purchase/{id}/edit", name="purchase_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Purchase $purchase)
    {
        $deleteForm = $this->createDeleteForm($purchase);
        $editForm = $this->createForm('AppBundle\Form\PurchaseType', $purchase);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('purchase_edit', array('id' => $purchase->getId()));
        }

        return $this->render('purchase/edit.html.twig', array(
            'purchase' => $purchase,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a purchase entity.
     *
     * @Route("/cancel/purchase/{id}", name="purchase_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Purchase $purchase)
    {
        $form = $this->createDeleteForm($purchase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($purchase);
            $em->flush();
        }

        return $this->redirectToRoute('purchase_index');
    }

    /**
     * Creates a form to delete a purchase entity.
     *
     * @param Purchase $purchase The purchase entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Purchase $purchase)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('purchase_delete', array('id' => $purchase->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

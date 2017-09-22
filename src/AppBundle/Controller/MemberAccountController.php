<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MemberAccount;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Memberaccount controller.
 *
 * @Route("member/details")
 */
class MemberAccountController extends Controller
{
    /**
     * Lists all memberAccount entities.
     *
     * @Route("/", name="member_details_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberAccounts = $em->getRepository('AppBundle:MemberAccount')->findAll();

        return $this->render('memberaccount/index.html.twig', array(
            'memberAccounts' => $memberAccounts,
        ));
    }

    /**
     * Creates a new memberAccount entity.
     *
     * @Route("/new", name="member_details_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $memberAccount = new Memberaccount();
        $form = $this->createForm('AppBundle\Form\MemberAccountType', $memberAccount);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $memberAccount->setAccount( $this->getUser());
            $session = $this->get('session');
            $purchase = $session->get('purchase');
            // $purchase->setMember($memberAccount);
            $session->set('purchase', $purchase);

            $em->persist($memberAccount);
            $em->flush();
            // $member = $em->getRepository('AppBundle:MemberAccount')->findOneBy(['account' => $this->getUser()->getId()]);
            $purchase->setMember($memberAccount->getId());
            $purchase->setConfirm(0);
            $em->persist($purchase);
            $em->flush();
            return $this->redirectToRoute('purchase_confirm');

            // $em->flush();

            return $this->redirectToRoute('purchase_confirm');
        }

        return $this->render('memberaccount/new.html.twig', array(
            'memberAccount' => $memberAccount,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a memberAccount entity.
     *
     * @Route("/{id}", name="member_details_show")
     * @Method("GET")
     */
    public function showAction(MemberAccount $memberAccount)
    {
        $deleteForm = $this->createDeleteForm($memberAccount);

        return $this->render('memberaccount/show.html.twig', array(
            'memberAccount' => $memberAccount,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing memberAccount entity.
     *
     * @Route("/{id}/edit", name="member_details_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MemberAccount $memberAccount)
    {
        $deleteForm = $this->createDeleteForm($memberAccount);
        $editForm = $this->createForm('AppBundle\Form\MemberAccountType', $memberAccount);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_details_edit', array('id' => $memberAccount->getId()));
        }

        return $this->render('memberaccount/edit.html.twig', array(
            'memberAccount' => $memberAccount,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a memberAccount entity.
     *
     * @Route("/{id}", name="member_details_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MemberAccount $memberAccount)
    {
        $form = $this->createDeleteForm($memberAccount);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($memberAccount);
            $em->flush();
        }

        return $this->redirectToRoute('member_details_index');
    }

    /**
     * Creates a form to delete a memberAccount entity.
     *
     * @param MemberAccount $memberAccount The memberAccount entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MemberAccount $memberAccount)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('member_details_delete', array('id' => $memberAccount->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

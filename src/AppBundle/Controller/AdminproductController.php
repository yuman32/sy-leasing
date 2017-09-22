<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Product controller.
 *
 * @Route("/")
 */
class AdminproductController extends Controller
{
    /**
     * Lists all product entities.
     *
     * @Route("admin1/products", name="adminproduct_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('AppBundle:Product')->findAll();

        return $this->render('admin/product/index.html.twig', array(
            'products' => $products,
        ));
    }


    /**
     * Creates a new product entity.
     *
     * @Route("admin1/newproduct", name="adminproduct_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $product = new Product();     
        $form = $this->createForm('AppBundle\Form\ProductType', $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

               $file = $product->getPhoto();

               $fileName =  md5(uniqid()).'.'.$file->guessExtension();

               $product->setPhoto($fileName);
          
           
               $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                          );


               $em = $this->getDoctrine()->getManager();
               $em->persist($product);
               $em->flush();

            return $this->redirectToRoute('adminproduct_index');
        }

        return $this->render('admin/product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product entity.
     *
     * @Route("admin1/product/{id}", name="adminproduct_show")
     * @Method("GET")
     */
    public function showAction(Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);

        return $this->render('admin/product/show.html.twig', array(
            'product' => $product,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     * @Route("admin1/product/{id}/edit", name="adminproduct_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Product $product)
    {


           $product->setPhoto(
          new File($this->getParameter('image_directory').'/'.$product->getPhoto())
         ); 


        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('AppBundle\Form\ProductType', $product);
        $editForm->handleRequest($request);


      
        if ($editForm->isSubmitted() && $editForm->isValid()) {

           
            
             
            
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('adminproduct_index');
        }

        return $this->render('admin/product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     * @Route("/{id}", name="adminproduct_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminproduct_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

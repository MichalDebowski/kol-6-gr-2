<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\furtakmTrapezType;
use furtakm\Tools\Trapez;
use Symfony\Component\HttpFoundation\Request;


class furtakmTrapezController extends Controller
{

    /**
     * @Route("/furtakm/trapez/show/form", name="furtakm_trapez_show_form")
     */
    public function showFormAction()
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);

        return $this->render(
            'AppBundle:furtakmTrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/furtakm/trapez/calc", name="furtakm_trapez_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:furtakmTrapez:result.html.twig',
                array('result' => $trapez->trapez())
            );

        }

        return $this->render(
            'AppBundle:furtakmTrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * Creates a form...
     *
     * @param Trapez $trapez The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trapez $trapez)
    {
        $form = $this->createForm(new furtakmTrapezType(), $trapez, array(
            'action' => $this->generateUrl('furtakm_trapez_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Calculate'));

        return $form;
    }


}

<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\jwasikTrapezType;
use jwasik\Tools\Trapez;
use Symfony\Component\HttpFoundation\Request;


class jwasikTrapezController extends Controller
{

    /**
     * @Route("/jwasik/trapez/show/form", name="jwasik_trapez_show_form")
     */
    public function showFormAction()
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);

        return $this->render(
            'AppBundle:jwasikTrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/jwasik/trapez/calc", name="jwasik_trapez_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez = new Trapez();
        $form = $this->createCreateForm($trapez);
        $form->handleRequest($request);

        if ($form->isValid()) {

            return $this->render(
                'AppBundle:jwasikTrapez:wynik.html.twig',
                array('result' => $trapez->area())
            );

        }

        return $this->render(
            'AppBundle:jwasikTrapez:form.html.twig',
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
        $form = $this->createForm(new jwasikTrapezType(), $trapez, array(
            'action' => $this->generateUrl('jwasik_trapez_result'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Oblicz'));

        return $form;
    }


}

<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\michaldebowskitrapezType;
use michaldebowski\Tools\trapez;
use Symfony\Component\HttpFoundation\Request;
class michaldebowskitrapezController extends Controller
{
    /**
     * @Route("/michaldebowski/trapez/show/form", name="michaldebowski_trapez_show_form")
     */
    public function showFormAction()
    {
        $trapez = new trapez();
        $form = $this->createCreateForm($trapez);
        return $this->render(
            'AppBundle:michaldebowskitrapez:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/michaldebowski/trapez/calc", name="michaldebowski_trapez_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez = new trapez();
        $form = $this->createCreateForm($trapez);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:michaldebowskitrapez:result.html.twig',
                array('result' => $trapez->pole())
            );
        }
        return $this->render(
            'AppBundle:michaldebowskitrapez:form.html.twig',
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
        $form = $this->createForm(new michaldebowskitrapezType(), $trapez, array(
            'action' => $this->generateUrl('michaldebowski_trapez_result'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Oblicz'));
        return $form;
    }
}
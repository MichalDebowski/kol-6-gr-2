<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\mmajewski1313Trapez1Type;
use mmajewski1313\Tools\Trapez1;
use Symfony\Component\HttpFoundation\Request;
class mmajewski1313Trapez1Controller extends Controller
{
    /**
     * @Route("/mmajewski1313/trapez1/show/form", name="mmajewski1313_trapez1_show_form")
     */
    public function showFormAction()
    {
        $trapez1 = new Trapez1();
        $form = $this->createCreateForm($trapez1);
        return $this->render(
            'AppBundle:mmajewski1313Trapez1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * @Route("/mmajewski1313/trapez1/calc", name="mmajewski1313_trapez1_result")
     * @Method("POST")
     */
    public function calculateAction(Request $request)
    {
        $trapez1 = new Trapez1();
        $form = $this->createCreateForm($trapez1);
        $form->handleRequest($request);
        if ($form->isValid()) {
            return $this->render(
                'AppBundle:mmajewski1313Trapez1:result.html.twig',
                array('result' => $trapez1->trapez1())
            );
        }
        return $this->render(
            'AppBundle:mmajewski1313Trapez1:form.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
    /**
     * Creates a form...
     *
     * @param Trapez1 $trapez1 The object
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Trapez1 $trapez1)
    {
        $form = $this->createForm(new mmajewski1313Trapez1Type(), $trapez1, array(
            'action' => $this->generateUrl('mmajewski1313_trapez1_result'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Calculate'));
        return $form;
    }
}
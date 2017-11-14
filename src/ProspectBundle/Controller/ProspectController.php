<?php
/**
 * Created by PhpStorm.
 * User: nagui
 * Date: 25/08/17
 * Time: 11:48
 */

namespace ProspectBundle\Controller;


use ProspectBundle\Form\ProspectFormType;
use CoreBundle\Controller\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;
class ProspectController extends BaseController
{
    /**
     * @Route("/prospects", name="liste_prospects")
     */
    public function listAction(){
        $em=$this->getDoctrine()->getManager();
        $prospects=$em->getRepository('ProspectBundle:Prospect\Prospect')
            ->findAll();
        return $this->render('prospect/liste.html.twig',[
            'prospects'=>$prospects
        ]);

    }
    /**
     * @Route("/prospects/add")
     */
    public function addAction(Request $request){
     $form = $this->createForm(ProspectFormType::class);
     $form->handleRequest($request);
     if($form->isSubmitted() && $form->isValid()){
         $prospect=$form->getData();
         $em = $this->getDoctrine()->getManager();
         $em->persist($prospect);
         $em->flush();
         $this->addFlash('sucsess','pros created');
         return $this->redirectToRoute('liste_prospects');
     }
     return $this->render('prospect/add.html.twig',[
         'prospectForm'=>$form->createView()
     ]);
    }
    /**
     * @Route("/prospects/{prospectId}")
     */
    public function profilAction($prospectId){
return $this->render('prospect/profil.html.twig',[
    'prospectId'=>$prospectId
]) ;
    }


}
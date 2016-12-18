<?php

namespace GagneGrosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use GagneGrosBundle\Entity\Cotes;
use GagneGrosBundle\Entity\Matchs;

class GagneGrosController extends Controller
{
    public function indexAction()
    {
      $reposMatch = $this->getDoctrine()->getManager()->getRepository('GagneGrosBundle:Matchs');
      $liste_matchs = $reposMatch->findBy(array('etatMatchs'=>"TERMINER"));
      if(null == $liste_matchs) {
        return $this->render('GagneGrosBundle:GG_Views:index.html.twig');
      }
      return $this->render('GagneGrosBundle:GG_Views:index.html.twig',
                          array('liste_matchs'=>$liste_matchs));
    }
    public function parisNormalAction()
    {
      $reposMatch = $this->getDoctrine()->getManager()->getRepository('GagneGrosBundle:Matchs');
      $liste_matchs = $reposMatch->findBy(array('etatMatchs'=>"EN COUR"));
      if(null == $liste_matchs) {
        return $this->render('GagneGrosBundle:GG_Views:parisNormal.html.twig');
      }
      return $this->render('GagneGrosBundle:GG_Views:parisNormal.html.twig',
                          array('liste_matchs'=>$liste_matchs));

    }
    public function parisMitempAction(){
      return $this->render('GagneGrosBundle:GG_Views:parisMitemp.html.twig');
    }
    public function parisScoreAction(){
      return $this->render('GagneGrosBundle:GG_Views:parisScore.html.twig');
    }
    public function hasardNormalAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardNormal.html.twig');
    }
    public function hasardPognonAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardPognon.html.twig');
    }
    public function hasardBigmoneyAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardBigmoney.html.twig');
    }
    public function hasardFloushAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardFloush.html.twig');
    }
    public function hasardSurpriseAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardSurprise.html.twig');
    }
    public function hasardIdentiqueAction(){
      return $this->render('GagneGrosBundle:GG_Views:hasardIdentique.html.twig');
    }
}

<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AjaxController extends Controller
{
    /**
     * @Route("/ajax/recherche/auteur/{prenom}/{nom}", name="ajax_recherche_auteur")
     *
     * @return Response
     */
    public function rechercheAuteurAction($prenom, $nom)
    {
        $request = Request::createFromGlobals();
        
        // Si ce n'est pas une requête ajax, on redirige vers l'accueil
        if(!$request->isXmlHttpRequest()){
            return $this->redirect($this->generateUrl('accueil'));
        }
        
        // Si la requête est bien AJAX.
        else{
            $em = $this->getDoctrine()->getManager();
            
            // Cas où le prénom/nom n'est pas renseigné
            if($prenom == "null")
                $prenom = null;
            else
                $prenom = strToLower($prenom);
                
            if($nom == "null")
                $nom = null;
            else
                $nom = strToLower($nom);
                
            // Recherche via le repository
            $auteurRepository = $em->getRepository("CdiBundle:Auteur");
            $res = $auteurRepository->recherche($prenom, $nom);


            // Generation du tableau d'auteur et retour en json
            $auteurs = [];            
            foreach($res as $key => $auteur){
                $tab = ["prenom" => $auteur->getPrenom(), "nom" => $auteur->getNom(), "id" => $auteur->getId()];
                array_push($auteurs, $tab);
            }
            $response = new JsonResponse();
            $response->setData($auteurs);
            return $response;
        }
    }
    
    
    /**
     * @Route("/ajax/recherche/periodique/{nom}", name="ajax_recherche_periodique")
     *
     * @return Response
     */
    public function recherchePeriodiqueAction($nom)
    {
        $request = Request::createFromGlobals();
        
        // Si ce n'est pas une requête ajax ou que le paramètre est vide, on redirige vers l'accueil
        if(!$request->isXmlHttpRequest() || $nom == ""){
            return $this->redirect($this->generateUrl('accueil'));
        }
        
        // Si la requête est bien AJAX.
        else{
            $em = $this->getDoctrine()->getManager();
                
            // Recherche via le repository
            $periodiqueRepository = $em->getRepository("CdiBundle:Periodique");
            $res = $periodiqueRepository->recherche($nom);

            // Generation du tableau de périodiques et retour en json
            $periodiques = [];            
            foreach($res as $key => $periodique){
                $tab = ["nom" => $periodique->getNom(), "id" => $periodique->getId()];
                array_push($periodiques, $tab);
            }
            
            $response = new JsonResponse();
            $response->setData($periodiques);
            return $response;
        }
    }
}

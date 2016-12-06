<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EstudianteController extends Controller
{
    /**
     * @Route("/estudiantes", name="indexEstudiantes")
     */
    public function indexAction()
    {
        
        return $this->render('Estudiantes/indexEstudiantes.html.twig');
    }
    
    
    
    /**
     * @Route("/estudiantes/create", name="createEstudiantes")
     */
    public function createAction()
    {
        
        return $this->render('Estudiantes/estudianteCreate.html.twig');
    }
    
    
    
    /**
     * @Route("/estudiantes/edit", name="editEstudiantes")
     */
    public function editAction()
    {
        
        return $this->render('Estudiantes/estudianteEdit.html.twig');
    }
    
    
    
    /**
     * @Route("/estudiantes/details", name="detailsEstudiantes")
     */
    public function detailsAction()
    {
        
        return $this->render('Estudiantes/estudianteDetails.html.twig');
    }
    
    
}
<?php

namespace Bac\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ProjectController extends Controller
{
    public function indexAction()
    {
        $projects = $this->getDoctrine()->getRepository('BacProjectBundle:Project')->findAll();
        return $this->render('BacProjectBundle:Project:index.html.twig', [
            'projects' => $projects
        ]);
    }
    
    public function showAction()
    {

    }

    public function createAction()
    {

    }

    public function editAction()
    {

    }

    public function deleteAction()
    {

    }
}

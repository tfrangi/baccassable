<?php

namespace Bac\ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('BacProjectBundle:Default:index.html.twig', array('name' => 'Bob'));
    }
}

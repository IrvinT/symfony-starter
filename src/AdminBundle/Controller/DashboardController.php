<?php

namespace AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @return RedirectResponse
     */
    public function indexAction()
    {
        return new Response('Hello world !');
    }

    /**
     * @Route("/admin", name="admin_dashboard")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboardAction()
    {
        return $this->render('@Admin/Dashboard/index.html.twig');
    }
}

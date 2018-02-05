<?php

namespace AdminBundle\Controller;

use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
use Avanzu\AdminThemeBundle\Event\ThemeEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;

class NavbarController extends Controller
{
    /**
     * @return EventDispatcher
     */
    protected function getDispatcher()
    {
        return $this->get('event_dispatcher');
    }

    public function userAction()
    {
        if (!$this->getDispatcher()->hasListeners(ThemeEvents::THEME_NAVBAR_USER)) {
            return new Response();
        }

        $userEvent = $this->getDispatcher()->dispatch(ThemeEvents::THEME_NAVBAR_USER, new ShowUserEvent());

        return $this->render('@Admin/Navbar/user.html.twig', array(
            'user' => $userEvent->getUser()
        ));
    }
}

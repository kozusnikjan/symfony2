<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // account_create
        if ($pathinfo === '/registration/create') {
            return array (  '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::createAction',  '_route' => 'account_create',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // acme_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_user_homepage')), array (  '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        // acme_front_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_front_homepage');
            }

            return array (  '_controller' => 'Acme\\FrontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_front_homepage',);
        }

        // acme_front_texts
        if ($pathinfo === '/texts/showAll') {
            return array (  '_controller' => 'Acme\\FrontBundle\\Controller\\TextsController::showAllAction',  '_route' => 'acme_front_texts',);
        }

        // acme_front_email
        if (0 === strpos($pathinfo, '/mail/send') && preg_match('#^/mail/send/(?P<jmeno>[^/]++)/(?P<email>[^/]++)/(?P<text>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_front_email')), array (  '_controller' => 'Acme\\FrontBundle\\Controller\\MailController::sendAction',));
        }

        // acme_front_registration
        if (rtrim($pathinfo, '/') === '/registration') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_front_registration');
            }

            return array (  '_controller' => 'Acme\\FrontBundle\\Controller\\RegistrationController::registrationAction',  '_route' => 'acme_front_registration',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // acme_admin_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_admin_homepage');
                }

                return array (  '_controller' => 'Acme\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'acme_admin_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/t')) {
                if (0 === strpos($pathinfo, '/admin/text')) {
                    // acme_admin_text
                    if ($pathinfo === '/admin/text/showAll') {
                        return array (  '_controller' => 'Acme\\AdminBundle\\Controller\\TextController::showAllAction',  '_route' => 'acme_admin_text',);
                    }

                    // acme_admin_text_add
                    if ($pathinfo === '/admin/text/addText') {
                        return array (  '_controller' => 'Acme\\AdminBundle\\Controller\\TextController::addTextAction',  '_route' => 'acme_admin_text_add',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/task')) {
                    // acme_admin_task
                    if ($pathinfo === '/admin/task') {
                        return array (  '_controller' => 'Acme\\AdminBundle\\Controller\\TaskController::showAllAction',  '_route' => 'acme_admin_task',);
                    }

                    // acme_admin_task_add
                    if ($pathinfo === '/admin/task/addTask') {
                        return array (  '_controller' => 'Acme\\AdminBundle\\Controller\\TaskController::addTaskAction',  '_route' => 'acme_admin_task_add',);
                    }

                }

            }

        }

        // acme_entity_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_entity_homepage')), array (  '_controller' => 'Acme\\EntityBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

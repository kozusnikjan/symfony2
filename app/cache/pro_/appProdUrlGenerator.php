<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'account_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AccountBundle\\Controller\\AccountController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration/create',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'acme_user_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\UserBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'acme_front_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\FrontBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'acme_front_texts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\FrontBundle\\Controller\\TextsController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/texts/showAll',    ),  ),  4 =>   array (  ),),
        'acme_front_email' => array (  0 =>   array (    0 => 'jmeno',    1 => 'email',    2 => 'text',  ),  1 =>   array (    '_controller' => 'Acme\\FrontBundle\\Controller\\MailController::sendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'text',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'jmeno',    ),    3 =>     array (      0 => 'text',      1 => '/mail/send',    ),  ),  4 =>   array (  ),),
        'acme_front_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\FrontBundle\\Controller\\RegistrationController::registrationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registration/',    ),  ),  4 =>   array (  ),),
        'acme_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),),
        'acme_admin_text' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AdminBundle\\Controller\\TextController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/text/showAll',    ),  ),  4 =>   array (  ),),
        'acme_admin_text_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AdminBundle\\Controller\\TextController::addTextAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/text/addText',    ),  ),  4 =>   array (  ),),
        'acme_admin_task' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AdminBundle\\Controller\\TaskController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/task',    ),  ),  4 =>   array (  ),),
        'acme_admin_task_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\AdminBundle\\Controller\\TaskController::addTaskAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/task/addTask',    ),  ),  4 =>   array (  ),),
        'acme_entity_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\EntityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: hamza
 * Date: 25/06/18
 * Time: 14:13
 */

namespace AppBundle\Redirection;


use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;


class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $router;
    protected $authorizationChecker;
    public function __construct(Router $router, AuthorizationChecker $authorizationChecker) {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        $response = null;
        if ($this->authorizationChecker->isGranted('ROLE_SONATA_ADMIN')) {
            $response = new RedirectResponse($this->router->generate('sonata_admin_dashboard'));
        } else if ($this->authorizationChecker->isGranted('ROLE_USER')) {
            $response = new RedirectResponse($this->router->generate('att'));
        }
        return $response;
    }
}
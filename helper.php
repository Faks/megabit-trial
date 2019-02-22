<?php

use App\Http\Request;
use Pecee\Http\Url;
use Pecee\SimpleRouter\SimpleRouter as Router;

/**
 * Get url for a route by using either name/alias, class or method name.
 *
 * The name parameter supports the following values:
 * - Route name
 * - Controller/resource name (with or without method)
 * - Controller class name
 *
 * When searching for controller/resource by name, you can use this syntax "route.name@method".
 * You can also use the same syntax when searching for a specific controller-class "MyController@home".
 * If no arguments is specified, it will return the url for the current loaded route.
 *
 * @param string|null $name
 * @param string|array|null $parameters
 * @param array|null $getParams
 * @return \Pecee\Http\Url
 * @throws \InvalidArgumentException
 */
function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
{
    return Router::getUrl($name, $parameters, $getParams);
}

/**
 * Get current csrf-token
 * @return string|null
 */
function csrf_token(): ?string
{
    $baseVerifier = Router::router()->getCsrfVerifier();
    if ($baseVerifier !== null) {
        return $baseVerifier->getTokenProvider()->getToken();
    }
    
    return null;
}

/**
 * Redirect to specified path
 * @param string $url
 * @param int|null $code
 */
function redirect(string $url)
{
    header('Location: ' . $url);
    exit();
}

/**
 * Returns Request Instance
 * @return Request\Request
 */
function request()
{
    return (new App\Http\Request\Request());
}

/**
 * Return Session Instance
 * @return \App\Http\Session\Session
 */
function session()
{
    return (new App\Http\Session\Session());
}

<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'api_entrypoint' => array(array('index', '_format'), array('_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index' => 'index'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', 'index', 'index', true), array('text', '/api')), array(), array()),
        'api_doc' => array(array('_format'), array('_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/docs')), array(), array()),
        'api_jsonld_context' => array(array('shortName', '_format'), array('_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName' => '.+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '.+', 'shortName', true), array('text', '/api/contexts')), array(), array()),
        'api_roles_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/roles')), array(), array()),
        'api_roles_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/roles')), array(), array()),
        'api_roles_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/roles')), array(), array()),
        'api_roles_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/roles')), array(), array()),
        'api_roles_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/roles')), array(), array()),
        'api_users_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/users')), array(), array()),
        'api_users_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_users_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_users_role_get_subresource' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_subresource_operation_name' => 'api_users_role_get_subresource', '_api_subresource_context' => array('property' => 'role', 'identifiers' => array(array('id', 'App\\Entity\\User', true)), 'collection' => false, 'operationId' => 'api_users_role_get_subresource')), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/role'), array('variable', '/', '[^/]++', 'id', true), array('text', '/api/users')), array(), array()),
        'api_netsuite_to_revel_histories_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/netsuite_to_revel_histories')), array(), array()),
        'api_netsuite_to_revel_histories_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/netsuite_to_revel_histories')), array(), array()),
        'api_netsuite_to_revel_histories_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/netsuite_to_revel_histories')), array(), array()),
        'api_netsuite_to_revel_histories_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/netsuite_to_revel_histories')), array(), array()),
        'api_netsuite_to_revel_histories_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/netsuite_to_revel_histories')), array(), array()),
        'api_revel_to_netsuite_histories_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/revel_to_netsuite_histories')), array(), array()),
        'api_revel_to_netsuite_histories_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/revel_to_netsuite_histories')), array(), array()),
        'api_revel_to_netsuite_histories_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_to_netsuite_histories')), array(), array()),
        'api_revel_to_netsuite_histories_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_to_netsuite_histories')), array(), array()),
        'api_revel_to_netsuite_histories_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_to_netsuite_histories')), array(), array()),
        'api_net_suite_configurations_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/net_suite_configurations')), array(), array()),
        'api_net_suite_configurations_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/net_suite_configurations')), array(), array()),
        'api_net_suite_configurations_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/net_suite_configurations')), array(), array()),
        'api_net_suite_configurations_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/net_suite_configurations')), array(), array()),
        'api_net_suite_configurations_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/net_suite_configurations')), array(), array()),
        'api_revel_configurations_get_collection' => array(array('_format'), array('_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_collection_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/revel_configurations')), array(), array()),
        'api_revel_configurations_post_collection' => array(array('_format'), array('_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_collection_operation_name' => 'post'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('text', '/api/revel_configurations')), array(), array()),
        'api_revel_configurations_get_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'get'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_configurations')), array(), array()),
        'api_revel_configurations_delete_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'delete'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_configurations')), array(), array()),
        'api_revel_configurations_put_item' => array(array('id', '_format'), array('_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'put'), array(), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '[^/\\.]++', 'id', true), array('text', '/api/revel_configurations')), array(), array()),
        'easyadmin' => array(array(), array('_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'), array(), array(array('text', '/admin/')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        'api_login_check' => array(array(), array(), array(), array(array('text', '/api/login_check')), array(), array()),
        'gesdinet_jwt_refresh_token' => array(array(), array('_controller' => 'gesdinet.jwtrefreshtoken:refresh'), array(), array(array('text', '/api/token/refresh')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}

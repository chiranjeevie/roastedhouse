<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'easyadmin', '_controller' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction'), null, null, null, true, null)),
            '/api/login_check' => array(array(array('_route' => 'api_login_check'), null, null, null, false, null)),
            '/api/token/refresh' => array(array(array('_route' => 'gesdinet_jwt_refresh_token', '_controller' => 'gesdinet.jwtrefreshtoken:refresh'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/api(?'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:42)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:72)'
                            .'|contexts/(.+)(?:\\.([^/]++))?(*:107)'
                            .'|r(?'
                                .'|oles(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:144)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:182)'
                                    .')'
                                .')'
                                .'|evel_(?'
                                    .'|to_netsuite_histories(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:242)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:280)'
                                        .')'
                                    .')'
                                    .'|configurations(?'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:325)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:363)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(*:398)'
                                .'|/(?'
                                    .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:438)'
                                    .')'
                                    .'|([^/]++)/role(?:\\.([^/]++))?(*:475)'
                                .')'
                            .')'
                            .'|net(?'
                                .'|suite_to_revel_histories(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:536)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:574)'
                                    .')'
                                .')'
                                .'|_suite_configurations(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:626)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:664)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:705)'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            42 => array(array(array('_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => '1', 'index' => 'index'), array('index', '_format'), null, null, false, null)),
            72 => array(array(array('_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_api_respond' => '1', '_format' => ''), array('_format'), null, null, false, null)),
            107 => array(array(array('_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_api_respond' => '1', '_format' => 'jsonld'), array('shortName', '_format'), null, null, false, null)),
            144 => array(
                array(array('_route' => 'api_roles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_roles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            182 => array(
                array(array('_route' => 'api_roles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_roles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_roles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            242 => array(
                array(array('_route' => 'api_revel_to_netsuite_histories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_revel_to_netsuite_histories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            280 => array(
                array(array('_route' => 'api_revel_to_netsuite_histories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_revel_to_netsuite_histories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_revel_to_netsuite_histories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelToNetsuiteHistory', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            325 => array(
                array(array('_route' => 'api_revel_configurations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_revel_configurations_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            363 => array(
                array(array('_route' => 'api_revel_configurations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_revel_configurations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_revel_configurations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\RevelConfiguration', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            398 => array(array(array('_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null)),
            438 => array(
                array(array('_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            475 => array(array(array('_route' => 'api_users_role_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Role', '_api_subresource_operation_name' => 'api_users_role_get_subresource', '_api_subresource_context' => array('property' => 'role', 'identifiers' => array(array('id', 'App\\Entity\\User', true)), 'collection' => false, 'operationId' => 'api_users_role_get_subresource')), array('id', '_format'), array('GET' => 0), null, false, null)),
            536 => array(
                array(array('_route' => 'api_netsuite_to_revel_histories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_netsuite_to_revel_histories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            574 => array(
                array(array('_route' => 'api_netsuite_to_revel_histories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_netsuite_to_revel_histories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_netsuite_to_revel_histories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetsuiteToRevelHistory', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            626 => array(
                array(array('_route' => 'api_net_suite_configurations_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_collection_operation_name' => 'get'), array('_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_net_suite_configurations_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_collection_operation_name' => 'post'), array('_format'), array('POST' => 0), null, false, null),
            ),
            664 => array(
                array(array('_route' => 'api_net_suite_configurations_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'get'), array('id', '_format'), array('GET' => 0), null, false, null),
                array(array('_route' => 'api_net_suite_configurations_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'delete'), array('id', '_format'), array('DELETE' => 0), null, false, null),
                array(array('_route' => 'api_net_suite_configurations_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\NetSuiteConfiguration', '_api_item_operation_name' => 'put'), array('id', '_format'), array('PUT' => 0), null, false, null),
            ),
            705 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
        );
    }
}

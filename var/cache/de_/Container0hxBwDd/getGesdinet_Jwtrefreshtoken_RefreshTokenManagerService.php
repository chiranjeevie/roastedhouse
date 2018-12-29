<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'gesdinet.jwtrefreshtoken.refresh_token_manager' shared service.

include_once $this->targetDirs[3].'/vendor/gesdinet/jwt-refresh-token-bundle/Model/RefreshTokenManagerInterface.php';
include_once $this->targetDirs[3].'/vendor/gesdinet/jwt-refresh-token-bundle/Model/RefreshTokenManager.php';
include_once $this->targetDirs[3].'/vendor/gesdinet/jwt-refresh-token-bundle/Doctrine/RefreshTokenManager.php';

return $this->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] = new \Gesdinet\JWTRefreshTokenBundle\Doctrine\RefreshTokenManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), 'Gesdinet\\JWTRefreshTokenBundle\\Entity\\RefreshToken');

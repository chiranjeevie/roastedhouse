<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventSubscriber\UserPasswordEncoderSubscriber' shared autowired service.

include_once $this->targetDirs[3].'/src/EventSubscriber/UserPasswordEncoderSubscriber.php';

return $this->privates['App\EventSubscriber\UserPasswordEncoderSubscriber'] = new \App\EventSubscriber\UserPasswordEncoderSubscriber(($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php')));

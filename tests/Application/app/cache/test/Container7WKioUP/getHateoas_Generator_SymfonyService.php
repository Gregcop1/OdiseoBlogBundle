<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.generator.symfony' shared service.

return $this->privates['hateoas.generator.symfony'] = new \Hateoas\UrlGenerator\SymfonyUrlGenerator(($this->services['router'] ?? $this->getRouterService()));
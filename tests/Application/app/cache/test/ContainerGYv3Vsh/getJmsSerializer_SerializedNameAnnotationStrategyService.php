<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.serialized_name_annotation_strategy' shared service.

return $this->privates['jms_serializer.serialized_name_annotation_strategy'] = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(($this->privates['jms_serializer.camel_case_naming_strategy'] ?? $this->privates['jms_serializer.camel_case_naming_strategy'] = new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true)));
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.form_error_handler' shared service.

return $this->services['jms_serializer.form_error_handler'] = new \FOS\RestBundle\Serializer\Normalizer\FormErrorHandler(($this->privates['fos_rest.serializer.form_error_handler.inner'] ?? $this->load('getFosRest_Serializer_FormErrorHandler_InnerService.php')));
<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.bundle.form.data_transformer.idn_converter' shared service.

return $this->services['prestashop.bundle.form.data_transformer.idn_converter'] = new \PrestaShopBundle\Form\DataTransformer\IDNConverterDataTransformer(($this->services['prestashop.core.util.internationalized_domain_name_converter'] ?? ($this->services['prestashop.core.util.internationalized_domain_name_converter'] = new \PrestaShop\PrestaShop\Core\Util\InternationalizedDomainNameConverter())));

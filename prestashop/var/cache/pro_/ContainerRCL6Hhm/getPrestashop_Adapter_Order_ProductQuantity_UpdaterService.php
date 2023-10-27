<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.order.product_quantity.updater' shared service.

return $this->services['prestashop.adapter.order.product_quantity.updater'] = new \PrestaShop\PrestaShop\Adapter\Order\OrderProductQuantityUpdater(($this->services['prestashop.adapter.order.amount.updater'] ?? $this->load('getPrestashop_Adapter_Order_Amount_UpdaterService.php')), ($this->services['prestashop.adapter.order.product.remover'] ?? ($this->services['prestashop.adapter.order.product.remover'] = new \PrestaShop\PrestaShop\Adapter\Order\Refund\OrderProductRemover())), ($this->services['prestashop.adapter.context_state_manager'] ?? $this->load('getPrestashop_Adapter_ContextStateManagerService.php')));

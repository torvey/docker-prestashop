<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsEventbus\Api\EventBusProxyClient' shared service.

return $this->services['PrestaShop\\Module\\PsEventbus\\Api\\EventBusProxyClient'] = new \PrestaShop\Module\PsEventbus\Api\EventBusProxyClient(${($_ = isset($this->services['ps_eventbus.link']) ? $this->services['ps_eventbus.link'] : $this->load('getPsEventbus_LinkService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->load('getPsAccountsService.php')) && false ?: '_'}, 'https://eventbus-proxy.psessentials.net');

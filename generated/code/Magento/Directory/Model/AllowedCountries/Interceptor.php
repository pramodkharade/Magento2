<?php
namespace Magento\Directory\Model\AllowedCountries;

/**
 * Interceptor class for @see \Magento\Directory\Model\AllowedCountries
 */
class Interceptor extends \Magento\Directory\Model\AllowedCountries implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($scopeConfig, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllowedCountries($scope = 'website', $scopeCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllowedCountries');
        if (!$pluginInfo) {
            return parent::getAllowedCountries($scope, $scopeCode);
        } else {
            return $this->___callPlugins('getAllowedCountries', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function makeCountriesUnique(array $allowedCountries)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'makeCountriesUnique');
        if (!$pluginInfo) {
            return parent::makeCountriesUnique($allowedCountries);
        } else {
            return $this->___callPlugins('makeCountriesUnique', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCountriesFromConfig($scope, $scopeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountriesFromConfig');
        if (!$pluginInfo) {
            return parent::getCountriesFromConfig($scope, $scopeCode);
        } else {
            return $this->___callPlugins('getCountriesFromConfig', func_get_args(), $pluginInfo);
        }
    }
}

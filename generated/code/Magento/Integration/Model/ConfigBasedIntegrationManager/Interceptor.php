<?php
namespace Magento\Integration\Model\ConfigBasedIntegrationManager;

/**
 * Interceptor class for @see \Magento\Integration\Model\ConfigBasedIntegrationManager
 */
class Interceptor extends \Magento\Integration\Model\ConfigBasedIntegrationManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Api\IntegrationServiceInterface $integrationService, \Magento\Authorization\Model\Acl\AclRetriever $aclRetriever, \Magento\Integration\Model\Config $integrationConfig)
    {
        $this->___init();
        parent::__construct($integrationService, $aclRetriever, $integrationConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function processIntegrationConfig(array $integrationNames)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processIntegrationConfig');
        if (!$pluginInfo) {
            return parent::processIntegrationConfig($integrationNames);
        } else {
            return $this->___callPlugins('processIntegrationConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processConfigBasedIntegrations(array $integrations)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processConfigBasedIntegrations');
        if (!$pluginInfo) {
            return parent::processConfigBasedIntegrations($integrations);
        } else {
            return $this->___callPlugins('processConfigBasedIntegrations', func_get_args(), $pluginInfo);
        }
    }
}

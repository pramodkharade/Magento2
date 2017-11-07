<?php
namespace Magento\Config\App\Config\Source\DumpConfigSourceAggregated;

/**
 * Interceptor class for @see \Magento\Config\App\Config\Source\DumpConfigSourceAggregated
 */
class Interceptor extends \Magento\Config\App\Config\Source\DumpConfigSourceAggregated implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Export\ExcludeList $excludeList, array $sources = array(), \Magento\Config\Model\Config\TypePool $typePool = null, array $rules = array())
    {
        $this->___init();
        parent::__construct($excludeList, $sources, $typePool, $rules);
    }

    /**
     * {@inheritdoc}
     */
    public function get($path = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($path);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getExcludedFields()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExcludedFields');
        if (!$pluginInfo) {
            return parent::getExcludedFields();
        } else {
            return $this->___callPlugins('getExcludedFields', func_get_args(), $pluginInfo);
        }
    }
}

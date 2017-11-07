<?php
namespace Magento\Webapi\Model\Config\Converter;

/**
 * Interceptor class for @see \Magento\Webapi\Model\Config\Converter
 */
class Interceptor extends \Magento\Webapi\Model\Config\Converter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function convert($source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convert');
        if (!$pluginInfo) {
            return parent::convert($source);
        } else {
            return $this->___callPlugins('convert', func_get_args(), $pluginInfo);
        }
    }
}

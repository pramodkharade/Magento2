<?php
namespace Magento\Checkout\Block\Cart\LayoutProcessor;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\LayoutProcessor
 */
class Interceptor extends \Magento\Checkout\Block\Cart\LayoutProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Block\Checkout\AttributeMerger $merger, \Magento\Directory\Model\ResourceModel\Country\Collection $countryCollection, \Magento\Directory\Model\ResourceModel\Region\Collection $regionCollection, \Magento\Directory\Model\TopDestinationCountries $topDestinationCountries = null)
    {
        $this->___init();
        parent::__construct($merger, $countryCollection, $regionCollection, $topDestinationCountries);
    }

    /**
     * {@inheritdoc}
     */
    public function process($jsLayout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        if (!$pluginInfo) {
            return parent::process($jsLayout);
        } else {
            return $this->___callPlugins('process', func_get_args(), $pluginInfo);
        }
    }
}

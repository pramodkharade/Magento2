<?php
namespace Magento\Catalog\Model\Product\Gallery\ReadHandler;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\ReadHandler
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\ReadHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel)
    {
        $this->___init();
        parent::__construct($attributeRepository, $resourceModel);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($entity, $arguments = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        if (!$pluginInfo) {
            return parent::execute($entity, $arguments);
        } else {
            return $this->___callPlugins('execute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addMediaDataToProduct(\Magento\Catalog\Model\Product $product, array $mediaEntries)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMediaDataToProduct');
        if (!$pluginInfo) {
            return parent::addMediaDataToProduct($product, $mediaEntries);
        } else {
            return $this->___callPlugins('addMediaDataToProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        if (!$pluginInfo) {
            return parent::getAttribute();
        } else {
            return $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo);
        }
    }
}

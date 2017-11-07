<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\RequestInterface $request, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\StockDataFilter $stockFilter, \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks $productLinks, \Magento\Backend\Helper\Js $jsHelper, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Magento\Catalog\Api\Data\ProductCustomOptionInterfaceFactory $customOptionFactory = null, \Magento\Catalog\Api\Data\ProductLinkInterfaceFactory $productLinkFactory = null, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null, \Magento\Catalog\Model\Product\LinkTypeProvider $linkTypeProvider = null, \Magento\Catalog\Controller\Adminhtml\Product\Initialization\Helper\AttributeFilter $attributeFilter = null)
    {
        $this->___init();
        parent::__construct($request, $storeManager, $stockFilter, $productLinks, $jsHelper, $dateFilter, $customOptionFactory, $productLinkFactory, $productRepository, $linkTypeProvider, $attributeFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function initializeFromData(\Magento\Catalog\Model\Product $product, array $productData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initializeFromData');
        if (!$pluginInfo) {
            return parent::initializeFromData($product, $productData);
        } else {
            return $this->___callPlugins('initializeFromData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        if (!$pluginInfo) {
            return parent::initialize($product);
        } else {
            return $this->___callPlugins('initialize', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function mergeProductOptions($productOptions, $overwriteOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mergeProductOptions');
        if (!$pluginInfo) {
            return parent::mergeProductOptions($productOptions, $overwriteOptions);
        } else {
            return $this->___callPlugins('mergeProductOptions', func_get_args(), $pluginInfo);
        }
    }
}

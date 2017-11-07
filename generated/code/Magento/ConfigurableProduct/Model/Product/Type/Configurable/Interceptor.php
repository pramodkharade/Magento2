<?php
namespace Magento\ConfigurableProduct\Model\Product\Type\Configurable;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\Product\Type\Configurable
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\Product\Type\Configurable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\ConfigurableFactory $typeConfigurableFactory, \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $eavAttributeFactory, \Magento\ConfigurableProduct\Model\Product\Type\Configurable\AttributeFactory $configurableAttributeFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product\CollectionFactory $productCollectionFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\CollectionFactory $attributeCollectionFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable $catalogProductTypeConfigurable, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, \Magento\Framework\Cache\FrontendInterface $cache = null, \Magento\Customer\Model\Session $customerSession = null, \Magento\Framework\Serialize\Serializer\Json $serializer = null, \Magento\Catalog\Api\Data\ProductInterfaceFactory $productFactory = null, \Magento\ConfigurableProduct\Model\Product\Type\Collection\SalableProcessor $salableProcessor = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $typeConfigurableFactory, $eavAttributeFactory, $configurableAttributeFactory, $productCollectionFactory, $attributeCollectionFactory, $catalogProductTypeConfigurable, $scopeConfig, $extensionAttributesJoinProcessor, $cache, $customerSession, $serializer, $productFactory, $salableProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getRelationInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRelationInfo');
        if (!$pluginInfo) {
            return parent::getRelationInfo();
        } else {
            return $this->___callPlugins('getRelationInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenIds($parentId, $required = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenIds');
        if (!$pluginInfo) {
            return parent::getChildrenIds($parentId, $required);
        } else {
            return $this->___callPlugins('getChildrenIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getParentIdsByChild($childId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentIdsByChild');
        if (!$pluginInfo) {
            return parent::getParentIdsByChild($childId);
        } else {
            return $this->___callPlugins('getParentIdsByChild', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canUseAttribute(\Magento\Catalog\Model\ResourceModel\Eav\Attribute $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseAttribute');
        if (!$pluginInfo) {
            return parent::canUseAttribute($attribute);
        } else {
            return $this->___callPlugins('canUseAttribute', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedProductAttributeIds($ids, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedProductAttributeIds');
        if (!$pluginInfo) {
            return parent::setUsedProductAttributeIds($ids, $product);
        } else {
            return $this->___callPlugins('setUsedProductAttributeIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setUsedProductAttributes(\Magento\Catalog\Api\Data\ProductInterface $product, array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUsedProductAttributes');
        if (!$pluginInfo) {
            return parent::setUsedProductAttributes($product, $ids);
        } else {
            return $this->___callPlugins('setUsedProductAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProductAttributeIds($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProductAttributeIds');
        if (!$pluginInfo) {
            return parent::getUsedProductAttributeIds($product);
        } else {
            return $this->___callPlugins('getUsedProductAttributeIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProductAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProductAttributes');
        if (!$pluginInfo) {
            return parent::getUsedProductAttributes($product);
        } else {
            return $this->___callPlugins('getUsedProductAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurableAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigurableAttributes');
        if (!$pluginInfo) {
            return parent::getConfigurableAttributes($product);
        } else {
            return $this->___callPlugins('getConfigurableAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetConfigurableAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetConfigurableAttributes');
        if (!$pluginInfo) {
            return parent::resetConfigurableAttributes($product);
        } else {
            return $this->___callPlugins('resetConfigurableAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurableAttributesAsArray($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigurableAttributesAsArray');
        if (!$pluginInfo) {
            return parent::getConfigurableAttributesAsArray($product);
        } else {
            return $this->___callPlugins('getConfigurableAttributesAsArray', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurableAttributeCollection(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigurableAttributeCollection');
        if (!$pluginInfo) {
            return parent::getConfigurableAttributeCollection($product);
        } else {
            return $this->___callPlugins('getConfigurableAttributeCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProductIds($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProductIds');
        if (!$pluginInfo) {
            return parent::getUsedProductIds($product);
        } else {
            return $this->___callPlugins('getUsedProductIds', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProductCollection($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProductCollection');
        if (!$pluginInfo) {
            return parent::getUsedProductCollection($product);
        } else {
            return $this->___callPlugins('getUsedProductCollection', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        if (!$pluginInfo) {
            return parent::beforeSave($product);
        } else {
            return $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function save($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($product);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        if (!$pluginInfo) {
            return parent::isSalable($product);
        } else {
            return $this->___callPlugins('isSalable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIsSalable($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsSalable');
        if (!$pluginInfo) {
            return parent::getIsSalable($product);
        } else {
            return $this->___callPlugins('getIsSalable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductByAttributes($attributesInfo, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductByAttributes');
        if (!$pluginInfo) {
            return parent::getProductByAttributes($attributesInfo, $product);
        } else {
            return $this->___callPlugins('getProductByAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSelectedAttributesInfo($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSelectedAttributesInfo');
        if (!$pluginInfo) {
            return parent::getSelectedAttributesInfo($product);
        } else {
            return $this->___callPlugins('getSelectedAttributesInfo', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductBuyState($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductBuyState');
        if (!$pluginInfo) {
            return parent::checkProductBuyState($product);
        } else {
            return $this->___callPlugins('checkProductBuyState', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSpecifyOptionMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSpecifyOptionMessage');
        if (!$pluginInfo) {
            return parent::getSpecifyOptionMessage();
        } else {
            return $this->___callPlugins('getSpecifyOptionMessage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderOptions');
        if (!$pluginInfo) {
            return parent::getOrderOptions($product);
        } else {
            return $this->___callPlugins('getOrderOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isVirtual($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isVirtual');
        if (!$pluginInfo) {
            return parent::isVirtual($product);
        } else {
            return $this->___callPlugins('isVirtual', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasOptions');
        if (!$pluginInfo) {
            return parent::hasOptions($product);
        } else {
            return $this->___callPlugins('hasOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getWeight($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWeight');
        if (!$pluginInfo) {
            return parent::getWeight($product);
        } else {
            return $this->___callPlugins('getWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function assignProductToOption($optionProduct, $option, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignProductToOption');
        if (!$pluginInfo) {
            return parent::assignProductToOption($optionProduct, $option, $product);
        } else {
            return $this->___callPlugins('assignProductToOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsToPurchaseByReqGroups($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductsToPurchaseByReqGroups');
        if (!$pluginInfo) {
            return parent::getProductsToPurchaseByReqGroups($product);
        } else {
            return $this->___callPlugins('getProductsToPurchaseByReqGroups', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSku($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        if (!$pluginInfo) {
            return parent::getSku($product);
        } else {
            return $this->___callPlugins('getSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processBuyRequest($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processBuyRequest');
        if (!$pluginInfo) {
            return parent::processBuyRequest($product, $buyRequest);
        } else {
            return $this->___callPlugins('processBuyRequest', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurableOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigurableOptions');
        if (!$pluginInfo) {
            return parent::getConfigurableOptions($product);
        } else {
            return $this->___callPlugins('getConfigurableOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function deleteTypeSpecificData(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteTypeSpecificData');
        if (!$pluginInfo) {
            return parent::deleteTypeSpecificData($product);
        } else {
            return $this->___callPlugins('deleteTypeSpecificData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeById($attributeId, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeById');
        if (!$pluginInfo) {
            return parent::getAttributeById($attributeId, $product);
        } else {
            return $this->___callPlugins('getAttributeById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setImageFromChildProduct(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setImageFromChildProduct');
        if (!$pluginInfo) {
            return parent::setImageFromChildProduct($product);
        } else {
            return $this->___callPlugins('setImageFromChildProduct', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        if (!$pluginInfo) {
            return parent::isPossibleBuyFromList($product);
        } else {
            return $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProducts($product, $requiredAttributeIds = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProducts');
        if (!$pluginInfo) {
            return parent::getUsedProducts($product, $requiredAttributeIds);
        } else {
            return $this->___callPlugins('getUsedProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSalableUsedProducts(\Magento\Catalog\Model\Product $product, $requiredAttributeIds = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSalableUsedProducts');
        if (!$pluginInfo) {
            return parent::getSalableUsedProducts($product, $requiredAttributeIds);
        } else {
            return $this->___callPlugins('getSalableUsedProducts', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setTypeId($typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTypeId');
        if (!$pluginInfo) {
            return parent::setTypeId($typeId);
        } else {
            return $this->___callPlugins('setTypeId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSetAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSetAttributes');
        if (!$pluginInfo) {
            return parent::getSetAttributes($product);
        } else {
            return $this->___callPlugins('getSetAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributesCompare($attributeOne, $attributeTwo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'attributesCompare');
        if (!$pluginInfo) {
            return parent::attributesCompare($attributeOne, $attributeTwo);
        } else {
            return $this->___callPlugins('attributesCompare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEditableAttributes($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEditableAttributes');
        if (!$pluginInfo) {
            return parent::getEditableAttributes($product);
        } else {
            return $this->___callPlugins('getEditableAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processConfiguration(\Magento\Framework\DataObject $buyRequest, $product, $processMode = 'lite')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processConfiguration');
        if (!$pluginInfo) {
            return parent::processConfiguration($buyRequest, $product, $processMode);
        } else {
            return $this->___callPlugins('processConfiguration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCartAdvanced(\Magento\Framework\DataObject $buyRequest, $product, $processMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCartAdvanced');
        if (!$pluginInfo) {
            return parent::prepareForCartAdvanced($buyRequest, $product, $processMode);
        } else {
            return $this->___callPlugins('prepareForCartAdvanced', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCart(\Magento\Framework\DataObject $buyRequest, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCart');
        if (!$pluginInfo) {
            return parent::prepareForCart($buyRequest, $product);
        } else {
            return $this->___callPlugins('prepareForCart', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processFileQueue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processFileQueue');
        if (!$pluginInfo) {
            return parent::processFileQueue();
        } else {
            return $this->___callPlugins('processFileQueue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function addFileQueue($queueOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFileQueue');
        if (!$pluginInfo) {
            return parent::addFileQueue($queueOptions);
        } else {
            return $this->___callPlugins('addFileQueue', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isComposite($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isComposite');
        if (!$pluginInfo) {
            return parent::isComposite($product);
        } else {
            return $this->___callPlugins('isComposite', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canConfigure($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canConfigure');
        if (!$pluginInfo) {
            return parent::canConfigure($product);
        } else {
            return $this->___callPlugins('canConfigure', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function canUseQtyDecimals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseQtyDecimals');
        if (!$pluginInfo) {
            return parent::canUseQtyDecimals();
        } else {
            return $this->___callPlugins('canUseQtyDecimals', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionSku($product, $sku = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionSku');
        if (!$pluginInfo) {
            return parent::getOptionSku($product, $sku);
        } else {
            return $this->___callPlugins('getOptionSku', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function updateQtyOption($options, \Magento\Framework\DataObject $option, $value, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQtyOption');
        if (!$pluginInfo) {
            return parent::updateQtyOption($options, $option, $value, $product);
        } else {
            return $this->___callPlugins('updateQtyOption', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasRequiredOptions($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasRequiredOptions');
        if (!$pluginInfo) {
            return parent::hasRequiredOptions($product);
        } else {
            return $this->___callPlugins('hasRequiredOptions', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreFilter($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreFilter');
        if (!$pluginInfo) {
            return parent::getStoreFilter($product);
        } else {
            return $this->___callPlugins('getStoreFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreFilter($store, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreFilter');
        if (!$pluginInfo) {
            return parent::setStoreFilter($store, $product);
        } else {
            return $this->___callPlugins('setStoreFilter', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getForceChildItemQtyChanges($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForceChildItemQtyChanges');
        if (!$pluginInfo) {
            return parent::getForceChildItemQtyChanges($product);
        } else {
            return $this->___callPlugins('getForceChildItemQtyChanges', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function prepareQuoteItemQty($qty, $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareQuoteItemQty');
        if (!$pluginInfo) {
            return parent::prepareQuoteItemQty($qty, $product);
        } else {
            return $this->___callPlugins('prepareQuoteItemQty', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setConfig($config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConfig');
        if (!$pluginInfo) {
            return parent::setConfig($config);
        } else {
            return $this->___callPlugins('setConfig', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSearchableData($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSearchableData');
        if (!$pluginInfo) {
            return parent::getSearchableData($product);
        } else {
            return $this->___callPlugins('getSearchableData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkProductConfiguration($product, $buyRequest)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkProductConfiguration');
        if (!$pluginInfo) {
            return parent::checkProductConfiguration($product, $buyRequest);
        } else {
            return $this->___callPlugins('checkProductConfiguration', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasWeight()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasWeight');
        if (!$pluginInfo) {
            return parent::hasWeight();
        } else {
            return $this->___callPlugins('hasWeight', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        if (!$pluginInfo) {
            return parent::getIdentities($product);
        } else {
            return $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedProducts($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssociatedProducts');
        if (!$pluginInfo) {
            return parent::getAssociatedProducts($product);
        } else {
            return $this->___callPlugins('getAssociatedProducts', func_get_args(), $pluginInfo);
        }
    }
}

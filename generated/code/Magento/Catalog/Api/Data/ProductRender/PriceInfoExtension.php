<?php
namespace Magento\Catalog\Api\Data\ProductRender;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
 */
class PriceInfoExtension extends \Magento\Framework\Api\AbstractSimpleObject implements PriceInfoExtensionInterface
{
    /**
     * @return \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface|null
     */
    public function getMsrp()
    {
        return $this->_get('msrp');
    }

    /**
     * @param \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface $msrp
     * @return $this
     */
    public function setMsrp(\Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface $msrp)
    {
        $this->setData('msrp', $msrp);
        return $this;
    }

    /**
     * @return \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface|null
     */
    public function getTaxAdjustments()
    {
        return $this->_get('tax_adjustments');
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface $taxAdjustments
     * @return $this
     */
    public function setTaxAdjustments(\Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface $taxAdjustments)
    {
        $this->setData('tax_adjustments', $taxAdjustments);
        return $this;
    }

    /**
     * @return \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface[]|null
     */
    public function getWeeeAttributes()
    {
        return $this->_get('weee_attributes');
    }

    /**
     * @param \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface[] $weeeAttributes
     * @return $this
     */
    public function setWeeeAttributes($weeeAttributes)
    {
        $this->setData('weee_attributes', $weeeAttributes);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWeeeAdjustment()
    {
        return $this->_get('weee_adjustment');
    }

    /**
     * @param string $weeeAdjustment
     * @return $this
     */
    public function setWeeeAdjustment($weeeAdjustment)
    {
        $this->setData('weee_adjustment', $weeeAdjustment);
        return $this;
    }
}

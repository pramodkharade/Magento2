<?php
namespace Magento\Catalog\Api\Data\ProductRender;

/**
 * ExtensionInterface class for @see \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface
 */
interface PriceInfoExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface|null
     */
    public function getMsrp();

    /**
     * @param \Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface $msrp
     * @return $this
     */
    public function setMsrp(\Magento\Msrp\Api\Data\ProductRender\MsrpPriceInfoInterface $msrp);

    /**
     * @return \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface|null
     */
    public function getTaxAdjustments();

    /**
     * @param \Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface $taxAdjustments
     * @return $this
     */
    public function setTaxAdjustments(\Magento\Catalog\Api\Data\ProductRender\PriceInfoInterface $taxAdjustments);

    /**
     * @return \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface[]|null
     */
    public function getWeeeAttributes();

    /**
     * @param \Magento\Weee\Api\Data\ProductRender\WeeeAdjustmentAttributeInterface[] $weeeAttributes
     * @return $this
     */
    public function setWeeeAttributes($weeeAttributes);

    /**
     * @return string|null
     */
    public function getWeeeAdjustment();

    /**
     * @param string $weeeAdjustment
     * @return $this
     */
    public function setWeeeAdjustment($weeeAdjustment);
}

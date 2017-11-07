<?php
namespace Magento\Quote\Model\QuoteRepository\SaveHandler;

/**
 * Interceptor class for @see \Magento\Quote\Model\QuoteRepository\SaveHandler
 */
class Interceptor extends \Magento\Quote\Model\QuoteRepository\SaveHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\ResourceModel\Quote $quoteResource, \Magento\Quote\Model\Quote\Item\CartItemPersister $cartItemPersister, \Magento\Quote\Model\Quote\Address\BillingAddressPersister $billingAddressPersister, \Magento\Quote\Model\Quote\ShippingAssignment\ShippingAssignmentPersister $shippingAssignmentPersister, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository = null)
    {
        $this->___init();
        parent::__construct($quoteResource, $cartItemPersister, $billingAddressPersister, $shippingAssignmentPersister, $addressRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Quote\Api\Data\CartInterface $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        if (!$pluginInfo) {
            return parent::save($quote);
        } else {
            return $this->___callPlugins('save', func_get_args(), $pluginInfo);
        }
    }
}

<?php
namespace Magento\Quote\Model\Cart\CartTotalRepository;

/**
 * Interceptor class for @see \Magento\Quote\Model\Cart\CartTotalRepository
 */
class Interceptor extends \Magento\Quote\Model\Cart\CartTotalRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\Data\TotalsInterfaceFactory $totalsFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Quote\Api\CouponManagementInterface $couponService, \Magento\Quote\Model\Cart\TotalsConverter $totalsConverter, \Magento\Quote\Model\Cart\Totals\ItemConverter $converter)
    {
        $this->___init();
        parent::__construct($totalsFactory, $quoteRepository, $dataObjectHelper, $couponService, $totalsConverter, $converter);
    }

    /**
     * {@inheritdoc}
     */
    public function get($cartId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        if (!$pluginInfo) {
            return parent::get($cartId);
        } else {
            return $this->___callPlugins('get', func_get_args(), $pluginInfo);
        }
    }
}

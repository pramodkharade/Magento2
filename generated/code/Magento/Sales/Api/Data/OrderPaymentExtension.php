<?php
namespace Magento\Sales\Api\Data;

/**
 * Extension class for @see \Magento\Sales\Api\Data\OrderPaymentInterface
 */
class OrderPaymentExtension extends \Magento\Framework\Api\AbstractSimpleObject implements OrderPaymentExtensionInterface
{
    /**
     * @return \Magento\Vault\Api\Data\PaymentTokenInterface|null
     */
    public function getVaultPaymentToken()
    {
        return $this->_get('vault_payment_token');
    }

    /**
     * @param \Magento\Vault\Api\Data\PaymentTokenInterface $vaultPaymentToken
     * @return $this
     */
    public function setVaultPaymentToken(\Magento\Vault\Api\Data\PaymentTokenInterface $vaultPaymentToken)
    {
        $this->setData('vault_payment_token', $vaultPaymentToken);
        return $this;
    }
}

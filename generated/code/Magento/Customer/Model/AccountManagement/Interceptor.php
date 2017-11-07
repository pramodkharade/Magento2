<?php
namespace Magento\Customer\Model\AccountManagement;

/**
 * Interceptor class for @see \Magento\Customer\Model\AccountManagement
 */
class Interceptor extends \Magento\Customer\Model\AccountManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Math\Random $mathRandom, \Magento\Customer\Model\Metadata\Validator $validator, \Magento\Customer\Api\Data\ValidationResultsInterfaceFactory $validationResultsDataFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\CustomerMetadataInterface $customerMetadataService, \Magento\Customer\Model\CustomerRegistry $customerRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Stdlib\StringUtils $stringHelper, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Framework\Reflection\DataObjectProcessor $dataProcessor, \Magento\Framework\Registry $registry, \Magento\Customer\Helper\View $customerViewHelper, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Model\Customer $customerModel, \Magento\Framework\DataObjectFactory $objectFactory, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, \Magento\Customer\Model\Customer\CredentialsValidator $credentialsValidator = null)
    {
        $this->___init();
        parent::__construct($customerFactory, $eventManager, $storeManager, $mathRandom, $validator, $validationResultsDataFactory, $addressRepository, $customerMetadataService, $customerRegistry, $logger, $encryptor, $configShare, $stringHelper, $customerRepository, $scopeConfig, $transportBuilder, $dataProcessor, $registry, $customerViewHelper, $dateTime, $customerModel, $objectFactory, $extensibleDataObjectConverter, $credentialsValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function resendConfirmation($email, $websiteId = null, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resendConfirmation');
        if (!$pluginInfo) {
            return parent::resendConfirmation($email, $websiteId, $redirectUrl);
        } else {
            return $this->___callPlugins('resendConfirmation', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function activate($email, $confirmationKey)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'activate');
        if (!$pluginInfo) {
            return parent::activate($email, $confirmationKey);
        } else {
            return $this->___callPlugins('activate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function activateById($customerId, $confirmationKey)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'activateById');
        if (!$pluginInfo) {
            return parent::activateById($customerId, $confirmationKey);
        } else {
            return $this->___callPlugins('activateById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        if (!$pluginInfo) {
            return parent::authenticate($username, $password);
        } else {
            return $this->___callPlugins('authenticate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateResetPasswordLinkToken');
        if (!$pluginInfo) {
            return parent::validateResetPasswordLinkToken($customerId, $resetPasswordLinkToken);
        } else {
            return $this->___callPlugins('validateResetPasswordLinkToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function initiatePasswordReset($email, $template, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initiatePasswordReset');
        if (!$pluginInfo) {
            return parent::initiatePasswordReset($email, $template, $websiteId);
        } else {
            return $this->___callPlugins('initiatePasswordReset', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetPassword($email, $resetToken, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetPassword');
        if (!$pluginInfo) {
            return parent::resetPassword($email, $resetToken, $newPassword);
        } else {
            return $this->___callPlugins('resetPassword', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getConfirmationStatus($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfirmationStatus');
        if (!$pluginInfo) {
            return parent::getConfirmationStatus($customerId);
        } else {
            return $this->___callPlugins('getConfirmationStatus', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createAccount(\Magento\Customer\Api\Data\CustomerInterface $customer, $password = null, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createAccount');
        if (!$pluginInfo) {
            return parent::createAccount($customer, $password, $redirectUrl);
        } else {
            return $this->___callPlugins('createAccount', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function createAccountWithPasswordHash(\Magento\Customer\Api\Data\CustomerInterface $customer, $hash, $redirectUrl = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createAccountWithPasswordHash');
        if (!$pluginInfo) {
            return parent::createAccountWithPasswordHash($customer, $hash, $redirectUrl);
        } else {
            return $this->___callPlugins('createAccountWithPasswordHash', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultBillingAddress($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultBillingAddress');
        if (!$pluginInfo) {
            return parent::getDefaultBillingAddress($customerId);
        } else {
            return $this->___callPlugins('getDefaultBillingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultShippingAddress($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultShippingAddress');
        if (!$pluginInfo) {
            return parent::getDefaultShippingAddress($customerId);
        } else {
            return $this->___callPlugins('getDefaultShippingAddress', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changePassword($email, $currentPassword, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changePassword');
        if (!$pluginInfo) {
            return parent::changePassword($email, $currentPassword, $newPassword);
        } else {
            return $this->___callPlugins('changePassword', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changePasswordById($customerId, $currentPassword, $newPassword)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changePasswordById');
        if (!$pluginInfo) {
            return parent::changePasswordById($customerId, $currentPassword, $newPassword);
        } else {
            return $this->___callPlugins('changePasswordById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        if (!$pluginInfo) {
            return parent::validate($customer);
        } else {
            return $this->___callPlugins('validate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isEmailAvailable($customerEmail, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmailAvailable');
        if (!$pluginInfo) {
            return parent::isEmailAvailable($customerEmail, $websiteId);
        } else {
            return $this->___callPlugins('isEmailAvailable', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isCustomerInStore($customerWebsiteId, $storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCustomerInStore');
        if (!$pluginInfo) {
            return parent::isCustomerInStore($customerWebsiteId, $storeId);
        } else {
            return $this->___callPlugins('isCustomerInStore', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isReadonly($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReadonly');
        if (!$pluginInfo) {
            return parent::isReadonly($customerId);
        } else {
            return $this->___callPlugins('isReadonly', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isResetPasswordLinkTokenExpired($rpToken, $rpTokenCreatedAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isResetPasswordLinkTokenExpired');
        if (!$pluginInfo) {
            return parent::isResetPasswordLinkTokenExpired($rpToken, $rpTokenCreatedAt);
        } else {
            return $this->___callPlugins('isResetPasswordLinkTokenExpired', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function changeResetPasswordLinkToken($customer, $passwordLinkToken)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeResetPasswordLinkToken');
        if (!$pluginInfo) {
            return parent::changeResetPasswordLinkToken($customer, $passwordLinkToken);
        } else {
            return $this->___callPlugins('changeResetPasswordLinkToken', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordReminderEmail($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordReminderEmail');
        if (!$pluginInfo) {
            return parent::sendPasswordReminderEmail($customer);
        } else {
            return $this->___callPlugins('sendPasswordReminderEmail', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function sendPasswordResetConfirmationEmail($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendPasswordResetConfirmationEmail');
        if (!$pluginInfo) {
            return parent::sendPasswordResetConfirmationEmail($customer);
        } else {
            return $this->___callPlugins('sendPasswordResetConfirmationEmail', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordHash($password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPasswordHash');
        if (!$pluginInfo) {
            return parent::getPasswordHash($password);
        } else {
            return $this->___callPlugins('getPasswordHash', func_get_args(), $pluginInfo);
        }
    }
}

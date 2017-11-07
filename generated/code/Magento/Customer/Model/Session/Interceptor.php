<?php
namespace Magento\Customer\Model\Session;

/**
 * Interceptor class for @see \Magento\Customer\Model\Session
 */
class Interceptor extends \Magento\Customer\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Customer\Model\Config\Share $configShare, \Magento\Framework\Url\Helper\Data $coreUrl, \Magento\Customer\Model\Url $customerUrl, \Magento\Customer\Model\ResourceModel\Customer $customerResource, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Framework\UrlFactory $urlFactory, \Magento\Framework\Session\Generic $session, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\App\Response\Http $response)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $configShare, $coreUrl, $customerUrl, $customerResource, $customerFactory, $urlFactory, $session, $eventManager, $httpContext, $customerRepository, $groupManagement, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerConfigShare()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerConfigShare');
        if (!$pluginInfo) {
            return parent::getCustomerConfigShare();
        } else {
            return $this->___callPlugins('getCustomerConfigShare', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerData(\Magento\Customer\Api\Data\CustomerInterface $customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerData');
        if (!$pluginInfo) {
            return parent::setCustomerData($customer);
        } else {
            return $this->___callPlugins('setCustomerData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerData');
        if (!$pluginInfo) {
            return parent::getCustomerData();
        } else {
            return $this->___callPlugins('getCustomerData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerDataObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerDataObject');
        if (!$pluginInfo) {
            return parent::getCustomerDataObject();
        } else {
            return $this->___callPlugins('getCustomerDataObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataObject(\Magento\Customer\Api\Data\CustomerInterface $customerData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerDataObject');
        if (!$pluginInfo) {
            return parent::setCustomerDataObject($customerData);
        } else {
            return $this->___callPlugins('setCustomerDataObject', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomer(\Magento\Customer\Model\Customer $customerModel)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomer');
        if (!$pluginInfo) {
            return parent::setCustomer($customerModel);
        } else {
            return $this->___callPlugins('setCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomer');
        if (!$pluginInfo) {
            return parent::getCustomer();
        } else {
            return $this->___callPlugins('getCustomer', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerId');
        if (!$pluginInfo) {
            return parent::setCustomerId($id);
        } else {
            return $this->___callPlugins('setCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerId');
        if (!$pluginInfo) {
            return parent::getCustomerId();
        } else {
            return $this->___callPlugins('getCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        if (!$pluginInfo) {
            return parent::getId();
        } else {
            return $this->___callPlugins('getId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        if (!$pluginInfo) {
            return parent::setId($customerId);
        } else {
            return $this->___callPlugins('setId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerGroupId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerGroupId');
        if (!$pluginInfo) {
            return parent::setCustomerGroupId($id);
        } else {
            return $this->___callPlugins('setCustomerGroupId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        if (!$pluginInfo) {
            return parent::getCustomerGroupId();
        } else {
            return $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isLoggedIn()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLoggedIn');
        if (!$pluginInfo) {
            return parent::isLoggedIn();
        } else {
            return $this->___callPlugins('isLoggedIn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function checkCustomerId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkCustomerId');
        if (!$pluginInfo) {
            return parent::checkCustomerId($customerId);
        } else {
            return $this->___callPlugins('checkCustomerId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerAsLoggedIn($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerAsLoggedIn');
        if (!$pluginInfo) {
            return parent::setCustomerAsLoggedIn($customer);
        } else {
            return $this->___callPlugins('setCustomerAsLoggedIn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerDataAsLoggedIn($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerDataAsLoggedIn');
        if (!$pluginInfo) {
            return parent::setCustomerDataAsLoggedIn($customer);
        } else {
            return $this->___callPlugins('setCustomerDataAsLoggedIn', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loginById($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loginById');
        if (!$pluginInfo) {
            return parent::loginById($customerId);
        } else {
            return $this->___callPlugins('loginById', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logout');
        if (!$pluginInfo) {
            return parent::logout();
        } else {
            return $this->___callPlugins('logout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate($loginUrl = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authenticate');
        if (!$pluginInfo) {
            return parent::authenticate($loginUrl);
        } else {
            return $this->___callPlugins('authenticate', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setBeforeAuthUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBeforeAuthUrl');
        if (!$pluginInfo) {
            return parent::setBeforeAuthUrl($url);
        } else {
            return $this->___callPlugins('setBeforeAuthUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setAfterAuthUrl($url)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAfterAuthUrl');
        if (!$pluginInfo) {
            return parent::setAfterAuthUrl($url);
        } else {
            return $this->___callPlugins('setAfterAuthUrl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function regenerateId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'regenerateId');
        if (!$pluginInfo) {
            return parent::regenerateId();
        } else {
            return $this->___callPlugins('regenerateId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function writeClose()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'writeClose');
        if (!$pluginInfo) {
            return parent::writeClose();
        } else {
            return $this->___callPlugins('writeClose', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        if (!$pluginInfo) {
            return parent::__call($method, $args);
        } else {
            return $this->___callPlugins('__call', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        if (!$pluginInfo) {
            return parent::start();
        } else {
            return $this->___callPlugins('start', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isSessionExists()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSessionExists');
        if (!$pluginInfo) {
            return parent::isSessionExists();
        } else {
            return $this->___callPlugins('isSessionExists', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $clear = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        if (!$pluginInfo) {
            return parent::getData($key, $clear);
        } else {
            return $this->___callPlugins('getData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionId');
        if (!$pluginInfo) {
            return parent::getSessionId();
        } else {
            return $this->___callPlugins('getSessionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        if (!$pluginInfo) {
            return parent::getName();
        } else {
            return $this->___callPlugins('getName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        if (!$pluginInfo) {
            return parent::setName($name);
        } else {
            return $this->___callPlugins('setName', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(array $options = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'destroy');
        if (!$pluginInfo) {
            return parent::destroy($options);
        } else {
            return $this->___callPlugins('destroy', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        if (!$pluginInfo) {
            return parent::clearStorage();
        } else {
            return $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieDomain()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieDomain');
        if (!$pluginInfo) {
            return parent::getCookieDomain();
        } else {
            return $this->___callPlugins('getCookieDomain', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookiePath()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookiePath');
        if (!$pluginInfo) {
            return parent::getCookiePath();
        } else {
            return $this->___callPlugins('getCookiePath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getCookieLifetime()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCookieLifetime');
        if (!$pluginInfo) {
            return parent::getCookieLifetime();
        } else {
            return $this->___callPlugins('getCookieLifetime', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setSessionId($sessionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSessionId');
        if (!$pluginInfo) {
            return parent::setSessionId($sessionId);
        } else {
            return $this->___callPlugins('setSessionId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionIdForHost($urlHost)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionIdForHost');
        if (!$pluginInfo) {
            return parent::getSessionIdForHost($urlHost);
        } else {
            return $this->___callPlugins('getSessionIdForHost', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForHost($host)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForHost');
        if (!$pluginInfo) {
            return parent::isValidForHost($host);
        } else {
            return $this->___callPlugins('isValidForHost', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isValidForPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isValidForPath');
        if (!$pluginInfo) {
            return parent::isValidForPath($path);
        } else {
            return $this->___callPlugins('isValidForPath', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function expireSessionCookie()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'expireSessionCookie');
        if (!$pluginInfo) {
            return parent::expireSessionCookie();
        } else {
            return $this->___callPlugins('expireSessionCookie', func_get_args(), $pluginInfo);
        }
    }
}

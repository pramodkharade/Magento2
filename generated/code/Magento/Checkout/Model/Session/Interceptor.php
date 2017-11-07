<?php
namespace Magento\Checkout\Model\Session;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Session
 */
class Interceptor extends \Magento\Checkout\Model\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Model\QuoteFactory $quoteFactory)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $orderFactory, $customerSession, $quoteRepository, $remoteAddress, $eventManager, $storeManager, $customerRepository, $quoteIdMaskFactory, $quoteFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerData($customer)
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
    public function hasQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasQuote');
        if (!$pluginInfo) {
            return parent::hasQuote();
        } else {
            return $this->___callPlugins('hasQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setLoadInactive($load = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLoadInactive');
        if (!$pluginInfo) {
            return parent::setLoadInactive($load);
        } else {
            return $this->___callPlugins('setLoadInactive', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        if (!$pluginInfo) {
            return parent::getQuote();
        } else {
            return $this->___callPlugins('getQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setQuoteId($quoteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuoteId');
        if (!$pluginInfo) {
            return parent::setQuoteId($quoteId);
        } else {
            return $this->___callPlugins('setQuoteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteId');
        if (!$pluginInfo) {
            return parent::getQuoteId();
        } else {
            return $this->___callPlugins('getQuoteId', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function loadCustomerQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadCustomerQuote');
        if (!$pluginInfo) {
            return parent::loadCustomerQuote();
        } else {
            return $this->___callPlugins('loadCustomerQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setStepData($step, $data, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStepData');
        if (!$pluginInfo) {
            return parent::setStepData($step, $data, $value);
        } else {
            return $this->___callPlugins('setStepData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getStepData($step = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStepData');
        if (!$pluginInfo) {
            return parent::getStepData($step, $data);
        } else {
            return $this->___callPlugins('getStepData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function clearQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearQuote');
        if (!$pluginInfo) {
            return parent::clearQuote();
        } else {
            return $this->___callPlugins('clearQuote', func_get_args(), $pluginInfo);
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
    public function clearHelperData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearHelperData');
        if (!$pluginInfo) {
            return parent::clearHelperData();
        } else {
            return $this->___callPlugins('clearHelperData', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function resetCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetCheckout');
        if (!$pluginInfo) {
            return parent::resetCheckout();
        } else {
            return $this->___callPlugins('resetCheckout', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function replaceQuote($quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'replaceQuote');
        if (!$pluginInfo) {
            return parent::replaceQuote($quote);
        } else {
            return $this->___callPlugins('replaceQuote', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLastRealOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastRealOrder');
        if (!$pluginInfo) {
            return parent::getLastRealOrder();
        } else {
            return $this->___callPlugins('getLastRealOrder', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function restoreQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'restoreQuote');
        if (!$pluginInfo) {
            return parent::restoreQuote();
        } else {
            return $this->___callPlugins('restoreQuote', func_get_args(), $pluginInfo);
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

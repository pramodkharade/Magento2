<?php
namespace Magento\Backend\Model\Auth\Session;

/**
 * Interceptor class for @see \Magento\Backend\Model\Auth\Session
 */
class Interceptor extends \Magento\Backend\Model\Auth\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Framework\Acl\Builder $aclBuilder, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Backend\App\ConfigInterface $config)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $aclBuilder, $backendUrl, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshAcl($user = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refreshAcl');
        if (!$pluginInfo) {
            return parent::refreshAcl($user);
        } else {
            return $this->___callPlugins('refreshAcl', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAllowed($resource, $privilege = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAllowed');
        if (!$pluginInfo) {
            return parent::isAllowed($resource, $privilege);
        } else {
            return $this->___callPlugins('isAllowed', func_get_args(), $pluginInfo);
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
    public function prolong()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prolong');
        if (!$pluginInfo) {
            return parent::prolong();
        } else {
            return $this->___callPlugins('prolong', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isFirstPageAfterLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isFirstPageAfterLogin');
        if (!$pluginInfo) {
            return parent::isFirstPageAfterLogin();
        } else {
            return $this->___callPlugins('isFirstPageAfterLogin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFirstPageAfterLogin($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFirstPageAfterLogin');
        if (!$pluginInfo) {
            return parent::setIsFirstPageAfterLogin($value);
        } else {
            return $this->___callPlugins('setIsFirstPageAfterLogin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogin');
        if (!$pluginInfo) {
            return parent::processLogin();
        } else {
            return $this->___callPlugins('processLogin', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function processLogout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogout');
        if (!$pluginInfo) {
            return parent::processLogout();
        } else {
            return $this->___callPlugins('processLogout', func_get_args(), $pluginInfo);
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

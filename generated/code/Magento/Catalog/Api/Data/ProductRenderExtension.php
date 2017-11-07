<?php
namespace Magento\Catalog\Api\Data;

/**
 * Extension class for @see \Magento\Catalog\Api\Data\ProductRenderInterface
 */
class ProductRenderExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ProductRenderExtensionInterface
{
    /**
     * @return string|null
     */
    public function getReviewHtml()
    {
        return $this->_get('review_html');
    }

    /**
     * @param string $reviewHtml
     * @return $this
     */
    public function setReviewHtml($reviewHtml)
    {
        $this->setData('review_html', $reviewHtml);
        return $this;
    }

    /**
     * @return \Magento\Catalog\Api\Data\ProductRender\ButtonInterface|null
     */
    public function getWishlistButton()
    {
        return $this->_get('wishlist_button');
    }

    /**
     * @param \Magento\Catalog\Api\Data\ProductRender\ButtonInterface $wishlistButton
     * @return $this
     */
    public function setWishlistButton(\Magento\Catalog\Api\Data\ProductRender\ButtonInterface $wishlistButton)
    {
        $this->setData('wishlist_button', $wishlistButton);
        return $this;
    }
}

<?php
namespace Magento\Catalog\Model;

class ProductRenderSearchResults extends \Magento\Framework\Api\SearchResults
{
    /**
     * Returns array of items
     *
     * @return \Magento\Catalog\Model\ProductRender[]
     */
    public function getItems()
    {
        return parent::getItems();
    }
}

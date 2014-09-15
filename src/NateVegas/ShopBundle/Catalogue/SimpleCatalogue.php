<?php
namespace NateVegas\ShopBundle\Catalogue;

/**
 * Class Catalogue
 * @package NateVegas\ShopBundle
 */
class SimpleCatalogue
{
    /**
     * @return array
     */
    public function getItems() {
        return array('black hat', 'red hat', 'blue pants', 'orange scarf', 'red pants', 'red checkered scarf');
    }
} 
<?php
namespace NateVegas\ShopBundle\Controller;

use NateVegas\ShopBundle\Catalogue\SimpleCatalogue;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BuyController
 * @package NateVegas\ShopBundle\Controller
 */
class BuyController extends Controller
{
    public function indexAction(Request $request) {

        $catalogue = new SimpleCatalogue();

        $item = $this->get('request')->request->get('item_name');

        if (!array_search($item, $catalogue->getItems())) {
            throw $this->createNotFoundException('The product "'.$item.'" does not exist');
        }

        return $this->render('NateVegasShopBundle:Buy:index.html.twig',  array('item_purchased' => $item));
    }
} 
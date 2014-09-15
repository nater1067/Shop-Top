<?php
namespace NateVegas\ShopBundle\Controller;

use NateVegas\ShopBundle\Catalogue\SimpleCatalogue;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SearchController
 * @package NateVegas\ShopBundle\Controller
 */
class SearchController extends Controller
{
    public function indexAction(Request $request)
    {
        $catalogue = new SimpleCatalogue();

        $items = $catalogue->getItems();

        $searchQuery = $request->query->get('search');

        $results = array();
        if (!empty($searchQuery)) {
            $results = array_filter($items, function ($element) use ($searchQuery) {
                return strpos($element, strtolower($searchQuery)) !== false;
            });
        }

        return $this->render('NateVegasShopBundle:Search:index.html.twig',  array('results' => $results));
    }
}
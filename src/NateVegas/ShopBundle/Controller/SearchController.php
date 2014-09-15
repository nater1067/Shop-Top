<?php
namespace NateVegas\ShopBundle\Controller;

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
        $items = array('black hat', 'red hat', 'blue pants', 'orange scarf', 'red pants', 'red checkered scarf');

        $searchQuery = $request->query->get('search');

        $results = array();
        if (!empty($searchQuery)) {
            $results = array_filter($items, function ($element) use ($searchQuery) {
                return strpos($element, $searchQuery) !== false;
            });
        }

        return $this->render('NateVegasShopBundle:Search:index.html.twig',  array('results' => $results));
    }
}
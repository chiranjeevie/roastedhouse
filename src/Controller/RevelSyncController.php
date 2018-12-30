<?php
namespace App\Controller;


use Revel\Revel;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use NetSuite\NetSuiteService;
use NetSuite\Classes\GetRequest;
use NetSuite\Classes\RecordRef;
use NetSuite\Classes\Customer;
use NetSuite\Classes\AddRequest;
use Revel\Models\OrderItem;


class RevelSyncController extends AbstractController
{

    /**
     * @Route("/revel_sync", name="revelApi")
     */
    public function revelSync()
    {

        $revel = new Revel('trustangle',
            '16b74187bf6e4ddfa7fcc9a1cf31769a321acaf0ebbe4adeb0bd537ba6b374db',
            '71501fa6ee144eb6a78412647c253ddc');
        //echo "<pre>";

        // Get all products.
        $products = $revel->Categories()->all();
        echo "<pre>";
        dump($products);die;

         // Get an establishment.
        //$establishment = $revel->establishments()->findById(1);

    }

}
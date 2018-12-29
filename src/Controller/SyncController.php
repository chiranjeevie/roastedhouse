<?php
namespace App\Controller;


use Revel\Revel;
use Revel\Models\Order;
use Revel\Models\OrderItem;
use Revel\Models\OrderItemModifier;
use Revel\Models\PaymentInfo;
use Revel\Models\OrderInfo;
use Revel\Models\Customer;
use Revel\Models\Category;
use Revel\Models\Product;
use Revel\Models\Discount;
use Revel\Models\Modifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SyncController extends AbstractController
{

    /**
     * @Route("/revel_sync", name="revelApi")
     */
    public function revelSync()
    {
        $revel = new Revel('domain', 'secret', 'key');
        // Get all products.
        $products = $revel->products()->all();
        echo "<pre>";
        print_r($products);die;

         // Get an establishment.
        //$establishment = $revel->establishments()->findById(1);

    }

}
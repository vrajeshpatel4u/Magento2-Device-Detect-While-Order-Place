<?php
namespace V4U\DetectDevice\Observer;

use Magento\Checkout\Model\Cart;
use Magento\Framework\Event\ObserverInterface;

class SalesOrderPlaceAfter implements ObserverInterface
{
    /**
     * @var \Magento\Checkout\Model\Cart
     */
    protected $cart;

    public function __construct(
        Cart $cart
    ){
        $this->cart = $cart;
    } 
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        try {
            $order = $observer->getEvent()->getOrder();
			$quote = $this->cart->getQuote();
            $order->setDevice($quote->getDevice());
        } catch (\Exception $e){
            error_log($e->getMessage());
        }
    }
}
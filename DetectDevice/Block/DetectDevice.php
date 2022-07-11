<?php
namespace V4U\DetectDevice\Block;

use Magento\Checkout\Model\Cart;
use Magento\Framework\HTTP\Header;

class DetectDevice extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magento\Checkout\Model\Cart
     */
    protected $cart;

    /**
     * @param Cart $cart
    */

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        Cart $cart,
        array $data = []
    )
    {
        $this->cart = $cart;
        parent::__construct($context, $data);
    }

    public function getQuote()
    {
        $quote = $this->cart->getQuote();
        return $quote; 
    }
}
?>
<?php

namespace AppBundle\DTO;

class OrderDetail {
    
    public function __construct() {
        
    }
    private $order_no;
    private $product_code;
    private $money;
    private $tax_rate; 
    private $last_modified;
    private $discount;
    private $product_name;
    private $quantity;
    private $unit_price;
    
    /**
     * @return mixed
     */
    public function getOrder_no()
    {
        return $this->order_no;
    }
    
    /**
     * @return mixed
     */
    public function getProduct_code()
    {
        return $this->product_code;
    }
    
    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }
    
    /**
     * @return mixed
     */
    public function getTax_rate()
    {
        return $this->tax_rate;
    }
    
    /**
     * @return mixed
     */
    public function getLast_modified()
    {
        return $this->last_modified;
    }
    
    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    
    /**
     * @return mixed
     */
    public function getBrand_code()
    {
        return $this->brand_code;
    }
    
    /**
     * @return mixed
     */
    public function getSuffix_code()
    {
        return $this->suffix_code;
    }
    
    /**
     * @return mixed
     */
    public function getProduct_name()
    {
        return $this->product_name;
    }
    
    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * @return mixed
     */
    public function getUnit_price()
    {
        return $this->unit_price;
    }
    
    /**
     * @param mixed $order_no
     */
    public function setOrder_no($order_no)
    {
        $this->order_no = $order_no;
    }
    
    /**
     * @param mixed $product_code
     */
    public function setProduct_code($product_code)
    {
        $this->product_code = $product_code;
    }
    
    /**
     * @param mixed $money
     */
    public function setMoney($money)
    {
        $this->money = $money;
    }
    
    /**
     * @param mixed $tax_rate
     */
    public function setTax_rate($tax_rate)
    {
        $this->tax_rate = $tax_rate;
    }
    
    /**
     * @param mixed $last_modified
     */
    public function setLast_modified($last_modified)
    {
        $this->last_modified = $last_modified;
    }
    
    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    
    /**
     * @param mixed $brand_code
     */
    public function setBrand_code($brand_code)
    {
        $this->brand_code = $brand_code;
    }
    
    /**
     * @param mixed $suffix_code
     */
    public function setSuffix_code($suffix_code)
    {
        $this->suffix_code = $suffix_code;
    }
    
    /**
     * @param mixed $product_name
     */
    public function setProduct_name($product_name)
    {
        $this->product_name = $product_name;
    }
    
    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    /**
     * @param mixed $unit_price
     */
    public function setUnit_price($unit_price)
    {
        $this->unit_price = $unit_price;
    }
}
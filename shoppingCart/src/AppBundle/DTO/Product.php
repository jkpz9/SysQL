<?php

namespace AppBundle\DTO;

class Product {
    
    public function __construct() {
        
    }
    
    private $product_code;
    private $product_name;
    private $product_category;
    private $product_price;
    private $product_origin;
    private $imported_date;
    private $last_modified;
    private $quantity;
    private $sold_quantity;
    
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
    public function getProduct_name()
    {
        return $this->product_name;
    }
    
    /**
     * @return mixed
     */
    public function getProduct_category()
    {
        return $this->product_category;
    }
    
    /**
     * @return mixed
     */
    public function getProduct_price()
    {
        return $this->product_price;
    }
    
    /**
     * @return mixed
     */
    public function getProduct_origin()
    {
        return $this->product_origin;
    }
    
    /**
     * @return mixed
     */
    public function getImported_date()
    {
        return $this->imported_date;
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
    public function getQuantity()
    {
        return $this->quantity;
    }
    
    /**
     * @return mixed
     */
    public function getSold_quantity()
    {
        return $this->sold_quantity;
    }
    
    /**
     * @param mixed $product_code
     */
    public function setProduct_code($product_code)
    {
        $this->product_code = $product_code;
    }
    
    /**
     * @param mixed $product_name
     */
    public function setProduct_name($product_name)
    {
        $this->product_name = $product_name;
    }
    
    /**
     * @param mixed $product_category
     */
    public function setProduct_category($product_category)
    {
        $this->product_category = $product_category;
    }
    
    /**
     * @param mixed $product_price
     */
    public function setProduct_price($product_price)
    {
        $this->product_price = $product_price;
    }
    
    /**
     * @param mixed $product_origin
     */
    public function setProduct_origin($product_origin)
    {
        $this->product_origin = $product_origin;
    }
    
    /**
     * @param mixed $imported_date
     */
    public function setImported_date($imported_date)
    {
        $this->imported_date = $imported_date;
    }
    
    /**
     * @param mixed $last_modified
     */
    public function setLast_modified($last_modified)
    {
        $this->last_modified = $last_modified;
    }
    
    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    
    /**
     * @param mixed $sold_quantity
     */
    public function setSold_quantity($sold_quantity)
    {
        $this->sold_quantity = $sold_quantity;
    }
        
}
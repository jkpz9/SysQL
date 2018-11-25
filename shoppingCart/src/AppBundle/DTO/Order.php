<?php

namespace AppBundle\DTO;

class Order {
    
    public function __construct() {
        
    }
    private $order_no;
    private $customer_code;
    private $order_date;
    private $order_money;
    private $consumtion_tax;
    private $order_sts;
    private $money;
    
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
    public function getCustomer_code()
    {
        return $this->customer_code;
    }
    
    /**
     * @return mixed
     */
    public function getOrder_date()
    {
        return $this->order_date;
    }
    
    /**
     * @return mixed
     */
    public function getOrder_money()
    {
        return $this->order_money;
    }
    
    /**
     * @return mixed
     */
    public function getConsumtion_tax()
    {
        return $this->consumtion_tax;
    }
    
    /**
     * @return mixed
     */
    public function getOrder_sts()
    {
        return $this->order_sts;
    }
    
    
    /**
     * @param mixed $order_no
     */
    public function setOrder_no($order_no)
    {
        $this->order_no = $order_no;
    }
    
    /**
     * @param mixed $customer_code
     */
    public function setCustomer_code($customer_code)
    {
        $this->customer_code = $customer_code;
    }
    
    /**
     * @param mixed $order_money
     */
    public function setOrder_money($order_money)
    {
        $this->order_money = $order_money;
    }
    
    /**
     * @param mixed $consumtion_tax
     */
    public function setConsumtion_tax($consumtion_tax)
    {
        $this->consumtion_tax = $consumtion_tax;
    }
    
    /**
     * @param mixed $order_sts
     */
    public function setOrder_sts($order_sts)
    {
        $this->order_sts = $order_sts;
    }
    
    /**
     * @param mixed $order_date
     */
    public function setOrder_date($order_date)
    {
        $this->order_date = $order_date;
    }
    
    /**
     * Get the value of money
     */ 
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set the value of money
     *
     * @return  self
     */ 
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }
}
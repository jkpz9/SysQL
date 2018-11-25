<?php

namespace AppBundle\DTO;

class Customer {
    
    public function __construct() {
        
    }
    
    private $ustomer_code;
    private $customer_name;
    private $address;
    
    /**
     * @return mixed
     */
    public function getUstomer_code()
    {
        return $this->ustomer_code;
    }
    
    /**
     * @return mixed
     */
    public function getCustomer_name()
    {
        return $this->customer_name;
    }
    
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * @param mixed $ustomer_code
     */
    public function setUstomer_code($ustomer_code)
    {
        $this->ustomer_code = $ustomer_code;
    }
    
    /**
     * @param mixed $customer_name
     */
    public function setCustomer_name($customer_name)
    {
        $this->customer_name = $customer_name;
    }
    
    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
   
}
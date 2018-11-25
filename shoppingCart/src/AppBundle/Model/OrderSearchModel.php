<?php

namespace AppBundle\Model;

class OrderSearchModel {
    
    private $from_date;
    private $to_date;
    private $customer_code;
    private $brand_code;
    private $brand_suffix;
    /**
     * @return mixed
     */
    public function getFromDate()
    {
        return $this->from_date;
    }

    /**
     * @return mixed
     */
    public function getToDate()
    {
        return $this->to_date;
    }

    /**
     * @return mixed
     */
    public function getCustomerCode()
    {
        return $this->customer_code;
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
    public function getBrand_suffix()
    {
        return $this->brand_suffix;
    }

    /**
     * @param mixed $from_date
     */
    public function setFromDate($from_date)
    {
        $this->from_date = $from_date;
    }

    /**
     * @param mixed $to_date
     */
    public function setToDate($to_date)
    {
        $this->to_date = $to_date;
    }

    /**
     * @param mixed $customer_code
     */
    public function setCustomerCode($customer_code)
    {
        $this->customer_code = $customer_code;
    }

    /**
     * @param mixed $brand_code
     */
    public function setBrand_code($brand_code)
    {
        $this->brand_code = $brand_code;
    }

    /**
     * @param mixed $brand_suffix
     */
    public function setBrand_suffix($brand_suffix)
    {
        $this->brand_suffix = $brand_suffix;
    }

    
}
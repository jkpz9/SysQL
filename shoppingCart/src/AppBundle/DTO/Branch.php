<?php

namespace AppBundle\DTO;

class Branch {

    private $branch_code;
    private $suffix_code;
    private $branch_name;
    private $suffix_name;
    private $street;
    
    /**
     * @return mixed
     */
    public function getBranch_code()
    {
        return $this->branch_code;
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
    public function getBranch_name()
    {
        return $this->branch_name;
    }

    /**
     * @return mixed
     */
    public function getSuffix_name()
    {
        return $this->suffix_name;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $branch_code
     */
    public function setBranch_code($branch_code)
    {
        $this->branch_code = $branch_code;
    }

    /**
     * @param mixed $suffix_code
     */
    public function setSuffix_code($suffix_code)
    {
        $this->suffix_code = $suffix_code;
    }

    /**
     * @param mixed $branch_name
     */
    public function setBranch_name($branch_name)
    {
        $this->branch_name = $branch_name;
    }

    /**
     * @param mixed $suffix_name
     */
    public function setSuffix_name($suffix_name)
    {
        $this->suffix_name = $suffix_name;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function __construct() {
        
    }
        
}
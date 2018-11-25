<?php

namespace AppBundle\DTO;

class Category {
    
    public function __construct() {
        
    }
   
    private $category_code;
    private $category_name;
    private $active;
    
    /**
     * @return mixed
     */
    public function getCategory_code()
    {
        return $this->category_code;
    }
    
    /**
     * @return mixed
     */
    public function getCategory_name()
    {
        return $this->category_name;
    }
    
    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * @param mixed $category_code
     */
    public function setCategory_code($category_code)
    {
        $this->category_code = $category_code;
    }
    
    /**
     * @param mixed $category_name
     */
    public function setCategory_name($category_name)
    {
        $this->category_name = $category_name;
    }
    
    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    
    
}
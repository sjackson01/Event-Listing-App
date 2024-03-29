<?php

class ListingFeatured extends ListingPremium
{
    protected $status = 'featured';
    protected $coc;
    
     /**
     * Calls individual methods to set values for object properties.
     * Uses parent setValues() method to call individual methods from parent class.
     * @param array $data Data to set from user or database
     */
    public function setValues($data = []) {
        parent::setValues($data);
        if (isset($data['coc'])) {
            $this->setCoc($data['coc']);
        }
    }

     public function getCoc()
     {
         return $this->coc;
     }

     /** 
      * Strip tags permitting allowed_tags set the local property $coc
      * @param string $value to set property
      */

      public function setCoc($value)
      {     
          $this->coc = trim(strip_tags($value, self::$allowed_tags));
      }


}

?>
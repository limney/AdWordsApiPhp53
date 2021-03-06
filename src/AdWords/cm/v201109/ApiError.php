<?php

namespace AdWords\cm\v201109;



abstract class ApiError 
{
    /**
     * The OGNL field path to identify cause of error.
     * @var string
     */
    public $fieldPath;
    /**
     * The data that caused the error.
     * @var string
     */
    public $trigger;
    /**
     * A simple string representation of the error and reason.
     * @var string
     */
    public $errorString;
    /**
     * Indicates that this instance is a subtype of ApiError.
     * Although this field is returned in the response, it is ignored on input
     * and cannot be selected. Specify xsi:type instead.
     * @var string
     */
    public $ApiErrorType;
    private $_propertyMap = array(
        "ApiError.Type" => "ApiErrorType",
    );

    /**
     * Set property with php-incompatible name
     *
     * @param string $var   attribute name to set
     * @param mixed  $value Value to set
     */
    public function __set($var, $value)
    {
        if (isset($this->_propertyMap[$var])) {
            $this->{$this->_propertyMap[$var]} = $value;
        }
    }

    /**
     * Get property with php-incompatible name
     *
     * @param string $var attribute name to get.
     * @return mixed Variable value
     */
    public function __get($var)
    {
        if (array_key_exists($var, $this->_propertyMap)) {
            return $this->{$this->_propertyMap[$var]};
        } else {
            return null;
        }
    }
}
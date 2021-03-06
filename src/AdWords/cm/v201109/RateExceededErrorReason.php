<?php

namespace AdWords\cm\v201109;



class RateExceededErrorReason
{
    /**
     * Rate exceeded.
     */
    const CHOICE_RATE_EXCEEDED = 'RATE_EXCEEDED';

    private $_validValues = array(
        'RATE_EXCEEDED',
    );

    private $_value;

    public function __construct($value)
    {
        if (!in_array($value, $this->_validValues))
            throw new \InvalidArgumentException(
                sprintf('Invalid enum value %s', $value)
            );

        $this->_value = $value;
    }

    public function __toString()
    {
        return $this->_value;
    }
}
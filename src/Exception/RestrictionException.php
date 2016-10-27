<?php
namespace GoetasWebservices\XML\XSDReader\Exception;

class RestrictionException extends \Exception
{
    const ERROR_CODE_ENUMARATION = 1;
    const ERROR_CODE_PATTERN = 2;
    const ERROR_CODE_MIN_EXCLUSIVE = 3;
    const ERROR_CODE_MIN_INCLUSIVE = 4;
    const ERROR_CODE_MAX_EXCLUSIVE = 5;
    const ERROR_CODE_MAX_INCLUSIVE = 6;
    const ERROR_CODE_TOTAL_DIGITS = 7;
    const ERROR_CODE_FRACTION_DIGITS = 8;
    const ERROR_CODE_LENGTH = 9;
    const ERROR_CODE_MIN_LENGTH = 10;
    const ERROR_CODE_MAX_LENGTH = 11;
    const ERROR_CODE_VALUE = 12;
    const ERROR_CODE_GTE = 13;
    const ERROR_CODE_REQUIRED = 14;
    
    protected $value;
    protected $verifier;    
    protected $property;    
    
    public function __construct($message = "", $code = 0, $value = "", $verifier = "", $property = "", \Exception $previous = null) {
        $this->value = $value;
        $this->verifier = $verifier;
        $this->property = $property;
        parent::__construct($message, $code, $previous);
    }
    
    public function getValue() 
    {
        return $this->value;
    }
    
    public function getVerifier() 
    {
        return $this->verifier;
    }
    
    public function getProperty() 
    {
        return $this->property;
    }
    
}
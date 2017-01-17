<?php

namespace korkiss\taxi;

/**
 * File for class GetTaxiStructGetTaxiInfosResponse
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */

/**
 * This class stands for GetTaxiStructGetTaxiInfosResponse originally named GetTaxiInfosResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://82.138.16.126:8888/TaxiPublic/Service.svc?xsd=xsd0}
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */
class GetTaxiStructGetTaxiInfosResponse extends GetTaxiWsdlClass
{

  /**
   * The GetTaxiInfosResult
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var GetTaxiStructArrayOfTaxiInfo
   */
  public $GetTaxiInfosResult;

  /**
   * Constructor method for GetTaxiInfosResponse
   * @see parent::__construct()
   * @param GetTaxiStructArrayOfTaxiInfo $_getTaxiInfosResult
   * @return GetTaxiStructGetTaxiInfosResponse
   */
  public function __construct($_getTaxiInfosResult = NULL)
  {
    parent::__construct(array('GetTaxiInfosResult' => ($_getTaxiInfosResult instanceof GetTaxiStructArrayOfTaxiInfo) ? $_getTaxiInfosResult : new GetTaxiStructArrayOfTaxiInfo($_getTaxiInfosResult)), false);
  }

  /**
   * Get GetTaxiInfosResult value
   * @return GetTaxiStructArrayOfTaxiInfo|null
   */
  public function getGetTaxiInfosResult()
  {
    return $this->GetTaxiInfosResult;
  }

  /**
   * Set GetTaxiInfosResult value
   * @param GetTaxiStructArrayOfTaxiInfo $_getTaxiInfosResult the GetTaxiInfosResult
   * @return GetTaxiStructArrayOfTaxiInfo
   */
  public function setGetTaxiInfosResult($_getTaxiInfosResult)
  {
    return ($this->GetTaxiInfosResult = $_getTaxiInfosResult);
  }

  /**
   * Method called when an object has been exported with var_export() functions
   * It allows to return an object instantiated with the values
   * @see GetTaxiWsdlClass::__set_state()
   * @uses GetTaxiWsdlClass::__set_state()
   * @param array $_array the exported values
   * @return GetTaxiStructGetTaxiInfosResponse
   */
  public static function __set_state(array $_array, $_className = __CLASS__)
  {
    return parent::__set_state($_array, $_className);
  }

  /**
   * Method returning the class name
   * @return string __CLASS__
   */
  public function __toString()
  {
    return __CLASS__;
  }

}

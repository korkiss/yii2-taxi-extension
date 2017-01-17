<?php

namespace korkiss\taxi;

/**
 * File for class GetTaxiStructGetTaxiInfos
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */

/**
 * This class stands for GetTaxiStructGetTaxiInfos originally named GetTaxiInfos
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://82.138.16.126:8888/TaxiPublic/Service.svc?xsd=xsd0}
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */
class GetTaxiStructGetTaxiInfos extends GetTaxiWsdlClass
{

  /**
   * The request
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var GetTaxiStructGetTaxiInfosRequest
   */
  public $request;

  /**
   * Constructor method for GetTaxiInfos
   * @see parent::__construct()
   * @param GetTaxiStructGetTaxiInfosRequest $_request
   * @return GetTaxiStructGetTaxiInfos
   */
  public function __construct($_request = NULL)
  {
    parent::__construct(array('request' => $_request), false);
  }

  /**
   * Get request value
   * @return GetTaxiStructGetTaxiInfosRequest|null
   */
  public function getRequest()
  {
    return $this->request;
  }

  /**
   * Set request value
   * @param GetTaxiStructGetTaxiInfosRequest $_request the request
   * @return GetTaxiStructGetTaxiInfosRequest
   */
  public function setRequest($_request)
  {
    return ($this->request = $_request);
  }

  /**
   * Method called when an object has been exported with var_export() functions
   * It allows to return an object instantiated with the values
   * @see GetTaxiWsdlClass::__set_state()
   * @uses GetTaxiWsdlClass::__set_state()
   * @param array $_array the exported values
   * @return GetTaxiStructGetTaxiInfos
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

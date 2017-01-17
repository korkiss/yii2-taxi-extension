<?php

namespace korkiss\taxi;

/**
 * File for class GetTaxiStructArrayOfTaxiInfo
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */

/**
 * This class stands for GetTaxiStructArrayOfTaxiInfo originally named ArrayOfTaxiInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://82.138.16.126:8888/TaxiPublic/Service.svc?xsd=xsd0}
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */
class GetTaxiStructArrayOfTaxiInfo extends GetTaxiWsdlClass
{

  /**
   * The TaxiInfo
   * Meta informations extracted from the WSDL
   * - maxOccurs : unbounded
   * - minOccurs : 0
   * - nillable : true
   * @var GetTaxiStructTaxiInfo
   */
  public $TaxiInfo;

  /**
   * Constructor method for ArrayOfTaxiInfo
   * @see parent::__construct()
   * @param GetTaxiStructTaxiInfo $_taxiInfo
   * @return GetTaxiStructArrayOfTaxiInfo
   */
  public function __construct($_taxiInfo = NULL)
  {
    parent::__construct(array('TaxiInfo' => $_taxiInfo), false);
  }

  /**
   * Get TaxiInfo value
   * @return GetTaxiStructTaxiInfo|null
   */
  public function getTaxiInfo()
  {
    return $this->TaxiInfo;
  }

  /**
   * Set TaxiInfo value
   * @param GetTaxiStructTaxiInfo $_taxiInfo the TaxiInfo
   * @return GetTaxiStructTaxiInfo
   */
  public function setTaxiInfo($_taxiInfo)
  {
    return ($this->TaxiInfo = $_taxiInfo);
  }

  /**
   * Returns the current element
   * @see GetTaxiWsdlClass::current()
   * @return GetTaxiStructTaxiInfo
   */
  public function current()
  {
    return parent::current();
  }

  /**
   * Returns the indexed element
   * @see GetTaxiWsdlClass::item()
   * @param int $_index
   * @return GetTaxiStructTaxiInfo
   */
  public function item($_index)
  {
    return parent::item($_index);
  }

  /**
   * Returns the first element
   * @see GetTaxiWsdlClass::first()
   * @return GetTaxiStructTaxiInfo
   */
  public function first()
  {
    return parent::first();
  }

  /**
   * Returns the last element
   * @see GetTaxiWsdlClass::last()
   * @return GetTaxiStructTaxiInfo
   */
  public function last()
  {
    return parent::last();
  }

  /**
   * Returns the element at the offset
   * @see GetTaxiWsdlClass::last()
   * @param int $_offset
   * @return GetTaxiStructTaxiInfo
   */
  public function offsetGet($_offset)
  {
    return parent::offsetGet($_offset);
  }

  /**
   * Returns the attribute name
   * @see GetTaxiWsdlClass::getAttributeName()
   * @return string TaxiInfo
   */
  public function getAttributeName()
  {
    return 'TaxiInfo';
  }

  /**
   * Method called when an object has been exported with var_export() functions
   * It allows to return an object instantiated with the values
   * @see GetTaxiWsdlClass::__set_state()
   * @uses GetTaxiWsdlClass::__set_state()
   * @param array $_array the exported values
   * @return GetTaxiStructArrayOfTaxiInfo
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

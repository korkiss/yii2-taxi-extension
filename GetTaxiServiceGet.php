<?php

namespace korkiss\taxi;

/**
 * File for class GetTaxiServiceGet
 * @package GetTaxi
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */

/**
 * This class stands for GetTaxiServiceGet originally named Get
 * @package GetTaxi
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */
class GetTaxiServiceGet extends GetTaxiWsdlClass
{

  /**
   * Method to call the operation originally named GetTaxiInfos
   * Documentation : Получение списка списка выданных разрешений на осуществление деятельности по перевозке пассажиров и багажа легковым такси на территории города Москвы
   * @uses GetTaxiWsdlClass::getSoapClient()
   * @uses GetTaxiWsdlClass::setResult()
   * @uses GetTaxiWsdlClass::saveLastError()
   * @param GetTaxiStructGetTaxiInfos $_getTaxiStructGetTaxiInfos
   * @return GetTaxiStructGetTaxiInfosResponse
   */
  public function GetTaxiInfos(GetTaxiStructGetTaxiInfos $_getTaxiStructGetTaxiInfos)
  {
    try {
      return $this->setResult(self::getSoapClient()->GetTaxiInfos($_getTaxiStructGetTaxiInfos));
    } catch (SoapFault $soapFault) {
      return !$this->saveLastError(__METHOD__, $soapFault);
    }
  }

  /**
   * Returns the result
   * @see GetTaxiWsdlClass::getResult()
   * @return GetTaxiStructGetTaxiInfosResponse
   */
  public function getResult()
  {
    return parent::getResult();
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

<?php

namespace korkiss\taxi;

/**
 * File for class GetTaxiStructGetTaxiInfosRequest
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */

/**
 * This class stands for GetTaxiStructGetTaxiInfosRequest originally named GetTaxiInfosRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://82.138.16.126:8888/TaxiPublic/Service.svc?xsd=xsd0}
 * @package GetTaxi
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2016-01-19
 */
class GetTaxiStructGetTaxiInfosRequest extends GetTaxiWsdlClass
{

  /**
   * The Count
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var int
   */
  public $Count;

  /**
   * The LicenseNum
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $LicenseNum;

  /**
   * The LicenseDate
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $LicenseDate;

  /**
   * The Name
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $Name;

  /**
   * The OgrnNum
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $OgrnNum;

  /**
   * The OgrnDate
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $OgrnDate;

  /**
   * The Brand
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $Brand;

  /**
   * The Model
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $Model;

  /**
   * The RegNum
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $RegNum;

  /**
   * The Year
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $Year;

  /**
   * The BlankNum
   * Meta informations extracted from the WSDL
   * - maxOccurs : 1
   * - minOccurs : 0
   * @var string
   */
  public $BlankNum;

  /**
   * Constructor method for GetTaxiInfosRequest
   * @see parent::__construct()
   * @param int $_count
   * @param string $_licenseNum
   * @param string $_licenseDate
   * @param string $_name
   * @param string $_ogrnNum
   * @param string $_ogrnDate
   * @param string $_brand
   * @param string $_model
   * @param string $_regNum
   * @param string $_year
   * @param string $_blankNum
   * @return GetTaxiStructGetTaxiInfosRequest
   */
  public function __construct($_count = NULL, $_licenseNum = NULL, $_licenseDate = NULL, $_name = NULL, $_ogrnNum = NULL, $_ogrnDate = NULL, $_brand = NULL, $_model = NULL, $_regNum = NULL, $_year = NULL, $_blankNum = NULL)
  {
    parent::__construct(array('Count' => $_count, 'LicenseNum' => $_licenseNum, 'LicenseDate' => $_licenseDate, 'Name' => $_name, 'OgrnNum' => $_ogrnNum, 'OgrnDate' => $_ogrnDate, 'Brand' => $_brand, 'Model' => $_model, 'RegNum' => $_regNum, 'Year' => $_year, 'BlankNum' => $_blankNum), false);
  }

  /**
   * Get Count value
   * @return int|null
   */
  public function getCount()
  {
    return $this->Count;
  }

  /**
   * Set Count value
   * @param int $_count the Count
   * @return int
   */
  public function setCount($_count)
  {
    return ($this->Count = $_count);
  }

  /**
   * Get LicenseNum value
   * @return string|null
   */
  public function getLicenseNum()
  {
    return $this->LicenseNum;
  }

  /**
   * Set LicenseNum value
   * @param string $_licenseNum the LicenseNum
   * @return string
   */
  public function setLicenseNum($_licenseNum)
  {
    return ($this->LicenseNum = $_licenseNum);
  }

  /**
   * Get LicenseDate value
   * @return string|null
   */
  public function getLicenseDate()
  {
    return $this->LicenseDate;
  }

  /**
   * Set LicenseDate value
   * @param string $_licenseDate the LicenseDate
   * @return string
   */
  public function setLicenseDate($_licenseDate)
  {
    return ($this->LicenseDate = $_licenseDate);
  }

  /**
   * Get Name value
   * @return string|null
   */
  public function getName()
  {
    return $this->Name;
  }

  /**
   * Set Name value
   * @param string $_name the Name
   * @return string
   */
  public function setName($_name)
  {
    return ($this->Name = $_name);
  }

  /**
   * Get OgrnNum value
   * @return string|null
   */
  public function getOgrnNum()
  {
    return $this->OgrnNum;
  }

  /**
   * Set OgrnNum value
   * @param string $_ogrnNum the OgrnNum
   * @return string
   */
  public function setOgrnNum($_ogrnNum)
  {
    return ($this->OgrnNum = $_ogrnNum);
  }

  /**
   * Get OgrnDate value
   * @return string|null
   */
  public function getOgrnDate()
  {
    return $this->OgrnDate;
  }

  /**
   * Set OgrnDate value
   * @param string $_ogrnDate the OgrnDate
   * @return string
   */
  public function setOgrnDate($_ogrnDate)
  {
    return ($this->OgrnDate = $_ogrnDate);
  }

  /**
   * Get Brand value
   * @return string|null
   */
  public function getBrand()
  {
    return $this->Brand;
  }

  /**
   * Set Brand value
   * @param string $_brand the Brand
   * @return string
   */
  public function setBrand($_brand)
  {
    return ($this->Brand = $_brand);
  }

  /**
   * Get Model value
   * @return string|null
   */
  public function getModel()
  {
    return $this->Model;
  }

  /**
   * Set Model value
   * @param string $_model the Model
   * @return string
   */
  public function setModel($_model)
  {
    return ($this->Model = $_model);
  }

  /**
   * Get RegNum value
   * @return string|null
   */
  public function getRegNum()
  {
    return $this->RegNum;
  }

  /**
   * Set RegNum value
   * @param string $_regNum the RegNum
   * @return string
   */
  public function setRegNum($_regNum)
  {
    return ($this->RegNum = $_regNum);
  }

  /**
   * Get Year value
   * @return string|null
   */
  public function getYear()
  {
    return $this->Year;
  }

  /**
   * Set Year value
   * @param string $_year the Year
   * @return string
   */
  public function setYear($_year)
  {
    return ($this->Year = $_year);
  }

  /**
   * Get BlankNum value
   * @return string|null
   */
  public function getBlankNum()
  {
    return $this->BlankNum;
  }

  /**
   * Set BlankNum value
   * @param string $_blankNum the BlankNum
   * @return string
   */
  public function setBlankNum($_blankNum)
  {
    return ($this->BlankNum = $_blankNum);
  }

  /**
   * Method called when an object has been exported with var_export() functions
   * It allows to return an object instantiated with the values
   * @see GetTaxiWsdlClass::__set_state()
   * @uses GetTaxiWsdlClass::__set_state()
   * @param array $_array the exported values
   * @return GetTaxiStructGetTaxiInfosRequest
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

<?php
class Manager {
	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $title;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $lastname;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $firstname;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $additional;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $prefix;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $suffix;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $position;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $email;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $tel;
	
	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $mob;
	
	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $fax;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $street;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $city;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $zip;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $country;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $foto_url;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $company_name;

	/**
	 * PROPDESCRIPTION
	 * 
	 * @access public
	 * @var PROPTYPE
	 */
	public $company_url;

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $title ARGDESCRIPTION
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getLastname() {
		return $this->lastname;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $lastname ARGDESCRIPTION
	 */
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $firstname ARGDESCRIPTION
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getAdditional() {
		return $this->additional;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $additional ARGDESCRIPTION
	 */
	public function setAdditional($additional) {
		$this->additional = $additional;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getPrefix() {
		return $this->prefix;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $prefix ARGDESCRIPTION
	 */
	public function setPrefix($prefix) {
		$this->prefix = $prefix;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getSuffix() {
		return $this->suffix;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $suffix ARGDESCRIPTION
	 */
	public function setSuffix($suffix) {
		$this->suffix = $suffix;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $position ARGDESCRIPTION
	 */
	public function setPosition($position) {
		$this->position = $position;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $email ARGDESCRIPTION
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $tel ARGDESCRIPTION
	 */
	public function setTel($tel) {
		$this->tel = $tel;
	}
		/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getMob() {
		return $this->mob;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $tel ARGDESCRIPTION
	 */
	public function setMob($mob) {
		$this->mob = $mob;
	}
	
	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getFax() {
		return $this->fax;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $tel ARGDESCRIPTION
	 */
	public function setFax($fax) {
		$this->fax = $fax;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getStreet() {
		return $this->street;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $street ARGDESCRIPTION
	 */
	public function setStreet($street) {
		$this->street = $street;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $city ARGDESCRIPTION
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $zip ARGDESCRIPTION
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $country ARGDESCRIPTION
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getFotoUrl() {
		return $this->foto_url;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $fotoUrl ARGDESCRIPTION
	 */
	public function setFotoUrl($fotoUrl) {
		$this->foto_url = $fotoUrl;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getCompanyName() {
		return $this->company_name;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $companyName ARGDESCRIPTION
	 */
	public function setCompanyName($companyName) {
		$this->company_name = $companyName;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @return RETURNTYPE RETURNDESCRIPTION
	 */
	public function getCompanyUrl() {
		return $this->company_url;
	}

	/**
	 * METHODDESCRIPTION
	 * 
	 * @access public
	 * @param ARGTYPE $companyUrl ARGDESCRIPTION
	 */
	public function setCompanyUrl($companyUrl) {
		$this->company_url = $companyUrl;
	}

	public function getDisplayName() {
		return $this->getLastname()." ".$this->getFirstname();
	}

	public function getCompanyAddress() {
		$retAddr   = ";;";
		if (!empty($this->getCity()) || !empty($this->getZip()) ||!empty($this->getCountry()) ) {
			$retAddr .= $this->getStreet(). ";"
  	                . $this->getCity().";;"
  	                . $this->getZip().";"
  	                . $this->getCountry(). "\r\n";
		} else {
			
			$retAddr .= trim($this->getStreet()). "\r\n";
		}
		
					

	return $retAddr;		
	}
	
	
	public function getFotoStremFromUrl($url){
	
		return file_get_contents($url);
		
	}
	
	
	public function getContactAsVcardString()
	{
		$data['BEGIN'] = 'VCARD';
		$data['VERSION'] = '3.0';
		
			$data['PRODID'] = '-//company contact export Version 1//EN';
		$data['REV'] = date('Y-m-d H:i:s');
		$data['TZ'] = date('O');

		$data['FN'] = $this->getDisplayName();
		$data['N'] = $this->getLastname().';'.$this->getFirstname().';;'.$this->getTitle();

		if ($this->getPosition() != '') {
			$data['TITLE'] = $this->getPosition();
		}

		if ($this->getEmail() != '') {
			$data['EMAIL;TYPE=internet'] = $this->getEmail();
		}

		if ($this->getTel() != '') {
			$data['TEL;type=WORK,voice'] = $this->getTel();
		}
		
		if ($this->getMob() != '') {
			$data['TEL;type=CELL'] = $this->getMob();
		}
		
		if ($this->getFax() != '') {
			$data['TEL;type=WORK,fax'] = $this->getFax();
		}
		if ($this->getCompanyName() != '')  $data['ORG'] =$this->getCompanyName();
		
		if ($this->getCompanyUrl() != '') {
			$data['URL;type=WORK'] = $this->getCompanyUrl();
		}
		
		if ($this->getCompanyAddress() != '') {
			$data['ADR;type=WORK'] = $this->getCompanyAddress();
		}

		if ($this->getFotoUrl() != '') {
			$data['PHOTO;VALUE=URL;TYPE=JPEG'] = $this->getFotoUrl();
		
			$stream = $this->getFotoStremFromUrl($this->getFotoUrl());
			if (isset($stream)) {
				$data['PHOTO;ENCODING=b;TYPE=JPEG'] = base64_encode($stream);;
			}
		}
	
		
/*		if ($this->getNotice() != '') {
			$data['NOTE'] = $this->getNotice();
		}
*/
		$data['END'] = 'VCARD';

		$exportString = '';
		foreach ($data as $index => $value) {
			$exportString .= $index . ':' . $value . "\r\n";
		}

		return $exportString;
	}
	
	
	public function downloadVCard()
	{


		$vcardString = '';
		$vcardString = $this->getContactAsVcardString() . "\r\n";
		$filename = str_replace(" ", "_", $this->getCompanyName().' '.$this->getFirstname().' '.$this->getLastname());
		header("Content-type:text/x-vCard; charset=utf-8");
		header("Content-Disposition: attachment; filename=$filename.vcf");
	
		echo $vcardString;
		
	}

	
	public function getStringVCard()
	{

		$vcardString = $this->getContactAsVcardString() . "\r\n";

	
		echo $vcardString;
		
	}
}
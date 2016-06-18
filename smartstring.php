<?php

class SmartString {

	private $string;

	/**
	 * @param string $string
	 */
	public function __construct($string){
		$this->string =  (string) $string;
	}

	/**
	 * create from string
	 * @param $string
	 * @return SmartString
	 */

	public static function create($string){
		return new self($string);
	}

	/**
	 * uppercase the whole string
	 * @return SmartString $this
	 */

	public function toUpper(){
		$this->string = strtoupper($this->string);
		return $this;
	}

	/**
	 * lowercase the whole string
	 * @return SmartString $this
	 */

	public function toLower(){
		$this->string = strtolower($this->string);
		return $this;
	}

	/**
	 * trim the whole string
	 * @return SmartString $this
	 */
	public function trim(){
		$this->string = trim($this->string);
		return $this;
	}

	/**
	 * print the string
	 * @return SmartString $this
	 */
	public function printme(){
		print $this->string;
		return $this;
	}


	/**
	 * index of a string
	 * @param $string string to check the index of
	 * @return int the index
	 */

	public function indexOf($string){
		return strpos($this->string, $string);
	}

	/**
	 * returns the string at a certain position
	 * @param integer $start startindex
	 * @param integer $length
	 * @return SmartString $this
	 */

	public function substring($start, $length){
		$this->string = substr($this->string, $start, $length);
		return $this;
	}

	/**
	 * convert the string to md5
	 * @return SmartString $this
	 */
	public function toMd5(){
		$this->string = md5($this->string);
		return $this;
	}

	/**
	 * adds a prefix and a suffix and converts the string to md5
	 *
	 * @param string $salt
	 * @return SmartString
	 */
	public function toMd5WithSalt($salt){
		return $this->prefix($salt)->suffix($salt)->toMd5();
	}

	/**
	 * encodes the string to Base64
	 * @return SmartString
	 */
	public function encodeB64(){
		$this->string = base64_encode($this->string);
		return $this;
	}


	/**
	 * decodes the string from Base64
	 * @return SmartString
	 */
	public function decodeB64(){
		$this->string = base64_decode($this->string);
		return $this;
	}


	/**
	 * returns the char at a certain position
	 * @param integer $index index of the char
	 *
	 * @return SmartString
	 */
	public function charAt($index){
		return $this->substring($index, 1);
	}

	/**
	 * check if this equals an other string
	 * @param string $string
	 * @return bool
	 */
	public function equals($string){
		return $this->string === ((string) $string);
	}

	/**
	 * Adds a prefix to the string
	 * @param string $prefix
	 * @return SmartString $this
	 */

	public function prefix($prefix){
		$this->string = $prefix .  $this->string;
		return $this;
	}

	/**
	 * Adds a suffix to the string
	 * @param string $suffix
	 * @return SmartString $this
	 */

	public function suffix($suffix){
		return $this->concat($suffix);
	}

	/**
	 * concat another string
	 * @param string $string
	 * @return SmartString $this
	 */
	public function concat($string){
		$this->string .= $string;
		return $this;
	}

	/**
	 * replace all occurences of a string
	 * @param $search
	 * @param $replacement
	 * @return $this
	 */
	public function replace($search, $replacement){
		$this->string = str_replace($search, $replacement, $this->string);
		return $this;
	}

	/**
	 * replace all occurences of a string
	 * @param $search
	 * @param $replacement
	 * @return $this
	 */
	public function replacePattern($replacePattern, $replacement){
		$this->string = preg_replace($replacePattern, $replacement, $this->string);
		return $this;
	}

	/**
	 * remove a part of the SmartString
	 * @param string $string the string to remove
	 * @return SmartString
	 */
	public function remove($string){
		return $this->replace($string, "");
	}

	/**
	 * return the length of the string
	 * @return int the length
	 */
	public function length(){
		return strlen($this->string);
	}

	/**
	 * Normalizes the string so it can be used in URL's
	 * @return int the length
	 */
	public function normalize(){
		return $this->replacePattern('/[,.$%#@^&*()!@`~[|"]/', '')->replacePattern('/[ _]/', '-')->toLower();
	}

	function __toString() {
		return $this->string;
	}

}
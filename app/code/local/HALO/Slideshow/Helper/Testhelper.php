<?php

class HALO_Slideshow_Helper_Testhelper extends Mage_Core_Helper_Abstract
{
	public function add($num1, $num2)
	{
		return $num1 + $num2;
	}
	public function subtract($num1, $num2)
	{
		return $num1 - $num2;
	}
	public function multiply($num1, $num2)
	{
		return $num1 * $num2;
	}
	public function divide($num1, $num2)
	{
		return $num1 / $num2;
	}
}
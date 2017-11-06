<?php

class HALO_Slideshow_TestController extends Mage_Core_Controller_Front_Action {
	public function indexAction(){
		echo Mage::helper('slideshow/testhelper')->add(1,2);
		echo Mage::helper('slideshow/testhelper')->subtract(5,3);
		echo Mage::helper('slideshow/testhelper')->multiply(10,5);
		echo Mage::helper('slideshow/testhelper')->divide(30,6);
	}
}
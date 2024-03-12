<?php

/**
 * @copyright	Copyright (C) 2015 c.oerter
 * http://www.das-webconcept.de
 * @license		GNU/GPL
 * 
 * Version 2.1.1
 * Januar 2024
 * */

defined( '_JEXEC' ) or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\Event\Event;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\LanguageHelper;
use Joomla\CMS\Form\Form;
use Joomla\CMS\Form\FormHelper;

class plgContentWbcadvancedmenuparams extends CMSPlugin  {

	function plgSystemWbcadvancedmenuparams(&$subject, $params) {
		parent::__construct($subject, $params);
	}

	/**
	 * @param       Form   The form to be altered.
	 * @param       array   The associated data for the form.
	 * @return      boolean
	 * @since       1.6
	 */
	function onContentPrepareForm($form, $data) {

		// Überprüfe, ob das Formular ein Menü-Formular ist
		if ( $form->getName() != 'com_menus.item' ) {
			return true;
		}

		Form::addFormPath(__DIR__ . '/forms');
		
		// get the language
		$lang = Factory::getLanguage();
		$langtag = $lang->getTag(); 
		$this->loadLanguage();

		// menu item options
		if ($form->getName() == 'com_menus.item' ) {
			$form->loadFile('wbcadvancedmenuparams', false);
		}
	}
	
}
?>
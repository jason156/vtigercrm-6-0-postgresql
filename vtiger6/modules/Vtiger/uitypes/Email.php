<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

class Vtiger_Email_UIType extends Vtiger_Base_UIType {

	/**
	 * Function to get the Template name for the current UI Type object
	 * @return <String> - Template Name
	 */
	public function getTemplateName() {
		return 'uitypes/Email.tpl';
	}

	public function getDisplayValue($value, $recordId) {
		$currentUser = Users_Record_Model::getCurrentUserModel();
		$internalMailer = $currentUser->get('internal_mailer');
		
		if ($internalMailer == 1) {
			$fieldName = $this->get('field')->get('name');
			$value = "<a class='emailField' onclick=\"Vtiger_Helper_Js.getInternalMailer($recordId," .
					"'$fieldName');\">" . textlength_check($value) . "</a>";
		} else {
			$value = '<a class="emailField"  href="mailto:' . $rawValue . '">' . textlength_check($value) . '</a>';
		}
		return $value;
	}
}
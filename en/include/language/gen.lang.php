<?php
/*
 *
 * The contents of this file are subject to the info@hand Software License Agreement Version 1.3
 *
 * ("License"); You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at <http://1crm.com/pdf/swlicense.pdf>.
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for the
 * specific language governing rights and limitations under the License,
 *
 * All copies of the Covered Code must include on each user interface screen:
 * (i) the 1CRM copyright notice,
 * (ii) the "Powered by the 1CRM Engine" logo, 
 *
 * (iii) the "Powered by SugarCRM" logo, and
 * (iv) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.
 * See full license for requirements.
 *
 * The Original Code is : 1CRM Engine proprietary commercial code.
 * The Initial Developer of this Original Code is 1CRM Corp.
 * and it is Copyright (C) 2004-2012 by 1CRM Corp.
 *
 * All Rights Reserved.
 * Portions created by SugarCRM are Copyright (C) 2004-2008 SugarCRM, Inc.;
 * All Rights Reserved.
 *
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');



function extend_app_language($language, &$strings, &$lists) {
	// Avoid translating interval units multiple times
	$ival_unit_doms = array(
		'report_run_interval_unit_dom' => array('hours', 'days', 'weeks', 'months', 'quarters', 'years'),
		'schedule_run_interval_unit_dom' => array('minutes', 'hours', 'days', 'weeks', 'months', 'quarters', 'years'),
	);
	foreach($ival_unit_doms as $n => $units) {
		foreach($units as $u)
			$lists[$n][$u] = $lists['interval_units_dom'][$u];
	}
	

	// Add file types
	global $tlr_file_types;
	require_once('include/filetypes.php');
	$ftypes = array();
	foreach($tlr_file_types as $key=>$data)
		$ftypes[$key] = $data['name'];
	$lists['document_filetype_dom'] =& $ftypes;
	
	
	$lists['activity_status_dom'] = array_merge(
		$lists['task_status_dom'],
		$lists['meeting_status_dom'],
		$lists['dom_email_status']);
	$lists['activity_status_dom']['Notes'] = $lists['moduleListSingular']['Notes'];
	
	// Add font names
	$base = 'pdf_font_names_dom';
	$lists[$base] = AppConfig::setting('pdf_fonts.index');
	$overrides = 'pdf_font_names_override_dom';
	if(isset($lists[$overrides]) && count($lists[$overrides]))
		foreach($lists[$overrides] as $k=>$v)
			if(isset($lists[$base][$k])) $lists[$base][$k] = $v;

}

?>
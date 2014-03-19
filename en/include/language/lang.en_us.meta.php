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
?><?php return; /* no output */ ?>

detail
	label: US English
	comment: Base language pack for 1CRM
	lists_locked
		- assembly_discount_type_dom
		- asset_tax_class_dom
		- booked_hours_billing_status_dom
		- booked_hours_status_dom
		- booking_classes_dom
		- booking_duration_dom
		- bool_value_dom
		- call_direction_dom
		- campaign_type_dom
		- case_search_what_dom
		- chart_type_dom
		- checkbox_dom
		- custom_fields_merge_dup_dom
		- dashboard_position_dom
		- date_filter_operators_dom
		- date_filter_period_dom
		- debit_credit_dom
		- discount_type_dom
		- document_status_dom
		- dom_email_bool
		- dom_email_distribution
		- dom_email_editor_option
		- dom_email_errors
		- dom_email_link_type
		- dom_email_server_type
		- dom_email_status
		- dom_email_types
		- dom_int_bool
		- dom_mailbox_type
		- dom_meeting_accept_options
		- dom_meeting_accept_status
		- dom_switch_bool
		- dripfeed_delay_unit_dom
		- email_import_since_dom
		- email_isread_dom
		- email_marketing_status_dom
		- employee_status_dom
		- envelope_window_position_dom
		- event_color_dom
		- event_format_dom
		- field_type_dom
		- forecast_category_dom
		- forecast_period_dom
		- forecast_schedule_status_dom
		- forecast_type_dom
		- google_calendar_sync_dom
		- google_docs_sync_dom
		- iframe_type_dom
		- interval_unit_dom
		- interval_units_dom
		- layouts_dom
		- leave_status_dom
		- leave_type_dom
		- months_dom
		- months_long_dom
		- newsletter_frequency_dom
		- payment_direction_dom
		- payment_type_dom
		- personal_auto_units_dom
		- placement_dom
		- price_adjustment_type_dom
		- prod_price_formula_dom
		- prod_support_price_formula_dom
		- project_task_dependency_type
		- prospect_list_type_dom
		- quotation_modes
		- quote_add_comment_options
		- quote_approval_status
		- quote_group_type_dom
		- quote_line_pricing_method_dom
		- quote_pricing_method_dom
		- quote_show_components_dom
		- quote_type_dom
		- relative_time_dom
		- salary_period_dom
        - select_filter_operators_dom
		- service_frequency_dom
		- sex_dom
		- tax_effort_unit_dom
		- timesheet_period_dom
		- timesheet_status_dom
		- track_inventory_dom
		- user_status_dom
		- weekdays_dom
		- weekdays_long_dom
		- yes_no_dom
	lists_generated
		- ACLmoduleList
		- moduleList
		- moduleListSingular
		- reportModuleList
		- activity_status_dom
		- document_filetype_dom
		- pdf_font_names_dom
		- report_run_interval_unit_dom
		- schedule_run_interval_unit_dom
	lists_hidden
		- activity_dom
		- address_format_names_dom
		- booked_hours_related_dom
		- business_model_dom
		- campainglog_activity_type_dom
		- campainglog_target_type_dom
		- license_product_dom
		- license_type_dom
		- log_level_dom
        - log_clear_activities_interval_dom
		- merge_operators_dom
		- module_types_dom
		- multi_update_mode_dom
		- navigation_paradigms
		- notifymail_sendtype
		- number_filter_operators_dom
		- paper_size_dom
		- reassign_accounts_dom
		- reassign_leads_dom
		- report_notify_format_dom
		- report_run_method_dom
		- schedule_type_dom
		- schedulers_times_dom
		- simple_status_dom
		- source_display_dom
		- standard_custom_dom
		- tax_compounding_dom
		- taxation_scheme_dom
		- total_type_dom
		- total_type_short_dom
		- workflow_actions_dom
		- workflow_execute_dom
		- workflow_execute_mode_dom
		- workflow_occurs_dom
		- workflow_status_dom
		- workflow_trigger_dom
hooks
	post_process
		--
			file: include/language/gen.lang.php
			function: extend_app_language

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

notifications
    BillAssigned
        module: Bills
        subject:
            [1CRM] Bill - {BILL_SUBJECT}
        body:
            {ASSIGNER} has assigned a Bill to {ASSIGNED_USER}.

            Subject: {BILL_SUBJECT}
            Description: {BILL_DESCRIPTION}

            You may review this Bill at:
            {URL}
    PurchaseOrderAssigned
        module: PurchaseOrders
        subject:
            [1CRM] Purchase Order - {PO_SUBJECT}
        body:
            {ASSIGNER} has assigned a Purchase Order to {ASSIGNED_USER}.

            Subject: {PO_SUBJECT}
            Status: {PO_STATUS}
            Description: {PO_DESCRIPTION}

            You may review this Purchase Order at:
            {URL}
    SalesOrderAssigned
        module: SalesOrders
        subject:
            [1CRM] Sales Order - {SO_SUBJECT}
        body:
            {ASSIGNER} has assigned a Sales Order to {ASSIGNED_USER}.

            Subject: {SO_SUBJECT}
            Status: {SO_STATUS}
            Description: {SO_DESCRIPTION}

            You may review this Sales Order at:
            {URL}
    InvoiceAssigned
        module: Invoice
        subject:
            [1CRM] Invoice - {INVOICE_SUBJECT}
        body:
            {ASSIGNER} has assigned an Invoice to {ASSIGNED_USER}.

            Subject: {INVOICE_SUBJECT}
            Description: {INVOICE_DESCRIPTION}

            You may review this Invoice at:
            {URL}
    QuoteAssigned
        module: Quotes
        subject:
            [1CRM] Quote - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} has assigned a Quote to {ASSIGNED_USER}.

            Subject: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Expected Close Date: {QUOTE_CLOSEDATE}
            Description: {QUOTE_DESCRIPTION}

            You may review this Quote at:
            {URL}
    QuoteSubmitted
        module: Quotes
        subject:
            [1CRM] Quote - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} has submitted a Quote for approval.

            Subject: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}

            You may review this Quote at:
            {URL}
    QuoteApproved
        module: Quotes
        subject:
            [1CRM] Quote approved - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} has approved this Quote.

            Subject: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}

            You may review this Quote at:
            {URL}
    QuoteRejected
        module: Quotes
        subject:
            [1CRM] Quote approval rejected - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} has rejected approval of this Quote.

            Subject: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}
            Problem: {QUOTE_PROBLEM}

            You may review this Quote at:
            {URL}
    AccountAssigned
        module: Accounts
        subject:
            [1CRM] Account - {ACCOUNT_NAME}
        body:
            {ASSIGNER} has assigned an Account to {ASSIGNED_USER}.

            Name: {ACCOUNT_NAME}
            Type: {ACCOUNT_TYPE}
            Description: {ACCOUNT_DESCRIPTION}

            You may review this Account at:
            {URL}
    CaseUpdate
        module: Cases
        subject:
            [1CRM] Case updated - {CASE_SUBJECT}
		body:
			Account: {ACCOUNT_NAME}
            Subject: {CASE_SUBJECT}
            Case number: {CASE_NUMBER}
            Priority: {CASE_PRIORITY}
            Status: {CASE_STATUS}
            Description: {CASE_DESCRIPTION}
            Resolution: {CASE_RESOLUTION}

            You may review this Case at:
            {URL}
    CaseCreate
        module: Cases
        subject:
            [1CRM] Case created  - {CASE_SUBJECT}
        body:
			Account: {ACCOUNT_NAME}
            Subject: {CASE_SUBJECT}
            Case number: {CASE_NUMBER}
            Priority: {CASE_PRIORITY}
            Status: {CASE_STATUS}
            Description: {CASE_DESCRIPTION}
            Resolution: {CASE_RESOLUTION}

            You may review this Case at:
            {URL}
    TaskAssigned
        module: Tasks
        subject:
            [1CRM] Task - {TASK_SUBJECT}
        body:
            {ASSIGNER} has assigned a Task to {ASSIGNED_USER}.

            Subject: {TASK_SUBJECT}
            Priority: {TASK_PRIORITY}
            Due Date: {TASK_DUEDATE}
            Status: {TASK_STATUS}
            Description: {TASK_DESCRIPTION}

            You may review this Task at:
            {URL}
    UpcomingMeeting
        module: Meetings
        subject:
            [1CRM] Upcoming Meeting - {NAME} ({DATE})
        body:
            Subject : {NAME}
            Date: {DATE}
            Duration: {DURATION}
            Location: {LOCATION}
            Invitees: {INVITEES}
            Resources : {RESOURCES}

			GoToMeeting Join URL(if applicable)
			{GTM_URL}

	MeetingInvite
        module: Meetings
        subject:
            [1CRM] Meeting Invitation - {MEETING_SUBJECT}
        body:
            To: {MEETING_TO},

            {ASSIGNER} has invited you to a Meeting

            Subject: {MEETING_SUBJECT}
            Status: {MEETING_STATUS}
            Start Date: {MEETING_STARTDATE}
            Duration: {MEETING_DURATION}
            Location: {MEETING_LOCATION}
            Description: {MEETING_DESCRIPTION}

            Accept this meeting:
            {ACCEPT_URL}&accept_status=accept

            Tentatively Accept this meeting
            {ACCEPT_URL}&accept_status=tentative

            Decline this meeting
			{ACCEPT_URL}&accept_status=decline

			GoToMeeting Join URL(if applicable)
			{GTM_URL}

    UpcomingCall
        module: Calls
        subject:
            [1CRM] Upcoming Call - {NAME} ({DATE})
        body:
            Subject : {NAME}
            Date: {DATE}
            Duration: {DURATION}
            Invitees: {INVITEES}
    CallInvite
        module: Calls
        subject:
            [1CRM] Call Invitation - {CALL_SUBJECT}
        body:
            To: {CALL_TO},

            {ASSIGNER} has invited you to a Call

            Subject: {CALL_SUBJECT}
            Status: {CALL_STATUS}
            Start Date: {CALL_STARTDATE}
            Duration: {CALL_DURATION}
            Description: {CALL_DESCRIPTION}

            Accept this call:
            {ACCEPT_URL}&accept_status=accept

            Tentatively Accept this call
            {ACCEPT_URL}&accept_status=tentative

            Decline this call
            {ACCEPT_URL}&accept_status=decline
    EmailAssigned
        module: Emails
        subject:
            [1CRM] Email - {EMAIL_SUBJECT}
        body:
            {ASSIGNER} has assigned an Email to {ASSIGNED_USER}.

            Subject: {EMAIL_SUBJECT}
            Date Sent: {EMAIL_DATESENT}

            You may review this Email at:
            {URL}
    ContactAssigned
        module: Contacts
        subject:
            [1CRM] Contact - {CONTACT_NAME}
        body:
            {ASSIGNER} has assigned a Contact to {ASSIGNED_USER}.

            Name: {CONTACT_NAME}
            Description: {CONTACT_DESCRIPTION}

            You may review this Contact at:
            {URL}
    LeadAssigned
        module: Leads
        subject:
            [1CRM] Lead - {LEAD_NAME}
        body:
            {ASSIGNER} has assigned a Lead to {ASSIGNED_USER}.

            Name: {LEAD_NAME}
            Lead Source: {LEAD_SOURCE}
            Status: {LEAD_STATUS}
            Description: {LEAD_DESCRIPTION}

            You may review this Lead at:
            {URL}
    PortalLeadConversion
        module: Leads
        subject:
            [1CRM] Lead converted to Account and Contact by eStore
        body:
            Lead {LEAD_NAME} has placed an order via the 1CRM eStore, and was automatically converted
            to a Contact {CONTACT_NAME} and a related Account {ACCOUNT_NAME}.

            Lead: {LEAD_URL}
            Contact: {CONTACT_URL}
            Account: {ACCOUNT_URL}                
    OpportunityAssigned
        module: Opportunities
        subject:
            [1CRM] Opportunity - {OPPORTUNITY_NAME}
        body:
            {ASSIGNER} has assigned an Opportunity to {ASSIGNED_USER}.

            Name: {OPPORTUNITY_NAME}
            Amount: {OPPORTUNITY_AMOUNT}
            Expected Close Date: {OPPORTUNITY_CLOSEDATE}
            Sales Stage: {OPPORTUNITY_STAGE}
            Description: {OPPORTUNITY_DESCRIPTION}

            You may review this Opportunity at:
            {URL}
    BugAssigned
        module: Bugs
        subject:
            [1CRM] Bug - {BUG_SUBJECT}
        body:
            {ASSIGNER} has assigned a Bug to {ASSIGNED_USER}.

            Bug Number: {BUG_BUG_NUMBER}
            Subject: {BUG_SUBJECT}
            Type: {BUG_TYPE}
            Priority: {BUG_PRIORITY}
            Status: {BUG_STATUS}
            Resolution: {BUG_RESOLUTION}
            Release: {BUG_RELEASE}
            Description: {BUG_DESCRIPTION}
            Work Log: {BUG_WORK_LOG}

            You may review this Bug at:
            {URL}
    CampaignAssigned
        module: Campaigns
        subject:
            [1CRM] Campaign - {CAMPAIGN_NAME}
        body:
            {ASSIGNER} has assigned a Campaign to {ASSIGNED_USER}.

            Subject: {CAMPAIGN_NAME}
            Amount: {CAMPAIGN_AMOUNT}
            Close Date: {CAMPAIGN_CLOSEDATE}
            Status: {CAMPAIGN_STATUS}
            Description: {CAMPAIGN_DESCRIPTION}

            You may review this Campaign at:
            {URL}        
    ReportNotify
        module: Reports
        subject:
            [1CRM] Scheduled Report - {REPORT_NAME} ({REPORT_DATE})
        body:
            You may review this Report at:
            {URL}
    ProjectTaskAssigned
        module: ProjectTask
        subject:
            [1CRM] Project Task - {TASK_SUBJECT}
        body:
            Project: {TASK_PROJECTNAME}
            Subject : {TASK_SUBJECT}
            Status : {TASK_STATUS}
            Priority : {TASK_PRIORITY}
            Start Date: {TASK_STARTDATE}
            Due Date: {TASK_DUEDATE}
            Description: {TASK_DESCRIPTION}

            You may review this Project Task at:
            {URL}
    ThreadReply
        module: Threads
        subject:
            [1CRM] Forum Reply - {THREAD_SUBJECT}
        body:
            Thread: {THREAD_SUBJECT}

            Replied by: {REPLIED_BY}
            Reply Subject: {REPLY_SUBJECT}

            You may review this forum thread at:
            {URL}
    MonthlyServiceInvoice
        module: MonthlyServices
        subject:
            [1CRM] Invoice: {SERVICE_SUBJECT}
        body:
            The latest monthly invoice for your {BOOKING_CATEGORY_NAME} service is attached for your review.
    MonthlyServiceExpiryRemainder
        module: MonthlyServices
        subject:
            [1CRM] Service {BOOKING_CATEGORY_NAME} has expired
        body:
            This email is to remind you that agreement for your {BOOKING_CATEGORY_NAME} service is now ending and due for renewal.
            Please get in contact if you would like to renew your agreement.         
    AcceptDecline
        module: System
        subject: ""
        body:
            <html>
            <head>
            <title>{LBL_BROWSER_TITLE}</title>
            <style type="text/css">@import url("themes/{THEME}/style.css"); </style>
            <meta http-equiv="Content-Type" content="text/html; charset={CHARSET}" />
            </head>
            <body>
            <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td colspan="3" style="background-image : url(themes/{THEME}/images/header_bg.gif);">
                <table cellspacing="0" cellpadding="0" border="0" width="100%">
                <tr height="50">
                    <td class="topBar">
                        <a href="{COMPANY_URL}">
                        {COMPANY_IMAGE}
                        </a>
                    </td>
                    <td align="right" nowrap class="myArea" style="padding-right: 10px;">
                        <a href="http://www.1crm.com">
                        {IAH_IMAGE}
                        </a>
                    </td>
                </tr>
                </table>
              </td>
            </tr><tr height="11">
                <td colspan="3" style="padding-left: 10px;"></td>
            </tr><tr>
            <td style="padding: 10px; vertical-align: top; width: 100%;">
                <table cellpadding="0" cellspacing="0" border="0" width="100%" class="tabForm">
                <tr><td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="5" cellpadding="0">
                    <tr>
                        <td>
                            <h3>{LBL_STATUS_UPDATED}</h3>
                            <h4>{LBL_STATUS} {ACCEPT_STATUS}</h4>
                        </td>
                    </tr>
                    </table>
                </td></tr>
                </table>
            </td>
            </tr>
            </table>
            </body></html>

<?php
/*
 *
 * The contents of this file are subject to the 1CRM Software License Agreement Version 1.3
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
 * Contributor(s): Deutsche Uebersetzung by Markus Mueller @ TASC.CH .
 * (C) Gernam by Markus Mueller @ TASC.CH .
 *
 *
 */
?><?php return; /* no output */ ?>

notifications
    BillAssigned
        module: Einkaufsfaktura
        subject:
            [1CRM] Einkaufsfaktura - {BILL_SUBJECT}
        body:
            {ASSIGNER} hat Eine Einkaufsrechnung an {ASSIGNED_USER} zugeordnet.

            Betreff: {BILL_SUBJECT}
            Beschreibung: {BILL_DESCRIPTION}

            Sie können den Inhalt der Rechnung über folgenden Link aufrufen:
            {URL}
    PurchaseOrderAssigned
        module: Warenbestellung
        subject:
            [1CRM] Warenbestellung - {PO_SUBJECT}
        body:
            {ASSIGNER} hat Eine Warenbestellung an {ASSIGNED_USER} zugeordnet.

            Betreff: {PO_SUBJECT}
            Status: {PO_STATUS}
            Beschreibung: {PO_DESCRIPTION}

            Sie können den Inhalt der Bestellung  über folgenden Link aufrufen:
            {URL}
    SalesOrderAssigned
        module: Bestellung
        subject:
            [1CRM] Bestellung - {SO_SUBJECT}
        body:
            {ASSIGNER} hat eine Bestellung zu {ASSIGNED_USER} zugeordnet.

            Betreff: {SO_SUBJECT}
            Status: {SO_STATUS}
            Beschreibung: {SO_DESCRIPTION}

            Sie können den Inhalt der Bestellung  über folgenden Link aufrufen:
            {URL}
    InvoiceAssigned
        module: Rechnung
        subject:
            [1CRM] Rechnung - {INVOICE_SUBJECT}
        body:
            {ASSIGNER} hat eine Rechnung zu {ASSIGNED_USER} zugeordnet.

            Sujet: {INVOICE_SUBJECT}
            Description: {INVOICE_DESCRIPTION}

            Sie können den Inhalt der Rechnung über folgenden Link aufrufen:
            {URL}
    QuoteAssigned
        module: Angebot
        subject:
            [1CRM] Angebot - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} hat ein Angebot zu {ASSIGNED_USER} zugeordnet.

            Betreff: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Gültig bis: {QUOTE_CLOSEDATE}
            Beschreibung: {QUOTE_DESCRIPTION}

            Sie können den Inhalt des Angebots über folgenden Link aufrufen:
            {URL}
    QuoteSubmitted
        module: Angebot
        subject:
            [1CRM] Angebot - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} hat ein Angebot zur Freigabe übermittel.
			
            Betreff: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Beschreibung: {QUOTE_DESCRIPTION}

            Sie können den Inhalt des Angebots über folgenden Link aufrufen:
            {URL}
    QuoteApproved
        module: Angebot
        subject:
            [1CRM] Angebot genehmigt - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} hat dieses Angebot genehmigt:

            Betreff: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Beschreibung: {QUOTE_DESCRIPTION}

            Sie können den Inhalt des Angebots über folgenden Link aufrufen:
            {URL}
    QuoteRejected
        module: Angebot
        subject:
            [1CRM] Angebot nicht freigegeben - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} hat das Angebot nicht freigegeben.

            Betreff: {QUOTE_SUBJECT}
            Status: {QUOTE_STATUS}
            Gültig bis: {QUOTE_CLOSEDATE}
            Beschreibung: {QUOTE_DESCRIPTION}

            Sie können den Inhalt des Angebots über folgenden Link aufrufen:
            {URL}
    AccountAssigned
        module: Firma
        subject:
            [1CRM] Firma - {ACCOUNT_NAME}
        body:
            {ASSIGNER} hat das Firmenkonto zu {ASSIGNED_USER} zugeordnet.

            Firma: {ACCOUNT_NAME}
            Typ: {ACCOUNT_TYPE}
            Beschreibung: {ACCOUNT_DESCRIPTION}

            Sie können die Firmendaten über folgenden Link aufrufen:
            {URL}
    CaseUpdate
        module: Servicefall
        subject:
            [1CRM] Folgender Servicefall wurde zugeteilt - {CASE_SUBJECT}
        body:
            Betreff: {CASE_SUBJECT}
            Fall Nummer: {CASE_NUMBER}
            Dringlichkeit: {CASE_PRIORITY}
            Status: {CASE_STATUS}
            Beschreibung: {CASE_DESCRIPTION}

            Sie können den Inhalt des Servicefalls über folgenden Link aufrufen:
            {URL}
    CaseCreate
        module: Servicefall
        subject:
            [1CRM] Neuer Servicefall - {CASE_SUBJECT}
        body:
            Betreff: {CASE_SUBJECT}
            Fall Nummer: {CASE_NUMBER}
            Dringlichkeit: {CASE_PRIORITY}
            Status: {CASE_STATUS}
            Beschreibung: {CASE_DESCRIPTION}

            Sie können den Inhalt des Servicefalls über folgenden Link aufrufen:
            {URL}
    TaskAssigned
        module: Aufgabe
        subject:
            [1CRM] Aufgabe - {TASK_SUBJECT}
        body:
            {ASSIGNER} hat folgende Aufgabe an {ASSIGNED_USER} zugeordnet.

            Betreff: {TASK_SUBJECT}
            Dringlichkeit: {TASK_PRIORITY}
            zu erledigen bis: {TASK_DUEDATE}
            Status: {TASK_STATUS}
            Beschreibung: {TASK_DESCRIPTION}

            Sie können den Servicefall über folgenden Link aufrufen:
            {URL}
    UpcomingMeeting
        module: Besprechung
        subject:
            [1CRM] Besprechung geplant - {NAME} ({DATE})
        body:
            Betreff: {NAME}
            Datum: {DATE}
            Dauer: {DURATION}
            Ort: {LOCATION}
            Teilnehmer: {INVITEES}
            Ressourcen: {RESOURCES}
    MeetingInvite
        module: Besprechung
        subject:
            [1CRM] Einladung zu einer Besprechung - {MEETING_SUBJECT}
        body:
            für: {MEETING_TO},

            {ASSIGNER} hat Sie zu einer Besprechung eingeladen

            Betreff: {MEETING_SUBJECT}
            Status: {MEETING_STATUS}
            Datum: {MEETING_STARTDATE}
            Dauer: {MEETING_DURATION}
            Ort: {MEETING_LOCATION}
            Beschreibung: {MEETING_DESCRIPTION}

			Einladung zur Besprechung annehmen:
			{ACCEPT_URL}&accept_status=accept

			Einladung zur Besprechung vieleicht annehmen:
			{ACCEPT_URL}&accept_status=tentative

			Einladung zur Besprechung ablehnen:
			{ACCEPT_URL}&accept_status=decline
    UpcomingCall
        module: Telefonat
        subject:
            [1CRM] geplantes Telefonat - {NAME} ({DATE})
        body:
            Betreff: {NAME}
            Datum: {DATE}
            Dauer: {DURATION}
            Teilnehmer: {INVITEES}
    CallInvite
        module: Telefonat
        subject:
            [1CRM] Einladung zur Telefonkonferenz - {CALL_SUBJECT}
        body:
            für: {CALL_TO},

            {ASSIGNER} hat Ihnen eine Einladung zur Telefonkonferenz zugesendet

            Betreff: {CALL_SUBJECT}
            Status: {CALL_STATUS}
            Beginn: {CALL_STARTDATE}
            Dauer: {CALL_DURATION}
            Beschreibung: {CALL_DESCRIPTION}

			Einladung zur Telefonkonferenz annehmen:
			{ACCEPT_URL}&accept_status=accept

			Einladung zur Telefonkonferenz vieleicht annehmen:
			{ACCEPT_URL}&accept_status=tentative

			Einladung zur Telefonkonferenz ablehnen:
			{ACCEPT_URL}&accept_status=decline
    EmailAssigned
        module: Emails
        subject:
            [1CRM] Email - {EMAIL_SUBJECT}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} ein Email zugeteilt.

            Betreff: {EMAIL_SUBJECT}
            Sendedatum: {EMAIL_DATESENT}

            Sie können den Inhalt unter folgendem Link aufrufen:
			{URL}
    ContactAssigned
        module: Kontakte
        subject:
            [1CRM] Kontakt - {CONTACT_NAME}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} einen Kundenkontakt zugeteilt.

            Name: {CONTACT_NAME}
            Beschreibung: {CONTACT_DESCRIPTION}

            Sie können den Inhalt unter folgendem Link aufrufen:
            {URL}
    LeadAssigned
        module: Interessenten
        subject: 
            [1CRM] Interessent - {LEAD_NAME}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} einen Interessent zugeteilt.

            Name: {LEAD_NAME}
            Herkunft: {LEAD_SOURCE}
            Status: {LEAD_STATUS}
            Beschreibung: {LEAD_DESCRIPTION}

            Sie können den Inhalt unter folgendem Link aufrufen:
            {URL}
    PortalLeadConversion
        module: Interessenten
        subject:
            [1CRM] Der Onlineshp hat einen Interessenten in eine Firma und einen Kontakt Piste umgewandelt.
        body:
            Der Interessent {LEAD_NAME} hat eine Bestellung im Onlineshop aufgegeben. Er wird dadurch automatisch 
		    in den Kontakt {CONTACT_NAME} und die Firmenadresse {ACCOUNT_NAME} umgewandelt.

            Interessent: {LEAD_URL}
            Kontakt: {CONTACT_URL}
            Firma: {ACCOUNT_URL}                
    OpportunityAssigned
        module: Chance
        subject:
            [1CRM] Chance - {OPPORTUNITY_NAME}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} eine neue CHANCE zugeteilt.

            Name: {OPPORTUNITY_NAME}
            geplanter Umsatz: {OPPORTUNITY_AMOUNT}
            abzuschliessen bis: {OPPORTUNITY_CLOSEDATE}
            Verkaufsphase: {OPPORTUNITY_STAGE}
            Beschreibung: {OPPORTUNITY_DESCRIPTION}

            Sie können den Inhalt unter folgendem Link aufrufen:
            {URL}
    BugAssigned
        module: Fehler
        subject:
            [1CRM] Fehler - {BUG_SUBJECT}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} einen Fehler zugeteilt.

            Nr. des Fehlers: {BUG_BUG_NUMBER}
            Betreff: {BUG_SUBJECT}
            Typ: {BUG_TYPE}
            Dringlichkeit: {BUG_PRIORITY}
            Status: {BUG_STATUS}
            Lösung: {BUG_RESOLUTION}
            Version: {BUG_RELEASE}
            Beschreibung: {BUG_DESCRIPTION}
            Verlauf: {BUG_WORK_LOG}

            Sie können den Inhalt des Fehlers unter folgendem Link aufrufen:
            {URL}
    CampaignAssigned
        module: Kampagne
        subject:
            [1CRM] Kampagne - {CAMPAIGN_NAME}
        body:
            {ASSIGNER} hat {ASSIGNED_USER} eine Kampagne zugeteilt.

            Betreff: {CAMPAIGN_NAME}
            gepl. Umsatz: {CAMPAIGN_AMOUNT}
            abzuschliessen bis: {CAMPAIGN_CLOSEDATE}
            Status: {CAMPAIGN_STATUS}
            Beschreibung: {CAMPAIGN_DESCRIPTION}

            Sie können den Inhalt der Kampagne unter folgendem Link aufrufen:
            {URL}        
    ReportNotify
        module: Berichte
        subject:
            [1CRM] angeforderter Bericht - {REPORT_NAME} ({REPORT_DATE})
        body:
		
            Sie können den Bericht unter folgendem Link aufrufen:
            {URL}
    ProjectTaskAssigned
        module: Projektaufgabe
        subject:
            [1CRM] PRojektaufgabe - {TASK_SUBJECT}
        body:
            Projekt: {TASK_PROJECTNAME}
            Betreff: {TASK_SUBJECT}
            Status: {TASK_STATUS}
            Dringlichkeit: {TASK_PRIORITY}
            Begin: {TASK_STARTDATE}
            Erledigt bis: {TASK_DUEDATE}
            Beschreibung: {TASK_DESCRIPTION}

            Sie können die Projektaufgabe unter folgendem Link aufrufen:
            {URL}
    ThreadReply
        module: Forums
        subject:
            [1CRM] Antwort in einem Forum erhalten - {THREAD_SUBJECT}
        body:
            Thema: {THREAD_SUBJECT}

            Antwort von: {REPLIED_BY}
            Betreff der Antwort: {REPLY_SUBJECT}

            Sie können den Inhalt der Antwort unter folgendem Link aufrufen:
            {URL}
    MonthlyServiceInvoice
        module: Monatsabrechnung
        subject:
            [1CRM] Rechnung: {SERVICE_SUBJECT}
        body:
            Sie finden im Anhang die letzte Monatsabrechnung betreffend {BOOKING_CATEGORY_NAME}.
    MonthlyServiceExpiryRemainder
        module: Monatsabrechnung
        subject:
            [1CRM] Ihr Auftrag zur Monatlichen Abrechnung betreffend {BOOKING_CATEGORY_NAME} läuft ab.
        body:
            Mit diesem Email möchten wir Sie darauf hinweisen, dass Ihr Auftrag zur monatlichen Abrechnung von {BOOKING_CATEGORY_NAME} abläuft. 
			Zum Erneuern des Auftrags oder bei Fragen setzen sie sich bitte mit uns in Verbindung. 
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
                        <a href="http://tasc-media.ru">
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

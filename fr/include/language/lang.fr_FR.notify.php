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
 */
?><?php return; /* no output */ ?>

notifications
    BillAssigned
        module: Factures d'Achat
        subject:
            [1CRM] Facture d'Achat - {BILL_SUBJECT}
        body:
            {ASSIGNER} a assigné une facture d'achat à {ASSIGNED_USER}.

            Sujet: {BILL_SUBJECT}
            Description: {BILL_DESCRIPTION}

            Vous pouvez consulter cette facture d'achat à l'URL suivante:
            {URL}
    PurchaseOrderAssigned
        module: Commandes fournisseur
        subject:
            [1CRM] Commande fournisseur - {PO_SUBJECT}
        body:
            {ASSIGNER} a assigné une commande fournisseur à {ASSIGNED_USER}.

            Sujet: {PO_SUBJECT}
            Statut: {PO_STATUS}
            Description: {PO_DESCRIPTION}

            Vous pouvez consulter cette commande fournisseur à l'URL suivante:
            {URL}
    SalesOrderAssigned
        module: Commandes client
        subject:
            [1CRM] Commande client - {SO_SUBJECT}
        body:
            {ASSIGNER} a assigné une commande client à {ASSIGNED_USER}.

            Sujet: {SO_SUBJECT}
            Statut: {SO_STATUS}
            Description: {SO_DESCRIPTION}

            Vous pouvez consulter cette commande client à l'URL suivante:
            {URL}
    InvoiceAssigned
        module: Factures
        subject:
            [1CRM] Facture - {INVOICE_SUBJECT}
        body:
            {ASSIGNER} a assigné une facture à {ASSIGNED_USER}.

            Sujet: {INVOICE_SUBJECT}
            Description: {INVOICE_DESCRIPTION}

            Vous pouvez consulter cette facture à l'URL suivante:
            {URL}
    QuoteAssigned
        module: Devis
        subject:
            [1CRM] Devis - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} a assigné un devis à {ASSIGNED_USER}.

            Sujet: {QUOTE_SUBJECT}
            Statut: {QUOTE_STATUS}
            Valable jusqu'au: {QUOTE_CLOSEDATE}
            Description: {QUOTE_DESCRIPTION}

            Vous pouvez consulter ce devis à l'URL suivante:
            {URL}
    QuoteSubmitted
        module: Devis
        subject:
            [1CRM] Devis - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} a soumis un devis pour approbation.

            Sujet: {QUOTE_SUBJECT}
            Statut: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}

            Vous pouvez consulter ce devis à l'URL suivante:
            {URL}
    QuoteApproved
        module: Devis
        subject:
            [1CRM] Devis approuvé - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} a approuvé ce devis.

            Sujet: {QUOTE_SUBJECT}
            Statut: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}

            Vous pouvez consulter ce devis à l'URL suivante:
            {URL}
    QuoteRejected
        module: Devis
        subject:
            [1CRM] Devis non approuvé - {QUOTE_SUBJECT}
        body:
            {ASSIGNER} n'a pas approuvé ce devis.

            Sujet: {QUOTE_SUBJECT}
            Statut: {QUOTE_STATUS}
            Description: {QUOTE_DESCRIPTION}
            Cause du refus: {QUOTE_PROBLEM}

            Vous pouvez consulter ce devis à l'URL suivante:
            {URL}
    AccountAssigned
        module: Comptes
        subject:
            [1CRM] Compte - {ACCOUNT_NAME}
        body:
            {ASSIGNER} a assigné un compte à {ASSIGNED_USER}.

            Nom: {ACCOUNT_NAME}
            Type: {ACCOUNT_TYPE}
            Description: {ACCOUNT_DESCRIPTION}

            Vous pouvez consulter ce compte à l'URL suivante:
            {URL}
    CaseUpdate
        module: Réclamations
        subject:
            [1CRM] Réclamation mise à jour - {CASE_SUBJECT}
        body:
            Sujet: {CASE_SUBJECT}
            N° de réclamation: {CASE_NUMBER}
            Priorité: {CASE_PRIORITY}
            Statut: {CASE_STATUS}
            Description: {CASE_DESCRIPTION}

            Vous pouvez consulter cette réclamation à l'URL suivante:
            {URL}
    CaseCreate
        module: Réclamations
        subject:
            [1CRM] Réclamation créée  - {CASE_SUBJECT}
        body:
            Sujet: {CASE_SUBJECT}
            N° de réclamation: {CASE_NUMBER}
            Priorité: {CASE_PRIORITY}
            Statut: {CASE_STATUS}
            Description: {CASE_DESCRIPTION}

            Vous pouvez consulter cette réclamation à l'URL suivante:
            {URL}
    TaskAssigned
        module: Tâches
        subject:
            [1CRM] Tâche - {TASK_SUBJECT}
        body:
            {ASSIGNER} a assigné une tâche à {ASSIGNED_USER}.

            Sujet: {TASK_SUBJECT}
            Priorité: {TASK_PRIORITY}
            Date d'échéance: {TASK_DUEDATE}
            Statut: {TASK_STATUS}
            Description: {TASK_DESCRIPTION}

            Vous pouvez consulter cette tâche à l'URL suivante:
            {URL}
    UpcomingMeeting
        module: Rendez-vous
        subject:
            [1CRM] Rendez-vous planifié - {NAME} ({DATE})
        body:
            Sujet: {NAME}
            Date: {DATE}
            Durée: {DURATION}
            Lieu: {LOCATION}
            Participants: {INVITEES}
            Ressources: {RESOURCES}
    MeetingInvite
        module: Rendez-vous
        subject:
            [1CRM] Invitation à un rendez-vous - {MEETING_SUBJECT}
        body:
            Pour: {MEETING_TO},

            {ASSIGNER} vous a invité à un rendez-vous

            Sujet: {MEETING_SUBJECT}
            Statut: {MEETING_STATUS}
            Date de début: {MEETING_STARTDATE}
            Durée: {MEETING_DURATION}
            Lieu: {MEETING_LOCATION}
            Description: {MEETING_DESCRIPTION}

			Accepter l'invitation pour ce rendez-vous:
			{ACCEPT_URL}&accept_status=accept

			Accepter l'invitation pour ce rendez-vous mais sous réserve:
			{ACCEPT_URL}&accept_status=tentative

			Décliner l'invitation pour ce rendez-vous:
			{ACCEPT_URL}&accept_status=decline
    UpcomingCall
        module: Appels
        subject:
            [1CRM] Appel planifié - {NAME} ({DATE})
        body:
            Sujet: {NAME}
            Date: {DATE}
            Durée: {DURATION}
            Participants: {INVITEES}
    CallInvite
        module: Appels
        subject:
            [1CRM] Invitation à une conférence téléphonique - {CALL_SUBJECT}
        body:
            Pour: {CALL_TO},

            {ASSIGNER} vous a invité à une conférence téléphonique

            Sujet: {CALL_SUBJECT}
            Statut: {CALL_STATUS}
            Date de début: {CALL_STARTDATE}
            Durée: {CALL_DURATION}
            Description: {CALL_DESCRIPTION}

			Accepter cette conférence téléphonique:
			{ACCEPT_URL}&accept_status=accept

			Accepter cette conférence téléphonique sous réserve
			{ACCEPT_URL}&accept_status=tentative

			Décliner l'invitation pour cette conférence téléphonique
			{ACCEPT_URL}&accept_status=decline
    EmailAssigned
        module: Emails
        subject:
            [1CRM] Email - {EMAIL_SUBJECT}
        body:
            {ASSIGNER} a assigné un Email à {ASSIGNED_USER}.

            Sujet: {EMAIL_SUBJECT}
            Date d'envoi: {EMAIL_DATESENT}

            Vous pouvez consulter cet email à l'adresse suivante:
            {URL}
    ContactAssigned
        module: Contacts
        subject:
            [1CRM] Contact - {CONTACT_NAME}
        body:
            {ASSIGNER} a assigné un contact à {ASSIGNED_USER}.

            Nom: {CONTACT_NAME}
            Description: {CONTACT_DESCRIPTION}

            Vous pouvez consulter ce contact à l'adresse suivante:
            {URL}
    LeadAssigned
        module: Pistes
        subject:
            [1CRM] Piste - {LEAD_NAME}
        body:
            {ASSIGNER} a assigné une piste à {ASSIGNED_USER}.

            Nom: {LEAD_NAME}
            Provenance: {LEAD_SOURCE}
            Statut: {LEAD_STATUS}
            Description: {LEAD_DESCRIPTION}

            Vous pouvez consulter cette piste à l'adresse suivante:
            {URL}
    PortalLeadConversion
        module: Pistes
        subject:
            [1CRM] Piste convertie en Compte et en Contact par l'eStore
        body:
            La piste {LEAD_NAME} a passé une commande via l'eStore 1CRM. Elle a été convertie automatiquement
            en un contact {CONTACT_NAME} et en un compte rattaché {ACCOUNT_NAME}.

            Piste: {LEAD_URL}
            Contact: {CONTACT_URL}
            Compte: {ACCOUNT_URL}                
    OpportunityAssigned
        module: Affaires
        subject:
            [1CRM] Affaire - {OPPORTUNITY_NAME}
        body:
            {ASSIGNER} a assigné une affaire à {ASSIGNED_USER}.

            Nom: {OPPORTUNITY_NAME}
            Montant: {OPPORTUNITY_AMOUNT}
            Date de clôture estimée: {OPPORTUNITY_CLOSEDATE}
            Phase de vente: {OPPORTUNITY_STAGE}
            Description: {OPPORTUNITY_DESCRIPTION}

            Vous pouvez consulter cette affaire à l'adresse suivante:
            {URL}
    BugAssigned
        module: Bugs
        subject:
            [1CRM] Bug - {BUG_SUBJECT}
        body:
            {ASSIGNER} a assigné un bug à {ASSIGNED_USER}.

            N° de Bug: {BUG_BUG_NUMBER}
            Sujet: {BUG_SUBJECT}
            Type: {BUG_TYPE}
            Priorité: {BUG_PRIORITY}
            Statut: {BUG_STATUS}
            Résolution: {BUG_RESOLUTION}
            Version: {BUG_RELEASE}
            Description: {BUG_DESCRIPTION}
            Journal des travaux: {BUG_WORK_LOG}

            Vous pouvez consulter ce bug à l'adresse suivante:
            {URL}
    CampaignAssigned
        module: Campagnes
        subject:
            [1CRM] Campagne - {CAMPAIGN_NAME}
        body:
            {ASSIGNER} a assigné une campagne à {ASSIGNED_USER}.

            Sujet: {CAMPAIGN_NAME}
            Montant: {CAMPAIGN_AMOUNT}
            Date de clôture: {CAMPAIGN_CLOSEDATE}
            Statut: {CAMPAIGN_STATUS}
            Description: {CAMPAIGN_DESCRIPTION}

            Vous pouvez consulter cette campagne à l'adresse suivante:
            {URL}        
    ReportNotify
        module: Rapports
        subject:
            [1CRM] Rapport programmé - {REPORT_NAME} ({REPORT_DATE})
        body:
            Vous pouvez consulter ce rapport à l'adresse suivante:
            {URL}
    ProjectTaskAssigned
        module: Tâches Projet
        subject:
            [1CRM] Tâche Projet - {TASK_SUBJECT}
        body:
            Projet: {TASK_PROJECTNAME}
            Sujet: {TASK_SUBJECT}
            Statut: {TASK_STATUS}
            Priorité: {TASK_PRIORITY}
            Date de début: {TASK_STARTDATE}
            Date d'échéance: {TASK_DUEDATE}
            Description: {TASK_DESCRIPTION}

            Vous pouvez consulter cette tâche projet à l'adresse suivante:
            {URL}
    ThreadReply
        module: Forums
        subject:
            [1CRM] Réponse dans un forum - {THREAD_SUBJECT}
        body:
            Discussion: {THREAD_SUBJECT}

            Réponse de: {REPLIED_BY}
            Sujet de la réponse: {REPLY_SUBJECT}

            Vous pouvez consulter cette réponse à l'adresse suivante:
            {URL}
    MonthlyServiceInvoice
        module: Factures d'abonnement
        subject:
            [1CRM] Facture: {SERVICE_SUBJECT}
        body:
            Veuillez trouver en pièce jointe la dernière facture d'abonnement pour votre {BOOKING_CATEGORY_NAME}.
    MonthlyServiceExpiryRemainder
        module: Factures d'abonnement
        subject:
            [1CRM] Votre abonnement pour votre {BOOKING_CATEGORY_NAME} est arrivé à expiration
        body:
            Par cet email, nous vous rappelons que votre abonnement pour votre {BOOKING_CATEGORY_NAME} est arrivé à expiration et doit être renouvelé.
			Merci de prendre contact avec nous afin de renouveler votre abonnement.         
    AcceptDecline
        module: Système
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
                        <a href="http://infoathand.com">
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

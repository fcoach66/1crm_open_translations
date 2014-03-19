<?php return; /* no output */ ?>

schedule_type_dom
	emailmandelivery: Envoyer les campagnes emailing
	emaildripfeed: Planifier une campagne emailing multi-messages
	emailimport: Relever les Emails entrants
	email_cleanup: Nettoyer les emails
	runreports: Exécuter les rapports programmés
	email_expired_subcontracts: Envoyer un email pour les sous-contrats expirés
	email_overdue_project_tasks: Envoyer un email pour les tâches projet dont l'échéance est dépassée
	runforecasts: Mettre à jour les prévisions
	prunedatabase: Nettoyer la base de données
	processbounces: Envoyer à nouveau les emails qui sont revenus lors des campagnes
	update_rates: Mettre à jour les taux de change
	add_recurring: Créer les éléments récurrents
	activities_notification: Envoyer les notifications pour les actions
	event_reminders: Envoyer les rappels des événements
	process_workflow: Exécuter les Workflows
	google_sync: Synchroniser avec Google Agenda
	retrieve_stock_quotes: Mettre à jour les valeurs boursières
	sync_google_docs: Synchroniser avec Google Docs
	sync_google_contacts: Synchroniser avec Google Contacts
	close_vacations: Fermer les congés passés
	run_backup: Exécuter les sauvegardes
	send_monthly_services_invoices: Envoyer les factures des abonnements
	check_for_updates: Vérifier les mises à jour
	remove_expired_reports: Supprimer les archives des rapports
schedule_description_dom
	emailmandelivery: Permet d'envoyer les emails des campagnes lancées récemment.
	emaildripfeed: Plannifie les envois des campagnes multi-messages.
	emailimport: Relève les Emails entrants.
	runreports: Exécute les rapports programmés.
	runforecasts: Vérifie les périodes des prévisions et en crée ou en supprime si necessaire.
	email_expired_subcontracts: Envoi un email à l'utilisateur assigné pour les sous-contrats expirés.
	email_overdue_project_tasks:
		Envoi un email à l'utilisateur assigné pour les tâches projet dont l'échéance est dépassée.
	prunedatabase:
		Supprime définitivement de la base de données les enregistrement ayant été supprimés depuis l'interface utilisateur.
	processbounces: Envoie à nouveau les emails qui sont revenus lors des campagnes.
	email_cleanup:
		Supprime définitivement les emails pour lesquels des règles de suppression définies pour chaque utilisateur s'appliquent.
	update_rates:
		Met à jour les taux de change des devises via la Banque Centrale Européenne (www.ecb.int).
	add_recurring: Crée les enregistrements relatifs aux éléments récurrents.
	activities_notification: Envoie les notifications d'appels et de rendez-vous à venir.
	event_reminders: Envoie les emails de rappel pour les événements à venir.
	send_monthly_services_invoices: Envoie les factures des abonnements aux clients et aux utilisateurs concernés.
	process_workflow: Exécute les Workflows selon les conditions définies.
	google_sync: Synchronise l'agenda Google avec celui de 1CRM.
	sync_google_docs: Synchronise les documents 1CRM avec Google Docs.
	sync_google_contacts: Exporte les contacts 1CRM vers Google Contacts.
	close_vacations: Ferme les congés passés.
	run_backup: Réalise une sauvegarde du système avec un dump de la base de données.
	check_for_updates: Recherche les mises à jour disponibles pour 1CRM
	remove_expired_reports: Supprime les archives des rapports qui dépassent le nombre limite d'exécutions

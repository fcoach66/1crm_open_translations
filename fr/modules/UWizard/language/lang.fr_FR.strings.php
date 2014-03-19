<?php return; /* no output */ ?>

ERR_CANT_MAKE_BACKUP_PATH: "Impossible de créer un chemin de sauvegarde pour le fichier: {TO}"
ERR_CANT_BACKUP: "Impossible de sauvegarder le fichier: {TO}"
ERR_CANT_COPY: "Impossible de copier {FROM} vers {TO}"
ERR_CANT_COPY_FILE_DIR: La destination doit être un fichier et non un répertoire
ERR_DESTINATION_IS_NOT_DIR: La destination n'est pas un répertoire
ERR_EMPTY_TYPE_ID_VERSION: Une ou plusieurs de ces informations ne sont pas renseignées dans le fichier manifest: Type, ID ou la version
ERR_CANT_CREATE_BACKUP_DIR: Impossible de créer un répertoire pour les fichiers de sauvegarde
ERR_CANT_CLEAN_BACKUP_DIR: Impossible de nettoyer le répertoire pour les fichiers de sauvegarde
ERR_CANT_CREATE_UNZUP_DIR: Impossible de créer un répertoire pour les fichiers dézippés
ERR_CANT_UNZUP_PACKAGE: Le pack n'a pas pu être dézippé
ERR_PACKAGE_TYPE_NOT_SUPPORTED: Le fichier manifest indique que le type de pack n'est pas compatible
ERR_NO_THEME_ID: Aucun ID de thème n'est spécifié dans le pack
ERR_CURRENT_THEME:
	Impossible de désinstaller le thème utilisé actuellement. Veuillez changer de thème puis réessayer
LBL_STEP_PRECOPY: Préparation de l'installation
LBL_PRECOPY_OK: L'installation est prête
LBL_CREATE_PPACK: Créer un pack personnalisé
LBL_UPLOAD_DESC:
	Veuillez choisir un pack langue ou de congés, un module ou un pack personnalisé à uploader
ERR_INVALID_TYPE: Le fichier manifest du pack indique qu'il s'agit d'un type de pack invalide
ERR_INVALID_VERSION:
	Ce pack est compatible avec les versions de 1CRM {EXPECTED_VERSIONS}, alors que vous êtes sur la version {CURRENT_VERSION}
UPLOAD_ERR_INI_SIZE: La taille du pack dépasse la taille maximale définie dans le fichier php.ini
UPLOAD_ERR_FORM_SIZE: La taille du pack dépasse la taille maximale autorisée
UPLOAD_ERR_PARTIAL: Erreur lors de l'upload du pack
UPLOAD_ERR_NO_FILE: Aucun fichier n'a été uploadé
UPLOAD_ERR_NO_TMP_DIR:
	Absence de répertoire temporaire pour le fichier uploadé. Veuillez vérifier votre paramétrage de PHP
UPLOAD_ERR_CANT_WRITE: Impossible d'écrire le fichier temporaire uploadé
UPLOAD_ERR_EXTENSION: La configuration PHP n'autorise pas ce type d'extension de fichier
ERR_NOT_ZIP: Le fichier uploadé n'est pas au format ZIP
ERR_DUPLICATE_UPLOAD:
	Ce pack a déjà été uploadé. Des fichiers portant le même nom ne sont pas autorisés
ERR_CANT_MOVE:
	Erreur lors de l'écriture du fichier temporaire vers son répertoire de destination
ERR_OUTDATED: Une version identique ou plus récente a déjà été installée
ERR_OUTDATED_PPACK:
	Une version identique ou plus récente d'un composant de ce pack personnalisé a déjà été installée
STATUS_READY: Le pack est prêt à être installé
LBL_UPLOADED_PACKAGES: Packs uploadés
LBL_INSTALLED_PACKAGES: Packs installés
LBL_UPLOAD_SUCCESS: Le pack a été uploadé avec succès
ERR_CANT_CLEAN_UNZUP_PACKAGE: Impossible de supprimer les fichiers dézippés du répertoire
LBL_UNZIPPED_SUCCESS: Le pack a été correctement dézippé
LBL_PERMISSION_PROBLEM: "Impossible de copier {FROM} vers {TO}: {MESSAGE}"
LBL_REMOVE_PERMISSION_PROBLEM: "Impossible de supprimer {TO}: {MESSAGE}"
ERR_NOT_WRITABLE: Le fichier de destination n'a pas les droits en écriture
LBL_PERMISSIONS_OK: Tous les droits des fichiers du système sont corrects
ERR_NO_SOURCE_FILE: Le fichier source {FROM} n'a pas été trouvé
LBL_SUGAR_VERSION_NOT_WRITEBLE: "Le fichier de version n'a pas les droits en écriture: {TO}"
LBL_NEXT_STEP: Suivant
LBL_RETRY: Essayer à nouveau
LBL_CANCEL: Annuler
LBL_RETURN: Retour à la liste des packs
LBL_COMPONENT: Composant
LBL_STATUS: Statut
LBL_NAME: Nom
LBL_TYPE: Type
LBL_DATE_INSTALLED: Installé
LBL_VERSION: Version
LBL_ACTION: Opération
LBL_UNINSTALL: Désinstaller
LBL_STEP_COMPLETED: Etape complétée avec succés
LBL_STEP_WARNINGS: Etape complétée mais avec des alertes
LBL_STEP_FAILED:
	Cette étape ne peut pas être complétée. Veuillez corriger les erreurs ci-dessous, puis réessayer
LBL_INSTALLING: Installation en cours
LBL_UNINSTALLING: Désinstallation en cours
LBL_STEP: Etape
LBL_STEP_COMMIT: Soumettre les modifications
LBL_DATE_PUBLISHED: Publié
LBL_AUTHOR: Auteur
LBL_INSTALL: Installer
LBL_DELETE: Supprimer
LBL_UPLOAD_PACKAGE: Uploader un nouveau pack
LBL_UPLOAD: Uploader
ERR_CANT_MAKE_PATH: "Impossible de créer un chemin de destination: {TO}"
ERR_INVALID_PACKAGE_TYPE: Le pack uploadé est de type invalide
LBL_BACKUP_CUSTOM: Champs personnalisés
LBL_BACKUP_DROPDOWNS: Listes de choix
LBL_BACKUP_LAYOUTS: Mises en page
LBL_CREATE_PPACK_BUTTON: Créer
LBL_SELECT_CUSTOMIZATIONS: Veuillez sélectionner les personnalisations à sauvegarder

ERR_CUSTOM_CONFLICT: Un conflit relatif au type de données a été repéré pour le champ personnalisé '%s' du module '%s'
LBL_BACKUP_MODULES: Modules personnalisés
LBL_CHECKSYS_OK: Aucun problème de configuration détecté.
LBL_CHECKSYS_WARN:
	Un ou plusieurs problèmes de configuration ont été trouvés. L'installation peut se poursuivre, mais les fonctionnalités de l'application peuvent être réduites.
LBL_CONFIG_NOT_WRITABLE: Le fichier de configuration de l'application ne dispose pas des droits en écriture: {TO}
LBL_COPIED_FILES: Les fichiers du pack ont été copiés avec succès
LBL_CUSTOM_OK: Aucun conflit détecté
LBL_INCLUDE_PACKAGES: Inclure les packs
LBL_INSTALL_CUSTOM: Champs personnalisés
LBL_INSTALL_DROPDOWNS: Listes de choix
LBL_INSTALL_LAYOUT: Mises en page
LBL_INSTALL_MODULES: Modules personnalisés
LBL_PREPARED_INSTALL:
	Ce pack est prêt à être installé. Veuillez vous assurer que tous les utilisateurs se sont déconnectés avant de poursuivre, car l'accès au système va être interrompu et cela pourrait provoquer la perte des données en cours de saisie.
LBL_PREPARED_UNINSTALL:
	Ce pack est prêt à être désinstallé. Veuillez vous assurer que tous les utilisateurs se sont déconnectés avant de poursuivre, car l'accès au système va être interrompu et cela pourrait provoquer la perte des données en cours de saisie.
LBL_PREPARING_INSTALL: Installation du pack
LBL_PREPARING_UNINSTALL: Désinstallation du pack
LBL_PRE_INSTALL:
	L'installation du pack est prête à être réalisée. Une fois la mise à jour démarrée, ne cliquer pas sur les boutons "Retour" ou "Actualiser" de votre navigateur; ne fermer pas non plus la fenêtre de votre navigateur tant que la mise à jour n'est pas terminée.
LBL_PRE_UNINSTALL:
	La désinstallation du pack est prête à être réalisée. Une fois le processus démarré, ne cliquer pas sur les boutons "Retour" ou "Actualiser" de votre navigateur; ne fermer pas non plus la fenêtre de votre navigateur tant que la désinstallation n'est pas terminée.
LBL_PROCEED: Poursuivre
LBL_READY_INSTALL: Installation prête à être réalisée.
LBL_RECHECK: Vérifier à nouveau
LBL_RECORDED_HISTORY: Historique des mises à jour sauvegardé
LBL_REMOVED_HISTORY: Suppression depuis l'historique des mises à jour effectuée
LBL_REMOVED_PACKAGE: Fichier du pack supprimé
LBL_REMOVED_TEMP: Fichiers temporaires supprimés
LBL_REPAIRED_DB: Vérification de la structure de la base de données terminée
LBL_RESET_CACHE: Réinitialisation du cache du système
LBL_RESET_LANG: Réinitialisation du cache des fichiers langue
LBL_RESTORED_ACCESS: Accès au système restauré pour les utilisateurs
LBL_RESTORED_FILES_BACKUP: Fichiers de la sauvegarde restaurés
LBL_STEP_CHECKCUSTOMFIELDS: Rechercher les conflits dans les champs personnalisés
LBL_STEP_CHECKPERMISSIONS: Vérification des droits des fichiers
LBL_STEP_CHECKREMOVEPERMISSIONS: Vérification des droits des fichiers
LBL_STEP_CHECKSYSTEM: Vérifier la configuration du système
LBL_STEP_CLEANUP: Nettoyage final
LBL_STEP_CONFIRM: Prêt à démarrer
LBL_STEP_UNZIPPACKAGE: Décompression du pack
LBL_UPDATED_VERSION: Version du système mise à jour
LBL_UPGRADE_REDIRECT: Redirection en cours pour finaliser l'installation...
LBL_BACKUP_PDF_TEMPLATES: Formulaires PDF personnalisés
LBL_INSTALL_PDF_TEMPLATES: Formulaires PDF personnalisés
LBL_UPLOAD_DISABLED: L'upload de packs est désactivé pour cette version hébergée de 1CRM.
LBL_DOWNLOADING: Downloading
LBL_UPDATE_NOT_FOUND: La mise à jour demandée n'a pas pu être trouvée.

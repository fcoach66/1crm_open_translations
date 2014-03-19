<?php ?>

# List of 1CRM versions this package can be installed in.
# Current version should match at least one version specified
# by regex_matches or exact_matches
acceptable_sugar_versions
	# regular expressions
	regex_matches
		- 7\.0\..*
		- 7\.1\..*		
		- 7\.5\..*				
	# exact version numbers
	# exact_matches
	#	- 7.0.0a
	#	- 7.0.1
	#	- 7.0.2
	#	- 7.0.3
	#	- 7.0.4
	#	- 7.0.5
	#	- 7.0.6
	#	- 7.0.7
	#	- 7.0.8
	#	- 7.0.9
	#	- 7.0.10
	#	- 7.0.11
	#	- 7.0.12
	#	- 7.0.13
	#	- 7.0.14
	#	- 7.0.15
	#	- 7.0.16
	#	- 7.1.0
	#	- 7.1.1
	#	- 7.1.2
	#	- 7.1.3
	#	- 7.1.4
	#	- 7.1.5
	#	- 7.1.6
	#	- 7.1.7
	#	- 7.1.8
	#	- 7.1.9
	#	- 7.1.10
	#	- 7.1.11
	#	- 7.1.12	
	#	- 7.1.13
	#	- 7.1.14
	#	- 7.1.15
	#	- 7.1.16
	#	- 7.1.17
	#	- 7.1.18
	#	- 7.1.19	
	#	- 7.5.0	


# Package name
name: French Language Pack

# Package description
description: French (France) translation for 1CRM 7.0.x, 7.1.x and 7.5.x

# Package author/publisher
author: 3aCRM

# Package publish date
published_date: 2014-01-07

# Package version
version: 1.7.0

# Package type
type: langpack

# True if this package can be uninstalled by 
# -  deleting new files created during installation
# -  restoring files overwritten during installation
is_uninstallable: true

# Package ID. ID/version combination should be unique.
# When new version is released, keep ID, and increase version number
id: FrenchLanguagePack

# List of files to copy.
# Each entry is an array of 2 elements
#	- from specifies source file(s), path is relative to zip file root
#	- to specifies destination file(s), path is relative to 1CRM root directory
# 'from' can be file or directory. If 'from' is a directory, 'to' should be a directory
# as well. If 'from' is a file, 'to' can be a directory or file. Use trailing slash
# to designate that 'to' is a directory.
copy
	--
		from: modules
		to: modules
	--
		from: include
		to: include
	--
		from: install
		to: install



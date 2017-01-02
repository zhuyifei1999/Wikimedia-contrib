<?php
#################################################
## Constants
#################################################
##########
## Paths
##########
# the directory to which to write non-public data like logs and cache files.
DEFINE('DATA_PATH', '/data/project/meta/');

# the directory to which to write log files.
DEFINE('REPLICA_CNF_PATH', DATA_PATH . '/replica.my.cnf');

# the directory to which to write log files.
DEFINE('LOG_PATH', DATA_PATH . '/logs/');

# the directory to which to write cache files.
DEFINE('CACHE_PATH', DATA_PATH . '/cache/');

# the web-accessible directory containing the backend modules.
DEFINE('BACKEND_PATH', __DIR__);

##########
## Database
##########
# always use this hostname when connecting to a database.
# This simplifies SSH tunnelling, but reduces the effectiveness of load balancing. This should only
# be uncommented if needed for local development.
#DEFINE('FORCE_DB_HOST', 'localhost:65001');


#################################################
## Site configuration
#################################################
$settings = Array();

#############################
## Error-reporting
#############################
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
$settings['debug'] = false;


#############################
## URLs and navigation
#############################
$settings['root_url']  = '//tools.wmflabs.org/meta';

$settings['tools'] = array(
	'Wikimedia' => array(
		array( '/accounteligibility', 'analyze an account to determine whether it is eligible to vote in a given event.', 'Account eligibility' ),
		array( '/catanalysis', 'analyze edits to pages in a category tree or with a prefix over time.', 'Category analysis' ),
		array( '/crossactivity', 'measures a user\'s latest edit, bureaucrat, or sysop activity on all wikis.', 'Crosswiki activity' ),
		array( '/globalgroups', 'lists rights with descriptions for each global group.', 'Global groups' ),
		array( '/gusersearch', 'searches and filters global account creations', 'Global user search' ),
		array( '/magicredirect', 'redirects to an arbitrary URL with tokens based on user and wiki filled in.', 'Magic redirect' ),
		array( '/stalktoy', 'provides comprehensive global information about the given user, IP address, or CIDR range.', 'Stalk toy' ),
		array( '/stewardry', 'analyze user activity by group on a Wikimedia wiki.', 'Stewardry' ),
		array( '/userpages', 'find your user pages on all wikis.', 'User pages' )
	),
	'generic' => array(
		array( '/regextoy', 'perform regex search and replace', 'Regex toy' ),
		array( '/iso639db','search ISO 639 codes.', 'ISO-639 database' ),
		array( '/pgkbot', 'IRC-based wiki monitoring bot', 'pgkbot' )
	)
);

#############################
## Footer
#############################
/* default licensing */
$settings['license'] = 'This toy is open-source and released under the <a href="//creativecommons.org/licenses/by/3.0/" title="Creative Commons Attribution 3.0 license">CC-BY 3.0 license</a> (except the <a href="//commons.wikimedia.org/wiki/File:Gear_3.svg" title="gear_3">gear logo</a>).';

/* benchmark precision */
$settings['profile_time_precision'] = 3;
$settings['profile_perc_precision'] = 2;
?>

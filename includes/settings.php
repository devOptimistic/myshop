<?php
if( ! defined('DBHOST') )
    define( 'DBHOST', 'localhost' );
if( ! defined('DBUSER') )
    define( 'DBUSER', 'root' );
if( ! defined('DBPASS') )
    define( 'DBPASS', '' );
if( ! defined('DBNAME') )
    define( 'DBNAME', 'mydb' );

if( ! defined('COLLATE') )
	define( 'COLLATE', 'utf8mb4_general_ci' );  // utf8mb4_persian_ci

if( ! defined('CHARSET') )
    define( 'CHARSET', 'utf8mb4' );

$dbHost =	DBHOST;
$dbUser =	DBUSER;
$dbPass =	DBPASS;
$dbname =	DBNAME;

$charset =	CHARSET;
$collate =	COLLATE;

$softSetup = false;

if( ! defined('loginDeadline') ) 
    define( 'loginDeadline', 30 ); // Days
if( ! defined('activityDeadline') ) 
    define( 'activityDeadline', 10 ); // Minutes

?>
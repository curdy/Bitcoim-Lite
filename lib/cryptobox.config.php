<?php
/**
 *  ... Please MODIFY this file ...
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"aa1jp7pw4dnjr8j.ctsgce3shpnj.us-east-1.rds.amazonaws.com");				// hostname
 define("DB_USER", 	"root");		// database username
 define("DB_PASSWORD", 	"19950590Curdy");		// database password
 define("DB_NAME", 	"ebdb");	// database name

/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional)", "etc...");
 */
 
 $cryptobox_private_keys = array("32668AAVy4PhBitcoin77BTCPRVierDZGPqnOoqmCi0Ch5vZwM");




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys);

?>
<?php
	require "vendor/SSO-master/SSO/SSO.php";
	$letak_cas = "vendor/CAS-1.3.4/CAS.php";
	
	use SSO\SSO;
	SSO::setCASPath($letak_cas);
	
	SSO::authenticate();
	
	$user = SSO::getUser();
	echo $user->username;             // prints user's username
	echo $user->name;                 // prints user's name
	echo $user->npm;                  
	echo $user->role;                 // prints user's role
	echo $user->org_code;             // prints user's organization code
	echo $user->faculty;              // prints user's faculty
	echo $user->study_program;        // prints user's study program
	echo $user->educational_program;  // prints user's educational program
	
	SSO::check();
?>
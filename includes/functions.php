<?php
include "alert.php";
include 'DB/DB.php';
include "security/Authentication.php";

if( ! function_exists('get_header') ){
	function get_header( $name = '' ){
		if(! empty($name))
			$name="-{$name}";
		include "views/templates/header{$name}.php";
	}
}
if( ! function_exists('get_footer') ){
	function get_footer( $name = '' ){
		if(! empty($name))
			$name="-{$name}";
		include "views/templates/footer{$name}.php";
	}
}
if( ! function_exists('get_template_part') ){
	function get_template_part($slug,$name = '',$args=array()){
		if(! empty($name))
			$name="-{$name}";
		$__pathToTemplate =  "views/templates/{$slug}{$name}.php";
			foreach ($args as $key => $value) 
				$$key= htmlspecialchars($value); // Script Injection
		include $__pathToTemplate;
	}
}
if( ! function_exists('safeScript') ){
	function safeScript($arg){  // against script injection
		if( is_array($arg) )
			foreach($arg as $key => $value)
				$arg['key'] = safeScript($value);
		else
			$arg = htmlspecialchars($arg);
		
		return $arg;
	}
}
if( ! function_exists('view') ){
	function view($slug, $name = null, $args = array(), $alerts = null){ // 'home'
		if( isset( $name ) )
			$name = "-{$name}"; // '-home'
		$__pathToTemplate = "views/{$slug}{$name}.php";
		
		$args = safeScript($args);
		//extract($args);
		foreach($args as $key => $value)
			$$key = $value;
		
		include $__pathToTemplate;
	}	
}



if( ! function_exists('redirect') ){
	function redirect( $address ){
		header("Location: {$address}"); // دستور به مرورگر براي ريدایرکت به آدرس
		exit();
	}
}

function mySessionStater(){
	//if(session_status() !== PHP_SESSION_ACTIVE){
		$lifetime = 365 * 24 * 60 * 60; // 365 days
		session_set_cookie_params ( $lifetime, $path = '/', $domain = $_SERVER['HTTP_HOST'] , $secure = false , $httponly = true );
		session_start();
	//}
}
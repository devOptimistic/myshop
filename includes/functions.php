<?php
include 'DB/DB.php';
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
		$row=$args;
		include "views/templates/{$slug}{$name}.php";
	}
}

if( ! function_exists('alertTmp') ){
	function alertTmp( $text , $type = 'error' ){
		switch( $type ){
			case 'success': break;
			case 'warning': break;
			case 'error':	$type = 'danger';
		}
		$alert = "
				<article class = 'alert alert-{$type} alert-dismissible fade show' role='alert'>
					{$text}
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</article>";
		return $alert;	
	}
}
if( ! function_exists('alerts') ){
	function alerts( $text = '' , $type = 'error'){
		static $alerts = ''; // متغیر استاتیک فقط دفعه اول مقدار اولیه میگیرد
		if(  $text !== '' ){ // اگر پیام جدید داریم
			$alerts .=  alertTmp($text, $type);
		}
		elseif( $alerts !== '' ){
			$result = $alerts;
			$alerts = '';
			return $result;
		}
		else
			return false;		
	}
}

if( ! function_exists('redirect') ){
	function redirect( $address ){
		header("Location: {$address}"); // دستور به مرورگر براي ريدایرکت به آدرس
		exit();
	}
}

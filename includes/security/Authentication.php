<?php
if(! class_exists('Authentication')){
    class Authentication{
        static public function login($uid){
            //$_SESSION['authenticated']=true;
            $_SESSION['uid']=$uid;
            $_SESSION['lastLogin']=time();
        }
        static public function check(){
            return isset($_SESSION['uid']);
        }
        static public function logout(){
            unset($_SESSION['uid']);
        }
        static public function uid(){
            return $_SESSION['uid'];
        }
        static public function autoLogout(){
            if(time() - $_SESSION['lastLogin'] > loginDeadline*24*60*60) //  30 Days
                self::logout();
            if(time() - $_SESSION['lastActivity'] > activityDeadline * 60) //  10 Mins
                self::logout();

            $_SESSION['lastActivity']=time();

        }
    }
}
?>
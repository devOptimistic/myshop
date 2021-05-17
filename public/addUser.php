<?php
include "__php__.php";
$parameters=$_POST;
if (isset($_POST['submit'])){
    $db = new DB();
    $where="email = '{$parameters['email']}'";
    $table=User::find($where);
    if(! isset($table[0])){ // اگر ایمیل تکراری نبود : 
        unset( $parameters['submit'] );
        $uid = User::add( $parameters );

        // کاربر را لاگین کن
        Authentication::login($uid);
        $table=User::find("id='{$uid}'");
        Alert::alerts("{$table[0]['firstname']} عزیز خوش آمدی","success");

        if(isset($_SESSION['redirect'])){
            unset($_SESSION['redirect']);
            redirect($_SESSION['redirect']);
        }
        else
            redirect("dashboard.php");
    }
    else // اگر ایمیل تکراری بود : 
        Alert::alerts("این ایمیل قبلا ثبت نام شده است");
   
}
$alerts = Alert::alerts();
echo $alerts;
view("addUser",null,$parameters,$alerts);
?>


<?php
    include "__php__.php";
    $parameters=$_POST;
    if( isset( $_POST['submit'] ) ){ // اگر از فرم آمده
        $db = new DB();
        unset($parameters['submit']);
        $where = "email = '{$parameters['email']}' AND password = '{$parameters['password']}'";
        $table=User::find($where);
        if(isset($table[0])){
            $row=$table[0];
            Authentication::login($row['id']);
            Alert::alerts("{$row['firstname']} عزیز خوش آمدی","success");

            if(isset($_SESSION['redirect'])){
                redirect($_SESSION['redirect']);
                unset($_SESSION['redirect']);
            }
            else
                redirect("dashboard.php");
        }
        else{
            Alert::alerts("نام کاربری یا رمز عبور اشتباه است");
        }
    }
    
    $alerts = Alert::alerts();
    view("login",null,$parameters,$alerts);
?>
<?php
$page_title = "ورود";
if( ! function_exists("main") ){
    function main(){
        echo '
            <section class="row" style="margin-top: 30px;">
                <form class="col-6 offset-3" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="email" class="form-control" id="email" name="email" value="';
        if(isset($email))
            echo $email;
        echo '
                        ">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">ورود</button>
                </form>
            </section>
        ';
    }
}
include "templates/master.php";
?>
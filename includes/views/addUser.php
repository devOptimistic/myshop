<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت کاربر</title>
    <link rel="stylesheet" href="assets/bs/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="assets/css/Font/font.css">
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="container">
        <section class="row" style="margin-top: 30px;">
        <form class="col-6 offset-3" method="post">
            <h1 class="text-center">ثبت کاربر</h1>
            <div class="mb-3">
                <label for="firstname" class="form-label">نام</label>
                <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">نام خانوادگی</label>
                <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">ایمیل</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">موبایل</label>
                <input type="phone" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">رمز عبور</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">استان</label>
                <input type="text" class="form-control" id="state" name="state">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">شهر</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">آدرس</label>
                <textarea class="form-control" id="address" rows="3" name="address"></textarea>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">نقش</label>
                <select class="form-select" id="role" name="role">
                    <option value="کاربر معمولی">کاربر معمولی</option>
                    <option value="کاربر ویژه">کاربر ویژه</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">تصویر</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            
            <button name="submit" type="submit" class="btn btn-primary">ثبت</button>
        </form>
        </section>
    </main>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bs/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>
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
            <h1 class="text-center">ثبت محصئل</h1>
            <div class="mb-3">
                <label for="firstname" class="form-label">عنوان</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">قیمت</label>
                <input type="number" class="form-control" id="price" name="price">
            </div>
           
            <div class="mb-3">
                <label for="address" class="form-label">توضیحات</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">وضعیت</label>
                <select class="form-select" id="status" name="status">
                    <option value="default">موجود</option>
                    <option value="unavailable">ناموجود</option>
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
{{--
@include('index')--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="/css/admin-custom.css" rel="stylesheet">
    <title>ایجاد کاربر جدید</title>
</head>
<body>
    <div class="container">
        <form action = "/user/store" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td>نام:</td>
                    <td><input type='text' name='name' /></td>
                <tr>
                    <td>نام خانوادگی:</td>
                    <td><input type="text" name='family'/></td>
                </tr>
                <tr>
                    <td>ایمیل:</td>
                    <td><input type="text" name='email'/></td>
                </tr>
                <tr>
                    <td>شماره تلفن:</td>
                    <td><input type="text" name='phone_number'/></td>
                </tr>
                <tr>
                    <td>رمز عبور:</td>
                    <td><input type="text" name='password'/></td>
                </tr>
                <tr>
                    <td>نوع کاربر:</td>
                    <td>
                        <select name="type">
                            <option value="student">دانشجو</option>
                            <option value="teacher">استاد</option>
                        </select></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                        <input type = 'submit' value = "افزودن"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
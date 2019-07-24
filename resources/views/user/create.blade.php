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
        <form action="" method="get">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">نام:</label>
                <input type="name" class="form-control" id="name" value="{{old('name', isset($userItem)? $userItem->name : '')}}">
            </div>
            <div class="form-group">
                <label for="family">نام خانوادگی:</label>
                <input type="family" class="form-control" id="family" value="{{old('family', isset($userItem)? $userItem->family : '')}}">
            </div>
            <div class="form-group">
                <label for="email">ایمیل:</label>
                <input type="email" class="form-control" id="email" value="{{old('email', isset($userItem)? $userItem->email : '')}}">
            </div>
            <div class="form-group">
                <label for="phone">شماره تلفن:</label>
                <input type="phone" class="form-control" id="phone" {{old('phone_number', isset($userItem)? $userItem->phone_number : '')}}>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور:</label>
                <input type="password" class="form-control" id="password" value="{{old('password', isset($userItem)? $userItem->password : '')}}">
            </div>
            <label for="type">نقش کاربر:</label>
            <select name="type" id="type" class="form-control">
                <option value="0" {{ isset($userItem) && $userItem->type == 0 ? 'selected': '' }}>دانشجو</option>
                <option value="1" {{ isset($userItem) && $userItem->type == 1? 'selected': '' }}>استاد</option>
            </select>
            <br/>
            <button type="submit" class="btn btn-primary">ثبت</button>
        </form>
    </div>
</body>
</html>
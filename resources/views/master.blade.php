<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TestRoocket</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container bg-dark">
        <div class="row">
            <div class="col p-4">
                <form>
                    <div class="form-group text-white">
                        <label for="exampleInputEmail1">آدرس ایمیل</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text">اطلاعا شما به صورت کاملا محرمانه باقی
                            میماند</small>
                    </div>
                    <div class="form-group text-white">
                        <label for="exampleInputPassword1">رمز عبور</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check text-white">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">مرا به یاد بیار</label>
                    </div>
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>video - 2hider.com</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="/node_modules/hdjs/static/package/webuploader/jekyll/css/bootstrap.min.css" rel="stylesheet">
    <link href="/node_modules/hdjs/static/package/webuploader/jekyll/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/hdcms.css" rel="stylesheet">
</head>
<body class="hdcms-login">
<div class="container logo">
    <div style="height: 60px;"></div>
</div>
<div class="container well">
    <div class="row ">
        <div class="col-md-6">
            <form method="post" action="">
                {{ csrf_field() }}
                <div class="form-group ">
                    <label>帐号</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-user"></i></div>
                        <input type="text" name="username" class="form-control input-lg"
                               placeholder="请输入帐号" value="">
                    </div>
                </div>
                <div class="form-group ">
                    <label>密码</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-w fa-key"></i></div>
                        <input type="password" name="password"
                               class="form-control input-lg" placeholder="请输入密码" value="">
                    </div>
                </div>
                @if(session('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
                @endif
                <button type="submit" class="btn btn-primary btn-lg">登录</button>
            </form>
        </div>
        <div class="col-md-6">
            <div style="background: url('https://gss0.baidu.com/9fo3dSag_xI4khGko9WTAnF6hhy/zhidao/pic/item/d50735fae6cd7b8964afe8f10c2442a7d8330e85.jpg');background-size:100% ;height:230px;"></div>
        </div>
    </div>
    <div class="copyright">
        Powered by video_cms v2.0 © 2017-2018 www.2hider.com
    </div>
</div>
</body>
</html>
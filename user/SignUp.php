<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>注册账号-抖乐</title>

    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/app.css">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="../appjs/verificaionFormat.js"></script>

</head>

<body style="background-image: url('https://0d077ef9e74d8.cdn.sohucs.com/rjy62BX'); background-size: cover; background-position: top center;">
<div class="header">

</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="login-card">
                <!--                主题card-->
                <div class="login-title-card">
                    <h4 style="display: block;text-align: center;color:#fff">注册</h4>
                    <h3 style="display: block;text-align: center;color:#fff;">开启你的色彩人生</h3>
                </div>
                <div class="login-content">
                    <div class="form-group">
                        <input id="input-email" class="login-username  underline-input" type="text" placeholder="Enter your email"/>
                    </div>
                    <div class="form-group">
                        <input class="login-username  underline-input" type="password" placeholder="password..."/>
                    </div>
                    <div style="" class="form-group ">
                        <div style="width:80%; " class="row">
                            <input style="left:0px;" class="login-verification  underline-input" type="text" placeholder="verification..."/>
<!--                            获取邮箱验证码-->
                            <script>
                                function getEmailVevification(){

                                    var input_email = document.querySelector('#input-email');
                                    var email = input_email.value;
                                    if (email==""){//判断是否输入
                                        input_email.focus();
                                        alert("请输入你的电子邮箱");
                                    }else if(isEmail(email)){//判断格式
                                        alert('验证码已经发送到'+email+'邮箱');
                                    }else{
                                        input_email.focus();
                                        alert("邮箱格式错误请检查");
                                    }

                                }
                            </script>
                            <a style="color:#6c98ff;font-size:12px;margin-left: 5px;" href="javascript:getEmailVevification();">获取验证码</a>
                        </div>
                    </div>


                    <input class="login-btn" type="button" value="注册账号"/>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer">
    <div style="background-color: transparent;">
        <h3 style="color:white;text-align: center; margin-top:50px;">DW STUDIO</h3>
        <p style="color:white;text-align: center;">你说世界不可能改变，那么让我带领你改变世界</p>
    </div>
    <p style="color: white; text-align: center;">@2019-2019 Copynight by<a href="http://dwei.top">大伟工作室</a></p>
</div>

</body>
</html>

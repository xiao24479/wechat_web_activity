<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/login.html */
class __TwigTemplate_d4c3203556670a31c6ea25c97b821985e09790ec5934f7a9cc871eddfea94cf7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登录</title>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/swl.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js\"></script>
</head>
<body>
<script>
    swal({
        title:\"LEO后台管理系统\",
        text: \"输入登录密码\",
        content: \"input\",
        button: {
            text: \"登录！\",
            closeModal: false,
        },
    })
        .then(pass => {
            if (!pass){
                throw new Error('密码不能为空');
            }
            return pass;
        })
        .then(pass => {
            let formData = new FormData();
            formData.append(\"term\",pass);
            return fetch('?c=admin&a=postLogin',{
                method: 'POST',
                headers: {
                    'token':'";
        // line 35
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "'
                },
                body:formData,
                credentials: 'include'
            });
        })
        .then(results => {
            return results.json();
        })
        .then(json => {
            console.log(json);
            if (json.errono == 0) {
                swal({
                    title: json.msg,
                    text: \" \",
                    icon: \"success\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=index\";
                },2000);
            }else {
                swal({
                    title: json.msg,
                    text: \" \",
                    icon: \"error\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=login\";
                },2000);

            }

        })
        .catch(err => {
            if (err) {
                swal({
                    title: err.message,
                    text: \" \",
                    icon: \"error\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=login\";
                },2000);
            } else {
                swal.stopLoading();
                //swal.close();
            }
        });
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/login.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zh-CN\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>登录</title>
    <link href=\"{{ public }}css/swl.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.bootcss.com/sweetalert/2.1.2/sweetalert.min.js\"></script>
</head>
<body>
<script>
    swal({
        title:\"LEO后台管理系统\",
        text: \"输入登录密码\",
        content: \"input\",
        button: {
            text: \"登录！\",
            closeModal: false,
        },
    })
        .then(pass => {
            if (!pass){
                throw new Error('密码不能为空');
            }
            return pass;
        })
        .then(pass => {
            let formData = new FormData();
            formData.append(\"term\",pass);
            return fetch('?c=admin&a=postLogin',{
                method: 'POST',
                headers: {
                    'token':'{{ csrf_token }}'
                },
                body:formData,
                credentials: 'include'
            });
        })
        .then(results => {
            return results.json();
        })
        .then(json => {
            console.log(json);
            if (json.errono == 0) {
                swal({
                    title: json.msg,
                    text: \" \",
                    icon: \"success\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=index\";
                },2000);
            }else {
                swal({
                    title: json.msg,
                    text: \" \",
                    icon: \"error\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=login\";
                },2000);

            }

        })
        .catch(err => {
            if (err) {
                swal({
                    title: err.message,
                    text: \" \",
                    icon: \"error\",
                    buttons: false,
                });
                setTimeout(function () {
                    window.location.href = \"?c=admin&a=login\";
                },2000);
            } else {
                swal.stopLoading();
                //swal.close();
            }
        });
</script>
</body>
</html>", "admin/login.html", "/www/web/wx.dgnxyy.com/hd/app/views/admin/login.html");
    }
}

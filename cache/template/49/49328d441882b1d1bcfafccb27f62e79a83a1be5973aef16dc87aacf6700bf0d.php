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

/* index/article.html */
class __TwigTemplate_660b0245f9b672678f89f7efa693548da5ec186e4c082970fb86343a0805de22 extends \Twig\Template
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
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
    <title>文章</title>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/article.css";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/jquery-1.12.4.min.js\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/rootResize.js\"></script>
    <script src=\"https://cdn.bootcss.com/html2canvas/0.4.1/html2canvas.js\"></script>
</head>
<body>
<div class=\"container\" style=\"width:100%;max-width: 640px;\">
    我是html2canvas生成的图片
    <!-- 用于展示html2canvas生成的图片 -->
    <img src=\"\" class=\"j_snapshot_img\"style=\"width:100%;\" >
</div>
<div class=\"box\" id=\"contbox\">
    <div class=\"logo\"><img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/logo2.png\"></div>
    <div class=\"main\">
        <div class=\"main-box\">
            <div class=\"main-top\">
                <p class=\"ticket\">ONE WAY TICKET<span>";
        // line 23
        echo twig_escape_filter($this->env, ($context["ticket"] ?? null), "html", null, true);
        echo "</span></p>
                <i><img src=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/now-past.png\"></i>
                <p class=\"login-time\">登陆时间<span>";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y年m月d日 H:i", "Asia/Shanghai"), "html", null, true);
        echo "</span></p>
            </div>
            <div class=\"main-con\">
                <div class=\"main-con-box\">
                    <span>@ ";
        // line 29
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["datas"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), "html", null, true);
        echo "</span>
                    <i><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["datas"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["img"] ?? null) : null), "html", null, true);
        echo "\" class=\"img\"></i>
                    <p>";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["datas"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["content"] ?? null) : null), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"line\"><img src=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/line.png\"></div>
            <div class=\"main-con\">
                ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["datas"] ?? null), 1, [], "array", true, true, false, 36) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["datas"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null))) {
            // line 37
            echo "                <div class=\"main-con-box\">
                    <span>@ ";
            // line 38
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["datas"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null), "html", null, true);
            echo "</span>
                    <i><img src=\"";
            // line 39
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["datas"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["img"] ?? null) : null), "html", null, true);
            echo "\" class=\"img\"></i>
                    <p>";
            // line 40
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["datas"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["content"] ?? null) : null), "html", null, true);
            echo "</p>
                </div>
                ";
        } else {
            // line 43
            echo "                <div class=\"notxt\">另一位暂未留下印记</div>
                ";
        }
        // line 45
        echo "            </div>
            <div class=\"line\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/foot-bg.png\"></div>
        </div>
        <div class=\"main-foot\">
            <div class=\"btn\">
                <a href=\"javascript:;\" onClick=\"showEwm()\">&middot;&middot;&middot;&nbsp;&nbsp;长按图片保存，分享你的故事&nbsp;&nbsp;&middot;&middot;&middot;</a>
            </div>
            <div class=\"ewm\">
                <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/ewm.png\">
            </div>
        </div>
    </div>
</div>
</body>
<script>
    \$(function(){
        // \$snapshot为分享快照内容的dom元素，
        // \$snapshotImg为要放domtoimage生成的图片的img元素
        var \$snapshot = document.querySelector('.j_snapshot');
        var \$snapshotImg = document.querySelector('#contbox');


        // html2canvas 生成canvas
        html2canvas(\$snapshot,{
            // useCORS: true, // 允许图片跨域
            backgroundColor: null,
            logging: false,
        }).then(function(canvas) {
            // 'image/jpeg', 1.0
            // 再利用canvas的toDataURL 方法，将canvas转为图片
            var dataURL = canvas.toDataURL();
            \$snapshotImg.src = dataURL;
        }, function(err) {
            console.error('oops, something went wrong!', err);
        });
    });

    \$(function(){
        html2canvas(\$(\"#contbox\"), {
            height: \$(\"#contbox\").outerHeight() + 20,
            width: \$(\"#contbox\").outerWidth() + 20  ,
            onrendered: function(canvas) {
                //将canvas画布放大若干倍，然后盛放在较小的容器内，就显得不模糊了
                var timestamp = Date.parse(new Date());
                //把截取到的图片替换到a标签的路径下载
                \$(\"#down1\").attr('href',canvas.toDataURL());
                //下载下来的图片名字
                \$(\"#down1\").attr('download',timestamp + '.png') ;
                //document.body.appendChild(canvas);
            }
            //可以带上宽高截取你所需要的部分内容
        });
    });
    \$(\".img\").on({
        touchstart: function(e){
            timeOutEvent = setTimeout(function(){
                \$(\".btn\").hide();
                \$(\".ewm\").show();
            },500);
        },
        touchmove: function(){
            clearTimeout(timeOutEvent);
            timeOutEvent = 0;
            e.preventDefault();
        },
        touchend: function(e){
            clearTimeout(timeOutEvent);
            if(timeOutEvent!=0){//点击
                //此处为点击事件----在此处添加跳转详情页
            }
            return false;
        }
    });
    function showEwm(){
        \$(\".btn\").hide();
        \$(\".ewm\").show();
    }
</script>
</html>";
    }

    public function getTemplateName()
    {
        return "index/article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  133 => 46,  130 => 45,  126 => 43,  120 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  102 => 34,  96 => 31,  92 => 30,  88 => 29,  81 => 25,  77 => 24,  73 => 23,  66 => 19,  53 => 9,  49 => 8,  43 => 7,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/article.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/article.html");
    }
}

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
class __TwigTemplate_87d3dff0315c1deb98e85fabc32e555cd612cb85a0cb227902a1a98dc9e7967f extends \Twig\Template
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
    <title>";
        // line 6
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
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
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/html2canvas.min.js";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\"></script>
</head>
<body>
<div class=\"wrap\">
    <div class=\"container\" style=\"width:100%;max-width: 640px;display: none;\">
        <img src=\"\" class=\"j_snapshot_img\" style=\"width:100%;\" >
    </div>
    <div class=\"box j_snapshot\" >
        <div class=\"logo\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/logo2.png\"></div>
        <div class=\"main\">
            <div class=\"main-box\">
                <div class=\"main-top\">
                    <div class=\"main-top-box\">
                        <div class=\"bg\"><img src=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/top3.png\" alt=\"\"></div>
                        <div class=\"top-con\">
                            <div class=\"head-con\">
                                <p class=\"ticket\">ONE WAY TICKET<span>";
        // line 26
        echo twig_escape_filter($this->env, ($context["ticket"] ?? null), "html", null, true);
        echo "</span></p>
                                <i><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/now-past.png\"></i>
                                <p class=\"login-time\">登陆时间<span>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y年m月d日 H:i", "Asia/Shanghai"), "html", null, true);
        echo "</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"main-con\">
                    <div class=\"main-con-box\">
                        <span>@ ";
        // line 35
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["datas"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["name"] ?? null) : null), "html", null, true);
        echo "</span>
                        <div class=\"ib\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["datas"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["img"] ?? null) : null), "html", null, true);
        echo "\" class=\"img\"></div>
                        <p>";
        // line 37
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["datas"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["content"] ?? null) : null), "html", null, true);
        echo "</p>
                    </div>
                </div>
                <div class=\"line\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/line.png\"></div>
                <div class=\"main-con\">
                    ";
        // line 42
        if ((twig_get_attribute($this->env, $this->source, ($context["datas"] ?? null), 1, [], "array", true, true, false, 42) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["datas"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null))) {
            // line 43
            echo "                    <div class=\"main-con-box\">
                        <span>@ ";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["datas"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null), "html", null, true);
            echo "</span>
                        <div class=\"ib\"><img src=\"";
            // line 45
            echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["datas"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["img"] ?? null) : null), "html", null, true);
            echo "\" class=\"img\"></div>
                        <p>";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["datas"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["content"] ?? null) : null), "html", null, true);
            echo "</p>
                    </div>
                    ";
        } else {
            // line 49
            echo "                    <p class=\"notxt\">另一位暂未留下印记</p>
                    ";
        }
        // line 51
        echo "                </div>
                <div class=\"line\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/foot-bg.png\"></div>
            </div>
            <div class=\"main-foot\">
                <div class=\"ewm\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/ewm.png\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"tips\">
        <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/longtouch.png\" alt=\"\">
    </div>
</div>
</body>
<script>
    function processSnapshot(){
        var snapshot = document.querySelector('.j_snapshot');
        var snapshotImg = document.querySelector('.j_snapshot_img');

        var width = \$(\".wrap\").outerWidth();
        var height = \$(\".wrap\").outerHeight();
        var canvas = document.createElement(\"canvas\");
        var context = canvas.getContext(\"2d\");
        var scale = 2;

        canvas.width = width * scale;
        canvas.height = height * scale;

        canvas.getContext(\"2d\").scale(scale, scale);

        html2canvas(snapshot, {
            useCORS: false,
            backgroundColor: null,
            logging: false,
            width: width,
            height: height,
            scale: scale,
            canvas: canvas,
            onrendered: function(canvas) {
                var dataURL = canvas.toDataURL();
                snapshotImg.src = dataURL;
                \$(\".container\").show();
                \$(\".box\").hide();
            },
        });
        // html2canvas(snapshot,{
        //     useCORS: false,
        //     backgroundColor: null,
        //     logging: false,
        //     scale: 2
        // }).then(canvas=> {
        //     var dataURL = canvas.toDataURL();
        //     snapshotImg.src = dataURL;
        //     \$(\".container\").fadeIn();
        //     \$(\".box\").fadeOut();
        // }, err => {
        //     console.error('oops, something went wrong!', err);
        // })
    }

    window.onload = function () {
        //setTimeout(function () {
            processSnapshot();
        //},1000)
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
        return array (  166 => 62,  157 => 56,  150 => 52,  147 => 51,  143 => 49,  137 => 46,  133 => 45,  129 => 44,  126 => 43,  124 => 42,  119 => 40,  113 => 37,  109 => 36,  105 => 35,  95 => 28,  91 => 27,  87 => 26,  81 => 23,  73 => 18,  60 => 10,  56 => 9,  52 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
    <title>{{ title }}</title>
    <link href=\"{{ public }}css/article.css{{ suffix }}\" rel=\"stylesheet\">
    <script src=\"{{ public }}js/jquery-1.12.4.min.js\"></script>
    <script src=\"{{ public }}js/rootResize.js\"></script>
    <script src=\"{{ public }}js/html2canvas.min.js{{ suffix }}\"></script>
</head>
<body>
<div class=\"wrap\">
    <div class=\"container\" style=\"width:100%;max-width: 640px;display: none;\">
        <img src=\"\" class=\"j_snapshot_img\" style=\"width:100%;\" >
    </div>
    <div class=\"box j_snapshot\" >
        <div class=\"logo\"><img src=\"{{ public }}images/logo2.png\"></div>
        <div class=\"main\">
            <div class=\"main-box\">
                <div class=\"main-top\">
                    <div class=\"main-top-box\">
                        <div class=\"bg\"><img src=\"{{ public }}images/top3.png\" alt=\"\"></div>
                        <div class=\"top-con\">
                            <div class=\"head-con\">
                                <p class=\"ticket\">ONE WAY TICKET<span>{{ ticket }}</span></p>
                                <i><img src=\"{{ public }}images/now-past.png\"></i>
                                <p class=\"login-time\">登陆时间<span>{{ \"now\"|date('Y年m月d日 H:i', timezone=\"Asia/Shanghai\") }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"main-con\">
                    <div class=\"main-con-box\">
                        <span>@ {{ datas[0]['name'] }}</span>
                        <div class=\"ib\"><img src=\"{{ datas[0]['img'] }}\" class=\"img\"></div>
                        <p>{{ datas[0]['content'] }}</p>
                    </div>
                </div>
                <div class=\"line\"><img src=\"{{ public }}images/line.png\"></div>
                <div class=\"main-con\">
                    {% if datas[1] is defined and datas[1] %}
                    <div class=\"main-con-box\">
                        <span>@ {{ datas[1]['name'] }}</span>
                        <div class=\"ib\"><img src=\"{{ datas[1]['img'] }}\" class=\"img\"></div>
                        <p>{{ datas[1]['content'] }}</p>
                    </div>
                    {% else %}
                    <p class=\"notxt\">另一位暂未留下印记</p>
                    {% endif %}
                </div>
                <div class=\"line\"><img src=\"{{ public }}images/foot-bg.png\"></div>
            </div>
            <div class=\"main-foot\">
                <div class=\"ewm\">
                    <img src=\"{{ public }}images/ewm.png\">
                </div>
            </div>
        </div>
    </div>
    <div class=\"tips\">
        <img src=\"{{ public }}images/longtouch.png\" alt=\"\">
    </div>
</div>
</body>
<script>
    function processSnapshot(){
        var snapshot = document.querySelector('.j_snapshot');
        var snapshotImg = document.querySelector('.j_snapshot_img');

        var width = \$(\".wrap\").outerWidth();
        var height = \$(\".wrap\").outerHeight();
        var canvas = document.createElement(\"canvas\");
        var context = canvas.getContext(\"2d\");
        var scale = 2;

        canvas.width = width * scale;
        canvas.height = height * scale;

        canvas.getContext(\"2d\").scale(scale, scale);

        html2canvas(snapshot, {
            useCORS: false,
            backgroundColor: null,
            logging: false,
            width: width,
            height: height,
            scale: scale,
            canvas: canvas,
            onrendered: function(canvas) {
                var dataURL = canvas.toDataURL();
                snapshotImg.src = dataURL;
                \$(\".container\").show();
                \$(\".box\").hide();
            },
        });
        // html2canvas(snapshot,{
        //     useCORS: false,
        //     backgroundColor: null,
        //     logging: false,
        //     scale: 2
        // }).then(canvas=> {
        //     var dataURL = canvas.toDataURL();
        //     snapshotImg.src = dataURL;
        //     \$(\".container\").fadeIn();
        //     \$(\".box\").fadeOut();
        // }, err => {
        //     console.error('oops, something went wrong!', err);
        // })
    }

    window.onload = function () {
        //setTimeout(function () {
            processSnapshot();
        //},1000)
    }


</script>
</html>", "index/article.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/article.html");
    }
}

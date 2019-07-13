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

/* index/follow.html */
class __TwigTemplate_f8d1898ac7d59fb9730e1c776808344781515040463f7617dd5a53390a96c96f extends \Twig\Template
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
        echo "css/yindao.css";
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
</head>

<body>
<div class=\"flag\">
    <div class=\"flag-logo\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/logo1.png\">
    </div>
    <div class=\"flag-main\">
        <div class=\"flag-top\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/flag-bg.png\">
            <div class=\"flag-top-con\">
                <i><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/flag-top.png\"></i>
                <span>*</span>
                <p>如何生成<br>自己的故事页?</p>
            </div>
        </div>
        <ul>
            <li><span>关注公众号</span><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/rukou1.jpg\"></li>
            <li><span>点击参与入口<br>( 时光印记 )</span><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/rukou2.jpg\"></li>
        </ul>
        <div class=\"btn\"><a href=\"https://dwz.cn/A7i5oVHm\">点击前往生成</a></div>
    </div>
    <div class=\"close\"><a href=\"index.php\"><img src=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/close.png\"></a></div>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/follow.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  90 => 28,  86 => 27,  77 => 21,  72 => 19,  65 => 15,  56 => 9,  52 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
    <title>{{ title }}</title>
    <link href=\"{{ public }}css/yindao.css{{ suffix }}\" rel=\"stylesheet\">
    <script src=\"{{ public }}js/jquery-1.12.4.min.js\"></script>
    <script src=\"{{ public }}js/rootResize.js\"></script>
</head>

<body>
<div class=\"flag\">
    <div class=\"flag-logo\">
        <img src=\"{{ public }}images/logo1.png\">
    </div>
    <div class=\"flag-main\">
        <div class=\"flag-top\">
            <img src=\"{{ public }}images/flag-bg.png\">
            <div class=\"flag-top-con\">
                <i><img src=\"{{ public }}images/flag-top.png\"></i>
                <span>*</span>
                <p>如何生成<br>自己的故事页?</p>
            </div>
        </div>
        <ul>
            <li><span>关注公众号</span><img src=\"{{ public }}images/rukou1.jpg\"></li>
            <li><span>点击参与入口<br>( 时光印记 )</span><img src=\"{{ public }}images/rukou2.jpg\"></li>
        </ul>
        <div class=\"btn\"><a href=\"https://dwz.cn/A7i5oVHm\">点击前往生成</a></div>
    </div>
    <div class=\"close\"><a href=\"index.php\"><img src=\"{{ public }}images/close.png\"></a></div>
</div>
</body>
</html>", "index/follow.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/follow.html");
    }
}

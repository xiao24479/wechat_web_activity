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

/* index/enroll.html */
class __TwigTemplate_afa9faf48a5df36c7e5af5f19f334a781c28d4832421b35acf1ba8d5320ae16e extends \Twig\Template
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
        echo "css/baoming.css";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/swl.css";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/jquery-1.12.4.min.js\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/rootResize.js\"></script>
    <script src=\"https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js\"></script>
</head>

<body>
<div class=\"box\">
    <div class=\"head\">
        <div class=\"logo\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/logo.png\"></div>
        <div class=\"top\">
            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/top2.png\">
            <div class=\"list\">
                <ul>
                    <li><i>1</i><span>和你的爱人打开各自手机相册</span></li>
                    <li><i>2</i><span>找到关于对方的照片</span></li>
                    <li><i>3</i><span>写下照片背后的故事</span></li>
                    <li><i>4</i><span>双方完成分享,即可匹配生成专属的故事页</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"main\">
        <form enctype=\"multipart/form-data\" id=\"form\">
            <div class=\"item-input\">
                <div class=\"f-box\"><textarea rows=\"5\" placeholder=\"写下关于这张照片背后的故事吧:\" name=\"content\" id=\"content\"></textarea></div>
            </div>
            <div class=\"item\">
                <div class=\"blankimg addImg\" onclick=\"clickImg(this);\" style=\"background: url('";
        // line 36
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/upload.jpg') no-repeat center center;background-size: 100% auto;\"></div>
                <input name=\"file\" id=\"file\" type=\"file\" class=\"upload_input\" onchange=\"change(this)\" accept=\"image/*;capture=camera\" />
                <div class=\"preBlock\">
                    <img class=\"preview\" id=\"preview\" alt=\"\" name=\"pic\" />
                </div>
                <img class=\"delete\" onclick=\"deleteImg(this)\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/delete.png\" />
            </div>
            <div class=\"item-input\">
                <span>参与者信息</span>
                <div class=\"f-box\">
                    <label>微信名</label>
                    <p><input type=\"text\" placeholder=\"\" name=\"name\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["nickname"] ?? null), "html", null, true);
        echo "\" id=\"name\"></p>
                </div>
                <div class=\"f-box\">
                    <label>手机号码</label>
                    <p><input type=\"tel\" placeholder=\"(用于信息匹配)\" name=\"phone\" id=\"phone\"></p>
                </div>
            </div>
            <div class=\"item-input\">
                <span>爱人信息</span>
                <div class=\"f-box\">
                    <label>手机号码</label>
                    <p><input type=\"tel\" placeholder=\"(用于信息匹配)\" name=\"relative_phone\" id=\"relative_phone\"></p>
                </div>
            </div>
            <div class=\"ps\">
                <span>隐私说明</span>
                <p>1. 当您选择使用本网站提供的活动时，可能会被要求提供相关个人信息和数据，将您的个人信息和数据纳入并存储至本网站的用户数据库，本网站将利用您所提供的数据，向您提供进一步的服务，改善用户体验。如果您未能提供这些信息，则可能导致您不能使用某些服务。</p>
                <p>2. 本网站将保护您提供给本网站的个人信息和数据，未经您的同意，本网站不会任意将您的个人数据披露、出售、出租或转让予任何第三者。</p>
                <p>3. 活动最终解释权归东莞东方医院所有。</p>
            </div>
            <div class=\"btn\"><button type=\"button\" class=\"submit\">提交</button></div>
        </form>
    </div>
    <div class=\"load-box\">
        <div class=\"shadow\">
        </div>
        <div class=\"llwrap\">
            <div class=\"tips\">
                正在提交信息，请稍等
            </div>
            <div class=\"loading\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<script>
    var ENROLL_URL = \"?c=index&a=receive\";
    var INDEX_URL = \"?c=index&a=index\";
</script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/compress.js";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/enroll.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 91,  114 => 47,  105 => 41,  97 => 36,  77 => 19,  72 => 17,  62 => 10,  58 => 9,  52 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
    <title>{{ title }}</title>
    <link href=\"{{ public }}css/baoming.css{{ suffix }}\" rel=\"stylesheet\">
    <link href=\"{{ public }}css/swl.css{{ suffix }}\" rel=\"stylesheet\">
    <script src=\"{{ public }}js/jquery-1.12.4.min.js\"></script>
    <script src=\"{{ public }}js/rootResize.js\"></script>
    <script src=\"https://cdn.bootcss.com/sweetalert/1.1.3/sweetalert.min.js\"></script>
</head>

<body>
<div class=\"box\">
    <div class=\"head\">
        <div class=\"logo\"><img src=\"{{ public }}images/logo.png\"></div>
        <div class=\"top\">
            <img src=\"{{ public }}images/top2.png\">
            <div class=\"list\">
                <ul>
                    <li><i>1</i><span>和你的爱人打开各自手机相册</span></li>
                    <li><i>2</i><span>找到关于对方的照片</span></li>
                    <li><i>3</i><span>写下照片背后的故事</span></li>
                    <li><i>4</i><span>双方完成分享,即可匹配生成专属的故事页</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"main\">
        <form enctype=\"multipart/form-data\" id=\"form\">
            <div class=\"item-input\">
                <div class=\"f-box\"><textarea rows=\"5\" placeholder=\"写下关于这张照片背后的故事吧:\" name=\"content\" id=\"content\"></textarea></div>
            </div>
            <div class=\"item\">
                <div class=\"blankimg addImg\" onclick=\"clickImg(this);\" style=\"background: url('{{ public }}images/upload.jpg') no-repeat center center;background-size: 100% auto;\"></div>
                <input name=\"file\" id=\"file\" type=\"file\" class=\"upload_input\" onchange=\"change(this)\" accept=\"image/*;capture=camera\" />
                <div class=\"preBlock\">
                    <img class=\"preview\" id=\"preview\" alt=\"\" name=\"pic\" />
                </div>
                <img class=\"delete\" onclick=\"deleteImg(this)\" src=\"{{ public }}images/delete.png\" />
            </div>
            <div class=\"item-input\">
                <span>参与者信息</span>
                <div class=\"f-box\">
                    <label>微信名</label>
                    <p><input type=\"text\" placeholder=\"\" name=\"name\" value=\"{{ nickname }}\" id=\"name\"></p>
                </div>
                <div class=\"f-box\">
                    <label>手机号码</label>
                    <p><input type=\"tel\" placeholder=\"(用于信息匹配)\" name=\"phone\" id=\"phone\"></p>
                </div>
            </div>
            <div class=\"item-input\">
                <span>爱人信息</span>
                <div class=\"f-box\">
                    <label>手机号码</label>
                    <p><input type=\"tel\" placeholder=\"(用于信息匹配)\" name=\"relative_phone\" id=\"relative_phone\"></p>
                </div>
            </div>
            <div class=\"ps\">
                <span>隐私说明</span>
                <p>1. 当您选择使用本网站提供的活动时，可能会被要求提供相关个人信息和数据，将您的个人信息和数据纳入并存储至本网站的用户数据库，本网站将利用您所提供的数据，向您提供进一步的服务，改善用户体验。如果您未能提供这些信息，则可能导致您不能使用某些服务。</p>
                <p>2. 本网站将保护您提供给本网站的个人信息和数据，未经您的同意，本网站不会任意将您的个人数据披露、出售、出租或转让予任何第三者。</p>
                <p>3. 活动最终解释权归东莞东方医院所有。</p>
            </div>
            <div class=\"btn\"><button type=\"button\" class=\"submit\">提交</button></div>
        </form>
    </div>
    <div class=\"load-box\">
        <div class=\"shadow\">
        </div>
        <div class=\"llwrap\">
            <div class=\"tips\">
                正在提交信息，请稍等
            </div>
            <div class=\"loading\">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>
<script>
    var ENROLL_URL = \"?c=index&a=receive\";
    var INDEX_URL = \"?c=index&a=index\";
</script>
<script src=\"{{ public }}js/compress.js{{ suffix }}\"></script>
</body>
</html>", "index/enroll.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/enroll.html");
    }
}

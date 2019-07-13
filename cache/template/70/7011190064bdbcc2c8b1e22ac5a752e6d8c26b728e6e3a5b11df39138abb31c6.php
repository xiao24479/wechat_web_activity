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

/* index/test.html */
class __TwigTemplate_edd5af72f4d24174fa7a1efa2cf7f337a4c9f56c4eb83f05408022acd93396c6 extends \Twig\Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<div class=\"item\">
    <img class=\"addImg\" onclick=\"clickImg(this);\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/upload.jpg\" />
    <input name=\"file\" id=\"file\" type=\"file\" class=\"upload_input\" onchange=\"change(this)\" accept=\"image/*;capture=camera\" />
    <div class=\"preBlock\">
        <img class=\"preview\" id=\"preview\" alt=\"\" name=\"pic\" />
    </div>
    <img class=\"delete\" onclick=\"deleteImg(this)\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/delete.png\" />
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  45 => 9,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
</head>
<body>
<div class=\"item\">
    <img class=\"addImg\" onclick=\"clickImg(this);\" src=\"{{ public }}images/upload.jpg\" />
    <input name=\"file\" id=\"file\" type=\"file\" class=\"upload_input\" onchange=\"change(this)\" accept=\"image/*;capture=camera\" />
    <div class=\"preBlock\">
        <img class=\"preview\" id=\"preview\" alt=\"\" name=\"pic\" />
    </div>
    <img class=\"delete\" onclick=\"deleteImg(this)\" src=\"{{ public }}images/delete.png\" />
</div>
</body>
</html>", "index/test.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/test.html");
    }
}

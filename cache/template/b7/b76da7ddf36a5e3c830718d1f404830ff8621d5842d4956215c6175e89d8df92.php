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

/* index/index.html */
class __TwigTemplate_a409843cec14eba2a20682626fd116239100721509b960580299bfdd4e4e9485 extends \Twig\Template
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
        echo "css/index.css";
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
        echo "js/times.js\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/moment.js\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/countdown-clock.js\"></script>
</head>
<body>
<div class=\"wrap\">
    <div class=\"box\">
        <div class=\"head\">
            <div class=\"logo\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/logo.png\"></div>
            <div class=\"top\">
                <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/top1.png\">
                <div class=\"txt\">
                    <p><span class=\"red\">和爱人一起分享</span>关于照片背后的故事，让全世界见证你们的「时光印记」。</p>
                    <p>我们将在精选内容中抽选 <span class=\"red\">20 对</span>参与者，送出瓜分 <span class=\"red\">20000 元</span>奖金的名额。</p>
                </div>
                <div class=\"time\">
                    <p>5月29日凌晨0点「甜蜜时光机」</p>
                    <p>将在时光隧道启程</p>
                    <!--<p>倒计时: <span class=\"red\" id=\"dd\">00</span>天<span class=\"red\" id=\"hh\">00</span>时<span class=\"red\" id=\"mm\">00</span>分<span class=\"red\" id=\"ss\">00</span>秒</p>-->
                    <div class=\"count-box\"><span>倒计时:</span><div id=\"countdown-clock\"></div></div>
                </div>
            </div>
        </div>
        <div class=\"tab\">
            <ul class=\"tab-nav\">
                <li class=\"on\">精 选</li>
                <li>最 新</li>
            </ul>
            <div class=\"tab-con\">
                <div class=\"tab-box tab-box-on\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chooseInfo"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 41
            echo "                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"";
            // line 44
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["item"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["img"] ?? null) : null), "html", null, true);
            echo "\"></i>
                                <p>
                                    <span>@ ";
            // line 46
            echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["item"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["name"] ?? null) : null), "html", null, true);
            echo "</span>
                                    ";
            // line 47
            echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["item"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["content"] ?? null) : null), "html", null, true);
            echo "
                                </p>
                            </li>
                            <li>
                                ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", true, true, false, 51) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["item"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null))) {
                // line 52
                echo "                                <p>
                                    <span>@ ";
                // line 53
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["item"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null), "html", null, true);
                echo "</span>
                                    ";
                // line 54
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["item"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["content"] ?? null) : null), "html", null, true);
                echo "
                                </p>
                                <i><img src=\"";
                // line 56
                echo twig_escape_filter($this->env, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["item"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["img"] ?? null) : null), "html", null, true);
                echo "\"></i>
                                ";
            } else {
                // line 58
                echo "                                <div class=\"notxt\">另一位暂未留下印记</div>
                                ";
            }
            // line 60
            echo "                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id=";
            // line 62
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">点击查看他们的故事</a></div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    <div class=\"more\"><a href=\"javascript:void(0);\" class=\"btn-more\" data-page=\"1\" data-type=\"1\" ><img src=\"";
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/more.png\" alt=\"\"></a></div>
                </div>
                <div class=\"tab-box\">
                    ";
        // line 68
        if (((isset($context["myInfo"]) || array_key_exists("myInfo", $context)) && ($context["myInfo"] ?? null))) {
            // line 69
            echo "                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"";
            // line 72
            echo twig_escape_filter($this->env, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["myInfo"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[0] ?? null) : null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["img"] ?? null) : null), "html", null, true);
            echo "\"></i>
                                <p>
                                    <span>@ ";
            // line 74
            echo twig_escape_filter($this->env, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["myInfo"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[0] ?? null) : null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null), "html", null, true);
            echo "</span>
                                    ";
            // line 75
            echo twig_escape_filter($this->env, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["myInfo"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[0] ?? null) : null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["content"] ?? null) : null), "html", null, true);
            echo "
                                </p>
                            </li>
                            <li>
                                ";
            // line 79
            if ((twig_get_attribute($this->env, $this->source, ($context["myInfo"] ?? null), 1, [], "array", true, true, false, 79) && (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["myInfo"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[1] ?? null) : null))) {
                // line 80
                echo "                                <p>
                                    <span>@ ";
                // line 81
                echo twig_escape_filter($this->env, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["myInfo"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[1] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null), "html", null, true);
                echo "</span>
                                    ";
                // line 82
                echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["myInfo"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[1] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["content"] ?? null) : null), "html", null, true);
                echo "
                                </p>
                                <i><img src=\"";
                // line 84
                echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["myInfo"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[1] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["img"] ?? null) : null), "html", null, true);
                echo "\"></i>
                                ";
            } else {
                // line 86
                echo "                                <div class=\"notxt\">另一位暂未留下印记</div>
                                ";
            }
            // line 88
            echo "                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id=";
            // line 90
            echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["myInfo"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[0] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["mid"] ?? null) : null), "html", null, true);
            echo "\">点击查看我的故事</a></div>
                    </div>
                    ";
        }
        // line 93
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["latestInfo"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 94
            echo "                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"";
            // line 97
            echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["item"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[0] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["img"] ?? null) : null), "html", null, true);
            echo "\"></i>
                                <p>
                                    <span>@ ";
            // line 99
            echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["item"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[0] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["name"] ?? null) : null), "html", null, true);
            echo "</span>
                                    ";
            // line 100
            echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["item"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[0] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["content"] ?? null) : null), "html", null, true);
            echo "
                                </p>
                            </li>
                            <li>
                                ";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, $context["item"], 1, [], "array", true, true, false, 104) && (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["item"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[1] ?? null) : null))) {
                // line 105
                echo "                                <p>
                                    <span>@ ";
                // line 106
                echo twig_escape_filter($this->env, (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["item"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55[1] ?? null) : null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["name"] ?? null) : null), "html", null, true);
                echo "</span>
                                    ";
                // line 107
                echo twig_escape_filter($this->env, (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["item"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[1] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["content"] ?? null) : null), "html", null, true);
                echo "
                                </p>
                                <i><img src=\"";
                // line 109
                echo twig_escape_filter($this->env, (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["item"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35[1] ?? null) : null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["img"] ?? null) : null), "html", null, true);
                echo "\"></i>
                                ";
            } else {
                // line 111
                echo "                                <div class=\"notxt\">另一位暂未留下印记</div>
                                ";
            }
            // line 113
            echo "                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id=";
            // line 115
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\">点击查看他们的故事</a></div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                    <div class=\"more\"><a href=\"javascript:void(0);\" class=\"btn-more\" data-page=\"1\" data-type=\"2\" ><img src=\"";
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/more.png\" alt=\"\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"foot\">
            <a href=\"?c=index&a=enroll\"><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/foot1.png";
        echo twig_escape_filter($this->env, ($context["suffix"] ?? null), "html", null, true);
        echo "\"></a>
        </div>
    </div>
</div>
</body>
<script>
    \$(function () {
        \$('#countdown-clock').countdownClock({date: '2019-05-29'});
    })

    \$(\".tab-nav li\").click(function(){
        \$(this).addClass(\"on\").siblings().removeClass(\"on\");
        var i = \$(this).index();
        \$(\".tab-box\").eq(i).addClass(\"tab-box-on\").siblings().removeClass(\"tab-box-on\");
    })

    \$(\".btn-more\").click(function () {
        var _that = \$(this);
        var page = parseInt(_that.attr(\"data-page\"));
        var type = parseInt(_that.attr(\"data-type\"));
        var access = parseInt(_that.attr(\"data-access\"));

        if (access == 2) {
            return false;
        }

        \$.ajax({
            url:\"?c=index&a=indexPageData\",
            type:\"POST\",
            dataType:\"json\",
            data:{page:page,type:type},
            success:function (resp) {

                if (!resp.data) {
                    _that.find(\"img\").attr(\"src\",\"";
        // line 157
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "images/all.png\");
                    _that.attr(\"data-access\",2);
                } else {

                    var data = resp.data;
                    var _HTML = \"\";

                    \$.each(data,function (k,v) {
                        _HTML += \"<div class=\\\"tab-box-con\\\"><ul><li><i><img src=\\\"\" + v[0].img + \"\\\"></i><p><span>@ \" + v[0].name + \"</span>\" + v[0].content + \"</p></li><li>\";
                        if (v[1]){
                            _HTML += \"<p><span>@ \" + v[1].name + \"</span>\" + v[1].content + \"</p><i><img src=\\\"\" + v[1].img + \"\\\"></i>\";
                        } else {
                            _HTML += \"<div class=\\\"notxt\\\">另一位暂未留下印记</div>\";
                        }
                        _HTML += \"</li></ul><div class=\\\"btn\\\"><a href=\\\"?c=index&a=article&id=\" + k + \"\\\">点击查看他们的故事</a></div></div>\";
                    });

                    _that.attr(\"data-page\",resp.page);
                    _that.parent().before(_HTML);

                }
            },
            error:function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown)
            }
        });
    });


</script>
</html>";
    }

    public function getTemplateName()
    {
        return "index/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 157,  300 => 123,  291 => 118,  282 => 115,  278 => 113,  274 => 111,  269 => 109,  264 => 107,  260 => 106,  257 => 105,  255 => 104,  248 => 100,  244 => 99,  239 => 97,  234 => 94,  229 => 93,  223 => 90,  219 => 88,  215 => 86,  210 => 84,  205 => 82,  201 => 81,  198 => 80,  196 => 79,  189 => 75,  185 => 74,  180 => 72,  175 => 69,  173 => 68,  166 => 65,  157 => 62,  153 => 60,  149 => 58,  144 => 56,  139 => 54,  135 => 53,  132 => 52,  130 => 51,  123 => 47,  119 => 46,  114 => 44,  109 => 41,  105 => 40,  82 => 20,  77 => 18,  68 => 12,  64 => 11,  60 => 10,  56 => 9,  52 => 8,  46 => 7,  42 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\" />
    <title>{{ title }}</title>
    <link href=\"{{ public }}css/index.css{{ suffix }}\" rel=\"stylesheet\">
    <script src=\"{{ public }}js/jquery-1.12.4.min.js\"></script>
    <script src=\"{{ public }}js/rootResize.js\"></script>
    <script src=\"{{ public }}js/times.js\"></script>
    <script src=\"{{ public }}js/moment.js\"></script>
    <script src=\"{{ public }}js/countdown-clock.js\"></script>
</head>
<body>
<div class=\"wrap\">
    <div class=\"box\">
        <div class=\"head\">
            <div class=\"logo\"><img src=\"{{ public }}images/logo.png\"></div>
            <div class=\"top\">
                <img src=\"{{ public }}images/top1.png\">
                <div class=\"txt\">
                    <p><span class=\"red\">和爱人一起分享</span>关于照片背后的故事，让全世界见证你们的「时光印记」。</p>
                    <p>我们将在精选内容中抽选 <span class=\"red\">20 对</span>参与者，送出瓜分 <span class=\"red\">20000 元</span>奖金的名额。</p>
                </div>
                <div class=\"time\">
                    <p>5月29日凌晨0点「甜蜜时光机」</p>
                    <p>将在时光隧道启程</p>
                    <!--<p>倒计时: <span class=\"red\" id=\"dd\">00</span>天<span class=\"red\" id=\"hh\">00</span>时<span class=\"red\" id=\"mm\">00</span>分<span class=\"red\" id=\"ss\">00</span>秒</p>-->
                    <div class=\"count-box\"><span>倒计时:</span><div id=\"countdown-clock\"></div></div>
                </div>
            </div>
        </div>
        <div class=\"tab\">
            <ul class=\"tab-nav\">
                <li class=\"on\">精 选</li>
                <li>最 新</li>
            </ul>
            <div class=\"tab-con\">
                <div class=\"tab-box tab-box-on\">
                    {% for index,item in chooseInfo %}
                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"{{ item[0]['img'] }}\"></i>
                                <p>
                                    <span>@ {{ item[0]['name'] }}</span>
                                    {{ item[0]['content'] }}
                                </p>
                            </li>
                            <li>
                                {% if item[1] is defined and item[1] %}
                                <p>
                                    <span>@ {{ item[1]['name'] }}</span>
                                    {{ item[1]['content'] }}
                                </p>
                                <i><img src=\"{{ item[1]['img'] }}\"></i>
                                {% else %}
                                <div class=\"notxt\">另一位暂未留下印记</div>
                                {% endif %}
                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id={{ index }}\">点击查看他们的故事</a></div>
                    </div>
                    {% endfor %}
                    <div class=\"more\"><a href=\"javascript:void(0);\" class=\"btn-more\" data-page=\"1\" data-type=\"1\" ><img src=\"{{ public }}images/more.png\" alt=\"\"></a></div>
                </div>
                <div class=\"tab-box\">
                    {% if myInfo is defined and myInfo %}
                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"{{ myInfo[0]['img'] }}\"></i>
                                <p>
                                    <span>@ {{ myInfo[0]['name'] }}</span>
                                    {{ myInfo[0]['content'] }}
                                </p>
                            </li>
                            <li>
                                {% if myInfo[1] is defined and myInfo[1] %}
                                <p>
                                    <span>@ {{ myInfo[1]['name'] }}</span>
                                    {{ myInfo[1]['content'] }}
                                </p>
                                <i><img src=\"{{ myInfo[1]['img'] }}\"></i>
                                {% else %}
                                <div class=\"notxt\">另一位暂未留下印记</div>
                                {% endif %}
                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id={{ myInfo[0]['mid'] }}\">点击查看我的故事</a></div>
                    </div>
                    {% endif %}
                    {% for index,item in latestInfo %}
                    <div class=\"tab-box-con\">
                        <ul>
                            <li>
                                <i><img src=\"{{ item[0]['img'] }}\"></i>
                                <p>
                                    <span>@ {{ item[0]['name'] }}</span>
                                    {{ item[0]['content'] }}
                                </p>
                            </li>
                            <li>
                                {% if item[1] is defined and item[1] %}
                                <p>
                                    <span>@ {{ item[1]['name'] }}</span>
                                    {{ item[1]['content'] }}
                                </p>
                                <i><img src=\"{{ item[1]['img'] }}\"></i>
                                {% else %}
                                <div class=\"notxt\">另一位暂未留下印记</div>
                                {% endif %}
                            </li>
                        </ul>
                        <div class=\"btn\"><a href=\"?c=index&a=article&id={{ index }}\">点击查看他们的故事</a></div>
                    </div>
                    {% endfor %}
                    <div class=\"more\"><a href=\"javascript:void(0);\" class=\"btn-more\" data-page=\"1\" data-type=\"2\" ><img src=\"{{ public }}images/more.png\" alt=\"\"></a></div>
                </div>
            </div>
        </div>
        <div class=\"foot\">
            <a href=\"?c=index&a=enroll\"><img src=\"{{ public }}images/foot1.png{{ suffix }}\"></a>
        </div>
    </div>
</div>
</body>
<script>
    \$(function () {
        \$('#countdown-clock').countdownClock({date: '2019-05-29'});
    })

    \$(\".tab-nav li\").click(function(){
        \$(this).addClass(\"on\").siblings().removeClass(\"on\");
        var i = \$(this).index();
        \$(\".tab-box\").eq(i).addClass(\"tab-box-on\").siblings().removeClass(\"tab-box-on\");
    })

    \$(\".btn-more\").click(function () {
        var _that = \$(this);
        var page = parseInt(_that.attr(\"data-page\"));
        var type = parseInt(_that.attr(\"data-type\"));
        var access = parseInt(_that.attr(\"data-access\"));

        if (access == 2) {
            return false;
        }

        \$.ajax({
            url:\"?c=index&a=indexPageData\",
            type:\"POST\",
            dataType:\"json\",
            data:{page:page,type:type},
            success:function (resp) {

                if (!resp.data) {
                    _that.find(\"img\").attr(\"src\",\"{{ public }}images/all.png\");
                    _that.attr(\"data-access\",2);
                } else {

                    var data = resp.data;
                    var _HTML = \"\";

                    \$.each(data,function (k,v) {
                        _HTML += \"<div class=\\\"tab-box-con\\\"><ul><li><i><img src=\\\"\" + v[0].img + \"\\\"></i><p><span>@ \" + v[0].name + \"</span>\" + v[0].content + \"</p></li><li>\";
                        if (v[1]){
                            _HTML += \"<p><span>@ \" + v[1].name + \"</span>\" + v[1].content + \"</p><i><img src=\\\"\" + v[1].img + \"\\\"></i>\";
                        } else {
                            _HTML += \"<div class=\\\"notxt\\\">另一位暂未留下印记</div>\";
                        }
                        _HTML += \"</li></ul><div class=\\\"btn\\\"><a href=\\\"?c=index&a=article&id=\" + k + \"\\\">点击查看他们的故事</a></div></div>\";
                    });

                    _that.attr(\"data-page\",resp.page);
                    _that.parent().before(_HTML);

                }
            },
            error:function (jqXHR, textStatus, errorThrown) {
                console.log(errorThrown)
            }
        });
    });


</script>
</html>", "index/index.html", "/www/web/wx.dgnxyy.com/hd/app/views/index/index.html");
    }
}

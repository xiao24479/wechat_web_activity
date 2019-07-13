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

/* admin/index.html */
class __TwigTemplate_56faabd7258da51f979bcbcec39e56d37750b464eaa661e74515e9d953d52dfa extends \Twig\Template
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
    <title>后台</title>

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/swl.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/bootstrap-switch.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/bootstrap-table.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "css/bootstrap-fileinput.css\" rel=\"stylesheet\">
    <style>
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{vertical-align:middle;text-align: center}
    </style>

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src=\"https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js\"></script>
    <![endif]-->

    <script src=\"https://www.yanjiayu.cn/js/src/sweetalert.min.js\"></script>

</head>
<body>

<div class=\"container\">
    <div class=\"row\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <!--                    <h2>欢迎进入LEO管理后台！</h2>-->
                    <a class=\"navbar-brand\" href=\"?c=admin&a=index\"><b>欢迎进入LEO管理后台！</b></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"?c=admin&a=logout\" class=\"btn btn-default\">退出</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\" style=\"padding: 15px 15px 15px;\">
            <form class=\"form-inline\" action=\"\" method=\"get\">
                <input type=\"hidden\" name=\"c\" value=\"admin\">
                <input type=\"hidden\" name=\"a\" value=\"index\">
                <div class=\"form-group\">
                    <label for=\"phoneInput\">手机号码:</label>
                    <input type=\"text\" class=\"form-control\" id=\"phoneInput\" name=\"phone\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["phone"] ?? null), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                    <label for=\"belongs\">匹配:</label>
                    <select class=\"form-control\" id=\"belongs\" name=\"belongs\">
                        <option value=\"0\" ";
        // line 62
        if ((($context["belongs"] ?? null) == 0)) {
            echo " selected ";
        }
        echo " >所有</option>
                        <option value=\"1\" ";
        // line 63
        if ((($context["belongs"] ?? null) == 1)) {
            echo " selected ";
        }
        echo " >已匹配</option>
                        <option value=\"2\" ";
        // line 64
        if ((($context["belongs"] ?? null) == 2)) {
            echo " selected ";
        }
        echo " >未匹配</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"flag\">精选:</label>
                    <select class=\"form-control\" id=\"flag\" name=\"flag\">
                        <option value=\"0\" ";
        // line 70
        if ((($context["flag"] ?? null) == 0)) {
            echo " selected ";
        }
        echo " >所有</option>
                        <option value=\"1\" ";
        // line 71
        if ((($context["flag"] ?? null) == 1)) {
            echo " selected ";
        }
        echo " >精选</option>
                        <option value=\"2\" ";
        // line 72
        if ((($context["flag"] ?? null) == 2)) {
            echo " selected ";
        }
        echo " >未精选</option>
                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">搜索</button>

            </form>
        </div>
    </div>

    <div class=\"row\">
        <P><a  class=\"btn btn-primary add\"  data-toggle=\"modal\" data-target=\"#myModal\">新增</a></P>
        <table class=\"table table-bordered table-hover table-condensed\">
            <tr>
                <th>所属配对</th>
                <th>ID</th>
                <th>OPENID</th>
                <th>微信名</th>
                <th>手机号码</th>
                <th>爱人号码</th>
                <th>图片</th>
                <th>内容</th>
                <th>创建时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            ";
        // line 97
        if (((isset($context["datas"]) || array_key_exists("datas", $context)) && ($context["datas"] ?? null))) {
            // line 98
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["datas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 99
                echo "            ";
                if ((twig_length_filter($this->env, $context["data"]) == 2)) {
                    // line 100
                    echo "            <tr data-id=\"";
                    echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["data"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
                    echo "\" >
                <td rowspan=\"2\">";
                    // line 101
                    echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["data"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[0] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["mid"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 102
                    echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["data"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[0] ?? null) : null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["id"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 103
                    echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["data"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["openid"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 104
                    echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["data"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[0] ?? null) : null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["name"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 105
                    echo twig_escape_filter($this->env, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["data"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["phone"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 106
                    echo twig_escape_filter($this->env, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["data"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[0] ?? null) : null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["relative_phone"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td><img src=\"";
                    // line 107
                    echo twig_escape_filter($this->env, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["data"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[0] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["img"] ?? null) : null), "html", null, true);
                    echo "\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" ></td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>";
                    // line 109
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["data"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[0] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["created_at"] ?? null) : null), "Y-m-d H:i"), "html", null, true);
                    echo "</td>
                <td>
                    ";
                    // line 111
                    if (((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["data"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[0] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["status"] ?? null) : null) == 1)) {
                        // line 112
                        echo "                        <span class=\"label label-default\">显示</span>
                    ";
                    } else {
                        // line 114
                        echo "                        <span class=\"label label-warning\">关闭</span>
                    ";
                    }
                    // line 116
                    echo "                    ";
                    if (((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["data"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[0] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["flag"] ?? null) : null) == 1)) {
                        // line 117
                        echo "                        <span class=\"label label-success\">精选</span>
                    ";
                    }
                    // line 119
                    echo "                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            <tr  data-id=\"";
                    // line 122
                    echo twig_escape_filter($this->env, (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["data"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[1] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["id"] ?? null) : null), "html", null, true);
                    echo "\" >
                <td>";
                    // line 123
                    echo twig_escape_filter($this->env, (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["data"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[1] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["id"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 124
                    echo twig_escape_filter($this->env, (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["data"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[1] ?? null) : null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["openid"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 125
                    echo twig_escape_filter($this->env, (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["data"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[1] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["name"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 126
                    echo twig_escape_filter($this->env, (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["data"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6[1] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["phone"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td>";
                    // line 127
                    echo twig_escape_filter($this->env, (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["data"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[1] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["relative_phone"] ?? null) : null), "html", null, true);
                    echo "</td>
                <td><img src=\"";
                    // line 128
                    echo twig_escape_filter($this->env, (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["data"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[1] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["img"] ?? null) : null), "html", null, true);
                    echo "\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" ></td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>";
                    // line 130
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["data"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[1] ?? null) : null)) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["created_at"] ?? null) : null), "Y-m-d H:i"), "html", null, true);
                    echo "</td>
                <td>
                    ";
                    // line 132
                    if (((($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["data"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[1] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["status"] ?? null) : null) == 1)) {
                        // line 133
                        echo "                    <span class=\"label label-default\">显示</span>
                    ";
                    } else {
                        // line 135
                        echo "                    <span class=\"label label-warning\">关闭</span>
                    ";
                    }
                    // line 137
                    echo "                    ";
                    if (((($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["data"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b[1] ?? null) : null)) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["flag"] ?? null) : null) == 1)) {
                        // line 138
                        echo "                    <span class=\"label label-success\">精选</span>
                    ";
                    }
                    // line 140
                    echo "                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            ";
                } else {
                    // line 144
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["data"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 145
                        echo "            <tr data-id=\"";
                        echo twig_escape_filter($this->env, (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["item"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["id"] ?? null) : null), "html", null, true);
                        echo "\">
                <td>";
                        // line 146
                        echo twig_escape_filter($this->env, (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["item"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["mid"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td>";
                        // line 147
                        echo twig_escape_filter($this->env, (($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["item"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["id"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td>";
                        // line 148
                        echo twig_escape_filter($this->env, (($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["item"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["openid"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td>";
                        // line 149
                        echo twig_escape_filter($this->env, (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["item"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["name"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td>";
                        // line 150
                        echo twig_escape_filter($this->env, (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["item"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["phone"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td>";
                        // line 151
                        echo twig_escape_filter($this->env, (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["item"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["relative_phone"] ?? null) : null), "html", null, true);
                        echo "</td>
                <td><img src=\"";
                        // line 152
                        echo twig_escape_filter($this->env, (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["item"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["img"] ?? null) : null), "html", null, true);
                        echo "\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" > </td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>";
                        // line 154
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["item"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["created_at"] ?? null) : null), "Y-m-d H:i"), "html", null, true);
                        echo "</td>
                <td>
                    ";
                        // line 156
                        if (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["item"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["status"] ?? null) : null) == 1)) {
                            // line 157
                            echo "                    <span class=\"label label-default\">显示</span>
                    ";
                        } else {
                            // line 159
                            echo "                    <span class=\"label label-warning\">关闭</span>
                    ";
                        }
                        // line 161
                        echo "                    ";
                        if (((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["item"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["flag"] ?? null) : null) == 1)) {
                            // line 162
                            echo "                    <span class=\"label label-success\">精选</span>
                    ";
                        }
                        // line 164
                        echo "                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "            ";
                }
                // line 169
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "            ";
        } else {
            // line 171
            echo "            <tr>
                <td colspan=\"11\">
                    <span class=\"label label-danger\">还没有数据！</span>
                </td>
            </tr>
            ";
        }
        // line 177
        echo "        </table>
    </div>
    <div class=\"row\">
        ";
        // line 180
        if ((($context["nums"] ?? null) > ($context["perpage"] ?? null))) {
            // line 181
            echo "        <div class=\"col-sm-12\">
            <p>总共<span class=\"label label-success\">";
            // line 182
            echo twig_escape_filter($this->env, ($context["nums"] ?? null), "html", null, true);
            echo "</span>条数据</p>
            ";
            // line 183
            echo ($context["page"] ?? null);
            echo "
        </div>
        ";
        }
        // line 186
        echo "    </div>
    <div class=\"row\">
        <p class=\"text-center\">";
        // line 188
        echo ($context["exetime"] ?? null);
        echo "</p>
    </div>
</div>

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"modalBox\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src=\"https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js\"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>
<script src=\"";
        // line 212
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/bootstrap-table.min.js\"></script>
<script src=\"";
        // line 213
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/bootstrap-switch.min.js\"></script>
<script src=\"";
        // line 214
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/bootstrap-fileinput.js\"></script>
<script src=\"";
        // line 215
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/jquery.serializejson.js\"></script>
<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/moment.js\"></script>
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "js/admin.js\"></script>
<script>
    var PUBLIC_URL = \"";
        // line 219
        echo twig_escape_filter($this->env, ($context["public"] ?? null), "html", null, true);
        echo "\";
    var ADMIN_INDEX = \"?c=admin&a=index\";
    var URL_DETAIL = \"?c=admin&a=getDetail\";
    var URL_EDIT = \"?c=admin&a=edit\";
    var URL_UPLOADIMG = \"?c=admin&a=uploadImg\";
    var URL_UPDATE = \"?c=admin&a=updateData\";
    var URL_DELETE = \"?c=admin&a=deleteData\";
    var URL_ADD = \"?c=admin&a=addData\";

</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "admin/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  472 => 219,  467 => 217,  463 => 216,  459 => 215,  455 => 214,  451 => 213,  447 => 212,  420 => 188,  416 => 186,  410 => 183,  406 => 182,  403 => 181,  401 => 180,  396 => 177,  388 => 171,  385 => 170,  379 => 169,  376 => 168,  367 => 164,  363 => 162,  360 => 161,  356 => 159,  352 => 157,  350 => 156,  345 => 154,  340 => 152,  336 => 151,  332 => 150,  328 => 149,  324 => 148,  320 => 147,  316 => 146,  311 => 145,  306 => 144,  300 => 140,  296 => 138,  293 => 137,  289 => 135,  285 => 133,  283 => 132,  278 => 130,  273 => 128,  269 => 127,  265 => 126,  261 => 125,  257 => 124,  253 => 123,  249 => 122,  244 => 119,  240 => 117,  237 => 116,  233 => 114,  229 => 112,  227 => 111,  222 => 109,  217 => 107,  213 => 106,  209 => 105,  205 => 104,  201 => 103,  197 => 102,  193 => 101,  188 => 100,  185 => 99,  180 => 98,  178 => 97,  148 => 72,  142 => 71,  136 => 70,  125 => 64,  119 => 63,  113 => 62,  105 => 57,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  35 => 1,);
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
    <title>后台</title>

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

    <link href=\"{{ public }}css/swl.css\" rel=\"stylesheet\">
    <link href=\"{{ public }}css/bootstrap-switch.css\" rel=\"stylesheet\">
    <link href=\"{{ public }}css/bootstrap-table.min.css\" rel=\"stylesheet\">
    <link href=\"{{ public }}css/bootstrap-fileinput.css\" rel=\"stylesheet\">
    <style>
        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{vertical-align:middle;text-align: center}
    </style>

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src=\"https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js\"></script>
    <![endif]-->

    <script src=\"https://www.yanjiayu.cn/js/src/sweetalert.min.js\"></script>

</head>
<body>

<div class=\"container\">
    <div class=\"row\">
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <!--                    <h2>欢迎进入LEO管理后台！</h2>-->
                    <a class=\"navbar-brand\" href=\"?c=admin&a=index\"><b>欢迎进入LEO管理后台！</b></a>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li><a href=\"?c=admin&a=logout\" class=\"btn btn-default\">退出</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-12\" style=\"padding: 15px 15px 15px;\">
            <form class=\"form-inline\" action=\"\" method=\"get\">
                <input type=\"hidden\" name=\"c\" value=\"admin\">
                <input type=\"hidden\" name=\"a\" value=\"index\">
                <div class=\"form-group\">
                    <label for=\"phoneInput\">手机号码:</label>
                    <input type=\"text\" class=\"form-control\" id=\"phoneInput\" name=\"phone\" value=\"{{ phone }}\">
                </div>
                <div class=\"form-group\">
                    <label for=\"belongs\">匹配:</label>
                    <select class=\"form-control\" id=\"belongs\" name=\"belongs\">
                        <option value=\"0\" {% if belongs == 0  %} selected {% endif %} >所有</option>
                        <option value=\"1\" {% if belongs == 1  %} selected {% endif %} >已匹配</option>
                        <option value=\"2\" {% if belongs == 2  %} selected {% endif %} >未匹配</option>
                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"flag\">精选:</label>
                    <select class=\"form-control\" id=\"flag\" name=\"flag\">
                        <option value=\"0\" {% if flag == 0  %} selected {% endif %} >所有</option>
                        <option value=\"1\" {% if flag == 1  %} selected {% endif %} >精选</option>
                        <option value=\"2\" {% if flag == 2  %} selected {% endif %} >未精选</option>
                    </select>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">搜索</button>

            </form>
        </div>
    </div>

    <div class=\"row\">
        <P><a  class=\"btn btn-primary add\"  data-toggle=\"modal\" data-target=\"#myModal\">新增</a></P>
        <table class=\"table table-bordered table-hover table-condensed\">
            <tr>
                <th>所属配对</th>
                <th>ID</th>
                <th>OPENID</th>
                <th>微信名</th>
                <th>手机号码</th>
                <th>爱人号码</th>
                <th>图片</th>
                <th>内容</th>
                <th>创建时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            {% if datas is defined and datas %}
            {% for data in datas %}
            {% if data|length == 2  %}
            <tr data-id=\"{{ data[0]['id'] }}\" >
                <td rowspan=\"2\">{{ data[0]['mid'] }}</td>
                <td>{{ data[0]['id'] }}</td>
                <td>{{ data[0]['openid'] }}</td>
                <td>{{ data[0]['name'] }}</td>
                <td>{{ data[0]['phone'] }}</td>
                <td>{{ data[0]['relative_phone'] }}</td>
                <td><img src=\"{{ data[0]['img'] }}\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" ></td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>{{ data[0]['created_at']|date('Y-m-d H:i') }}</td>
                <td>
                    {% if data[0]['status'] == 1  %}
                        <span class=\"label label-default\">显示</span>
                    {% else %}
                        <span class=\"label label-warning\">关闭</span>
                    {% endif %}
                    {% if data[0]['flag'] == 1 %}
                        <span class=\"label label-success\">精选</span>
                    {% endif %}
                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            <tr  data-id=\"{{ data[1]['id'] }}\" >
                <td>{{ data[1]['id'] }}</td>
                <td>{{ data[1]['openid'] }}</td>
                <td>{{ data[1]['name'] }}</td>
                <td>{{ data[1]['phone'] }}</td>
                <td>{{ data[1]['relative_phone'] }}</td>
                <td><img src=\"{{ data[1]['img'] }}\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" ></td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>{{ data[1]['created_at']|date('Y-m-d H:i') }}</td>
                <td>
                    {% if data[1]['status'] == 1  %}
                    <span class=\"label label-default\">显示</span>
                    {% else %}
                    <span class=\"label label-warning\">关闭</span>
                    {% endif %}
                    {% if data[1]['flag'] == 1 %}
                    <span class=\"label label-success\">精选</span>
                    {% endif %}
                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            {% else %}
            {% for item in data %}
            <tr data-id=\"{{ item['id'] }}\">
                <td>{{ item['mid'] }}</td>
                <td>{{ item['id'] }}</td>
                <td>{{ item['openid'] }}</td>
                <td>{{ item['name'] }}</td>
                <td>{{ item['phone'] }}</td>
                <td>{{ item['relative_phone'] }}</td>
                <td><img src=\"{{ item['img'] }}\" class=\"zoomImg\" style=\"width:50px;height: 50px;cursor: pointer;\" data-toggle=\"modal\" data-target=\"#myModal\" > </td>
                <td><a href=\"#\" class=\"btn btn-info detail\" data-toggle=\"modal\" data-target=\"#myModal\">详情</a></td>
                <td>{{ item['created_at']|date('Y-m-d H:i') }}</td>
                <td>
                    {% if item['status'] == 1  %}
                    <span class=\"label label-default\">显示</span>
                    {% else %}
                    <span class=\"label label-warning\">关闭</span>
                    {% endif %}
                    {% if item['flag'] == 1 %}
                    <span class=\"label label-success\">精选</span>
                    {% endif %}
                </td>
                <td><a class=\"btn btn-primary edit\"  role=\"button\" data-toggle=\"modal\" data-target=\"#myModal\">修改</a> <a a class=\"btn btn-danger delete\" role=\"button\">删除</a> </td>
            </tr>
            {% endfor %}
            {% endif %}
            {% endfor %}
            {% else %}
            <tr>
                <td colspan=\"11\">
                    <span class=\"label label-danger\">还没有数据！</span>
                </td>
            </tr>
            {% endif %}
        </table>
    </div>
    <div class=\"row\">
        {% if nums > perpage %}
        <div class=\"col-sm-12\">
            <p>总共<span class=\"label label-success\">{{nums}}</span>条数据</p>
            {{ page|raw }}
        </div>
        {% endif %}
    </div>
    <div class=\"row\">
        <p class=\"text-center\">{{exetime|raw}}</p>
    </div>
</div>

<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"myModalLabel\"></h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"row\">
                    <div class=\"col-sm-12\" id=\"modalBox\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src=\"https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js\"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js\"></script>
<script src=\"{{ public }}js/bootstrap-table.min.js\"></script>
<script src=\"{{ public }}js/bootstrap-switch.min.js\"></script>
<script src=\"{{ public }}js/bootstrap-fileinput.js\"></script>
<script src=\"{{ public }}js/jquery.serializejson.js\"></script>
<script src=\"{{ public }}js/moment.js\"></script>
<script src=\"{{ public }}js/admin.js\"></script>
<script>
    var PUBLIC_URL = \"{{ public }}\";
    var ADMIN_INDEX = \"?c=admin&a=index\";
    var URL_DETAIL = \"?c=admin&a=getDetail\";
    var URL_EDIT = \"?c=admin&a=edit\";
    var URL_UPLOADIMG = \"?c=admin&a=uploadImg\";
    var URL_UPDATE = \"?c=admin&a=updateData\";
    var URL_DELETE = \"?c=admin&a=deleteData\";
    var URL_ADD = \"?c=admin&a=addData\";

</script>
</body>
</html>", "admin/index.html", "/www/web/wx.dgnxyy.com/hd/app/views/admin/index.html");
    }
}

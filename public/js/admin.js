$(function () {

    //图片
    $(".zoomImg").on("click",function () {
        $("#myModalLabel").text("图片");
        var urli = $(this).attr('src');
        var _HTML = "<img style='max-width: 100%;' src='" + urli + "' />";
        $(".modal-footer").remove();
        $("#modalBox").html(_HTML);
    })

    //内容
    $(".detail").on("click",function () {
        $("#myModalLabel").text("内容");
        var did = parseInt($(this).parent().parent().attr('data-id'));
        $.ajax({
            url:URL_DETAIL,
            type:"POST",
            dataType:"json",
            data:{id:did},
            success: function (rep) {
                if (rep.errono == 0) {
                    var _HTML = "<p>"+rep.content+"</p>";
                    $(".modal-footer").remove();
                    $("#modalBox").html(_HTML);
                }
            }
        })
    })

    //编辑
    $(".edit").on("click",function () {
        $("#myModalLabel").text("编辑");
        var did = parseInt($(this).parent().parent().attr('data-id'));
        $.ajax({
            url:URL_EDIT,
            type:"POST",
            dataType:"json",
            data:{id:did},
            success: function (rep) {

                if (rep.errono == 0) {
                    var __HTMLIMG = "<div><div class=\"fileinput fileinput-new\" data-provides=\"fileinput\"  id=\"exampleInputUpload\"><div class=\"fileinput-new thumbnail\" style=\"width: 200px;height: auto;max-height:150px;\"><img id='picImg' style=\"width: 100%;height: auto;max-height: 140px;\" src=\""+ rep.data.img +"\" alt=\"\" /></div><div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div><div><span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">选择文件</span><span class=\"fileinput-exists\">换一张</span><input type=\"file\" name=\"pic1\" id=\"picID\" accept=\"image/gif,image/jpeg,image/x-png\"/></span><a href=\"javascript:;\" class=\"btn btn-warning fileinput-exists\" data-dismiss=\"fileinput\">移除</a></div><button type=\"button\" id=\"uploadSubmit\" class=\"btn btn-info fileinput-exists\" style='margin-top: 10px;'>上传</button></div></div><input type=\"hidden\" id='imgPath' name=\"img\" value='"+ rep.data.img +"'>";
                    var _HTMLSWITCH1,_HTMLSWITCH2;
                    if (rep.data.status == 1) {
                        _HTMLSWITCH1 = "<input type=\"checkbox\" name=\"status\" checked />";
                    } else {
                        _HTMLSWITCH1 = "<input type=\"checkbox\" name=\"status\" />";
                    }
                    if (rep.data.flag == 1) {
                        _HTMLSWITCH2 = "<input type=\"checkbox\" name=\"flag\" checked />";
                    } else {
                        _HTMLSWITCH2 = "<input type=\"checkbox\" name=\"flag\" />";
                    }


                    var _HTML = "<form id=\"Form\" enctype='multipart/form-data'><input type=\"hidden\" id='id' name=\"id\" value='"+ rep.data.id +"'><div class=\"form-group\"><label for=\"openid\" class=\"control-label\">OPENID:</label><input type=\"text\" class=\"form-control\" id=\"openid\" name=\"openid\" value='"+ rep.data.openid +"' disabled></div><div class=\"form-group\"><label for=\"name\" class=\"control-label\">微信名:</label><input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" value='"+ rep.data.name +"' ></div><div class=\"form-group\"><label for=\"phone\" class=\"control-label\">手机:</label><input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" value='"+ rep.data.phone +"' ></div><div class=\"form-group\"><label for=\"relative_phone\" class=\"control-label\">爱人手机:</label><input type=\"text\" class=\"form-control\" id=\"relative_phone\" name=\"relative_phone\" value='"+ rep.data.relative_phone +"'></div><div class=\"form-group\"><label for=\"file\" class=\"control-label\">图片:</label>"+__HTMLIMG+"</div><div class=\"form-group\"><label for=\"content\" class=\"control-label\">内容:</label><textarea class=\"form-control\" id=\"content\" name=\"content\">"+ rep.data.content +"</textarea></div><div class=\"form-group\"><label for=\"status\" class=\"control-label\">状态:</label><div><div class=\"switch switch-small\" data-on=\"success\" data-off=\"warning\">"+ _HTMLSWITCH1 +"</div></div></div><div class=\"form-group\"><label for=\"flag\" class=\"control-label\">精选:</label><div><div class=\"switch switch-small\" data-on=\"success\" data-off=\"warning\">"+ _HTMLSWITCH2 +"</div></div></div><div class=\"form-group\"><label for=\"created_at\" class=\"control-label\">创建时间:</label><input type=\"text\" class=\"form-control\" id=\"created_at\" name=\"created_at\" value='"+ moment(rep.data.created_at*1000).format('YYYY-MM-DD HH:mm') +"' disabled></div></form>";

                    var _FOOTER = "<div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button><button type=\"button\" id='btnUpdate' class=\"btn btn-primary\">更新</button></div>"


                    $(".modal-footer").remove();
                    $("#modalBox").html(_HTML);
                    $('.switch').bootstrapSwitch();
                    $(".modal-body").after(_FOOTER);
                }
            }
        })
    })

    //图片上传
    $('body').on("click","#uploadSubmit",function () {
        var formdata = new FormData();
        var file = document.getElementById("picID").files[0];
        var ready=new FileReader();
        ready.readAsDataURL(file);
        ready.onload=function(e){
            var base64Img= e.target.result;
            var blob = convertBase64UrlToBlob(base64Img);
            formdata.set('file',blob, "file_"+Date.parse(new Date())+".jpg");

            $.ajax({
                url: URL_UPLOADIMG,
                type: 'POST',
                data: formdata,
                contentType: false,
                processData: false,
                dataType:"json",
                success: function (data) {
                    if(data.errno == 0){
                        $("#imgPath").val(data.path);
                        swal(data.msg, '','success');
                    }else{
                        swal(data.msg, '','error');
                    }
                },
                error: function (data) {
                    swal(data.msg, '','error');
                }
            })
        }
    })

    //编辑提交
    $("body").on("click","#btnUpdate",function () {
        var data = $("#Form").serializeJSON();
        $.ajax({
            url: URL_UPDATE,
            type: 'POST',
            data: data,
            dataType:"json",
            success: function (data) {
                if(data.errno == 0){
                    swal(data.msg, '','success');
                    setTimeout(function () {
                        window.location.href = ADMIN_INDEX;
                    },2000)
                }else{
                    swal(data.msg, '','error');
                }
            },
            error: function (data) {
                swal(data.msg, '','error');
            }
        })
    })

    //删除
    $(".delete").click(function () {
        swal({
            title: "操作确认",
            text: "删除后，您将无法恢复此数据！",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var did = parseInt($(this).parent().parent().attr('data-id'));
                $.ajax({
                    url: URL_DELETE,
                    type: 'POST',
                    data: {id:did},
                    dataType:"json",
                    success: function (data) {
                        if(data.errno == 0){
                            swal(data.msg, '','success');
                            setTimeout(function () {
                                window.location.href = "?c=admin&a=index";
                            },2000)
                        }else{
                            swal(data.msg, '','error');
                        }
                    },
                    error: function (data) {
                        swal(data.msg, '','error');
                    }
                })
            }
        });
    })

    //新增
    $(".add").click(function () {
        $("#modalBox").empty();
        $(".modal-footer").remove();
        $("#myModalLabel").text("新增");

        var __HTMLIMG = "<div><div class=\"fileinput fileinput-new\" data-provides=\"fileinput\"  id=\"exampleInputUpload\"><div class=\"fileinput-new thumbnail\" style=\"width: 200px;height: auto;max-height:150px;\"><img id='picImg' style=\"width: 100%;height: auto;max-height: 140px;\" src=\""+PUBLIC_URL+"images/noimage.png\" alt=\"\" /></div><div class=\"fileinput-preview fileinput-exists thumbnail\" style=\"max-width: 200px; max-height: 150px;\"></div><div><span class=\"btn btn-primary btn-file\"><span class=\"fileinput-new\">选择文件</span><span class=\"fileinput-exists\">换一张</span><input type=\"file\" name=\"pic1\" id=\"picID\" accept=\"image/gif,image/jpeg,image/x-png\"/></span><a href=\"javascript:;\" class=\"btn btn-warning fileinput-exists\" data-dismiss=\"fileinput\">移除</a></div><button type=\"button\" id=\"uploadSubmit\" class=\"btn btn-info fileinput-exists\" style='margin-top: 10px;'>上传</button></div></div><input type=\"hidden\" id='imgPath' name=\"img\" value=''>";

        var _HTMLSWITCH1 = "<input type=\"checkbox\" name=\"status\" checked />";
        var _HTMLSWITCH2= "<input type=\"checkbox\" name=\"flag\" />";

        var _HTML = "<form id=\"Form\" enctype='multipart/form-data'><div class=\"form-group\"><label for=\"openid\" class=\"control-label\">OPENID:</label><input type=\"text\" class=\"form-control\" id=\"openid\" name=\"openid\" ></div><div class=\"form-group\"><label for=\"name\" class=\"control-label\">微信名:</label><input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\"  ></div><div class=\"form-group\"><label for=\"phone\" class=\"control-label\">手机:</label><input type=\"text\" class=\"form-control\" id=\"phone\" name=\"phone\" ></div><div class=\"form-group\"><label for=\"relative_phone\" class=\"control-label\">爱人手机:</label><input type=\"text\" class=\"form-control\" id=\"relative_phone\" name=\"relative_phone\"></div><div class=\"form-group\"><label for=\"file\" class=\"control-label\">图片:</label>"+__HTMLIMG+"</div><div class=\"form-group\"><label for=\"content\" class=\"control-label\">内容:</label><textarea class=\"form-control\" id=\"content\" name=\"content\"></textarea></div><div class=\"form-group\"><label for=\"status\" class=\"control-label\">状态:</label><div><div class=\"switch switch-small\" data-on=\"success\" data-off=\"warning\">"+ _HTMLSWITCH1 +"</div></div></div><div class=\"form-group\"><label for=\"flag\" class=\"control-label\">精选:</label><div><div class=\"switch switch-small\" data-on=\"success\" data-off=\"warning\">"+ _HTMLSWITCH2 +"</div></div></div></form>";

        var _FOOTER = "<div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button><button type=\"button\" id='btnAdd' class=\"btn btn-primary\">增加</button></div>";


        $("#modalBox").html(_HTML);
        $('.switch').bootstrapSwitch();
        $(".modal-body").after(_FOOTER);


    })

    //新增提交
    $("body").on("click","#btnAdd",function () {
        var data = $("#Form").serializeJSON();
        $.ajax({
            url: URL_ADD,
            type: 'POST',
            data: data,
            dataType:"json",
            success: function (data) {
                if(data.errno == 0){
                    swal(data.msg, '','success');
                    setTimeout(function () {
                        window.location.href = ADMIN_INDEX;
                    },2000)
                }else{
                    swal(data.msg, '','error');
                }
            },
            error: function (data) {
                swal(data.msg, '','error');
            }
        })
    })

    //base64转图片
    function convertBase64UrlToBlob(urlData){
        var arr = urlData.split(','), mime = arr[0].match(/:(.*?);/)[1],
            bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
        while(n--){
            u8arr[n] = bstr.charCodeAt(n);
        }
        return new Blob([u8arr], {type:mime});
    }


})
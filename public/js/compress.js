    $(function(){

        $(".submit").click(function(event) {

            var file = document.getElementById("file");

            var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

            // gif在IE浏览器暂时无法显示
            if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
                if (ext != '') {
                    swal({
                        title:"糟糕",
                        text:"图片的格式必须为png或者jpg或者jpeg格式！",
                        type:"error",
                        //timer: 3000,
                    });
                } else {
                    swal({
                        title:"糟糕",
                        text:"图片必须上传",
                        type:"error",
                        //timer: 3000,
                    });
                }
                return false;
            }


            var oContent = $("#content").val();
            var oName = $("#name").val();
            var oPhone = $("#phone").val();
            var oRelative = $("#relative_phone").val();

            if (oContent == '' || oName == '' || oPhone == '' || oRelative == '') {
                swal({
                    title:"糟糕",
                    text:"信息填写不完整",
                    type:"error",
                    //timer: 3000,
                });
                return false;
            }

            if(!(/^\d{8,15}$/.test(oPhone)) || !(/^\d{8,15}$/.test(oRelative))){
                swal({
                    title:"糟糕",
                    text:"号码格式错误",
                    type:"error",
                    //timer: 3000,
                });
                return false;
            }

            var content = $("#content").val();
            var name = $("#name").val();
            var phone = $("#phone").val();
            var relative_phone = $("#relative_phone").val();
            var formdata = new FormData();
            formdata.append("content",content);
            formdata.append("name",name);
            formdata.append("phone",phone);
            formdata.append("relative_phone",relative_phone);
            compressImg(formdata);

        });
    })

    //点击
    var clickImg = function(obj){
        $(obj).parent().find('.upload_input').click();
    }
    //删除
    var deleteImg = function(obj){
        $(obj).parent().find('input').val('');
        $(obj).parent().find('img.preview').attr("src","");
        //IE9以下
        $(obj).parent().find('img.preview').css("filter","");
        $(obj).hide();
        $(obj).parent().find('.addImg').show();
    }
    //选择图片
    function change(file) {
        //预览
        var pic = $(file).parent().find(".preview");
        //添加按钮
        var addImg = $(file).parent().find(".addImg");
        //删除按钮
        var deleteImg = $(file).parent().find(".delete");

        var ext=file.value.substring(file.value.lastIndexOf(".")+1).toLowerCase();

        // gif在IE浏览器暂时无法显示
        if( ext!= 'png' && ext!= 'jpg' && ext != 'jpeg'){
            if (ext != '') {
                alert("图片的格式必须为png或者jpg或者jpeg格式！");
            }
            return;
        }

        html5Reader(file,pic,addImg,deleteImg);

    }


    function compressImg(formdata) {
        //预览
        var fileUrl = document.getElementById("file").files[0];

        console.log(fileUrl)

        photoCompress(fileUrl, {
            opacity: 0.1
        }, function(base64Codes){

            var blob = convertBase64UrlToBlob(base64Codes);

            //console.log(base64Codes);
            formdata.append('file',blob, "file_"+Date.parse(new Date())+".jpg");

            var _that = $(this);
            $.ajax({
                type:'POST',
                url:ENROLL_URL,
                data:formdata,
                contentType:false,
                processData:false,
                dataType:"json",
                beforeSend: function () {
                    $(".addImg").css('z-index',0);
                    $(".load-box").show();
                    _that.attr({ disabled: "disabled" });

                },
                complete: function () {
                    $(".addImg").css('z-index',1);
                    $(".load-box").hide();
                },
                success:function(data){
                    if (data.errno == 0) {
                        $(".load-box").show();
                        swal({
                            title:"恭喜",
                            text:data.msg,
                            type:"success",
                        });
                        setTimeout(function(){
                         window.location.href = INDEX_URL;
                        }, 1500);
                    } else {
                        swal({
                            title:"糟糕",
                            text:data.msg,
                            type:"error",
                            //timer: 3000,
                        });
                        _that.removeAttr("disabled");
                    }
                },
                error:function(err){
                    swal({
                        title:"糟糕",
                        text:data.msg,
                        type:"error",
                        timer: 3000,
                    });
                }
            });

        });

    }

    //H5渲染
    function html5Reader(file,pic,addImg,deleteImg){
         var file = file.files[0];
         var reader = new FileReader();
         reader.readAsDataURL(file);
         reader.onload = function(e){
            var base64Img = e.target.result;
            pic.attr("src",base64Img);
         }
         addImg.hide();
         deleteImg.show();
    }

    function photoCompress(file,w,objDiv){
        var ready=new FileReader();
        ready.readAsDataURL(file);
        ready.onload=function(e){
          var re = e.target.result;
          canvasDataURL(re,w,objDiv)
        }
    }
    function canvasDataURL(path, obj, callback){

        var img = new Image();
        img.src = path;
        img.onload = function(){
            var that = this;

            var w = Math.min(400, that.width);
            var h = that.height * (w / that.width);
            var canvas = document.createElement('canvas');
            var ctx = canvas.getContext('2d');

            // 设置 canvas 的宽度和高度
            canvas.width = w;
            canvas.height = h;

            // 把图片绘制到 canvas 中
            ctx.drawImage(that, 0, 0, w, h);

            ctx.drawImage(that, 0, 0, w, h);
            // 图像质量

            var quality = obj.quality || 0.5;

            // quality值越小，所绘制出的图像越模糊
            var base64 = canvas.toDataURL('image/jpeg', quality);
            // 回调函数返回base64的值
            callback(base64);
        }
    }
    /**
    * 将以base64的图片url数据转换为Blob
    * @param urlData
    *            用url方式表示的base64图片数据
    */
    function convertBase64UrlToBlob(urlData){
        var arr = urlData.split(','), mime = arr[0].match(/:(.*?);/)[1],
          bstr = atob(arr[1]), n = bstr.length, u8arr = new Uint8Array(n);
        while(n--){
          u8arr[n] = bstr.charCodeAt(n);
        }
        return new Blob([u8arr], {type:mime});
    }
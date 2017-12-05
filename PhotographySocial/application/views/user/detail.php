
</div>
<div class="g-mn1">
    <div class="g-mn1c">
        <div class="panel panel-success">
            <div class="panel-heading">
                <div class="panel-title">修改个人数据</div>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" id="basicForm" method="post" enctype="multipart/form-data">
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label" for="formGroupInputLarge">用户名</label>
                        <div class="col-xs-4">
                            <input class="form-control" name = "username" type="text" id="username" value="<?=$basic['username']?>">
                        </div>
                    </div>
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label" for="formGroupInputLarge">密码</label>
                        <div class="col-xs-4">
                            <input class="form-control" name = "password" type="text" id="password" value="<?=$basic['password']?>">
                        </div>
                    </div>
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label" for="formGroupInputLarge">生日</label>
                        <div class="col-xs-4">
                            <input class="form-control" name = "birthday" type="text" id="birthday" value="<?=$basic['birthday']?>">
                        </div>
                    </div>
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label" for="formGroupInputLarge">联系方式</label>
                        <div class="col-xs-4">
                            <input class="form-control" name = "phone" type="text" id="phone" value="<?=$basic['phone']?>">
                        </div>
                    </div>
                    <div class="form-group form-group-lg">
                        <label class="col-sm-2 control-label">上传头像</label>
                        <div class="col-xs-4">
                            <input class="form-control" name = "pic" type="file" id="pic">
                        </div>
                    </div>
                    <div class="form-group form-group-lg">
                        <div class="col-xs-8">
                            <label class="col-sm-2 control-label" for="formGroupInputLarge"></label>
                            <button type="button" class="btn btn-primary" onclick="validate()">保 存</button>
                            <button type="button" class="btn btn-default" onclick="reset()">重 置</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div><!-- /.container -->
</div>

<script type="application/javascript">
    function validate(){
        var username = document.getElementById('username');
        var birthday = document.getElementById('birthday');
        var phone = document.getElementById('phone');
        if (username.value == "" || birthday.value == "" || phone.value == ""){
            alert("请完整填写");
        }else {
            var form = document.getElementById('basicForm');
            form.action="<?=base_url().'index.php/user/updateDetail'?>";
            form.submit();
        }
    }

    function reset(){
        var username = document.getElementById('username');
        var birthday = document.getElementById('birthday');
        var phone = document.getElementById('phone');
        username.setValue("");
        birthday.setValue("");
        phone.setValue("");
    }
</script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?=base_url().'static/js/bootstrap.min.js'?>"></script>
</body>
</html>
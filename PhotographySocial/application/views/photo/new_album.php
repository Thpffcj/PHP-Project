<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation"><a href="#stzb">我的活动</a></li>
        <li role="presentation" class="active"><a href="#smyc">发布活动</a></li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showAllAlbum' ?>">我的相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showNewAlbum' ?>">新建相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/post/getMyPrivatePost' ?>">我的照片</a>
        </li>
    </ul>
</div>
</div>

<div class="g-mn1">
    <div class="g-mn1c">
        <div class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" id="postForm">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">相册名称</label>
                            <div class="col-xs-10">
                                <input class="form-control" name="name" id="name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>
                            <div class="col-xs-10">
                                <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-primary"
                                        onclick="validate()">
                                    保 存
                                </button>
                                <button type="button" class="btn btn-default" onclick="reset()">重 置</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div><!-- /.container -->

<script type="application/javascript">
    function validate() {
        var form = document.getElementById("postForm");
        var name = document.getElementById('name');
        var description = document.getElementById('description');
        form.action = "<?= base_url() . 'index.php/album/saveAlbum'?>";
        form.submit();
    }
</script>

<!--<script src="--><?//= base_url() . 'static/js/album.js' ?><!--"></script>-->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>
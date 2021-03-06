<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showAllAlbum' ?>">我的相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/album/showNewAlbum' ?>">新建相册</a>
        </li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/photo/showPhoto' ?>">我的照片</a>
        </li>
        <li role="presentation" class="active"><a href="<?= base_url() . 'index.php/photo/showNewPhoto' ?>">上传照片</a>
        </li>
    </ul>
</div>
</div>

<div class="g-mn1">
    <div class="g-mn1c">
        <div class="content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" id="postForm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">照片名称</label>
                            <div class="col-xs-10">
                                <input class="form-control" name="photo_name" id="photo_name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">描述</label>
                            <div class="col-xs-10">
                                <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">相册名称</label>
                            <div class="col-xs-10">
                                <select class="form-control" id="album_name" name="album_name">
                                    <?php foreach($post as $row):?>
                                        <option value="<?= $row['album_name'];?>"><?php echo $row['album_name'];?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <label class="col-sm-2 control-label">上传照片</label>
                            <div class="col-xs-4">
                                <input class="form-control" name = "pic" type="file" id="pic" >
                                <br/>
                                <button type="button" class="btn btn-primary"
                                        onclick="validate()">
                                    保 存
                                </button>
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
        form.action = "<?= base_url() . 'index.php/photo/savePhoto'?>";
        form.submit();
    }
</script>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>
<div class="nav nav-pills nav-stacked" role="tablist">
    <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
        <li role="presentation"><a href="<?= base_url() . 'index.php/activity/showActivity' ?>">我的活动</a></li>
        <li role="presentation" class="active"><a href="<?= base_url() . 'index.php/activity/showNewActivity' ?>">发布活动</a></li>
        <li role="presentation"><a href="<?= base_url() . 'index.php/activity/showAllActivity' ?>">全部活动</a></li>
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
                            <label class="col-sm-2 control-label">标题</label>
                            <div class="col-xs-10">
                                <input class="form-control" name="name" id="name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">联系方式</label>
                            <div class="col-xs-10">
                                <input class="form-control" name="phone" id="phone" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">时间</label>
                            <div class="col-xs-10">
                                <input class="form-control" name="time" id="time" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">内容</label>
                            <div class="col-xs-10">
                                <textarea class="form-control" name="content" id="content" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group form-group-lg">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="button" class="btn btn-primary"
                                        onclick="validate('<?= base_url() . 'index.php/activity/showAllActivity' ?>','<?= base_url() . 'index.php/activity/saveActivity' ?>')">
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

<script src="<?=base_url().'static/js/activity.js'?>"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?= base_url() . 'static/js/bootstrap.min.js' ?>"></script>
</body>
</html>
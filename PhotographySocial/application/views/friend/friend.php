
            <div class="nav nav-pills nav-stacked" role="tablist">
                <ul class="nav nav-pills nav-stacked" role="tablist" style="width:140px;">
                    <li role="presentation" <?php if ($isFriend) echo 'class="active"'?>><a href="<?=base_url().'index.php/friend/getFriends'?>">我的关注</a></li>
                    <li role="presentation" <?php if (!$isFriend) echo 'class="active"'?>><a href="<?=base_url().'index.php/friend/getStrangers'?>">吃瓜群众</a></li>
                </ul>
            </div>
        </div>
            <div class="g-mn1">
                <div class="g-mn1c">
                    <div class="content">
                        <div>
                            <?php
                            $buttonHTML_part1 = '<button type="button" style="margin-top: 15px;margin-right: 40px" ';
                            if ($isFriend) {
                                $buttonHTML_part2 = 'onclick="unwatch(\'';
                                $buttonHTML_part3 = '\')" class="btn btn-default">取关</button>';

                            } else {
                                $buttonHTML_part2 = 'onclick="watch(\'';
                                $buttonHTML_part3 = '\')" class="btn btn-success">关注</button>';
                            }
                            ?>

                            <?php if (count($friends) != 0): ?>
                                <?php foreach ($friends as $row): ?>
                                    <div class="panel panel-info col-md-5" style="float: left;margin: 20px">
                                        <div class="panel-body">
                                            <div style="float: left">
                                                <img height="48" width="48"
                                                     src="<?= base_url() . 'uploads/' . $row['avatar'] ?>">
                                            </div>
                                            <div style="float: left">
                                                <?php
                                                    echo '<p class="text-info"><h4><a href="'.base_url().'index.php/friend/getOthersPhoto/'.$row['id'].'">'.$row['username'].'</a></h4></p>';
                                                ?>
                                                <p class="text-success" style="float: left">赞<span
                                                            class="badge"><?= $row['up'] ?></span></p>
                                                <p class="text-warning" style="float: left">踩<span
                                                            class="badge"><?= $row['down'] ?></span></p>
                                            </div>
                                            <div style="float: right">
                                                <?php
                                                    echo $buttonHTML_part1.'id="'.$row['id'].'" '.$buttonHTML_part2.$row['id'].$buttonHTML_part3;
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                            <?php if (count($friends) == 0): ?>
                                <div class="panel panel-info">
                                    <div class="panel-body" style="text-align: center">
                                        <div class="text-info">
                                            <strong><h3>还没有关注任何人哦</h3></strong>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            </div>

</div><!-- /.container -->


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="<?=base_url().'static/js/bootstrap.min.js'?>"></script>
<script src="<?=base_url().'static/js/friend.js'?>"></script>
</body>
</html>

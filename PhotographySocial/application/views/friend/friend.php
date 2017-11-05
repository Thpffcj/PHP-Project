
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
                            if ($isFriend){
                                $buttonHTML_part2 = 'onclick="unwatch(\'';
                                $buttonHTML_part3 = '\')" class="btn btn-default">取关</button>';

                            }else{
                                $buttonHTML_part2 = 'onclick="watch(\'';
                                $buttonHTML_part3 = '\')" class="btn btn-success">关注</button>';
                            }
                            if (count($friends) != 0){
                                foreach ($friends as $row){
                                    echo '<div class="panel panel-info col-md-5" style="float: left;margin: 20px">';
                                    echo '<div class="panel-body">';
                                    echo '<div style="float: left">';
                                    echo '<img height="48" width="48" src="'.base_url().'static/image/image-02.jpg">';
                                    echo '</div>';
                                    echo '<div style="float: left">';
                                    echo '<p class="text-info"><h4><a href="'.base_url().'index.php/post/getOthersPost/'.$row['id'].'">'.$row['username'].'</a></h4></p>';
                                    echo '<p class="text-success" style="float: left">赞<span class="badge">'.$row['up'].'</span></p>';
                                    echo '<p class="text-warning" style="float: left">踩<span class="badge">'.$row['down'].'</span></p>';
                                    echo '</div>';
                                    echo '<div style="float: right">';
                                    echo $buttonHTML_part1.'id="'.$row['id'].'" '.$buttonHTML_part2.$row['id'].$buttonHTML_part3;
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                            }else{
                                echo '<div class="panel panel-info">';
                                echo '<div class="panel-body" style="text-align: center">';
                                echo '<div class="text-info">';
                                echo '<strong><h3>还没有关注任何人哦</h3></strong>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        ?>
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

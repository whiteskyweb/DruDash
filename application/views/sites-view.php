
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Sites</li>
                    <li class="divider"></li>
                    <?php foreach ($xml->domain as $site) {
                       echo '<li><a href="<?php echo $site->domain ?>">'.$site.'</a></li>';
                    }; ?>

                    <li class="divider"></li>
                    <li class="nav-header">Total due 01/01/2014: $16.39</li>
                </ul>
            </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
            <div class="alert">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>
            <?php foreach ($xml->domain as $site) {?>
            <div id="<?php echo $site->domain ?>" class="well well-small row-fluid" data-spy="scroll" data-target=".nav-list">
                <div class="row-fluid">
                    <div class="span10">
                        <a href="http://<?php echo $xml->domain ?>" target="_blank"><h4><?php echo $xml->domain ?></h4></a>
                    </div>
                    <div class="span2">
                        <form action="http://alphawavemedia.co.uk/user" method="post" id="user-login" accept-charset="UTF-8" target="_blank">
                            <input type="hidden" id="edit-name" name="name" value="admin"/>
                            <input type="hidden" id="edit-pass" name="pass" value="pepsimax101">
                            <input type="hidden" name="form_id" value="user_login" />
                            <input type="submit" id="edit-submit" name="op" value="Log in" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span5">
                        <h5>Core:</h5>
                        <p><?php echo $xml->core ?></p>
                    </div>
                    <div class="span5">
                        <h5>Modules:</h5>
                        <?php foreach ($xml->moduleupdate as $module) {
                            echo '<p class="text-error">'.$module.'</p>';
                        };?>
                        <?php foreach ($xml->module as $module) {
                            echo '<p>'.$module.'</p>';
                        };?>
                    </div>
                    <div class="span2">

                        <h5>Status:</h5>
                        <p class="text-success">UP!</p>
                    </div>
                </div>
            </div>
            <?php } ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jolly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- My styles -->
       <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <?if(!Auth::instance()->logged_in()){?>
                    <li><a href="<?=URL::base()?>Login" >Login/a></li>
                        <?} else {?>
                    <li><a href="<?=URL::base()?>login/logout">Logout</a></li>
                    <? } ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>

<div class="container">
    <?=Notify::render()?>
    <?=$content?>


</div> <!-- /container -->



</body>
</html>

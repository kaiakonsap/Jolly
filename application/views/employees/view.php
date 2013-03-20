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
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js"></script>
</head>
<body>
    <a class="brand" href="#"><i class="icon-chevron-left"></i>Tagasi</a>
    <h5><?=$employee = Model_User::employee($employee->username)?>
        <?=$month = Model_User::month($month)?>
        <?=$year = Model_User::year($year)?></h5>




    <div id="demo" class="collapse out"><p lisamine  noh</p> </div>


    <div class="pagination pagination-right">
            <button class="btn"><i class="icon-plus-sign"></i>Lisa töö</button>

    </div>

    <p>Töö lisamine</p>



    <form class="form-horizontal" action=<?=URL::base()?>"Tasks/create_new" method="post">
        <div class="control-group">
            <label class="control-label" for="input1">Töö tegija</label>
            <div class="controls">
                <input type="text" id="input1" placeholder="Töö tegija" name="username">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input2">Töö tehti</label>
            <div class="controls">
                <input type="text" id="input2"name="time">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input3">Töö kirjeldus</label>
            <div class="controls">
                <textarea input class="input-xlarge" rows="3" cols="3" id="input3"name="name"></textarea>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input4">Kulunud aeg</label>
            <div class="controls">
                <input type="hh" id="input4"name="time">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="input5">Kommentaarid</label>
            <div class="controls">
                <textarea input class="input-xlarge" rows="3" cols="3" id="input5"name="notes"></textarea>
            </div>
        </div>
        <button class="btn btn-primary" button type="submit">Lisa töö</button>
       </form>


    <table class="table table-condensed">
        <caption>Tehtud tööd</caption>
        <thead>
        <tr class="info">
            <th>Töö kirjeldus</th>
            <th>Kulunud aeg</th>
            <th>Kommentaarid</th>
            <th>Palk</th>
            <th></th>
            <th></th>
        </tr>

        </thead>
        <tbody>
         <?foreach ($tasks as $task): ?>
        <tr>
            <td><?=$task->name?></td>
            <td><?=$task->getformatedTime($task->time)?></td>
            <td><?=$task->notes?></td>
            <td><?=$task->salary($task->time)?></td>
            <td><a href ="<?=URL::base()?>placeholder">Muuda</a></td>
            <td><a href ="<?=URL::base()?>tasks/delete/<?=$task->id?>">Kustuta</a></td>
        </tr>
             <? endforeach?>
        </tbody>
    </table>
</body>
  </html>

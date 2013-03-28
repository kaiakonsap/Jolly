<!DOCTYPE html>

<table class="table table-condensed">
    <caption>Kokkuvöte, </caption>
    <thead>
    <tr class="info">
        <th>Töötaja</th>
        <th>jaanuar</th>
        <th>veebruar</th>
        <th>kokku</th>
        <th>Palk</th>
        <th></th>
        <th></th>
    </tr>

    </thead>
    <tbody>

    <?foreach ($summary as $sum_me): ?>
    <tr>
        <td><?=($sum_me['username']) ?></td>
        <td><?=$sum_me['totaltime']?></td>

        <td><?=$sum_me['totaltime']?></td>
        <td><?=Model_Employee::salary($sum_me['totaltime'])?></td>
    </tr>

        <? endforeach?>

    </tbody>
</table>
<form class="form-horizontal" action=<?=URL::base()?>dash/employee method="post">
    <div class="control-group">
        <label class="control-label" for="input1">Nimi</label>
        <div class="controls">
            <input type="text" id="input1" name="person[username]">
        </div>
        <div class="control-group">
            <label class="control-label" for="input1">e-mail</label>
            <div class="controls">
                <input type="text" id="input2" name="person[email]">
            </div>
        <button class="btn btn-primary" button type="submit">Lisa</button>

            </div>
</form>
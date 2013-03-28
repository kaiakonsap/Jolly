<!DOCTYPE html>

<table class="table table-condensed">
    <caption>Kokkuvöte,<?=$year = Model_User::year($year)?></caption>
    <thead>
    <tr class="info">
        <th>Töötaja</th>

        <th>Kuu</th>
        <th>Aeg kokku</th>
        <th>Palk</th>
        <th></th>
        <th></th>
    </tr>

    </thead>
    <tbody>
    <?foreach ($summary as $sum): ?>
          <tr>
                <td rowspan="<?=count($sum)?> "><?=$sum[0]['username'] ?></td>


                <?foreach ($sum as $sum_me): ?>

                          <td><?=Model_User::month($sum_me['created'])?></td>
                          <td>  <a href="<?=URL::base()?>employees/view/<?=Model_Employee::name_id($sum_me['username'])?>?month=<?=$sum_me['created']?>&year=<?=$year?> "><?=Model_Employee::timesum($sum_me['totaltime'])?></a>
                          </td>

                          <td><?=Model_Employee::salary($sum_me['totaltime'])?></td>
        </tr>

        <? endforeach?>
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
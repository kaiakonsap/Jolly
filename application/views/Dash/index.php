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

    <?foreach ($summary as $summi): ?>
    <tr>
        <?var_dump($summi['created'])?>
        <td><?=$summi['username']?></td>
        <td><?=$summi['totaltime']?></td>

        <td><?=$summi['totaltime']?></td>
        <td><?=Model_Employee::salary($summi['totaltime'])?></td>
    </tr>

        <? endforeach?>

    </tbody>
</table>
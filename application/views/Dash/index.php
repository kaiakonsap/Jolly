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
        <td><?=Model_Employee::tasks_summary($sum_me['username']) ?></td>
        <td><?=$sum_me['totaltime']?></td>

        <td><?=$sum_me['totaltime']?></td>
        <td><?=Model_Employee::salary($sum_me['totaltime'])?></td>
    </tr>

        <? endforeach?>

    </tbody>
</table>
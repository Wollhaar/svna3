<h2>Der Kader</h2>
<table name="kader">
    <tr>
        <td class="numbers">Rückennr</td>
        <td>Spieler</td>
        <td>Position</td>
    </tr>
<?php foreach ($players as $arr): ?>
    <tr>
        <td class="numbers"><?php echo $arr['number'] ?></td>
        <td><?php echo $arr['player'] ?></td>
        <td><?php echo $arr['position'] ?></td>
    </tr>
<?php endforeach; ?>
</table>
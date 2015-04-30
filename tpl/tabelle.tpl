<p><h2>Die Staffel HB01</h2> der unteren Herren</p>
<table id="league">
    <tr>
        <td colspan="2">Platz</td>
        <td>Verein</td>
        <td>Spiele</td>
        <td>S</td>
        <td>U</td>
        <td>N</td>
        <td>T</td>
        <td>GT</td>
        <td>TD</td>
        <td>Pkt</td>
    </tr>
    <?php foreach ($allTeams as $team): ?>
    <tr>
        <td colspan="2"><?php echo $team['place'] ?></td>
        <td><?php echo $team['team'] ?></td>
        <td><?php echo $team['games'] ?></td>
        <td><?php echo $team['win'] ?></td>
        <td><?php echo $team['draws'] ?></td>
        <td><?php echo $team['lost'] ?></td>
        <td><?php echo $team['goals'] ?></td>
        <td><?php echo $team['goalA'] ?></td>
        <td><?php echo $team['goalDiff'] ?></td>
        <td><?php echo $team['points'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<h2>Spielplan</h2>
<p> für die 3.Herren des SVNA</p>
<table>
    <?php foreach($matchlist as $match): ?>
    <tr>
        <td><?php echo $match['matchday'] ?></td>
        <td><?php echo $match['date'] ?></td>
        <td><?php echo $match['team1'] ?></td>
        <td>-</td>
        <td><?php echo $match['team2'] ?></td>
        <?php if(isset($match['result'])): ?>
        <td><?php echo $match['result'] ?></td>
        <?php else: ?>
        <td>-:-</td>
        <?php endif; ?>
    </tr>
    <?php endforeach; ?>
</table>
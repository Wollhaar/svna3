<h2>Der Spieltag</h2>
<div id="md-input">
    <div>
    <form action="index.php?a=spieltag" method="GET">
        <input type="hidden" name="a" value="spieltag" />
        <span>Spieltag</span><input type="text" name="md" value="<?php /* if(isset($matchday)){ echo $matchday['matchday']}else{''} */ ?>" />
    </form>
    </div>
    <?php if(isset($_GET['md'])): ?>
    <p id="spieltag">Spieltag <b><?php echo $_GET['md'] ?></b></p>
    <?php endif; ?>
</div>
<form action="?=save" method="post">
    <table id="matchday">
    <?php foreach($matchday as $game): ?>
        <tr>
            <input type="hidden" name="game" value="<?php echo $game['matchid'] ?>"/>
            <td><?php echo $game['date'] ?></td>
            <td class="cell-team"><?php echo $game['team1'] ?></td>
            <td>-</td>
            <td class="cell-team"><?php echo $game['team2'] ?></td>
            <?php if(isset($game['result'])): ?>
            <td><?php echo $game['result'] ?></td>
            <?php else: ?>
            <td><input type="text" name="result" /></td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
    </table>
    <button type="submit">Speichern</button>
</form>
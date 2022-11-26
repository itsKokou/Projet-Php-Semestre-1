<?php 
$oeuvres=find_all_oeuvres_disponible();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Oeuvres disponibles, ses exemplaires et rayons</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>EXEMPLAIRE</th>
                <th>RAYON</th>
                <th>OUVRAGE</th>
            </tr>
            <?php foreach ($oeuvres as $oeuvre): ?>
                <tr>
                    <td><?= $oeuvre['id'] ?></td>
                    <td><?= $oeuvre['code'] ?></td>
                    <td><?= $oeuvre['rayon'] ?></td>
                    <td><?= $oeuvre['ouvrage'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

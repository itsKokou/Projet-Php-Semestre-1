<?php 
$rayons=find_all_rayon();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des rayons</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
            </tr>
            <?php foreach ($rayons as $rayon): ?>
                <tr>
                    <td><?= $rayon['id'] ?></td>
                    <td><?= $rayon['nom'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

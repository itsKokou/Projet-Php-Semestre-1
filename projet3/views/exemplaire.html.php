<?php 
$exemplaires=find_all_exemplaire();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des exemplaires</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>DATE D'ENREGISTREMENT</th>
                <th>ETAT</th>
            </tr>
            <?php foreach ($exemplaires as $exemplaire): ?>
                <tr>
                    <td><?= $exemplaire['id'] ?></td>
                    <td><?= $exemplaire['code'] ?></td>
                    <td><?= $exemplaire['dateenre'] ?></td>
                    <td><?= $exemplaire['etat'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

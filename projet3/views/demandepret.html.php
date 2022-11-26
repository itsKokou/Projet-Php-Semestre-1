<?php 
$demandes=find_all_demande_pret_ok();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des demandes de prêt</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM ADHERENT</th>
                <th>EMAIL ADHERENT</th>
                <th>EXEMPLAIRE</th>
                <th>ETAT</th>
            </tr>
            <?php foreach ($demandes as $demande): ?>
                <tr>
                    <td><?= $demande['id'] ?></td>
                    <td><?= $demande['nomcomplet'] ?></td>
                    <td><?= $demande['email'] ?></td>
                    <td><?= $demande['exemplaire'] ?></td>
                    <td><?= $demande['etat'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

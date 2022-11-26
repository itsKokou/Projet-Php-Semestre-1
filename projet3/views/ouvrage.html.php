<?php 
$ouvrages=find_all_ouvrage_auteur();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des ouvrages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>CODE</th>
                <th>TITRE</th>
                <th>AUTEUR</th>
                <th>DATE D'EDITION</th>
                <th>STATUT</th>
            </tr>
            <?php foreach ($ouvrages as $ouvrage): ?>
                <tr>
                    <td><?= $ouvrage['id'] ?></td>
                    <td><?= $ouvrage['code'] ?></td>
                    <td><?= $ouvrage['titre'] ?></td>
                    <td><?= $ouvrage['auteur'] ?></td>
                    <td><?= $ouvrage['dateedition'] ?></td>
                    <td><?= $ouvrage['statut'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

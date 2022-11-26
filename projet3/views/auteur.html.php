<?php 
$auteurs=find_all_auteur();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des auteurs</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
            </tr>
            <?php foreach ($auteurs as $auteur): ?>
                <tr>
                    <td><?= $auteur['id'] ?></td>
                    <td><?= $auteur['nom'] ?></td>
                    <td><?= $auteur['prenom'] ?></td>
                    <td><?= $auteur['profession'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>

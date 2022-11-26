<?php 
$prets=find_all_pret_en_cours();
?>
<div class="conteneur">
    <div class="classe">
        <h2>Liste des prêts en cours</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM ADHERENT</th>
                <th>EMAIL ADHERENT</th>
                <th>EXEMPLAIRE</th>
                <th>DATE</th>
                <th>DATE DE RETOUR PREVU</th>
                <th>DATE DE RETOUR REEL</th>
            </tr>
            <?php foreach ($prets as $pret): ?>
                <tr>
                    <td><?= $pret['id'] ?></td>
                    <td><?= $pret['nomcomplet'] ?></td>
                    <td><?= $pret['email'] ?></td>
                    <td><?= $pret['exemplaire'] ?></td>
                    <td><?= $pret['date'] ?></td>
                    <td><?= $pret['dateprevu'] ?></td>
                    <td><?= $pret['datereel'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>
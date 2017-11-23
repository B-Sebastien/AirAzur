<div id="contenu">
<h2>Liste des réservations</h2>

<table border="1">
    <tbody>
      
<?php 
    $compteur=0;
    foreach($lesReservations as $uneReservation) { ?>
    <tr>
        <td><?php echo $uneReservation['nom']; ?></td>
        <td><?php echo $uneReservation['prenom']; ?></td>
        <td><?php echo $uneReservation['numero']; ?></td>
        <td><?php echo $uneReservation['nbplaces']; ?></td>
        <td><a href="index.php?action=pdfReservation&numReservation=<?php echo $compteur; ?>"><img src="images/pdf.png" width="30px" height="30px"></a></td>
        <td><a href="index.php?action=suppReservation&numReservation=<?php echo $uneReservation['numero']; ?>"><img src="images/delete.png" width="30px" height="30px"></a></td>
    </tr>
<?php 
    $compteur++;
    } ?>
    </tbody>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro de vol</th>
            <th>Nb places</th>
            <th>Actions</th>
            <th>Supprimer</th>
        </tr>
    </thead>
</table>
</div>

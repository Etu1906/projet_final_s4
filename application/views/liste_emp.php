<!DOCTYPE html>
<html>
<head>
    <title>Liste des employés et départements</title>
</head>
<body>
    <h1>Liste des employés et départements</h1>
    <?php if (!empty($employes_departements)) : ?>
        <table>
            <thead>
                <tr>
                    <th>Nom de l'employé</th>
                    <th>Nom du département</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes_departements as $employe) : ?>
                    <tr>
                        <td><?php echo $employe['nom_employe']; ?></td>
                        <td><?php echo $employe['nom_departement']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Aucun employé et département trouvé.</p>
    <?php endif; ?>
</body>
</html>

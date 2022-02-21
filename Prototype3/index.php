<?php

include 'configuration.php';
include 'employeManager.php';
$employeManager = new EmployeManager();
$data = $employeManager->getEmployes($connectData);

?>


<body>
    
<a href="insert.php"> ajoute </a>


<table>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Action</th>
            </tr>

            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value['prenom']?></td>
                <td><?= $value['nom']?></td>
                <td><?= $value['age']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $value['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id'] ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>


</body>
<?php
    require_once('../controllers/details_group.php');

        $id = $result[0][0];
        $name = $result[0][1];
        $enddate = $result[0][3];
        $created_at = $result[0][2];
?>

<h2>Groep met ID:<?php echo $id ?></h2>
<ul>
    <li><?=$name?></li>
    <li><?=$enddate?></li>
    <li><?=$created_at?></li>
    <h3>Users</h3>
    <ul>
        <?foreach($result as $row) {
                echo "<li>". $row[4]."</li>";
            }
        ?>
    </ul>
</ul>
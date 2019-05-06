<?php
    require_once('../controllers/details.php');

        $id = $result['id'];
        $first_name = $result['first_name'];
        $last_name = $result['last_name'];
        $user_name = $result['username'];
        $level = $result['level'];
        if(strlen($result['group_name']) == 0) {
            $group = 'Geen groep';
        }
        else {
            $group = $result['group_name'];
        }
?>

<h2>User met ID:<?php echo $id ?></h2>
<ul>
    <li><?=$first_name?></li>
    <li><?=$last_name?></li>
    <li><?=$user_name?></li>
    <li><?=$level?></li>
    <li><?=$group?></li>
</ul>
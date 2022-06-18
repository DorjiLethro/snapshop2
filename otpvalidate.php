<?php
    if(isset($_POST['submit'])) {
        $one = $_POST['1'];
        $two = $_POST['2'];
        $three = $_POST['3'];
        $four = $_POST['4'];
        $num = $_POST['phone'];

        if($one === '1' && $two === '2' && $three === '3' && $four === '4') {
            header("Location: ../snapshop/resetpassword.php?number=$num");
        }
    }
?>
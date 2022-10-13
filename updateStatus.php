<?php
include("function.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $work = getWorkByid($id);

    updateStatus($id, $work['work_status']);
}
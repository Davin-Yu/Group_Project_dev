<?php
    $topic = $_POST["_topic"];
    $keyword = $_POST["_keyword"];
    if (empty($_POST["_keyword"])) {
      echo  "<script> location.href='../RandomResult/RandomResult.php?_topic=$topic&_keyword=$keyword' </script>";
    }
    echo  "<script> location.href='../SearchedResult/SearchedResult.php?_topic=$topic&_keyword=$keyword' </script>";
 ?>

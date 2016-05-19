<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
</head>
<body>
    <!--
        <?php
        var_dump($_POST);
        ?>
    -->

    <?php
    echo "<p>". "性名". $_POST["familynameInput"]. " ". $_POST["firstnameInput"]. "</p>";
    ?>
    <!--開発用 戻りリンク-->
    <p>
        <a href="./contact.php">戻る</a>
    </p>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
    <style>
    </style>
</head>
<body>
    <!--
    <?php
    var_dump($_POST);
    ?>
    -->
    <p>姓名
        <?php
        echo $_POST["familynameInput"]. "　". $_POST["firstnameInput"];
        ?>
    </p>
    <p>性別
        <?php
        echo $_POST["sex"];
        ?>
    </p>
    <p>住所
        <?php
        echo $_POST["from"];
        ?>
    </p>
    <p>電話番号
        <?php
        echo $_POST["tel1"]. '-'. $_POST["tel2"]. '-'. $_POST["tel3"];
        ?>
    </p>
    <p>メールアドレス
        <?php
        echo $_POST["mail"]. "@". $_POST["mail2"];
        ?>
    </p>
    <p>当社をどこで知りましたか？
        <?php
        echo $_POST["knew"];
        ?>
    </p>
    <p>質問のカテゴリ
        <?php
        echo $_POST["question"];
        ?>
    </p>
    <p>質問の内容
        <textarea cols="100" rows="15">
        <?php
        echo $_POST["comments"];
        ?>
        </textarea>
    </p>
    <!--開発用 戻りリンク-->
    <p>
        <a href="./contact.php">戻る</a>
    </p>
</body>
</html>

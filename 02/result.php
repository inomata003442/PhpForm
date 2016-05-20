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
        if(isset($_POST["familyname"]) && isset($_POST["firstname"])){
            echo $_POST["familyname"]. "　". $_POST["firstname"];
        }elseif(!isset($_POST["familynameInput"]) && isset($_POST["firstname"])){
            echo '苗字が未入力です';
        }elseif(isset($_POST["familyname"]) && !isset($_POST["firstname"])){
            echo '名前が未入力です';
        }else{
            echo '姓名が未入力です';
        }
        ?>
    </p>
    <p>性別
        <?php
        $sex_array = array('男性', '女性', '性別不明');
        if(isset($_POST["sex"])){
            echo $sex_array[$_POST["sex"]];
        }else{
            echo '未入力です';
        }
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
        if(isset($_POST["mail"]) && isset($_POST["mail2"])){
            echo $_POST["mail"]. "@". $_POST["mail2"];
        }else{
            echo '未入力です';
        }
        ?>
    </p>
    <p>当社をどこで知りましたか？
        <?php
        $knew_array = array('ニュース', '学校', '駅の広告', 'ＣＭ', 'その他');
        if(isset($_POST["knew"])){
            foreach($_POST["knew"] as $knew_key){
                $result_knew[] = $knew_array[$knew_key];
            }
            echo implode(" ", $result_knew);
        }else{
            echo "知らない、覚えていない、あるいは未入力";
        }
        ?>
    </p>
    <p>質問のカテゴリ
        <?php
        $question_array = array('質問のカテゴリを選択してください', '製品について', '当社について', '採用について', 'その他');
        echo $question_array[$_POST["question"]];
        ?>
    </p>
    <p>質問の内容
        <?php
        echo $_POST["comments"];
        ?>
    </p>
    <!--開発用 戻りリンク-->
    <p>
        <a href="./contact.php">項目をリセットして戻る</a>
    </p>
</body>
</html>

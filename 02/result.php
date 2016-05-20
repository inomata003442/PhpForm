<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
    <style>
    </style>
</head>
<body>

    <?php
    var_dump($_POST);
    ?>


    <p>姓名
        <?php
        if(isset($_POST["familyname"]) && $_POST["familyname"]!=''
        && (isset($_POST["firstname"]) && $_POST["firstname"]!='')){
            echo $_POST["familyname"]. "　". $_POST["firstname"];
        }elseif($_POST["familyname"]==''
        && isset($_POST["firstname"]) && $_POST["firstname"]!=''){
            echo '苗字を記入してください';
        }elseif(isset($_POST["familyname"]) && $_POST["familyname"]!=''
        && $_POST["firstname"]==''){
            echo '名前を記入してください';
        }else{
            echo '記入してください';
        }
        ?>
    </p>
    <p>性別
        <?php
        $sex_array = array('男性', '女性', '性別不明');
        if(isset($_POST["sex"])){
            echo $sex_array[$_POST["sex"]];
        }else{
            echo 'どれかにチェックを入れてください';
        }
        ?>
    </p>
    <p>住所
        <?php
        if(isset($_POST["from"]) && $_POST["from"]!=''){
            echo $_POST["from"];
        }else{
            echo '記入してください';
        }
        ?>
    </p>
    <p>電話番号
        <?php
        //　番号に0000がありうることを考慮し、判定に「!==」や「===」を選択
        if($_POST["tel1"]!=='' && $_POST["tel2"]!=='' && $_POST["tel3"]!==''){
            echo $_POST["tel1"]. '-'. $_POST["tel2"]. '-'. $_POST["tel3"];
        }elseif($_POST["tel1"]==='' && $_POST["tel2"]==='' && $_POST["tel3"]===''){
            echo '記入してください';
        }else{
            echo '不備があります';
        }
        ?>
    </p>
    <p>メールアドレス
        <?php
        if( (isset($_POST["mail"]) && $_POST["mail"]!='' )
        && ( isset($_POST["mail2"]) && $_POST["mail2"]!='') ){
            echo $_POST["mail"]. "@". $_POST["mail2"];
        }else{
            echo '記入してください';
        }
        ?>
    </p>
    <p>当社をどこで知りましたか？
        <?php
        $knew_array = array('ニュース', '学校', '駅の広告', 'ＣＭ', "998" => 'その他', "999" => '知らない、覚えていない');
        if(isset($_POST["knew"])){
            foreach($_POST["knew"] as $knew_key){
                $result_knew[] = $knew_array[$knew_key];
            }
            echo implode(" ", $result_knew);
        }else{
            $_POST["knew"][] = 5;//自動選択の体を取っているので一応格納します
            echo "【自動選択】知らない、覚えていない";
        }
        ?>
    </p>
    <p>質問のカテゴリ
        <?php
        $question_array = array('質問のカテゴリを選択してください', '製品について',
                                '当社について', '採用について', 'その他');
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
<?php
var_dump($_POST);
?>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ご確認</title>
    <style>
        /*
        コメントアウトしたborderは開発用色枠
        */
        body{
        /*    border: solid 3px #000000;    */
        }
            #h1border{
                border-bottom: solid 1px #008000;
                 /*↓横（右）（ーを入れると左）　縦（下）（ーを入れると上）　ぼかしを入れる量 広がり 色*/
                box-shadow: 0px 10px 5px -5px #008000;
                width: 870px;
                height: 50px;
                margin: 100px auto;
                margin-bottom:50px;/*後に書いた内容で上書きするというCSSの特性を利用し、margin下100pxを50pxで上書き*/
            }
                h1{
                    border-left: solid 5px #008000;
                /*    border: solid 3px #7FFF00;    */
                }
                    #h1word{
                        padding-top: 6px;
                        padding-bottom: 5px;
                        margin-bottom: 10px;
                        padding-left: 1em;
                    /*    border : solid 3px #DC143C;   */
                    }
                    form{
                        margin: 0 auto;
                        width: 800px;
                    /*    border: solid 3px #DC143C;    */
                    }
                        h2{
                            width:800px;
                            padding-left: 1em;
                            padding-bottom: 5px;
                            border-left: solid 5px #008000;
                            border-bottom: solid 1px #008000;
                        }
                        p{
                        /*    border: solid 3px #0000CD;  */
                        }
                        #cover{
                        /*    border: solid 3px #008000;    */
                        }
                            #line{
                                display: table;
                                width: 100%;
                                margin: 30px;
                                padding-bottom: 15px;
                                border-bottom: solid 1px #C0C0C0;
                            /*    border: solid 3px #C0C0C0;  */
                            }
                                #left{
                                    display: table-cell;
                                    width: 35%;
                                /*    border: solid 3px #FFD700;    */
                                }
                                #right{
                                    display: table-cell;
                                    width: 65%;
                                /*    border: solid 3px #F0E68C;    */
                                }
                            #right_stage{
                                display: table;
                            /*    border: solid 3px #48D1CC;    */
                            }
                                #right_stage_top{
                                    display: table-row;
                                /*    border: solid 3px #C71585;    */
                                }
                                #right_stage_bottom{
                                    display: table-row;
                                /*    border: solid 3px #A52A2A;    */

                                }
                            #line_bottom{
                                display: table;
                                width: 100%;
                                margin: 30px;
                                border-bottom: solid 1px #C0C0C0;
                            }
                            #bottom{
                            /*    border: solid 3px #FF00FF;    */
                                margin: 30px;
                            }
                                #category{
                                /*    border: solid 3px #C0C0C0;  */
                                    margin-bottom: 30px;
                                }
                                #textarea{
                                /*    border: solid 3px #A52A2A;    */
                                    margin-top:30px;
                                    margin-bottom: 30px;
                                }
                                    #textarea_area{
                                        width: 700px;
                                        height: 100px;
                                        resize: vertical;
                                    }
                                #submit_reset{
                                    display: table;
                                    text-align:center;
                                /*  border : solid 3px #FF00FF;     */
                                    width :100%;
                                    margin: 30px;
                                }
                                    #submit{
                                        display: table-cell;
                                        margin: 30px;
                                        width: 50%;
                                    }
                                        #button_submit{
                                            font-size: 200%;
                                            height:50px;
                                            width:300px;
                                        }
                                    #reset{
                                        display: table-cell;
                                        width: 50%;
                                    }
                                        #button_reset{
                                            font-size: 200%;
                                            height:50px;
                                            width:300px;
                                        }
                                #pageback{
                                    margin-top:100px;
                                }
    </style>
</head>
<body>
    <div id="h1border">
        <h1>
            <div id="h1word">お問い合わせ内容のご確認</div>
        </h1>
    </div>
            <form action="result.php" method="POST">
                <h2>お客様に関する情報</h2>
                    <!--
                    テキストボックスとかとあわせてテーブル化したい
                    その際、tableではなくdiv要素で囲ったものをcssであとから整形してあげるとよい
                    display:table,table-row,table-cellなど
                    -->
                    <div id="cover">
                        <div id="line">
                            <div id="left">
                                <label for="familyname">姓名</label>
                            </div>
                            <div id="right">
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
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                性別
                            </div>
                            <div id="right">
                                <?php
                                $sex_array = array('男性', '女性', '性別不明');
                                if(isset($_POST["sex"])){
                                    echo $sex_array[$_POST["sex"]];
                                }else{
                                    echo 'どれかにチェックを入れてください';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="from">住所</label>
                            </div>
                            <div id="right">
                                <?php
                                if(isset($_POST["from"]) && $_POST["from"]!=''){
                                    echo $_POST["from"];
                                }else{
                                    echo '記入しない';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="tel1">電話番号</label>
                            </div>
                            <div id="right">
                                <?php
                                //　番号に0000がありうることを考慮し、判定に「!==」や「===」を選択
                                if($_POST["tel1"]!=='' && $_POST["tel2"]!=='' && $_POST["tel3"]!==''){
                                    echo $_POST["tel1"]. '-'. $_POST["tel2"]. '-'. $_POST["tel3"];
                                }elseif($_POST["tel1"]==='' && $_POST["tel2"]==='' && $_POST["tel3"]===''){
                                    echo '記入しない';
                                }else{
                                    echo '不備があります';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="mail">メールアドレス</label>
                            </div>
                            <div id="right">
                                <?php
                                if( (isset($_POST["mail"]) && $_POST["mail"]!=='' )
                                && ( isset($_POST["mail2"]) && $_POST["mail2"]!=='') ){
                                    echo $_POST["mail"]. "@". $_POST["mail2"];
                                }elseif($_POST["mail"]==='' && $_POST["mail2"]===''){
                                    echo '記入しない';
                                }else{
                                    echo '不備があります';
                                }
                                ?>
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                当社をどこで知りましたか？
                            </div>
                            <div id="right">
                                <?php
                                $knew_array = array('ニュース', '学校', '駅の広告', 'ＣＭ', "998" => 'その他', "999" => '知らない、覚えていない');
                                if(isset($_POST["knew"])){
                                    foreach($_POST["knew"] as $knew_key){
                                        $result_knew[] = $knew_array[$knew_key];
                                    }
                                    echo implode(" ", $result_knew);
                                }else{
                                    $_POST["knew"][] = 999;//自動選択の体を取っているので一応格納します
                                    $result_knew[] = $knew_array[999];
                                    echo "【自動選択】知らない、覚えていない";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <h2>ご質問</h2>
                    <div id="line_bottom">
                        <div id="left">
                            質問のカテゴリ
                        </div>
                        <div id="right">
                            <div id="category">
                                <?php
                                $question_array = array('質問のカテゴリを選択してください', '製品について',
                                                        '当社について', '採用について', 'その他');
                                echo $question_array[$_POST["question"]];
                                ?>
                            </div>
                        </div>
                    </div>
                    <div id="bottom">
                        <div id="textarea">
                            <?php
                            $comments_result = nl2br($_POST["comments"]);//改行を読み込む
                            echo $comments_result;
                            ?>
                        </div>
                        <div id="pageback">

                            <a href="./contact.php">項目をリセットして戻る</a>
                        </div>
                    </div>
            </form>
</body>
</html>
<?php
$fp = fopen('C:\Users\Owner\Documents\PhpForm\02\contact_log.txt', "a+");
/*$logNum = fgets(fseek($fp, -1, SEEK_END));*/
//↓（ 改行文字を追加しない | 空行をスキップする　）をやった上で配列に格納
//↓　$fpでは駄目だったのでフルパスを入れてます
$numArray = file('C:\Users\Owner\Documents\PhpForm\02\contact_log.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$logNum = array_pop($numArray);//配列の最後を返す
$logNum = $logNum+1;
$logStr =   "\n"."\n".
            $logNum."\n".
            '姓名'.$_POST["familyname"]." ".$_POST["firstname"]."\n".
            '性別'.$sex_array[$_POST["sex"]]."\n".
            '住所'.$_POST["from"]."\n".
            '電話番号'.$_POST["tel1"]."-".$_POST["tel2"]."-".$_POST["tel3"]."\n".
            'メールアドレス'.$_POST["mail"]."@".$_POST["mail2"]."\n".
            '当社をどこで知りましたか？'.implode(" ", $result_knew)."\n".
            '質問のカテゴリ'.$question_array[$_POST["question"]]."\n".
            '質問内容'."\n".
            $comments_result."\n".
            $logNum;
fwrite($fp, $logStr);
fclose($fp);
?>

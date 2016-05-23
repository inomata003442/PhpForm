<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>完了画面</title>
    <style>
        /*
        コメントアウトしたborderは開発用色枠
        */
        body{
        /*    border: solid 3px #000000;    */
        }
            #h1border{
                border-bottom: solid 1px #008000;
                box-shadow: 0px 1px 5px; /*横　縦　ぼかし*/
                width: 800px;
                height: 50px;
                margin: 100px auto;
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
                                    echo '記入してください';
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
                                    echo '記入してください';
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
                                if( (isset($_POST["mail"]) && $_POST["mail"]!='' )
                                && ( isset($_POST["mail2"]) && $_POST["mail2"]!='') ){
                                    echo $_POST["mail"]. "@". $_POST["mail2"];
                                }else{
                                    echo '記入してください';
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
                                    $_POST["knew"][] = 5;//自動選択の体を取っているので一応格納します
                                    echo "【自動選択】知らない、覚えていない";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <h2>ご質問</h2>
                    <div id="line">
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
                            echo $_POST["comments"];
                            ?>
                        </div>
                        <div id="pageback">

                            <a href="./contact.php">項目をリセットして戻る</a>
                        </div>
                    </div>
            </form>
</body>
</html>

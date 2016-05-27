<?php
//擬似リセットボタンの処理
if(isset($_POST["reset_flg"])){
    $_POST = array();//初期化
}
?>
<?php
//サニタイズ(無害化) header("Location : result.php");かheader('HTTP/1.1 307 Temporary Redirect');が悪さするのでこれは擬似リセットやエラーでここに戻ってきた時用
function sany($a){
    $_data = array();
    foreach ($a as $key => $value) {
        if (is_array($value)) {
            $_data[$key] = sany($value);
        }else{
            $_data[$key] = htmlspecialchars($value, ENT_QUOTES);
        }
    }
    return $_data;
}
?>
<?php
//必須チェックとバリデーション(入力制限)
//$err_msg[]の配列キーが被っているヤツは共通化したい項目　スペースが足りなくて上に表示されるが本来はボックスの右に表示したかった。←その際、キーで呼び出そうと思っていた。
error_reporting(E_ALL & ~E_NOTICE);//存在しない配列の参照をするとNOTICEエラーが表示されるので、非表示
$err_msg = array();//初期化
if ($_POST["post_flg"]){//確認ボタンを押したらここが始まる
    if ($_POST["familyname"] == ""){
        $err_msg[0] = "姓は必須です。";
    }
    if($_POST["familyname"]!==""){
        mb_regex_encoding("UTF-8");
        if(!preg_match("/^[a-zA-Zァ-ヶー一-龠]+$/",$_POST["familyname"])){// /(これより正規表現)^(行始)[0から9]｛が２～４回｝$(行末)(ここまで正規表現)/
            $err_msg[1] = "姓はひらがなカタカナ漢字、又は半角英字で記入してください。";
        }
    }
    if ($_POST["firstname"] == ""){
        $err_msg[2] = "名前は必須です。";
    }
    if($_POST["firstname"]!==""){
        mb_regex_encoding("UTF-8");
        if(!preg_match("/^[a-zA-Zァ-ヶー一-龠]+$/",$_POST["firstname"])){// /(これより正規表現)^(行始)[0から9]｛が２～４回｝$(行末)(ここまで正規表現)/
            $err_msg[3] = "名前はひらがなカタカナ漢字、又は半角英字で記入してください。";
        }
    }
    if($_POST["sex"] == ""){
        $err_msg[4] = "性別は必須です。";
    }
    if($_POST["tel1"]!==""){
        if(!preg_match("/^[0-9]{2,4}$/",$_POST["tel1"])){// /(これより正規表現)^(行始)[0から9]｛が２～４回｝$(行末)(ここまで正規表現)/
            $err_msg[5] = "電話番号は半角数字を使用し、正確に記入してください。";
        }
    }
    if($_POST["tel2"]!==""){
        if(!preg_match("/^[0-9]{2,4}$/",$_POST["tel2"])){// /(これより正規表現)^(行始)[0から9]｛が２～４回｝$(行末)(ここまで正規表現)/
            $err_msg[5] = "電話番号は半角数字を使用し、正確に記入してください。";
        }
    }
    if($_POST["tel3"]!==""){
        if(!preg_match("/^[0-9]{3,4}$/",$_POST["tel3"])){// /(これより正規表現)^(行始)[0から9]｛が３～４回｝$(行末)(ここまで正規表現)/
            $err_msg[5] = "電話番号は半角数字を使用し、正確に記入してください。";
        }
    }
    if($_POST["mail"]!==""){
        if(!preg_match("/^[a-zA-Z0-9_.+-]+$/",$_POST["mail"])){// /(これより正規表現)^(行始)[半角英数字と_.+-]+(が1回以上)$(行末)(ここまで正規表現)/
            $err_msg[6] = "メールアドレスは半角英数字を使用し、正確に記入してください。";
        }
    }
    if($_POST["mail2"]!==""){
        if(!preg_match("/^[a-zA-Z0-9_.+-]+[.][a-zA-Z0-9_.+-]+$/",$_POST["mail2"])){
            // /(これより正規表現)^(行始)[半角英数字と_.+-]+(が1回以上).(ドット必須)[半角英数字と_.+-]+(が1回以上)$(行末)(ここまで正規表現)/
            $err_msg[6] = "メールアドレスは半角英数字を使用し、正確に記入してください。";
        }
    }
    if(count($err_msg) == 0){
        //エラーがなければresult.phpにPOST送信してページ遷移
        //↓ステータスコード307 temp~　：　強制一時リダイレクト 通常、locationで遷移すると消えるはずの$_POSTをもっていける
        //（参考http://ja.stackoverflow.com/questions/13026/phpでのpostデータの送信(送信までURL)）
        header('HTTP/1.1 307 Temporary Redirect');
        header( "Location: result.php" ) ;
    }
$_POST = sany($_POST);//サニタイズ(無害化) header("Location : result.php");かheader('HTTP/1.1 307 Temporary Redirect');が悪さするのでこれは擬似リセットやエラーでここに戻ってきた時用
}
error_reporting(E_ALL);//全エラーが表示されるように、エラー設定を元に戻す
//var_dump($err_msg);
//var_dump($_POST);
?>
<?php
//セレクトボックスの保持
if(isset($_POST["question"])){
    if($_POST["question"]==="0"){
        $selected0 = "selected";
    }
    if($_POST["question"]==="1"){
        $selected1 = "selected";
    }
    if($_POST["question"]==="2"){
        $selected2 = "selected";
    }
    if($_POST["question"]==="3"){
        $selected3 = "selected";
    }
    if($_POST["question"]==="4"){
        $selected4 = "selected";
    }
}else{
    //擬似リセットボタンが作動した時、初めて訪れた時用の初期値
    $selected0 = "selected";
}
?>
<!DOCTYPE html>
<html lang="ja"><!--このドキュメントは日本語である-->
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
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
                width: 870px;/*formのボーダーより長くなるように後から決めた強引な値　根拠は無い*/
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
                    #errStage{
                        margin: 0 auto;
                        width: 800px;
                        background-color:#E7D3D6;
                        border:3px solid #A55952;
                        color:#944121;
                        font-size:12px;
                        padding:10px;
                        text-align:left;
                    }
                    #form1{
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
                        input[type="text"]{/*テキストボックスのガワの指定*/
                            outline:0;
                            height:30px;
                            border-width:thin;
                            border-radius:5px; /*角丸指定*/
                            border-color:#C0C0C0;
                            padding-left:10px;
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
                                    #left_stage{
                                        display:table;
                                        width:100%;
                                    }
                                        #left_left{
                                            display:table-cell;
                                            width:30%;
                                        }
                                        #required{
                                            display:table-cell;
                                            width:70%;
                                            }
                                            #required_font{
                                                display:table-cell;/*vertical-alignを有効にするためのテーブルセル化*/
                                                color:#fff; /*文字色を白に*/
                                                width:40px;
                                                height:20px;
                                                text-align:center;
                                                background-color:#FF0000;/*背景を赤に*/
                                                border-radius:5px;/*角丸指定*/
                                                vertical-align: middle;
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
                                            width: 800px;
                                            height: 100px;
                                            outline:0;
                                            resize: vertical;
                                            border-width:thin;
                                            border-radius:5px; /*角丸指定*/
                                            border-color:#C0C0C0;
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
                                                font-size: 125%;
                                                height:50px;
                                                width:300px;
                                                /*↓borderのすぐ外の空間（outline）を消すことで
                                                フォーカスした時の青い枠線を消します*/
                                                outline:0;
                                                border:none;/*初期設定の灰色ボーダーを消す*/
                                                border-radius:5px; /*角丸指定*/
                                                color:#fff; /*文字色を白に*/
                                                /*background-color:#008000; /*ボタンの色*/
                                                box-shadow:#008000; /*ぼかしの指定*/
                                                /*ボタンをグラデーションさせる (webkit)
                                                left top,left bottom =上fromから下toに*/
                                                background: -webkit-gradient(linear,
                                                            left top, left bottom,
                                                            from(#00cc00), to(#008000));
                                            }
                                        #reset{
                                            width: 50%;
                                            display: table-cell;
                                        }
                                            #button_reset{
                                                font-size: 125%;
                                                height:50px;
                                                width:300px;
                                                outline:0;
                                                border:none;/*初期設定の灰色ボーダーを消す*/
                                                border-radius:5px; /*角丸指定*/
                                                color:#fff; /*文字色を白に*/
                                                /*background-color:#008000; /*ボタンの色*/
                                                box-shadow:#008000; /*ぼかしの指定*/
                                                /*ボタンをグラデーションさせる (webkit)
                                                left top,left bottom =上fromから下toに*/
                                                background: -webkit-gradient(linear,
                                                            left top, left bottom,
                                                            from(#00cc00), to(#008000));
                                            }
    </style>
</head>
<body>
    <div id="h1border">
        <h1>
            <div id="h1word">お問い合わせフォーム</div>
        </h1>
    </div>
            <?php
            //エラーメッセージがあるときだけ出現させる
            if(count($err_msg) > 0){?>
            <div id="errStage">
            <?php
                foreach($err_msg as $msg){
                    echo $msg. "<br>";
                }
            }
            ?>
            </div>
            <form method="POST" id="form1">
                <h2>お客様に関する情報</h2>
                    <!--
                    テキストボックスとかとあわせてテーブル化したい
                    その際、tableではなくdiv要素で囲ったものをcssであとから整形してあげるとよい
                    display:table,table-row,table-cellなど
                    -->
                    <div id="cover">
                        <div id="line">
                            <div id="left">
                                <div id="left_stage">
                                    <div id="left_left">
                                        <label for="familyname">姓</label>
                                    </div>
                                    <div id="required">
                                        <div id="required_font">
                                            必須
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="right">
                                <input type="text" name="familyname" id="familyname" value="<?php if(isset($_POST["familyname"])){echo $_POST["familyname"];} ?>" placeholder="例：猪股">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <div id="left_stage">
                                    <div id="left_left">
                                        <label for="firstname">名</label>
                                    </div>
                                    <div id="required">
                                        <div id="required_font">
                                            必須
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="right">
                                <input type="text" name="firstname" id="firstname" value="<?php if(isset($_POST["firstname"])){echo $_POST["firstname"];} ?>" placeholder="例：秋良">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <div id="left_stage">
                                    <div id="left_left">
                                        性別
                                    </div>
                                    <div id="required">
                                        <div id="required_font">
                                            必須
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="right">
                                <label><input type="radio" name="sex" value="0" <?php if(isset($_POST["sex"])){if($_POST["sex"]==="0"){echo "checked";}}?>>男性</label>
                                <label><input type="radio" name="sex" value="1" <?php if(isset($_POST["sex"])){if($_POST["sex"]==="1"){echo "checked";}}?>>女性</label>
                                <label><input type="radio" name="sex" value="2" <?php if(isset($_POST["sex"])){if($_POST["sex"]==="2"){echo "checked";}}?>>性別不明</label>
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="from">住所</label>
                            </div>
                            <div id="right">
                                <input type="text" name="from" id="from" value="<?php if(isset($_POST["from"])){echo $_POST["from"];} ?>" placeholder="例：千葉県">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="tel1">電話番号</label>
                            </div>
                            <div id="right">
                                <input type="text" name="tel1" style="width:50px;" id="tel1" value="<?php if(isset($_POST["tel1"])){echo $_POST["tel1"];} ?>" placeholder="例：080">
                                -<input type="text" name="tel2" style="width:50px;" value="<?php if(isset($_POST["tel2"])){echo $_POST["tel2"];} ?>" placeholder="0808">
                                -<input type="text" name="tel3" style="width:50px;" value="<?php if(isset($_POST["tel3"])){echo $_POST["tel3"];} ?>" placeholder="8080">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="mail">メールアドレス</label>
                            </div>
                            <div id="right">
                                <input type="text" name="mail" id="mail" value="<?php if(isset($_POST["mail"])){echo $_POST["mail"];} ?>" placeholder="例：abcdefg123">
                                @<input type="text" name="mail2" value="<?php if(isset($_POST["mail2"])){echo $_POST["mail2"];} ?>" placeholder="gmail.com">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                当社をどこで知りましたか？
                            </div>
                            <div id="right">
                                <div id="right_stage">
                                    <div id="right_stage_top">
                                        <label><input type="checkbox" name="knew[0]" value="0" <?php if(isset($_POST["knew"][0])){if($_POST["knew"][0]==="0"){echo "checked";}}?>>ニュース</label>
                                        <label><input type="checkbox" name="knew[1]" value="1" <?php if(isset($_POST["knew"][1])){if($_POST["knew"][1]==="1"){echo "checked";}}?>>学校</label>
                                        <label><input type="checkbox" name="knew[2]" value="2" <?php if(isset($_POST["knew"][2])){if($_POST["knew"][2]==="2"){echo "checked";}}?>>駅の広告</label>
                                        <label><input type="checkbox" name="knew[3]" value="3" <?php if(isset($_POST["knew"][3])){if($_POST["knew"][3]==="3"){echo "checked";}}?>>ＣＭ</label>
                                    </div>
                                    <div id="right_stage_bottom">
                                        <label><input type="checkbox" name="knew[998]" value="998" <?php if(isset($_POST["knew"][998])){if($_POST["knew"][998]==="998"){echo "checked";}}?>>その他</label>
                                        <label><input type="checkbox" name="knew[999]" value="999" <?php if(isset($_POST["knew"][999])){if($_POST["knew"][999]==="999"){echo "checked";}}?>>知らない、覚えていない</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <h2>ご質問</h2>
                    <div id="bottom">
                        <div id="category">
                            <select name="question"　style="word-wrap:normal;"><!--単語の途中で改行せず枠を広げる-->
                                <option value="0" <?php if(isset($selected0)){echo $selected0;}?>>質問のカテゴリを選択してください</option>
                                <option value="1" <?php if(isset($selected1)){echo $selected1;}?>>製品について</option>
                                <option value="2" <?php if(isset($selected2)){echo $selected2;}?>>当社について</option>
                                <option value="3" <?php if(isset($selected3)){echo $selected3;}?>>採用について</option>
                                <option value="4" <?php if(isset($selected4)){echo $selected4;}?>>その他</option>
                            </select>
                        </div>
                        <div id="textarea">
                            <textarea name="comments" id="textarea_area" placeholder="質問内容を入力してください"><?php if(isset($_POST["comments"])){echo $_POST["comments"];} ?></textarea>
                        </div>
                        <!--
                        ↓<button type="submit"></button>を使うとクールなボタンが作れる
                        -->
                        <div id="submit_reset">
                            <div id="submit">
                                <button type="submit" name="post_flg" value="submit" id="button_submit">入力内容を送信する</button>
                            </div>
                            <div id="reset">
                                <!--擬似リセットボタン-->
                                <button type="submit" name="reset_flg" value="reset" id="button_reset">最初から書き直す</button>
                            </div>
                        </div>
                    </div>
            </form>
</body>
</html>

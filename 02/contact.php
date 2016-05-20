<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ</title>
    <style>
        /*
        borderは開発用色枠
        */
        body{
        /*    border: solid 3px #000000;    */
        }
        h1{
            width: 800px;
            margin: 0 auto;
            text-align: center;
        /*    border: solid 3px #7FFF00;    */
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
        #down{
        /*    border: solid 3px #FF00FF;    */
        }
    </style>
</head>
<body>
    <h1>お問い合わせ</h1>
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
                            <label for="familyname">性</label>
                        </div>
                        <div id="right">
                            <input type="text" name="familyname" id="familyname">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            <label for="firstname">名</label>
                        </div>
                        <div id="right">
                            <input type="text" name="firstname" id="firstname">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            性別
                        </div>
                        <div id="right">
                            <label><input type="radio" name="sex" value="0">男性</label>
                            <label><input type="radio" name="sex" value="1">女性</label>
                            <label><input type="radio" name="sex" value="2">性別不明</label>
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            <label for="from">住所</label>
                        </div>
                        <div id="right">
                            <input type="text" name="from" id="from">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            <label for="tel1">電話番号</label>
                        </div>
                        <div id="right">
                            <input type="text" name="tel1" style="width:50px;" id="tel1">
                            -<input type="text" name="tel2" style="width:50px;">
                            -<input type="text" name="tel3" style="width:50px;">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            <label for="mail">メールアドレス</label>
                        </div>
                        <div id="right">
                            <input type="text" name="mail" id="mail">
                            @<input type="text" name="mail2">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            当社をどこで知りましたか？
                        </div>
                        <div id="right">
                            <div id="right_stage">
                                <div id="right_stage_top">
                                    <label><input type="checkbox" name="knew[]" value="0">ニュース</label>
                                    <label><input type="checkbox" name="knew[]" value="1">学校</label>
                                    <label><input type="checkbox" name="knew[]" value="2">駅の広告</label>
                                    <label><input type="checkbox" name="knew[]" value="3">ＣＭ</label>
                                </div>
                                <div id="right_stage_bottom">
                                    <label><input type="checkbox" name="knew[]" value="998">その他</label>
                                    <label><input type="checkbox" name="knew[]" value="999">知らない、覚えていない</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <h2>ご質問</h2>
                <div id="down">
                        <p>
                            <select name="question"　style="word-wrap:normal;">
                                <option value="0" selected>質問のカテゴリを選択してください</option>
                                <option value="1">製品について</option>
                                <option value="2">当社について</option>
                                <option value="3">採用について</option>
                                <option value="4">その他</option>
                            </select>
                        </p>
                        <p>
                            <textarea cols="100" rows="15" name="comments">質問内容を入力してください</textarea>
                        </p>
                        <!--
                        ↓<button type="submit"></button>を使うとクールなボタンが作れる
                        -->
                        <p style="text-align:center;">
                            <input type="submit" name"submit" value="送信" style="width:100px;height:50px;font-size:200%;">
                            <input type="reset" style="width:120px;height:50px;font-size:200%;">
                        </p>
                </div>
        </form>
</body>
</html>

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
            border: solid 3px #000000;
        }
        h1{
            width: 800px;
            margin: 0 auto;
            text-align: center;
            border: solid 3px #7FFF00;
        }
        form{
            margin: 0 auto;
            width: 800px;
            border: solid 3px #DC143C;
        }
        p{
            border: solid 3px #0000CD;
        }
        #cover{
            border: solid 3px #008000;
        }
        #line{
            display: table;
            width: 100%;
            border: solid 3px #C0C0C0;
        }
        #left{
            display: table-cell;
            width: 35%;
            /*float: left;*/

            border: solid 3px #FFD700;
        }
        #right{
            display: table-cell;
            width: 65%;
            /*float: right;*/
            border: solid 3px #F0E68C;
        }
        #down{
            border: solid 3px #FF00FF;
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
                            性
                        </div>
                        <div id="right">
                            <input type="text" name="familyname">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            名
                        </div>
                        <div id="right">
                            <input type="text" name="firstname">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            性別
                        </div>
                        <div id="right">
                            <input type="radio" name="sex" value="0">男性
                            <input type="radio" name="sex" value="1">女性
                            <input type="radio" name="sex" value="2">性別不明
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            住所
                        </div>
                        <div id="right">
                            <input type="text" name="from">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            電話番号
                        </div>
                        <div id="right">
                            <input type="text" name="tel1" style="width:50px;">
                            -<input type="text" name="tel2" style="width:50px;">
                            -<input type="text" name="tel3" style="width:50px;">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            メールアドレス
                        </div>
                        <div id="right">
                            <input type="text" name="mail">
                            @<input type="text" name="mail2">
                        </div>
                    </div>
                    <div id="line">
                        <div id="left">
                            当社をどこで知りましたか？
                        </div>
                        <div id="right">
                            <input type="checkbox" name="knew[]" value="0">ニュース
                            <input type="checkbox" name="knew[]" value="1">学校
                            <input type="checkbox" name="knew[]" value="2">駅の広告
                            <input type="checkbox" name="knew[]" value="3">ＣＭ
                            <input type="checkbox" name="knew[]" value="4">その他
                            <input type="checkbox" name="knew[]" value="5">知らない、覚えていない
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

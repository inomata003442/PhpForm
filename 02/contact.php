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
            border: solid 5px #000000;
        }
        h1{
            width: 800px;
            margin: 0 auto;
            text-align: center;
            border: solid 5px #7FFF00;
        }
        form{
            margin: 0 auto;
            width: 800px;
            border: solid 5px #DC143C;
        }
        p{
            border: solid 5px #0000CD;
        }
        /*使わないのでコメントアウト
        #left{
            float: left;
            border: solid 5px #FFD700;
        }
        #right{
            float: right;
            border: solid 5px #F0E68C;
        }
        */
    </style>
</head>
<body>
    <h1>お問い合わせ</h1>
        <form action="result.php" method="POST">
            <div id="left">
                <h2>お客様に関する情報</h2>
                <!--
                テキストボックスとかとあわせてテーブル化したい
                その際、tableではなくulやdlを使ってcssであとから整形してあげるとよい
                display:table,table-row,table-cellなど
                -->
                <p>性</p>
                <p>名</p>
                <p>性別</p>
                <p>住所</p>
                <p>電話番号</p>
                <p>メールアドレス</p>
                <p>当社をどこで知りましたか？</p>
            </div>
            <div id="right">
                <p><input type="text" name="familyname"></p>
                <p><input type="text" name="firstname"></p>
                <p>
                    <input type="radio" name="sex" value="0">男性
                    <input type="radio" name="sex" value="1">女性
                    <input type="radio" name="sex" value="2">性別不明
                </p>
                <p><input type="text" name="from"></p>
                <p>
                    <input type="text" name="tel1" style="width:50px;">
                    -<input type="text" name="tel2" style="width:50px;">
                    -<input type="text" name="tel3" style="width:50px;">
                </p>
                <p>
                    <input type="text" name="mail">
                    @<input type="text" name="mail2">
                </p>
                <p>
                    <input type="checkbox" name="knew[]" value="0">ニュース
                    <input type="checkbox" name="knew[]" value="1">学校
                    <input type="checkbox" name="knew[]" value="2">駅の広告
                    <input type="checkbox" name="knew[]" value="3">ＣＭ
                    <input type="checkbox" name="knew[]" value="4">その他
                    <input type="checkbox" name="knew[]" value="5">知らない、覚えていない
                </p>
                <p>
                    <!--
                    キーは全部数字で
                    -->
                    <select name="question"　style="word-wrap:normal;">
                        <option value="0" selected>質問のカテゴリを選択してください</option>
                        <option value="1">製品について</option>
                        <option value="2">当社について</option>
                        <option value="3">採用について</option>
                        <option value="4">その他</option>
                    </select>
                </p>
            </div>
            <div id="down">
                <p>
                    <textarea cols="100" rows="15" name="comments">質問内容を入力してください</textarea>
                </p>
                <!--
                ↓<button type="submit"></button>を使うとクールなボタンが作れる
                -->
                <p style="text-align:center;"><input type="submit" name"submit" value="送信" style="width:100px;height:50px;font-size:200%;"></p>
            </div>
        </form>
</body>
</html>

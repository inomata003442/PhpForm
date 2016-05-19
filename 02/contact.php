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
            border: solid 1px #000000;
        }
        h1{
            width: 800px;
            margin: 0 auto;
            text-align: center;
            border: solid 1px #7FFF00;
        }
        form{
            margin: 0 auto;
            width: 800px;
            border: solid 1px #DC143C;
        }
        p{
            border: solid 1px #0000CD;
        }
        #left{
            float: left;
            border: solid 1px #FFD700;
        }
        #right{
            float: right;
            border: solid 1px #F0E68C;
        }
    </style>
</head>
<body>
    <h1>お問い合わせ</h1>
        <form action="result.php" method="POST">
            <div id="left">
                <p>性</p>
                <p>名</p>
                <p>性別</p>
                <p>住所</p>
                <p>電話番号</p>
                <p>メールアドレス</p>
                <p>当社をどこで知りましたか？</p>
            </div>
            <div id="right">
                <p><input type="text" name="familynameInput"></p>
                <p><input type="text" name="firstnameInput"></p>
                <p>
                    <input type="radio" name="sex" value="男性">男
                    <input type="radio" name="sex" value="女性">女
                    <input type="radio" name="sex" value="性別不明">不明
                </p>
                <p><input type="text" name="from"></p>
                <p>
                    <input type="text" name="tel1" style="width:50px;">
                    -<input type="text" name="tel2" style="width:50px;">
                    -<input type="text" name="tel3" style="width:50px;">
                </p>
                <p>
                    @<input type="text" name="mail2">
                    <input type="text" name="mail">
                </p>
                <p>
                    <input type="checkbox" name="knew" value="ニュース">ニュース
                    <input type="checkbox" name="knew" value="学校">学校
                </p>
                <p>
                    <select name="question">
                        <option value="0" selected>質問のカテゴリを選択してください</option>
                        <option value="1">質問１</option>
                    </select>
                </p>
            </div>
            <div id="down">
                <p>
                    <textarea cols="100" rows="15" name="comments">質問内容を入力してください</textarea>
                </p>
                <p style="text-align:center;"><input type="submit" name"submit" value="送信" style="width:100px;height:50px;font-size:200%;"></p>
            </div>
        </form>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <form action="result.php" method="POST">
        <p>性<input type="text" name="familynameInput"></p>
        <p>名<input type="text" name="firstnameInput"></p>
        <p>
            電話番号<input type="text" name="tel1">
            -<input type="text" name="tel2">
            -<input type="text" name="tel3">
        </p>
        <p>
            <select name="prefectures">
                <option value="0" selected>質問のカテゴリを選択してください</option>
                <option value="1">質問１</option>
            </select>
        </p>
        <p>
            メールアドレス<input type="text" name="mail">
            @<input type="text" name="mail2">
        </p>
        <p>
            性別
            <input type="radio" name="sex" value="man">男
            <input type="radio" name="sex" value="woman">女
            <input type="radio" name="sex" value="unknown">不明
        </p>
        <p>
            当社をどこで知りましたか？
            <input type="checkbox" name="knew" value="news">ニュース
            <input type="checkbox" name="knew" value="school">学校
        </p>
        <p>住所<input type="text" name="from"></p>
        <p><input type="submit" name"submit" value="送信"></p>
    </form>
</body>
</html>

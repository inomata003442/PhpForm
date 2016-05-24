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
                                <input type="text" name="familyname" id="familyname" placeholder="例：猪股">
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
                                <input type="text" name="firstname" id="firstname" placeholder="例：秋良">
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
                                <input type="text" name="from" id="from" placeholder="例：千葉県">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="tel1">電話番号</label>
                            </div>
                            <div id="right">
                                <input type="text" name="tel1" style="width:50px;" id="tel1" placeholder="例：080">
                                -<input type="text" name="tel2" style="width:50px;" placeholder="0808">
                                -<input type="text" name="tel3" style="width:50px;" placeholder="8080">
                            </div>
                        </div>
                        <div id="line">
                            <div id="left">
                                <label for="mail">メールアドレス</label>
                            </div>
                            <div id="right">
                                <input type="text" name="mail" id="mail" placeholder="例：abcdefg123">
                                @<input type="text" name="mail2" placeholder="gmail.com">
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
                    <div id="bottom">
                        <div id="category">
                            <select name="question"　style="word-wrap:normal;">
                                <option value="0" selected>質問のカテゴリを選択してください</option>
                                <option value="1">製品について</option>
                                <option value="2">当社について</option>
                                <option value="3">採用について</option>
                                <option value="4">その他</option>
                            </select>
                        </div>
                        <div id="textarea">
                            <textarea name="comments" id="textarea_area" placeholder="質問内容を入力してください"></textarea>
                        </div>
                        <!--
                        ↓<button type="submit"></button>を使うとクールなボタンが作れる
                        -->
                        <div id="submit_reset">
                            <div id="submit">
                                <button type="submit" name"submit" id="button_submit">入力内容を確認する</button>
                            </div>
                            <div id="reset">
                                <button type="reset" id="button_reset">最初から書き直す</button>
                            </div>
                        </div>
                    </div>
            </form>
</body>
</html>

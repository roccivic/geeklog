<?php

/*
 NOTE: you must add the following to your header.thtml to use this file!
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
*/

###############################################################################
# japanese.php
# This is the japanese language page for GeekLog!
# Special thanks to Mischa Polivanov for his work on this project
#
# Copyright (C) 2002 SAKATA Yusuke
# sakata@ecofirm.com
#
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
#
###############################################################################

###############################################################################
# Array Format:
# $LANGXX[YY]:	$LANG - variable name
#		  	XX - file id number
#			YY - phrase id number
###############################################################################

###############################################################################
# USER PHRASES - These are file phrases used in end user scripts
###############################################################################

###############################################################################
# common.php

$LANG01 = array(
	1 => "投稿者は:",
	2 => "続きを読む",
	3 => "コメント数",
	4 => "編集",
	5 => "投票",
	6 => "結果",
	7 => "投票結果",
	8 => "投票人数",
	9 => "管理機能:",
	10 => "承認待ちリスト",
	11 => "記事",
	12 => "ブロック",
	13 => "話題別",
	14 => "リンク",
	15 => "イベント情報",
	16 => "投票スペース",
	17 => "ユーザー",
	18 => "SQL Query",
	19 => "ログアウト",
	20 => "ユーザー情報:",
	21 => "名前",
	22 => "ID",
	23 => "管理レベル",
	24 => "匿名",
	25 => "お返事",
	26 => "コメントは投稿者の責任においてなされるものであり、サイト管理者はなんら責任をおうものではありません。",
	27 => "最新の投稿",
	28 => "削除",
	29 => "コメントはありません",
	30 => "以前の記事",
	31 => "使用できるHTMLタグ:",
	32 => "エラー。登録されていないユーザー名です",
	33 => "エラー。ログファイルに書き込めない",
	34 => "エラー",
	35 => "ログアウト",
	36 => "on",
	37 => "",
	38 => "",
	39 => "Refresh",
	40 => "",
	41 => "",
	42 => "投稿者は:",
	43 => "返事を書く",
	44 => "元の記事",
	45 => "MySQLのエラー番号は、",
	46 => "MySQLのエラーメッセージは、",
	47 => "ユーザー管理",
	48 => "アカウント情報",
	49 => "表示設定",
	50 => "SQL文にエラーがある。",
	51 => "ヘルプ",
	52 => "new",
	53 => "admin",
	54 => "ファイルが開けません",
	55 => "次でエラー：",
	56 => "投票",
	57 => "パスワード",
	58 => "login",
	59 => "アカウントがなければ、<a href=\"{$_CONF['site_url']}/users.php?mode=new\">登録</a>できるよ。",
	60 => "コメントを投稿",
	61 => "アカウントの作成",
	62 => "文字",
	63 => "コメントの設定",
	64 => "記事を友人にメールする",
	65 => "印刷用画面",
	66 => "個人カレンダー",
	67 => "歓迎！ ",
	68 => "ホーム",
	69 => "連絡先",
	70 => "検索",
	71 => "記事を書く",
	72 => "使えるサイト",
	73 => "これまでの投票",
	74 => "カレンダー",
	75 => "複雑な検索",
	76 => "アクセス情報",
	77 => "プラグイン（拡張機能）",
	78 => "これからの予定",
	79 => "new",
	80 => "件の記事（",
	81 => "件の記事（",
	82 => "時間以内）",
	83 => "コメントの数",
	84 => "リンク集",
	85 => "（48 時間以内）",
	86 => "新しいコメントはない。",
	87 => "（最近２週間）",
	88 => "リンクは追加されていない",
	89 => "特に予定はない",
	90 => "ホーム",
	91 => "Created this page in",
	92 => "秒",
	93 => "Copyright",
	94 => "All trademarks and copyrights on this page are owned by their respective owners.",
	95 => "Powered By",
	96 => "Groups",
        97 => "Word List",
	98 => "Plug-ins",
	99 => "記事の件数",
    100 => "新しい記事はありません",
    101 => '個人的な予定',
    102 => '全体の予定'
    103 => 'データベースのバックアップ'
);

###############################################################################
# calendar.php

$LANG02 = array(
	1 => "イベント情報カレンダー",
	2 => "残念ながら、今日はイベントがありません",
	3 => "日時:",
	4 => "場所:",
	5 => "詳細:",
	6 => "イベントの追加",
	7 => "これからの予定",
	8 => '個人カレンダーにこのイベントを追加すると、「個人カレンダー」をユーザー管理メニューから選択することで見ることが出来ます。',
	9 => "個人カレンダーに追加",
	10 => "個人カレンダーから削除",
	11 => "このイベントを{$_USER['username']}の個人カレンダーに追加",
	12 => "イベント",
	13 => "開始",
	14 => "終了"
);

###############################################################################
# comment.php

$LANG03 = array(
	1 => "コメントの投稿",
	2 => "投稿方法",
	3 => "ログアウト",
	4 => "アカウントを作る",
	5 => "ユーザー名",
	6 => "コメントを投稿するためにはログインしてください。アカウントがなければ下のフォームを使って新しいアカウントを作成できます",
	7 => "あなたは",
	8 => " 秒前にコメントしています。投稿と投稿の間は {$CONF["commentspeedlimit"]} 秒以上開けてください",
	9 => "コメント",
	10 => "",
	11 => "コメントの投稿",
	12 => "投稿するためには、名前・メールアドレス・タイトル・コメントをすべて記入してください。",
	13 => "あなたの個人情報",
	14 => "表示テスト",
	15 => "",
	16 => "タイトル",
	17 => "エラーです",
	18 => '注意事項',
	19 => '内容にそった話題で投稿してください',
	20 => '出来るだけ新しい記事を作らずに他の記事にコメントするようにしてください',
	21 => '同じ事を投稿しないようにするために他の人の投稿をよく読んでください',
	22 => '内容が分かるようなタイトルを付けてください',
	23 => 'メールアドレスは「表示されません」',
	24 => '匿名ユーザー'
);

###############################################################################
# users.php

$LANG04 = array(
	1 => "ユーザー情報：",
	2 => "ユーザー名",
	3 => "氏名",
	4 => "パスワード",
	5 => "Email",
	6 => "ホームページ",
	7 => "自己紹介",
	8 => "PGP公開鍵",
	9 => "変更を保存する",
	10 => "最近10件のコメント",
	11 => "コメントはありません",
	12 => "ユーザー設定：",
	13 => "毎晩E-mailで投稿を読む",
	14 => "このパスワードは自動作成されたものですから、パスワードの変更をおすすめします。パスワードは、サイトにログインして、「ユーザー情報」をクリックすると変更できます。",
	15 => ' {$_CONF["site_name"]} で使用するあなたのアカウントが作成されました。このアカウントを使うためには、下記のユーザー名とパスワードでログインしてください。念のため、このメールは保存しておいてください。',
	16 => "アカウント情報",
	17 => "アカウントがありません",
	18 => "このメールアドレスは、有効なアドレスではないようです",
	19 => "ユーザー名かメールアドレスがすでに使われています。",
	20 => "このメールアドレスは、有効なアドレスではないようです",
	21 => "エラー",
	22 => "{$_CONF['site_name']}のアカウントを作成する",
	23 => "{$_CONF['site_name']}にアカウントを作成すると、コメントや記事の投稿など本サイトの機能をフルに使用することが出来ます。アカウントがなければ「匿名」ユーザーとしてしか投稿できません。また、登録されたメールアドレスは絶対に表示されませんのでご安心ください",
	24 => "パスワードは、ここに入力されたメールアドレスに送信されます",
	25 => "パスワードが分からない人はこちら。",
	26 => "ユーザー名を入力して、「パスワード送信」をクリックしてください。新しいパスワードがアカウントに登録されているメールアドレス宛てに送信されます。",
	27 => "アカウントの作成",
	28 => "パスワード送信",
	29 => "ログアウトしました：",
	30 => "ログインしました:",
	31 => "選択した機能は、ログインしていなければ使用できません。",
	32 => "サイン",
	33 => "公開されることはありません",
	34 => "本名",
	35 => "変更後のパスワード",
	36 => "http://から始めてください",
	37 => "あなたのコメントに使用されます。",
	38 => "あなたの紹介です。みんなが読めるように公開されます。",
	39 => "あなたの公開PGP鍵",
	40 => "話題別アイコンを非表示",
	41 => "修正を受け入れる",
	42 => "日付のフォーマット",
	43 => "表示する記事の数",
	44 => "ボックスを表示しない",
	45 => "表示設定：",
	46 => "次のアイテムを除外：",
	47 => "ニュースボックスの設定：",
	48 => "話題",
	49 => "記事にアイコンを非表示",
	50 => "興味がなければチェックをはずしてください",
	51 => "記事だけを表示",
	52 => "初期値は10です",
	53 => "その日の記事を毎晩メールで受け取る。",
	54 => "読みたくない投稿者名と話題をチェックする。",
	55 => "すべてのチェックをはずした場合は、初期値が反映されます。一つでもチェックした場合、初期値は無視されますので、読みたいものを全部チェックするようにしてください。 初期値は太字で表示されている話題です。",
	56 => "投稿者名",
	57 => "表示モード",
	58 => "並べ替え順序",
	59 => "コメントの最大数",
	60 => "コメントの表示方法",
	61 => "新しいものか古いもののどちらが先がいい？",
	62 => "初期値は100です",
	63 => "パスワードをメールで送信しましたので、まもなく届くはずです。メッセージに利用方法が書かれていますので、参考にしてください。" . $CONF_["site_name"] . "を利用してくださってありがとうございます。",
	64 => "コメントの設定：",
	65 => "ログインし直して見てください",
	66 => "タイプミスがあったようです。もう一度ログインしてみてください。パスワードが分からなければ、新しいパスワードを発行しますので、下記のフォームに記入してみてください。",
	67 => "加入期間",
	68 => "認証の保存期間",
	69 => "いったんログインした後、どのぐらい情報を残しておけばいいですか？",
	70 => "{$_CONF['site_name']}の表示と内容を設定",
	71 => "{$_CONF['site_name']}の特徴として、表示される記事のテーマや表示を自由に変えることが出来ることがあります。そのためには、まず、{$_CONF['site_name']}に<a href=\"{$_CONF['site_url']}/users.php?mode=new\">ユーザー登録</a>する必要があります。もし、すでに登録済みならば左のフォームを利用してログインしてください。",
    72 => "テーマ",
    73 => "言語"
);

###############################################################################
# index.php

$LANG05 = array(
	1 => "表示する記事はありません",
	2 => "表示する記事はありません。このテーマに関する投稿がないのか表示設定を絞り過ぎなのかのどちらかでしょうね。",
	3 => " $topic に関するもの",
	4 => "今日の注目記事",
	5 => "次",
	6 => "一つ前"
);

###############################################################################
# links.php

$LANG06 = array(
	1 => "使えるWebページ",
	2 => "表示するリンクはありません",
	3 => "リンクの追加"
);

###############################################################################
# pollbooth.php

$LANG07 = array(
	1 => "投票が登録されました",
	2 => "今の投票が登録されました",
	3 => "投票する",
	4 => "件の投票を募集中",
	5 => "件の投票"
);

###############################################################################
# profiles.php

$LANG08 = array(
	1 => "メッセージを送信する際にエラーが発生しました。もう一度試してください。",
	2 => "メッセージは送信されました",
	3 => "Reply Toに正しいe-mailアドレスを記入していますか？",
	4 => "名前、Reply To, タイトル、内容を記入してください",
	5 => "そんなユーザーはいません",
	6 => "エラーが発生しました",
	7 => "ユーザー情報：",
	8 => "氏名",
	9 => "URL",
	10 => "メールの宛先",
	11 => "あなたの名前:",
	12 => "Reply To:",
	13 => "タイトル:",
	14 => "内容:",
	15 => "HTMLは変換されません",
	16 => "送信",
	17 => "友達に記事を送信する",
	18 => "送信相手",
	19 => "送信先E-mailアドレス",
	20 => "あなたの名前",
	21 => "あなたのE-mailアドレス",
	22 => "すべての項目を記入してください",
	23 => "このメールは、$from さんが{$_CONF['site_url']}の記事で、あなたに知らせたいと思ったため、$fromemail のアドレスから送信されました。これはいわゆる迷惑（SPAM）メールではありませんし、送信に使用されたアドレスを他の目的に使用することもありません。",
	24 => "この記事に関するコメントは次の場所で出来ます。",
	25 => "この機能を使用するためにはログインしてください。",
	26 => "このフォームは対象のユーザーにメールを送るためのものなので、すべての項目を入力してください。",
	27 => "メッセージ",
	28 => "$from さんからのメッセージ: $shortmsg"
        29 => "今日の{$_CONF['site_name']} に関するダイジェストです。宛先：",
        30 => " 今日のニュースレターです。宛先： "

);

###############################################################################
# search.php

$LANG09 = array(
	1 => "複雑な検索",
	2 => "キーワード",
	3 => "話題",
	4 => "すべて",
	5 => "種別",
	6 => "記事の数",
	7 => "コメント数",
	8 => "書いた人",
	9 => "すべて",
	10 => "検索",
	11 => "検索結果",
	12 => "件がマッチ",
	13 => "記事の検索結果：該当なし",
	14 => "今の検索に該当するものはないよ。対象：",
	15 => "キーワードを変えて再検索してみてください",
	16 => "タイトル",
	17 => "日付",
	18 => "書いた人",
	19 => " {$_CONF['site_name']} 全体のすべての記事を検索する",
	20 => "日付",
	21 => "〜",
	22 => "(書式は MM-DD-YYYY)",
	23 => "件がヒット",
	24 => "見つかりました",
	25 => "matches for",
	26 => "items in",
	27 => "seconds",
    28 => '該当する記事・コメントは見つかりませんでした',
    29 => '記事・コメントの検索結果：'
);

###############################################################################
# stats.php

$LANG10 = array(
	1 => "サイトに関する統計",
	2 => "システム全体のアクセス数",
	3 => "記事（コメント）の数",
	4 => "投票（回答数）の数",
	5 => "リンク（クリック）の数",
	6 => "予定の数",
	7 => "もっとも参照数の多かった記事（上位10）",
	8 => "記事のタイトル",
	9 => "数",
	10 => "このサイトには記事が一件もないか、閲覧した人がいないのかどちらかだと思います",
	11 => "もっともコメントの多かった記事（上位10）",
	12 => "コメント数",
	13 => "このサイトには記事が一件もないか、コメントした人がいないのかどちらかだと思います",
	14 => "投票（上位10）",
	15 => "投票に対する回答数は",
	16 => "件",
	17 => "このサイトには投票スペースが一件もないか、投票した人がいないのかのどちらかだと思います",
	18 => "リンク（上位10）",
	19 => "件",
	20 => "数",
	21 => "このサイトにはリンクが一つもないか、リンクをクリックした人が一人もいないのかのどちらかだと思います",
	22 => "友達に紹介された記事（上位10）",
	23 => "送信件数",
	24 => "友達に紹介された記事はないようです"
);

###############################################################################
# article.php

$LANG11 = array(
	1 => "関連情報",
	2 => "友達にメールで教える",
	3 => "印刷用ページ",
	4 => "記事のオプション"
);

###############################################################################
# submit.php

$LANG12 = array(
	1 => " $type を投稿するためにはログインしている必要があります",
	2 => "ログイン",
	3 => "new登録",
	4 => "予定の投稿",
	5 => "リンクの投稿",
	6 => "記事の投稿",
	7 => "ログインが必要です",
	8 => "送る",
	9 => "このサイトに情報を投稿する際には、次のルールを守ってください。<ul><li>必要とされるすべての項目を記入してください。<li>正確・かつ必要十分な情報を提供してください<li>URLsについては特に注意して確認してください</ul>",
	10 => "タイトル",
	11 => "リンク",
	12 => "開始日",
	13 => "終了日",
	14 => "場所",
	15 => "詳細",
	16 => "特記事項（必要であれば）",
	17 => "話題",
	18 => "その他",
	19 => "Read First",
	20 => "話題がありません",
	21 => "\"その他\" を選択した場合は、新しい話題名を記入してください",
	22 => "未記入の項目があります",
	23 => "すべての項目について記入してください。",
	24 => "投稿は受け付けられました",
	25 => "$type に関する投稿は受け付けられました",
	26 => "投稿間隔の制限",
	27 => "ユーザー名",
	28 => "話題",
	29 => "記事",
	30 => "前回、あなたは、",
	31 => "秒前に投稿しています。投稿の間は{$CONF['speedlimit']}秒空けてください。",
	32 => "表示確認",
	33 => "記事の表示確認",
	34 => "ログアウト",
	35 => "HTMLタグは使用できません",
	36 => "投稿モード",
	37 => "{$_CONF['site_name']}にイベントを投稿すると、サイト全体のカレンダーに登録されます。登録されたイベントは各ユーザーが必要に応じて個人的なカレンダーに登録します。つまり、カレンダー機能は、誕生日や記念日などあなたの個人的なスケジュール帳として使われることを想定しているものでは<b>ありません</b>。<br><br>イベントを投稿し、管理者が承認した場合、イベントはサイト全体のカレンダーに表示されてしまいます。",
    38 => "予定の追加。追加先：",
    39 => "全体カレンダー",
    40 => "個人カレンダー",
    41 => "終了日時",
    42 => "開始日時",
    43 => "一日中の予定",
    44 => '住所(1)',
    45 => '住所(2)',
    46 => '都市名',
    47 => '都道府県',
    48 => '郵便番号',
    49 => '予定の種類',
    50 => '予定の種類を編集',
    51 => '場所',
    52 => '削除'
);


###############################################################################
# ADMIN PHRASES - These are file phrases used in end admin scripts
###############################################################################

###############################################################################
# auth.inc.php

$LANG20 = array(
	1 => "管理者権限が必要です",
	2 => "ログインできません。正しく入力してください",
	3 => "パスワードが違います。ユーザー名：",
	4 => "ユーザー名：",
	5 => "パスワード：",
	6 => "管理ツールの使用については、すべてが記録されて、チェックされます。<br>このページは、承認された管理者のみが使用できます。",
	7 => "ログイン"
);

###############################################################################
# block.php

$LANG21 = array(
	1 => "ここを管理する権限がない",
	2 => "このブロックを編集する権限がない",
	3 => "ブロックの編集",
	4 => "",
	5 => "タイトル",
	6 => "トピック",
	7 => "すべて",
	8 => "ブロックのセキュリティレベル",
	9 => "ブロックの順序",
	10 => "ブロックの種類",
	11 => "ポータルブロック",
	12 => "ふつうのブロック",
	13 => "ポータルブロックのオプション",
	14 => "RDF URL",
	15 => "Last RDF Update",
	16 => "ふつうのブロックのオプション",
	17 => "ブロックの中身",
	18 => "ブロックのタイトル・セキュリティレベル・中身を記入してください。",
	19 => "ブロックの管理",
	20 => "タイトル",
	21 => "セキュリティ",
	22 => "種類",
	23 => "順序",
	24 => "話題",
	25 => "ブロックの編集・削除は下記のブロックをクリックする。new作成は上のブロックをクリックする",
	26 => "レイアウト用ブロック",
	27 => "PHPブロック",
	28 => "PHPブロックのオプション",
	29 => "関数",
	30 => "PHPコードを使用したブロックを使う場合、phpblock_（e.g. phpblock_getweather）ではじまるPHPの関数名を上に記入してください。phpblockではじまっていない場合、関数は呼び出されません。これは、悪意を持ったユーザーがサイトに有害な関数を定義することを避けるためです。関数の後の（）は不要です。PHPブロックのコードは、/path/to/geeklog/system/lib-custom.phpに記入しておくと、Geeklogをアップグレードしても使用し続けることが出来ます。",
	31 => "PHPブロックにエラーがあります。$functionが存在しません",
        32 => "エラー。未記入の項目があります",
        33 => "ポータルブロックの.rdfファイルにはURLが記入されている必要があります",
	34 => "PHPブロックにはタイトルと関数名を記入してください",
        35 => "普通のブロックにはタイトルと内容を記入してください",
        36 => "レイアウト用ブロックには内容を記入してください",
        37 => "PHPブロックの関数名が不適切です",
        38 => "PHPブロックの関数名は、'phpblock_' (e.g. phpblock_getweather)ではじまっている必要があります。'phpblock_'は、セキュリティに配慮した結果ですのでご協力ください。",
	39 => "表示場所",
	40 => "左",
	41 => "右",
	42 => "ブロックの表示順序とセキュリティレベルを入力してください",
	43 => "ホームページのみ",
	44 => "アクセスが拒否されました",
	45 => "管理権限のないブロックを編集しようとしました。この行為は記録として残ります。<a href=\"{$_CONF['site_url']}/admin/block.php\">ブロックの編集</a>画面に戻ってください.",
	46 => 'newブロック',
	47 => 'admin',
    48 => 'ブロック名',
    49 => ' (スペースを含まない。名前の重複は認められない)',
    50 => 'ヘルプファイルのURL',
    51 => 'http://を含む',
    52 => '空欄のままにしておくと、このブロックに対するヘルプのアイコンは表示されません'
);

###############################################################################
# event.php

$LANG22 = array(
	1 => "予定の編集",
	2 => "",
	3 => "予定名",
	4 => "関連URL",
	5 => "開始日",
	6 => "終了日",
	7 => "場所",
	8 => "予定の説明",
	9 => "(http://からはじめてください)",
	10 => "すべてのフォームに記入してください。",
	11 => "予定管理",
	12 => "予定の編集・削除は、下の予定名をクリックしてください。新しい予定を作る場合、上の「new予定」をクリックして。",
	13 => "予定名",
	14 => "開始日",
	15 => "終了日",
	16 => "アクセスが拒否されました。",
	17 => "管理権限のない予定を編集しようとしました。この行為は記録として残ります。<a href=\"{$_CONF['site_url']}/admin/event.php\">予定編集画面</a>に戻ってください.",
	18 => 'new予定',
	19 => 'admin'
);

###############################################################################
# link.php

$Lang23 = Array(
	1 => "リンクの編集",
	2 => "",
	3 => "リンク先の名前",
	4 => "リンク先のURL",
	5 => "分類",
	6 => "(http://からはじめてください)",
	7 => "その他",
	8 => "リンクのヒット数",
	9 => "リンクの詳細",
	10 => "リンクの名前、URL、詳細について記入してください",
	11 => "リンクの管理",
	12 => "リンクの編集・削除は、リンク自体をクリックしてください。新しく作成する場合は、上の「new」をクリックしてください",
	13 => "リンク先の名前",
	14 => "リンクの分類",
	15 => "リンク先のURL",
	16 => "アクセスが拒否されました",
	17 => "管理権限のないリンクを編集しようとしました。この行為は記録として残ります。<a href=\"{$_CONF['site_url']}/admin/link.php\">リンク編集画面</a>に戻ってください",
	18 => 'newリンク',
	19 => 'admin',
	20 => '特記事項（もしあれば）'
);

###############################################################################
# story.php

$LANG24 = array(
	1 => "前の記事",
	2 => "後の記事",
	3 => "モード",
	4 => "投稿モード",
	5 => "記事の編集",
	6 => "",
	7 => "書いた人：",
	8 => "",
	9 => "",
	10 => "",
	11 => "",
	12 => "",
	13 => "タイトル",
	14 => "話題",
	15 => "日時",
	16 => "投稿内容",
	17 => "投稿内容（詳細）",
	18 => "閲覧件数",
	19 => "コメント数",
	20 => "",
	21 => "",
	22 => "記事の一覧",
	23 => "記事を削除・編集するには、記事の番号をクリックすること。記事を見るには、記事のタイトルをクリックする。新しい記事を作成する場合は、「new」をクリックすること。",
	24 => "",
	25 => "",
	26 => "記事のプレビュー",
	27 => "",
	28 => "",
	29 => "",
	30 => "",
	31 => "書いた人、タイトル、最初の部分を記入してください",
	32 => "注目記事",
	33 => "注目記事は一つだけ指定できます",
	34 => "ドラフト",
	35 => "はい",
	36 => "いいえ",
	37 => "More by",
	38 => "More from",
	39 => "件紹介されました",
	40 => "アクセスが拒否されました。",
	41 => "管理権限のない記事を編集しようとしました。この行為は記録されます。下記の記事は読みとり専用です。読み終わったら、<a href=\"{$_CONF['site_url']}/admin/story.php\">記事の編集画面</a>に戻ってください。",
	42 => "管理権限のない記事を編集しようとしました。この行為は記録されます。<a href=\"{$_CONF['site_url']}/admin/story.php\">記事の編集画面</a>に戻ってください",
	43 => '新しい記事',
	44 => 'admin',
	45 => '件のアクセス'
    46 => '<b>注意:</b> 記事の日付を将来の日付に変更すると、その日まで表示されません。また、RDFヘッドラインにも反映されませんし、検索やサイト情報にも反映されないことに注意してください。'
);

###############################################################################
# poll.php

$LANG25 = array(
	1 => "モード",
	2 => "",
	3 => "投票コーナーが作成された",
	4 => "投票コーナー（ $qid ）が保存された",
	5 => "投票コーナーの編集",
	6 => "投票コーナーの ID",
	7 => "(スペースを含まないこと)",
	8 => "ホームページに表示する",
	9 => "質問すること",
	10 => "回答 ／ 投票数",
	11 => "投票コーナー( $qid )における選択肢にエラーがありました",
	12 => "投票コーナー( $qid )における質問項目にエラーがありました",
	13 => "投票コーナーの作成",
	14 => "",
	15 => "",
	16 => "",
	17 => "",
	18 => "投票コーナー一覧",
	19 => "投票コーナーを削除・編集するためには、投票コーナーをクリックしてください。newに作成する場合は、「新規コーナー」をクリックしてください。",
	20 => "投票者",
	21 => "アクセスが拒否されました。",
	22 => "管理権限のない記事を編集しようとしました。この行為は記録されます。<a href=\"{$_CONF['site_url']}/admin/poll.php\">投票の管理画面</a>に戻ってください",
	23 => '新規投票コーナー',
	24 => 'admin',
	25 => 'はい',
	26 => 'いいえ'
);

###############################################################################
# topic.php

$LANG27 = array(
	1 => "話題の編集",
	2 => "話題用ID",
	3 => "話題名",
	4 => "話題用画像",
	5 => "(スペースを含まない)",
	6 => "話題を削除すると、関連した記事・ブロックもすべて削除されます",
	7 => "話題用IDと話題名を記入してください",
	8 => "話題の設定",
	9 => "話題を編集したり削除する場合は話題自体をクリックする。新しい話題を作成する場合は、左の「新しい話題」ボタンをクリックして。",
	10=> "並べる順序",
	11 => "１ページあたりの記事数",
	12 => "アクセスが拒否されました",
	13 => "管理権限のない話題を編集しようとしました。この行為は記録されます。<a href=\"{$_CONF["site_url"]}/admin/topic.php\">話題の編集画面</a>に戻ってください",
	14 => "並べ替え方法",
	15 => "アルファベット順",
	16 => "初期値は：",
	17 => "新規話題",
	18 => "admin"
);

###############################################################################
# user.php

$LANG28 = array(
	1 => "ユーザーの編集",
	2 => "ユーザーID",
	3 => "ユーザー名",
	4 => "氏名",
	5 => "パスワード",
	6 => "セキュリティレベル",
	7 => "メールアドレス",
	8 => "ホームページ",
	9 => "(スペースを含まない)",
	10 => "ユーザー名・氏名・セキュリティレベル・メールアドレスのすべてを記入してください。",
	11 => "ユーザー管理",
	12 => "ユーザー情報の変更、削除はユーザー名をクリックしてください。新規ユーザーを作成する場合は、左の「新規ユーザー」ボタンをクリックして。",
	13 => "セキュリティ",
	14 => "登録日",
	15 => '新規ユーザー',
	16 => 'admin',
	17 => 'パスワード変更',
	18 => '中止',
	19 => '削除',
	20 => 'save',
	18 => '中止',
	19 => '削除',
	20 => 'save',
    21 => '登録しようとしたユーザー名はすでに存在します',
    22 => 'エラー'
);


###############################################################################
# moderation.php

$LANG29 = array(
	1 => "承認",
	2 => "削除",
	3 => "編集",
	34 => "Command and Control",
	35 => "記事の投稿",
	36 => "リンクの投稿",
	37 => "予定の投稿",
	38 => "登録",
	39 => "承認するべき投稿はないです"
);

###############################################################################
# calendar.php

$LANG30 = array(
	1 => "日",
	2 => "月",
	3 => "火",
	4 => "水",
	5 => "木",
	6 => "金",
	7 => "土",
	8 => "予定の追加",
	9 => "Geeklog関連予定",
	10 => "個人用予定：",
	11 => "全体のカレンダー",
	12 => "個人用カレンダー",
	13 => "１月",
	14 => "２月",
	15 => "３月",
	16 => "４月",
	17 => "５月",
	18 => "６月",
	19 => "７月",
	20 => "８月",
	21 => "９月",
	22 => "１０月",
	23 => "１１月",
	24 => "１２月",
	25 => "戻る： ",
    26 => "前日",
    27 => "週",
    28 => "個人用カレンダー：",
    29 => "公開用カレンダー",
    30 => "予定の削除",
    31 => "追加",
    32 => "予定",
    33 => "日付",
    34 => "時間",
    35 => "追加（簡易版）",
    36 => "登録",
    37 => "残念ながら、本サイトでは個人用カレンダーは利用できません",
    38 => "個人用予定の編集"
);

###############################################################################
# admin/mail.php
$LANG31 = array(
 	1 => "Mail",
 	2 => "From",
 	3 => "Reply-to",
 	4 => "タイトル",
 	5 => "内容",
 	6 => "送信先：",
 	7 => "すべてのユーザー",
 	8 => "管理者",
	9 => "オプション",
	10 => "HTML",
 	11 => "緊急！",
 	12 => "送る",
 	13 => "入力し直す",
 	14 => "ユーザー設定を無視して送る",
 	15 => "送信中にエラーが発生。宛先： ",
	16 => "メッセージは無事送信されました。宛先：",
	17 => "<a href=" . $_CONF["site_url"] . "/admin/mail.php>他のメッセージを送る</a>"
);


###############################################################################
# confirmation and error messages

$MESSAGE = array (
	1 => "パスワードをメールで送信しましたので確認してください。利用方法はメールを参照してください。それから、" . $_CONF["site_name"] . "を使ってくれてありがとう。",
	2 => "{$_CONF["site_name"]} に記事を投稿してくれてありがとう。記事はスタッフに送られたので、承認されればすぐにサイトに掲載されます。",
	3 => "{$_CONF["site_name"]} におすすめサイトを投稿してくれてありがとう。リンクはスタッフに送られたので、承認されればすぐに<a href={$_CONF["site_url"]}/links.php>リンク</a> に掲載されます。",
	4 => "{$_CONF["site_name"]} に予定を投稿してくれてありがとう。予定はスタッフに送られたので、承認されればすぐに<a href={$_CONF["site_url"]}/calendar.php>カレンダー</a> に掲載されます。",
	5 => "アカウント情報の変更を反映しました。",
	6 => "表示設定を保存しました。",
	7 => "コメントの設定の変更を反映しました。",
	8 => "ログアウトが完了しました。",
	9 => "記事の変更を反映しました。",
	10 => "記事の削除が完了しました。",
	11 => "ブロックの変更を反映しました。",
	12 => "ブロックの削除が完了しました。",
	13 => "話題の変更を反映しました。",
	14 => "話題とそれに含まれるすべての記事とブロックを削除しました",
	15 => "リンクの変更を反映しました。",
	16 => "リンクを削除しました。",
	17 => "予定の変更を反映しました。",
	18 => "予定を削除しました。",
	19 => "投票の変更を反映しました。",
	20 => "投票を削除しました。",
	21 => "新規ユーザーを作成しました。",
	22 => "ユーザーを削除しました。",
	23 => "予定ＩＤがなかったため、予定を追加できませんでした。",
	24 => "予定の変更をカレンダーに反映させました。",
	25 => "ログインしないと個人用カレンダーを表示できません。",
	26 => "予定情報を個人カレンダーから削除しました。",
	27 => "メッセージを送信しました。",
	28 => "プラグインを保存しました",
	29 => "残念ながら、本サイトでは個人用カレンダーは使用できません",
	30 => "アクセスが拒否されました",
	31 => "残念ながら、話題管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	32 => "残念ながら、記事管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	33 => "残念ながら、ブロック編集用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	34 => "残念ながら、リンク管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	35 => "残念ながら、予定管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	36 => "残念ながら、投票管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	37 => "残念ながら、ユーザー管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	38 => "残念ながら、プラグイン管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	39 => "残念ながら、メール管理用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
	40 => "システムからのメッセージ",
    41 => "残念ながら、文字置換用画面へのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。",
    42 => "単語が登録されました。",
	43 => "単語を削除しました",
    44 => 'プラグインをインストールしました',
    45 => 'プラグインを削除しました'
    46 => "残念ながら、データベースバックアップユーティリティへのアクセス権がありません。管理権限のない場所へのアクセスはすべて記録されます。"
);

// for plugins.php

$LANG32 = array (
	1 => "プラグインをインストールすることで、GeekLogや最悪の場合はシステムに悪影響を与えることがあります。悪影響を避けるために、GeekLogのホームページでは様々なOSでテストしたプラグインのみを掲載していますので、<a href=\"http://geeklog.sourceforge.net\" target=\"_blank\">Geeklogのホームページ</a>からのみダウンロードするようにしてください。プラグインのインストールに際しては、システムのコマンドを実行する必要がありますので、特に公式サイト以外からダウンロードしたばあいは、この点に注意してください。また、これらの注意は、プラグインのインストールの成功やプラグインによる影響について我々がなんらかの保証をするものではありません。プラグインのインストール方法は、それぞれのプラグインに同梱されています。",
	2 => "プラグインのインストールに関する注意書き",
	3 => "プラグインのインストールフォーム",
	4 => "プラグインのファイル",
	5 => "プラグインの一覧",
	6 => "注意：プラグインはすでにインストールされています。",
	7 => "インストールしようとしているプラグインはすでに存在しています。再インストールする前にこれを削除してください。",
	8 => "プラグインの互換性チェックに失敗しました。",
	9 => "このプラグインは新しいバージョンのGeekLogが必要です。<a href=http://www.geeklog.org>Geeklog</a>をアップグレードするか、新しいバージョンのプラグインを入手してください。",
	10 => "<br><b>プラグインはインストールされていません</b><br><br>",
	11 => "プラグインを修正・削除するにはプラグインの番号をクリックしてください。プラグインの説明を見る場合はプラグインの名前をクリックすると、Webサイトに接続します。新規にインストールまたはアップグレードする場合は、上の「新規」をクリックしてください。",
	12 => 'plugineditor()にプラグイン名が渡されませんでした',
	13 => 'プラグインの編集',
	14 => '新規',
	15 => 'admin',
	16 => 'プラグイン名',
	17 => 'プラグインのバージョン',
	18 => 'Geeklogのバージョン',
	19 => '有効',
	20 => 'Yes',
	21 => 'No',
	22 => 'インストール',
    23 => 'save',
    24 => '中止',
    25 => '削除',
    26 => 'プラグイン名',
    27 => 'プラグインのホームページ',
    28 => 'プラグインのバージョン',
    29 => 'Geeklogのバージョン',
    30 => 'プラグインを削除しますか？',
    31 => 'このプラグインを削除しますが、よろしいですか？削除する場合は関連するファイルやデータがすべて削除されます。削除する場合は「削除」ボタンをもう一度押してください。'
);

$LANG_ACCESS = array(
	access => "アクセス",
    ownerroot => "所有者/Root",
    group => "Group",
    readonly => "読みとり専用",
	accessrights => "アクセス権",
	owner => "所有者",
	grantgrouplabel => "上記のグループに編集権限を与える",
	permmsg => "参考: メンバーはログインしているメンバーすべて、匿名は、ログインせずにサイトをしているすべての人を意味します。",
	securitygroups => "Security Groups（セキュリティグループ）",
	editrootmsg => "管理権限を持っていても、rootユーザーにならずにrootユーザーを編集することは出来ません。それ以外のユーザーの編集は可能です。権限なしにrootユーザーを編集しようとした場合、記録に残ることに注意してください。<a href=\"{$_CONF["site_url"]}/admin/users.php\">ユーザー管理ページ</a>に戻る",
	securitygroupsmsg => "このユーザーが所属するグループにチェックしてください。",
	groupeditor => "グループの編集",
	description => "詳細",
	name => "名前",
 	rights => "権限",
	missingfields => "未記入の項目",
	missingfieldsmsg => "名前と詳細を記入してください。",
	groupmanager => "グループマネージャー",
	newgroupmsg => "グループを編集・削除する場合、グループ名をクリックしてください。グループを作成する場合は上の「新規」をクリックしてください。ただし、「core（中核）グループ）」はシステムで使用するため削除できません。",
	groupname => "グループ名",
	coregroup => "Core Group",
	yes => "Yes",
	no => "No",
	corerightsdescr => "このグループは、{$_CONF["site_name"]}の中核グループです。そのため、本グループの権限を編集することは出来ないため、下記の権限リストは読みとり専用となっています。",
	groupmsg => "本サイトのSecurity Groups（セキュリティグループ）は階層的になっています。本グループを下記のグループに追加する場合、そのグループの持つ権限と同じ権限を本グループにも与えることになります。可能であれば、本グループに権限を与える場合、下記のグループの権限を継承させることが望ましい方法です。本グループに個別に権限を与える場合は、下記の「権限」部分から様々な機能に関する権限を選択することが出来ます。本グループを追加する場合は、下記のグループの横にあるボックスをチェックするだけです。",
	coregroupmsg => "本グループは{$_CONF["site_name"]}のcore（中核）グループです。そのため、本グループの所属するグループは編集できません。下記のリストは読みとり専用となっています。",
	rightsdescr => "グループのアクセス権は下記の権限で与えられているか、グループが所属するグループ全体の権限を継承しています。下記のうち、チェックのない権限は、本グループの所属するグループから継承した権限です。チェックのある権限は本グループ自体が直接与えられている権限です。",
	lock => "Lock",
	members => "メンバー",
	anonymous => "匿名",
	permissions => "権限の種類",
	permissionskey => "R = 閲覧, E = 編集, （編集権は閲覧権を含む）",
	edit => "編集",
	none => "なし",
	accessdenied => "アクセスが拒否されました",
	storydenialmsg => "この記事を閲覧する権限がありません。これは、あなたが{$_CONF["site_name"]}のメンバーがないためだと思われます。{$_CONF["site_name"]} の<a href=users.php?mode=new> メンバーになること</a>で閲覧が可能になります。",
	eventdenialmsg => "この予定を閲覧する権限がありません。これは、あなたが{$_CONF["site_name"]}のメンバーがないためだと思われます。{$_CONF["site_name"]} の<a href=users.php?mode=new> メンバーになること</a>で閲覧が可能になります。",
	nogroupsforcoregroup => "このグループは他のどのグループにも所属していません",
	grouphasnorights => "このグループは管理権限を一切所有していません。",
	newgroup => 'new',
	adminhome => 'admin',
	save => 'save',
	cancel => '中止',
	canteditroot => 'Rootグループに所属していないのにRootグループを編集しようとしたため、アクセスは拒否されました。このエラーがおかしいと思った場合はシステムの管理者に連絡してください。'	
);

#admin/word.php
$LANG_WORDS = array(
    editor => "単語置き換えの編集",
    wordid => "単語ID",
    intro => "単語を編集・削除する場合は単語をクリックしてください。単語を追加する場合は左の「new」ボタンを押してください。",
    wordmanager => "単語管理",
    word => "単語",
    replacmentword => "置き換える言葉",
    newword => "new"
);
?>

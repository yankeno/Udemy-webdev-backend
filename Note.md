# 040_PHP 基礎 Part2

## 1000\_スコープについて理解しよう

- グローバルスコープ
- ローカルスコープ
- スーパーグローバル

# 050_PHP 基礎 Part3

## 0600\_名前空間について学ぼう

- 名前空間に登録された関数を呼び出すときは先頭に "\\" をつける

```php
require_once 'lib.php';
$price = \lib\with_tax(100);
```

- use を使用して外部のリソースを読み込む場合は先頭の "\\" は必要ない

```php
use function lib\with_tax;
$price = with_tax(100);
```

- 先頭の "\\" はグローバル空間を表している  
  -> namespace の指定がない空間

## 0700\_クラス

- アクセス修飾子を省略した function は public になる

```php
// public function と同じ
function hello()
{
  // process
}
```

## 0900\_クラスと Static メソッド

- static メソッド内では $this が使用できない  
  -> $this を使用するかどうかでまず static で定義するかを切り分ける

# 060_PHP と WEB

- GET メソッドではブラウザキャッシュが使用できる
- POST メソッドではブラウザキャッシュが使用できない

##　 リクエストの値を保持する方法

- Cookie
- Session
- DB

## 0700_Cookie を使ってみよう

- Cookie はドメインごとに保持されるため、他のドメインのサーバからは内容を知ることができない

# 070_Apache の基礎

## Apache とは

- 正式名称は Apache HTTP Server
- モジュール単位で機能を追加・削除可能

## Apache の設定ファイル

- Apache の設定は httpd.conf or .htaccess で行う
- 大文字小文字は区別しない
- セクションによって適用範囲を指定
- `ディレクティブ`によって設定値を変更

## コンテキストの種類

- サーバ設定ファイル  
  httpd.conf, srm.conf, access.conf etc.
- バーチャルホスト  
  <VirtualHost> 内で使用可能
- ディレクトリ  
  \<Directory>, \<Location>, \<Files> etc.
- .htaccess  
  .htaccess ファイル内で使用可能

# 110_PHP と DB

## 0300\_例外処理（Part1）

- エラーを捕捉した場合 catch に処理が移る

## 0300\_例外処理（Part2）

- エラーを捕捉しない場合、上位の関数にエラーが伝わっていく  
  -> try catch で捕捉されるまで伝わっていく

## 0600\_プリペアードステートメント

- Prepared ステートメントは以下の 3 段階で実行される
  - Prepare
  - Bind
  - Execute
- メリット
  - プリコンパイルされたクエリがキャッシュされることで同じクエリが実行される際のオーバーヘッドが少ない
  - SQL インジェクション対策になる

# 参考 URL

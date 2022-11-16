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

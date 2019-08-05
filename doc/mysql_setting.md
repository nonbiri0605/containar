# mysqlの設定
## mysqlのバージョン
mysql5.7

## パスワード
password

## 初回db create文
create database grape_db default character set utf8;

## その他
接続はIPで、127.0.0.1だとエラーになった。

```
SQLSTATE[HY000] [2002] Connection refused [MySQL]
```

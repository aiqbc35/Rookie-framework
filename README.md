# Rookie-framework

## 隐藏入口文件
##### 1、apache
```ssh
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ index.php/$1 [QSA,PT,L]
</IfModule>
```
##### 2、nginx
在nginx.conf中插入:
```ssh
location / { 
   if (!-e $request_filename) {
   rewrite  ^(.*)$  /index.php?s=$1  last;
   break;
    }
 }
```
#### 说明
- store 文件夹需要给0777权限
---------------------
** 2018-3-23更新 **   
- 新增monolog日志类
=======


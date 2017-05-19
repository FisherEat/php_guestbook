---
title: 简约留言本: 丰富UI界面
---

[TOC]

#### 页面功能描述
> - 留言列表 index.php
> - 发布留言 add.php
>   - 发布留言处理页面 add_deal.php
> - 编辑留言 show.php
>   - 编辑留言处理页面 update_deal.php
> - 删除留言 delete.php

#### dev_log 开发目录的文件说明：

> - guestbook_static  这是静态页面
> - 数据库文件 : guestbook-2.sql 

#### 启动项目

> 1. 该项目使用PHP-5.6.28 ，因为使用了mysql-connect, 因此需要用到php5.6，高版本的PHP不支持
>
> 2. 导入 guestbook.sql 数据库文件
>
>    ```shell
>    $ mysql -uroot -p 
>    > mysql
>    > source guestbook.sql
>    ```
>
> 3. 启动php和nginx
>
>    ```shell
>    $ sudo php-fpm 
>    $ sudo nginx 		
>    ```
>
> 4. over


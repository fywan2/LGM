<?php
return array(

	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  's53',       // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '123321',    // 密码
    'DB_PORT'               =>  '3306',      // 端口
    'DB_PREFIX'             =>  '',          // 数据库表前缀

    'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          =>  '}>',            // 

    'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
      //配置上传目录
    'TMPL_PARSE_STRING' =>array(
        '__UPLOAD__' => __ROOT__.'/Uploads',
    ),
);
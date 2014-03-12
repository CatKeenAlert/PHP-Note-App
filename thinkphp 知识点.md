## thinkphp 知识点

0. 开启调试模式
在index.php中 define('APP_DEBUG', True);

1. 配置文件config.php
C()方法：读取配置节点的值

M()方法：读取数据库

U()方法：生成Url地址

I('uid')方法：自动从url中获取uid,类似于$_GET['uid'],$_POST['uid']
注意post会产生xss脚本攻击




2. 打印数组函数
dump(); //打印格式化的数组，易于阅读
var_dump(); //打印原始数组，不易于阅读

print_r($_SERVER); //直接打印不易于人阅读，前面加一句echo "<pre>";就好很多
自定义函数p，实现上面这2句的功能：
放在common目录下名字为function.php的文件中。

$_SERVER:服务器变量集合


forum-advanced
==============

^_^ 基于Yii2高级版目录结构的forum!
高级版本将前后台目录彻底分离包括 资源文件 视图 布局 以及控制器 配置文件

forum-advanced 目录结构说明
```
namespace admin/xx
admin               系统后台目录
    assets/         包含控制后台页面资源(js, css)加载的类
    config/         包含系统后台的配置文件
    controllers/    包含系统后台的控制器
    models/         包含系统后台的模型类
    runtime/        包含系统后台程序运行时生成的文件
    views/          包含后台视图以及布局
    web/            后台入口目录(admin/web/index.php为后台入口)

namespace common/xx
common              系统公共目录包含系统前后台公用的配置模型
    config/         公共配置文件目录
    mails/          我理解为这个目录应该是用来存放EDM模板的
    models/         前后台公用的模型基本所有的AR模型都应该放在这个目录

console             控制台目录(用于在Cli下运行Yii)
    config/         控制台配置目录
    controllers/    包含控制台控制器(命令)的目录
    migrations/     包含数据迁移文件的目录
    models/         包含控制台特定模型类的目录
    runtime/        包含控制台运行时生成的文件目录

fronted             系统前台目录
    assets/         包含前台资源的目录
    config/         包含前台配置的目录
    controllers/    包含前台控制器的目录
    models/         包含前台模型的目录
    runtime/        包含前台运行时生成文件的目录
    views/          包含前台视图布局文件的目录
    web/            前台入口目录
    widgets         包含前台挂件的目录

personal            暂定为个人中心目录
```


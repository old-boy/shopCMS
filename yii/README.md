商城系统目录：
-------------------

      assets/                   项目资源目录,css / js / 插件以及依赖
        AdminAsset              管理端资源
        DefaultAsset            默认公共资源
        WebAsset                Web 端资源
      common/                   公共方法目录
        components              组件公共方法
            BaseWebController   web端控制器
        services                公共服务方法
            ConstantMapService  定义项目中用到的固定显示的值
            StaticService       为项目中 js/css 添加版本号，清除缓存
            UrlService          定义项目中各个端 url 指向
            UtilService         定义项目中常用的公共方法
      config/                   项目db, 路由,微信固定的key,modules 配置项等
      controllers/              项目最外层显示公共模块等
      mail/                     没有用到
      models/                   操作数据库的方法
      modules/                  三端页面与控制器，重要
        admin                   管理端 布局与控制器
            controllers
            views
            AdminModule
        web                     web 端布局与控制器
            controllers
            views
            WebModule
        weixin                  微信 端控制器
            controllers
            AdminModule
      vendor/                   第三方包文件
      views/                    网站布局
        default                 网站首页
        common                  网站公共方法
        layouts                 网站公共布局
            web                 
                footer          网站 footer
                top_nav         网站 nav
            main                网站公用资源 css / js等
      web/                      项目静态资源，字体文件,ajax,插件等



商城系统相关技术
------------

php5.0 + mysql 5.5 + Yii2.0
bootstrap + jquery + ajax
微信支付
微信模板消息
微信二维码
微信授权登录
微信JS-SDK
短信验证




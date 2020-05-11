# Host: localhost  (Version: 5.5.53)
# Date: 2020-05-11 15:25:42
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "cmf_admin_menu"
#

DROP TABLE IF EXISTS `cmf_admin_menu`;
CREATE TABLE `cmf_admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父菜单id',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '菜单类型;1:有界面可访问菜单,2:无界面可访问菜单,0:只作为菜单',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态;1:显示,0:不显示',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `app` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '应用名',
  `controller` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '控制器名',
  `action` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '操作名称',
  `param` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '额外参数',
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单名称',
  `icon` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '菜单图标',
  `remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `parent_id` (`parent_id`),
  KEY `controller` (`controller`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COMMENT='后台菜单表';

#
# Data for table "cmf_admin_menu"
#

INSERT INTO `cmf_admin_menu` VALUES (1,0,0,1,20,'admin','Plugin','default','','插件中心','cloud','插件中心'),(2,1,1,1,10000,'admin','Hook','index','','钩子管理','','钩子管理'),(3,2,1,0,10000,'admin','Hook','plugins','','钩子插件管理','','钩子插件管理'),(4,2,2,0,10000,'admin','Hook','pluginListOrder','','钩子插件排序','','钩子插件排序'),(5,2,1,0,10000,'admin','Hook','sync','','同步钩子','','同步钩子'),(6,0,0,1,0,'admin','Setting','default','','设置','cogs','系统设置入口'),(7,6,1,1,50,'admin','Link','index','','友情链接','','友情链接管理'),(8,7,1,0,10000,'admin','Link','add','','添加友情链接','','添加友情链接'),(9,7,2,0,10000,'admin','Link','addPost','','添加友情链接提交保存','','添加友情链接提交保存'),(10,7,1,0,10000,'admin','Link','edit','','编辑友情链接','','编辑友情链接'),(11,7,2,0,10000,'admin','Link','editPost','','编辑友情链接提交保存','','编辑友情链接提交保存'),(12,7,2,0,10000,'admin','Link','delete','','删除友情链接','','删除友情链接'),(13,7,2,0,10000,'admin','Link','listOrder','','友情链接排序','','友情链接排序'),(14,7,2,0,10000,'admin','Link','toggle','','友情链接显示隐藏','','友情链接显示隐藏'),(15,6,1,1,10,'admin','Mailer','index','','邮箱配置','','邮箱配置'),(16,15,2,0,10000,'admin','Mailer','indexPost','','邮箱配置提交保存','','邮箱配置提交保存'),(17,15,1,0,10000,'admin','Mailer','template','','邮件模板','','邮件模板'),(18,15,2,0,10000,'admin','Mailer','templatePost','','邮件模板提交','','邮件模板提交'),(19,15,1,0,10000,'admin','Mailer','test','','邮件发送测试','','邮件发送测试'),(20,6,1,0,10000,'admin','Menu','index','','后台菜单','','后台菜单管理'),(21,20,1,0,10000,'admin','Menu','lists','','所有菜单','','后台所有菜单列表'),(22,20,1,0,10000,'admin','Menu','add','','后台菜单添加','','后台菜单添加'),(23,20,2,0,10000,'admin','Menu','addPost','','后台菜单添加提交保存','','后台菜单添加提交保存'),(24,20,1,0,10000,'admin','Menu','edit','','后台菜单编辑','','后台菜单编辑'),(25,20,2,0,10000,'admin','Menu','editPost','','后台菜单编辑提交保存','','后台菜单编辑提交保存'),(26,20,2,0,10000,'admin','Menu','delete','','后台菜单删除','','后台菜单删除'),(27,20,2,0,10000,'admin','Menu','listOrder','','后台菜单排序','','后台菜单排序'),(28,20,1,0,10000,'admin','Menu','getActions','','导入新后台菜单','','导入新后台菜单'),(29,6,1,1,30,'admin','Nav','index','','导航管理','','导航管理'),(30,29,1,0,10000,'admin','Nav','add','','添加导航','','添加导航'),(31,29,2,0,10000,'admin','Nav','addPost','','添加导航提交保存','','添加导航提交保存'),(32,29,1,0,10000,'admin','Nav','edit','','编辑导航','','编辑导航'),(33,29,2,0,10000,'admin','Nav','editPost','','编辑导航提交保存','','编辑导航提交保存'),(34,29,2,0,10000,'admin','Nav','delete','','删除导航','','删除导航'),(35,29,1,0,10000,'admin','NavMenu','index','','导航菜单','','导航菜单'),(36,35,1,0,10000,'admin','NavMenu','add','','添加导航菜单','','添加导航菜单'),(37,35,2,0,10000,'admin','NavMenu','addPost','','添加导航菜单提交保存','','添加导航菜单提交保存'),(38,35,1,0,10000,'admin','NavMenu','edit','','编辑导航菜单','','编辑导航菜单'),(39,35,2,0,10000,'admin','NavMenu','editPost','','编辑导航菜单提交保存','','编辑导航菜单提交保存'),(40,35,2,0,10000,'admin','NavMenu','delete','','删除导航菜单','','删除导航菜单'),(41,35,2,0,10000,'admin','NavMenu','listOrder','','导航菜单排序','','导航菜单排序'),(42,1,1,1,10000,'admin','Plugin','index','','插件列表','','插件列表'),(43,42,2,0,10000,'admin','Plugin','toggle','','插件启用禁用','','插件启用禁用'),(44,42,1,0,10000,'admin','Plugin','setting','','插件设置','','插件设置'),(45,42,2,0,10000,'admin','Plugin','settingPost','','插件设置提交','','插件设置提交'),(46,42,2,0,10000,'admin','Plugin','install','','插件安装','','插件安装'),(47,42,2,0,10000,'admin','Plugin','update','','插件更新','','插件更新'),(48,42,2,0,10000,'admin','Plugin','uninstall','','卸载插件','','卸载插件'),(49,110,0,1,10000,'admin','User','default','','管理组','','管理组'),(50,49,1,1,10000,'admin','Rbac','index','','角色管理','','角色管理'),(51,50,1,0,10000,'admin','Rbac','roleAdd','','添加角色','','添加角色'),(52,50,2,0,10000,'admin','Rbac','roleAddPost','','添加角色提交','','添加角色提交'),(53,50,1,0,10000,'admin','Rbac','roleEdit','','编辑角色','','编辑角色'),(54,50,2,0,10000,'admin','Rbac','roleEditPost','','编辑角色提交','','编辑角色提交'),(55,50,2,0,10000,'admin','Rbac','roleDelete','','删除角色','','删除角色'),(56,50,1,0,10000,'admin','Rbac','authorize','','设置角色权限','','设置角色权限'),(57,50,2,0,10000,'admin','Rbac','authorizePost','','角色授权提交','','角色授权提交'),(58,0,1,0,10000,'admin','RecycleBin','index','','回收站','','回收站'),(59,58,2,0,10000,'admin','RecycleBin','restore','','回收站还原','','回收站还原'),(60,58,2,0,10000,'admin','RecycleBin','delete','','回收站彻底删除','','回收站彻底删除'),(61,6,1,1,10000,'admin','Route','index','','URL美化','','URL规则管理'),(62,61,1,0,10000,'admin','Route','add','','添加路由规则','','添加路由规则'),(63,61,2,0,10000,'admin','Route','addPost','','添加路由规则提交','','添加路由规则提交'),(64,61,1,0,10000,'admin','Route','edit','','路由规则编辑','','路由规则编辑'),(65,61,2,0,10000,'admin','Route','editPost','','路由规则编辑提交','','路由规则编辑提交'),(66,61,2,0,10000,'admin','Route','delete','','路由规则删除','','路由规则删除'),(67,61,2,0,10000,'admin','Route','ban','','路由规则禁用','','路由规则禁用'),(68,61,2,0,10000,'admin','Route','open','','路由规则启用','','路由规则启用'),(69,61,2,0,10000,'admin','Route','listOrder','','路由规则排序','','路由规则排序'),(70,61,1,0,10000,'admin','Route','select','','选择URL','','选择URL'),(71,6,1,1,0,'admin','Setting','site','','网站信息','','网站信息'),(72,71,2,0,10000,'admin','Setting','sitePost','','网站信息设置提交','','网站信息设置提交'),(73,6,1,0,10000,'admin','Setting','password','','密码修改','','密码修改'),(74,73,2,0,10000,'admin','Setting','passwordPost','','密码修改提交','','密码修改提交'),(75,6,1,1,10000,'admin','Setting','upload','','上传设置','','上传设置'),(76,75,2,0,10000,'admin','Setting','uploadPost','','上传设置提交','','上传设置提交'),(77,6,1,0,10000,'admin','Setting','clearCache','','清除缓存','','清除缓存'),(78,6,1,1,40,'admin','Slide','index','','幻灯片管理','','幻灯片管理'),(79,78,1,0,10000,'admin','Slide','add','','添加幻灯片','','添加幻灯片'),(80,78,2,0,10000,'admin','Slide','addPost','','添加幻灯片提交','','添加幻灯片提交'),(81,78,1,0,10000,'admin','Slide','edit','','编辑幻灯片','','编辑幻灯片'),(82,78,2,0,10000,'admin','Slide','editPost','','编辑幻灯片提交','','编辑幻灯片提交'),(83,78,2,0,10000,'admin','Slide','delete','','删除幻灯片','','删除幻灯片'),(84,78,1,0,10000,'admin','SlideItem','index','','幻灯片页面列表','','幻灯片页面列表'),(85,84,1,0,10000,'admin','SlideItem','add','','幻灯片页面添加','','幻灯片页面添加'),(86,84,2,0,10000,'admin','SlideItem','addPost','','幻灯片页面添加提交','','幻灯片页面添加提交'),(87,84,1,0,10000,'admin','SlideItem','edit','','幻灯片页面编辑','','幻灯片页面编辑'),(88,84,2,0,10000,'admin','SlideItem','editPost','','幻灯片页面编辑提交','','幻灯片页面编辑提交'),(89,84,2,0,10000,'admin','SlideItem','delete','','幻灯片页面删除','','幻灯片页面删除'),(90,84,2,0,10000,'admin','SlideItem','ban','','幻灯片页面隐藏','','幻灯片页面隐藏'),(91,84,2,0,10000,'admin','SlideItem','cancelBan','','幻灯片页面显示','','幻灯片页面显示'),(92,84,2,0,10000,'admin','SlideItem','listOrder','','幻灯片页面排序','','幻灯片页面排序'),(93,6,1,1,10000,'admin','Storage','index','','文件存储','','文件存储'),(94,93,2,0,10000,'admin','Storage','settingPost','','文件存储设置提交','','文件存储设置提交'),(95,6,1,1,20,'admin','Theme','index','','模板管理','','模板管理'),(96,95,1,0,10000,'admin','Theme','install','','安装模板','','安装模板'),(97,95,2,0,10000,'admin','Theme','uninstall','','卸载模板','','卸载模板'),(98,95,2,0,10000,'admin','Theme','installTheme','','模板安装','','模板安装'),(99,95,2,0,10000,'admin','Theme','update','','模板更新','','模板更新'),(100,95,2,0,10000,'admin','Theme','active','','启用模板','','启用模板'),(101,95,1,0,10000,'admin','Theme','files','','模板文件列表','','启用模板'),(102,95,1,0,10000,'admin','Theme','fileSetting','','模板文件设置','','模板文件设置'),(103,95,1,0,10000,'admin','Theme','fileArrayData','','模板文件数组数据列表','','模板文件数组数据列表'),(104,95,2,0,10000,'admin','Theme','fileArrayDataEdit','','模板文件数组数据添加编辑','','模板文件数组数据添加编辑'),(105,95,2,0,10000,'admin','Theme','fileArrayDataEditPost','','模板文件数组数据添加编辑提交保存','','模板文件数组数据添加编辑提交保存'),(106,95,2,0,10000,'admin','Theme','fileArrayDataDelete','','模板文件数组数据删除','','模板文件数组数据删除'),(107,95,2,0,10000,'admin','Theme','settingPost','','模板文件编辑提交保存','','模板文件编辑提交保存'),(108,95,1,0,10000,'admin','Theme','dataSource','','模板文件设置数据源','','模板文件设置数据源'),(109,95,1,0,10000,'admin','Theme','design','','模板设计','','模板设计'),(110,0,0,1,10,'user','AdminIndex','default','','用户管理','group','用户管理'),(111,49,1,1,10000,'admin','User','index','','管理员','','管理员管理'),(112,111,1,0,10000,'admin','User','add','','管理员添加','','管理员添加'),(113,111,2,0,10000,'admin','User','addPost','','管理员添加提交','','管理员添加提交'),(114,111,1,0,10000,'admin','User','edit','','管理员编辑','','管理员编辑'),(115,111,2,0,10000,'admin','User','editPost','','管理员编辑提交','','管理员编辑提交'),(116,111,1,0,10000,'admin','User','userInfo','','个人信息','','管理员个人信息修改'),(117,111,2,0,10000,'admin','User','userInfoPost','','管理员个人信息修改提交','','管理员个人信息修改提交'),(118,111,2,0,10000,'admin','User','delete','','管理员删除','','管理员删除'),(119,111,2,0,10000,'admin','User','ban','','停用管理员','','停用管理员'),(120,111,2,0,10000,'admin','User','cancelBan','','启用管理员','','启用管理员'),(121,0,0,1,30,'portal','AdminIndex','default','','门户管理','th','门户管理'),(122,121,1,1,10000,'portal','AdminArticle','index','','文章管理','','文章列表'),(123,122,1,0,10000,'portal','AdminArticle','add','','添加文章','','添加文章'),(124,122,2,0,10000,'portal','AdminArticle','addPost','','添加文章提交','','添加文章提交'),(125,122,1,0,10000,'portal','AdminArticle','edit','','编辑文章','','编辑文章'),(126,122,2,0,10000,'portal','AdminArticle','editPost','','编辑文章提交','','编辑文章提交'),(127,122,2,0,10000,'portal','AdminArticle','delete','','文章删除','','文章删除'),(128,122,2,0,10000,'portal','AdminArticle','publish','','文章发布','','文章发布'),(129,122,2,0,10000,'portal','AdminArticle','top','','文章置顶','','文章置顶'),(130,122,2,0,10000,'portal','AdminArticle','recommend','','文章推荐','','文章推荐'),(131,122,2,0,10000,'portal','AdminArticle','listOrder','','文章排序','','文章排序'),(132,121,1,1,10000,'portal','AdminCategory','index','','分类管理','','文章分类列表'),(133,132,1,0,10000,'portal','AdminCategory','add','','添加文章分类','','添加文章分类'),(134,132,2,0,10000,'portal','AdminCategory','addPost','','添加文章分类提交','','添加文章分类提交'),(135,132,1,0,10000,'portal','AdminCategory','edit','','编辑文章分类','','编辑文章分类'),(136,132,2,0,10000,'portal','AdminCategory','editPost','','编辑文章分类提交','','编辑文章分类提交'),(137,132,1,0,10000,'portal','AdminCategory','select','','文章分类选择对话框','','文章分类选择对话框'),(138,132,2,0,10000,'portal','AdminCategory','listOrder','','文章分类排序','','文章分类排序'),(139,132,2,0,10000,'portal','AdminCategory','delete','','删除文章分类','','删除文章分类'),(140,121,1,1,10000,'portal','AdminPage','index','','页面管理','','页面管理'),(141,140,1,0,10000,'portal','AdminPage','add','','添加页面','','添加页面'),(142,140,2,0,10000,'portal','AdminPage','addPost','','添加页面提交','','添加页面提交'),(143,140,1,0,10000,'portal','AdminPage','edit','','编辑页面','','编辑页面'),(144,140,2,0,10000,'portal','AdminPage','editPost','','编辑页面提交','','编辑页面提交'),(145,140,2,0,10000,'portal','AdminPage','delete','','删除页面','','删除页面'),(146,121,1,1,10000,'portal','AdminTag','index','','文章标签','','文章标签'),(147,146,1,0,10000,'portal','AdminTag','add','','添加文章标签','','添加文章标签'),(148,146,2,0,10000,'portal','AdminTag','addPost','','添加文章标签提交','','添加文章标签提交'),(149,146,2,0,10000,'portal','AdminTag','upStatus','','更新标签状态','','更新标签状态'),(150,146,2,0,10000,'portal','AdminTag','delete','','删除文章标签','','删除文章标签'),(151,0,1,0,10000,'user','AdminAsset','index','','资源管理','file','资源管理列表'),(152,151,2,0,10000,'user','AdminAsset','delete','','删除文件','','删除文件'),(153,110,0,1,10000,'user','AdminIndex','default1','','用户组','','用户组'),(154,153,1,1,10000,'user','AdminIndex','index','','本站用户','','本站用户'),(155,154,2,0,10000,'user','AdminIndex','ban','','本站用户拉黑','','本站用户拉黑'),(156,154,2,0,10000,'user','AdminIndex','cancelBan','','本站用户启用','','本站用户启用'),(157,153,1,1,10000,'user','AdminOauth','index','','第三方用户','','第三方用户'),(158,157,2,0,10000,'user','AdminOauth','delete','','删除第三方用户绑定','','删除第三方用户绑定'),(159,6,1,1,10000,'user','AdminUserAction','index','','用户操作管理','','用户操作管理'),(160,159,1,0,10000,'user','AdminUserAction','edit','','编辑用户操作','','编辑用户操作'),(161,159,2,0,10000,'user','AdminUserAction','editPost','','编辑用户操作提交','','编辑用户操作提交'),(162,159,1,0,10000,'user','AdminUserAction','sync','','同步用户操作','','同步用户操作');

#
# Structure for table "cmf_asset"
#

DROP TABLE IF EXISTS `cmf_asset`;
CREATE TABLE `cmf_asset` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `file_size` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文件大小,单位B',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上传时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:可用,0:不可用',
  `download_times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '下载次数',
  `file_key` varchar(64) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '文件惟一码',
  `filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '文件名',
  `file_path` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '文件路径,相对于upload目录,可以为url',
  `file_md5` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '文件md5值',
  `file_sha1` varchar(40) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `suffix` varchar(10) NOT NULL DEFAULT '' COMMENT '文件后缀名,不包括点',
  `more` text COMMENT '其它详细信息,JSON格式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT='资源表';

#
# Data for table "cmf_asset"
#

INSERT INTO `cmf_asset` VALUES (1,1,157925,1589018498,1,0,'835fa936b1fc4d121c193e6dc2ba488d6a57c780c8cbd0e8d07f45596a306672','1b4a-iteyfww6757610.jpg','default/20200509/faa906209f52cec94adacb280bcbc8b6.jpg','835fa936b1fc4d121c193e6dc2ba488d','33d91708c65418ea3bbee967357f1f69e4602b06','jpg',NULL),(2,1,28638,1589019094,1,0,'2350f0d81f2f432a5bc49c13beacaf82292d44a66444d61f64f3f8b41023989b','728c-iteyfww6698480.jpg','default/20200509/8021adeca6b8bd79d000cc322012a9ed.jpg','2350f0d81f2f432a5bc49c13beacaf82','4ad06e0eee002c72b9a30ae5e005580e8dd9c58e','jpg',NULL),(3,1,324419,1589019982,1,0,'53c437113175717c8d2ceab3fb060091e0a15bb29d62bab04ca516351e2ed9b6','ae26-itmiwry1316995.png','default/20200509/155d8fb01f7bcc5de1aa4dae03cffc13.png','53c437113175717c8d2ceab3fb060091','e1aeadb8c56c126c29429d6fc052c4b13e02ea66','png',NULL);

#
# Structure for table "cmf_auth_access"
#

DROP TABLE IF EXISTS `cmf_auth_access`;
CREATE TABLE `cmf_auth_access` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL COMMENT '角色',
  `rule_name` varchar(100) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识,全小写',
  `type` varchar(30) NOT NULL DEFAULT '' COMMENT '权限规则分类,请加应用前缀,如admin_',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `rule_name` (`rule_name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限授权表';

#
# Data for table "cmf_auth_access"
#


#
# Structure for table "cmf_auth_rule"
#

DROP TABLE IF EXISTS `cmf_auth_rule`;
CREATE TABLE `cmf_auth_rule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `app` varchar(40) NOT NULL DEFAULT '' COMMENT '规则所属app',
  `type` varchar(30) NOT NULL DEFAULT '' COMMENT '权限规则分类，请加应用前缀,如admin_',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识,全小写',
  `param` varchar(100) NOT NULL DEFAULT '' COMMENT '额外url参数',
  `title` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '规则描述',
  `condition` varchar(200) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`) USING BTREE,
  KEY `module` (`app`,`status`,`type`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8mb4 COMMENT='权限规则表';

#
# Data for table "cmf_auth_rule"
#

INSERT INTO `cmf_auth_rule` VALUES (1,1,'admin','admin_url','admin/Hook/index','','钩子管理',''),(2,1,'admin','admin_url','admin/Hook/plugins','','钩子插件管理',''),(3,1,'admin','admin_url','admin/Hook/pluginListOrder','','钩子插件排序',''),(4,1,'admin','admin_url','admin/Hook/sync','','同步钩子',''),(5,1,'admin','admin_url','admin/Link/index','','友情链接',''),(6,1,'admin','admin_url','admin/Link/add','','添加友情链接',''),(7,1,'admin','admin_url','admin/Link/addPost','','添加友情链接提交保存',''),(8,1,'admin','admin_url','admin/Link/edit','','编辑友情链接',''),(9,1,'admin','admin_url','admin/Link/editPost','','编辑友情链接提交保存',''),(10,1,'admin','admin_url','admin/Link/delete','','删除友情链接',''),(11,1,'admin','admin_url','admin/Link/listOrder','','友情链接排序',''),(12,1,'admin','admin_url','admin/Link/toggle','','友情链接显示隐藏',''),(13,1,'admin','admin_url','admin/Mailer/index','','邮箱配置',''),(14,1,'admin','admin_url','admin/Mailer/indexPost','','邮箱配置提交保存',''),(15,1,'admin','admin_url','admin/Mailer/template','','邮件模板',''),(16,1,'admin','admin_url','admin/Mailer/templatePost','','邮件模板提交',''),(17,1,'admin','admin_url','admin/Mailer/test','','邮件发送测试',''),(18,1,'admin','admin_url','admin/Menu/index','','后台菜单',''),(19,1,'admin','admin_url','admin/Menu/lists','','所有菜单',''),(20,1,'admin','admin_url','admin/Menu/add','','后台菜单添加',''),(21,1,'admin','admin_url','admin/Menu/addPost','','后台菜单添加提交保存',''),(22,1,'admin','admin_url','admin/Menu/edit','','后台菜单编辑',''),(23,1,'admin','admin_url','admin/Menu/editPost','','后台菜单编辑提交保存',''),(24,1,'admin','admin_url','admin/Menu/delete','','后台菜单删除',''),(25,1,'admin','admin_url','admin/Menu/listOrder','','后台菜单排序',''),(26,1,'admin','admin_url','admin/Menu/getActions','','导入新后台菜单',''),(27,1,'admin','admin_url','admin/Nav/index','','导航管理',''),(28,1,'admin','admin_url','admin/Nav/add','','添加导航',''),(29,1,'admin','admin_url','admin/Nav/addPost','','添加导航提交保存',''),(30,1,'admin','admin_url','admin/Nav/edit','','编辑导航',''),(31,1,'admin','admin_url','admin/Nav/editPost','','编辑导航提交保存',''),(32,1,'admin','admin_url','admin/Nav/delete','','删除导航',''),(33,1,'admin','admin_url','admin/NavMenu/index','','导航菜单',''),(34,1,'admin','admin_url','admin/NavMenu/add','','添加导航菜单',''),(35,1,'admin','admin_url','admin/NavMenu/addPost','','添加导航菜单提交保存',''),(36,1,'admin','admin_url','admin/NavMenu/edit','','编辑导航菜单',''),(37,1,'admin','admin_url','admin/NavMenu/editPost','','编辑导航菜单提交保存',''),(38,1,'admin','admin_url','admin/NavMenu/delete','','删除导航菜单',''),(39,1,'admin','admin_url','admin/NavMenu/listOrder','','导航菜单排序',''),(40,1,'admin','admin_url','admin/Plugin/default','','插件中心',''),(41,1,'admin','admin_url','admin/Plugin/index','','插件列表',''),(42,1,'admin','admin_url','admin/Plugin/toggle','','插件启用禁用',''),(43,1,'admin','admin_url','admin/Plugin/setting','','插件设置',''),(44,1,'admin','admin_url','admin/Plugin/settingPost','','插件设置提交',''),(45,1,'admin','admin_url','admin/Plugin/install','','插件安装',''),(46,1,'admin','admin_url','admin/Plugin/update','','插件更新',''),(47,1,'admin','admin_url','admin/Plugin/uninstall','','卸载插件',''),(48,1,'admin','admin_url','admin/Rbac/index','','角色管理',''),(49,1,'admin','admin_url','admin/Rbac/roleAdd','','添加角色',''),(50,1,'admin','admin_url','admin/Rbac/roleAddPost','','添加角色提交',''),(51,1,'admin','admin_url','admin/Rbac/roleEdit','','编辑角色',''),(52,1,'admin','admin_url','admin/Rbac/roleEditPost','','编辑角色提交',''),(53,1,'admin','admin_url','admin/Rbac/roleDelete','','删除角色',''),(54,1,'admin','admin_url','admin/Rbac/authorize','','设置角色权限',''),(55,1,'admin','admin_url','admin/Rbac/authorizePost','','角色授权提交',''),(56,1,'admin','admin_url','admin/RecycleBin/index','','回收站',''),(57,1,'admin','admin_url','admin/RecycleBin/restore','','回收站还原',''),(58,1,'admin','admin_url','admin/RecycleBin/delete','','回收站彻底删除',''),(59,1,'admin','admin_url','admin/Route/index','','URL美化',''),(60,1,'admin','admin_url','admin/Route/add','','添加路由规则',''),(61,1,'admin','admin_url','admin/Route/addPost','','添加路由规则提交',''),(62,1,'admin','admin_url','admin/Route/edit','','路由规则编辑',''),(63,1,'admin','admin_url','admin/Route/editPost','','路由规则编辑提交',''),(64,1,'admin','admin_url','admin/Route/delete','','路由规则删除',''),(65,1,'admin','admin_url','admin/Route/ban','','路由规则禁用',''),(66,1,'admin','admin_url','admin/Route/open','','路由规则启用',''),(67,1,'admin','admin_url','admin/Route/listOrder','','路由规则排序',''),(68,1,'admin','admin_url','admin/Route/select','','选择URL',''),(69,1,'admin','admin_url','admin/Setting/default','','设置',''),(70,1,'admin','admin_url','admin/Setting/site','','网站信息',''),(71,1,'admin','admin_url','admin/Setting/sitePost','','网站信息设置提交',''),(72,1,'admin','admin_url','admin/Setting/password','','密码修改',''),(73,1,'admin','admin_url','admin/Setting/passwordPost','','密码修改提交',''),(74,1,'admin','admin_url','admin/Setting/upload','','上传设置',''),(75,1,'admin','admin_url','admin/Setting/uploadPost','','上传设置提交',''),(76,1,'admin','admin_url','admin/Setting/clearCache','','清除缓存',''),(77,1,'admin','admin_url','admin/Slide/index','','幻灯片管理',''),(78,1,'admin','admin_url','admin/Slide/add','','添加幻灯片',''),(79,1,'admin','admin_url','admin/Slide/addPost','','添加幻灯片提交',''),(80,1,'admin','admin_url','admin/Slide/edit','','编辑幻灯片',''),(81,1,'admin','admin_url','admin/Slide/editPost','','编辑幻灯片提交',''),(82,1,'admin','admin_url','admin/Slide/delete','','删除幻灯片',''),(83,1,'admin','admin_url','admin/SlideItem/index','','幻灯片页面列表',''),(84,1,'admin','admin_url','admin/SlideItem/add','','幻灯片页面添加',''),(85,1,'admin','admin_url','admin/SlideItem/addPost','','幻灯片页面添加提交',''),(86,1,'admin','admin_url','admin/SlideItem/edit','','幻灯片页面编辑',''),(87,1,'admin','admin_url','admin/SlideItem/editPost','','幻灯片页面编辑提交',''),(88,1,'admin','admin_url','admin/SlideItem/delete','','幻灯片页面删除',''),(89,1,'admin','admin_url','admin/SlideItem/ban','','幻灯片页面隐藏',''),(90,1,'admin','admin_url','admin/SlideItem/cancelBan','','幻灯片页面显示',''),(91,1,'admin','admin_url','admin/SlideItem/listOrder','','幻灯片页面排序',''),(92,1,'admin','admin_url','admin/Storage/index','','文件存储',''),(93,1,'admin','admin_url','admin/Storage/settingPost','','文件存储设置提交',''),(94,1,'admin','admin_url','admin/Theme/index','','模板管理',''),(95,1,'admin','admin_url','admin/Theme/install','','安装模板',''),(96,1,'admin','admin_url','admin/Theme/uninstall','','卸载模板',''),(97,1,'admin','admin_url','admin/Theme/installTheme','','模板安装',''),(98,1,'admin','admin_url','admin/Theme/update','','模板更新',''),(99,1,'admin','admin_url','admin/Theme/active','','启用模板',''),(100,1,'admin','admin_url','admin/Theme/files','','模板文件列表',''),(101,1,'admin','admin_url','admin/Theme/fileSetting','','模板文件设置',''),(102,1,'admin','admin_url','admin/Theme/fileArrayData','','模板文件数组数据列表',''),(103,1,'admin','admin_url','admin/Theme/fileArrayDataEdit','','模板文件数组数据添加编辑',''),(104,1,'admin','admin_url','admin/Theme/fileArrayDataEditPost','','模板文件数组数据添加编辑提交保存',''),(105,1,'admin','admin_url','admin/Theme/fileArrayDataDelete','','模板文件数组数据删除',''),(106,1,'admin','admin_url','admin/Theme/settingPost','','模板文件编辑提交保存',''),(107,1,'admin','admin_url','admin/Theme/dataSource','','模板文件设置数据源',''),(108,1,'admin','admin_url','admin/Theme/design','','模板设计',''),(109,1,'admin','admin_url','admin/User/default','','管理组',''),(110,1,'admin','admin_url','admin/User/index','','管理员',''),(111,1,'admin','admin_url','admin/User/add','','管理员添加',''),(112,1,'admin','admin_url','admin/User/addPost','','管理员添加提交',''),(113,1,'admin','admin_url','admin/User/edit','','管理员编辑',''),(114,1,'admin','admin_url','admin/User/editPost','','管理员编辑提交',''),(115,1,'admin','admin_url','admin/User/userInfo','','个人信息',''),(116,1,'admin','admin_url','admin/User/userInfoPost','','管理员个人信息修改提交',''),(117,1,'admin','admin_url','admin/User/delete','','管理员删除',''),(118,1,'admin','admin_url','admin/User/ban','','停用管理员',''),(119,1,'admin','admin_url','admin/User/cancelBan','','启用管理员',''),(120,1,'portal','admin_url','portal/AdminArticle/index','','文章管理',''),(121,1,'portal','admin_url','portal/AdminArticle/add','','添加文章',''),(122,1,'portal','admin_url','portal/AdminArticle/addPost','','添加文章提交',''),(123,1,'portal','admin_url','portal/AdminArticle/edit','','编辑文章',''),(124,1,'portal','admin_url','portal/AdminArticle/editPost','','编辑文章提交',''),(125,1,'portal','admin_url','portal/AdminArticle/delete','','文章删除',''),(126,1,'portal','admin_url','portal/AdminArticle/publish','','文章发布',''),(127,1,'portal','admin_url','portal/AdminArticle/top','','文章置顶',''),(128,1,'portal','admin_url','portal/AdminArticle/recommend','','文章推荐',''),(129,1,'portal','admin_url','portal/AdminArticle/listOrder','','文章排序',''),(130,1,'portal','admin_url','portal/AdminCategory/index','','分类管理',''),(131,1,'portal','admin_url','portal/AdminCategory/add','','添加文章分类',''),(132,1,'portal','admin_url','portal/AdminCategory/addPost','','添加文章分类提交',''),(133,1,'portal','admin_url','portal/AdminCategory/edit','','编辑文章分类',''),(134,1,'portal','admin_url','portal/AdminCategory/editPost','','编辑文章分类提交',''),(135,1,'portal','admin_url','portal/AdminCategory/select','','文章分类选择对话框',''),(136,1,'portal','admin_url','portal/AdminCategory/listOrder','','文章分类排序',''),(137,1,'portal','admin_url','portal/AdminCategory/delete','','删除文章分类',''),(138,1,'portal','admin_url','portal/AdminIndex/default','','门户管理',''),(139,1,'portal','admin_url','portal/AdminPage/index','','页面管理',''),(140,1,'portal','admin_url','portal/AdminPage/add','','添加页面',''),(141,1,'portal','admin_url','portal/AdminPage/addPost','','添加页面提交',''),(142,1,'portal','admin_url','portal/AdminPage/edit','','编辑页面',''),(143,1,'portal','admin_url','portal/AdminPage/editPost','','编辑页面提交',''),(144,1,'portal','admin_url','portal/AdminPage/delete','','删除页面',''),(145,1,'portal','admin_url','portal/AdminTag/index','','文章标签',''),(146,1,'portal','admin_url','portal/AdminTag/add','','添加文章标签',''),(147,1,'portal','admin_url','portal/AdminTag/addPost','','添加文章标签提交',''),(148,1,'portal','admin_url','portal/AdminTag/upStatus','','更新标签状态',''),(149,1,'portal','admin_url','portal/AdminTag/delete','','删除文章标签',''),(150,1,'user','admin_url','user/AdminAsset/index','','资源管理',''),(151,1,'user','admin_url','user/AdminAsset/delete','','删除文件',''),(152,1,'user','admin_url','user/AdminIndex/default','','用户管理',''),(153,1,'user','admin_url','user/AdminIndex/default1','','用户组',''),(154,1,'user','admin_url','user/AdminIndex/index','','本站用户',''),(155,1,'user','admin_url','user/AdminIndex/ban','','本站用户拉黑',''),(156,1,'user','admin_url','user/AdminIndex/cancelBan','','本站用户启用',''),(157,1,'user','admin_url','user/AdminOauth/index','','第三方用户',''),(158,1,'user','admin_url','user/AdminOauth/delete','','删除第三方用户绑定',''),(159,1,'user','admin_url','user/AdminUserAction/index','','用户操作管理',''),(160,1,'user','admin_url','user/AdminUserAction/edit','','编辑用户操作',''),(161,1,'user','admin_url','user/AdminUserAction/editPost','','编辑用户操作提交',''),(162,1,'user','admin_url','user/AdminUserAction/sync','','同步用户操作','');

#
# Structure for table "cmf_comment"
#

DROP TABLE IF EXISTS `cmf_comment`;
CREATE TABLE `cmf_comment` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '被回复的评论id',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发表评论的用户id',
  `to_user_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '被评论的用户id',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论内容 id',
  `like_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点赞数',
  `dislike_count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '不喜欢数',
  `floor` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '楼层数',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '评论时间',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:已审核,0:未审核',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '评论类型；1实名评论',
  `table_name` varchar(64) NOT NULL DEFAULT '' COMMENT '评论内容所在表，不带表前缀',
  `full_name` varchar(50) NOT NULL DEFAULT '' COMMENT '评论者昵称',
  `email` varchar(255) NOT NULL DEFAULT '' COMMENT '评论者邮箱',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '层级关系',
  `url` text COMMENT '原文地址',
  `content` text CHARACTER SET utf8mb4 COMMENT '评论内容',
  `more` text CHARACTER SET utf8mb4 COMMENT '扩展属性',
  PRIMARY KEY (`id`),
  KEY `table_id_status` (`table_name`,`object_id`,`status`),
  KEY `object_id` (`object_id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `parent_id` (`parent_id`) USING BTREE,
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='评论表';

#
# Data for table "cmf_comment"
#


#
# Structure for table "cmf_hook"
#

DROP TABLE IF EXISTS `cmf_hook`;
CREATE TABLE `cmf_hook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '钩子类型(1:系统钩子;2:应用钩子;3:模板钩子;4:后台模板钩子)',
  `once` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否只允许一个插件运行(0:多个;1:一个)',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子名称',
  `hook` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子',
  `app` varchar(15) NOT NULL DEFAULT '' COMMENT '应用名(只有应用钩子才用)',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COMMENT='系统钩子表';

#
# Data for table "cmf_hook"
#

INSERT INTO `cmf_hook` VALUES (1,1,0,'应用初始化','app_init','cmf','应用初始化'),(2,1,0,'应用开始','app_begin','cmf','应用开始'),(3,1,0,'模块初始化','module_init','cmf','模块初始化'),(4,1,0,'控制器开始','action_begin','cmf','控制器开始'),(5,1,0,'视图输出过滤','view_filter','cmf','视图输出过滤'),(6,1,0,'应用结束','app_end','cmf','应用结束'),(7,1,0,'日志write方法','log_write','cmf','日志write方法'),(8,1,0,'输出结束','response_end','cmf','输出结束'),(9,1,0,'后台控制器初始化','admin_init','cmf','后台控制器初始化'),(10,1,0,'前台控制器初始化','home_init','cmf','前台控制器初始化'),(11,1,1,'发送手机验证码','send_mobile_verification_code','cmf','发送手机验证码'),(12,3,0,'模板 body标签开始','body_start','','模板 body标签开始'),(13,3,0,'模板 head标签结束前','before_head_end','','模板 head标签结束前'),(14,3,0,'模板底部开始','footer_start','','模板底部开始'),(15,3,0,'模板底部开始之前','before_footer','','模板底部开始之前'),(16,3,0,'模板底部结束之前','before_footer_end','','模板底部结束之前'),(17,3,0,'模板 body 标签结束之前','before_body_end','','模板 body 标签结束之前'),(18,3,0,'模板左边栏开始','left_sidebar_start','','模板左边栏开始'),(19,3,0,'模板左边栏结束之前','before_left_sidebar_end','','模板左边栏结束之前'),(20,3,0,'模板右边栏开始','right_sidebar_start','','模板右边栏开始'),(21,3,0,'模板右边栏结束之前','before_right_sidebar_end','','模板右边栏结束之前'),(22,3,1,'评论区','comment','','评论区'),(23,3,1,'留言区','guestbook','','留言区'),(24,2,0,'后台首页仪表盘','admin_dashboard','admin','后台首页仪表盘'),(25,4,0,'后台模板 head标签结束前','admin_before_head_end','','后台模板 head标签结束前'),(26,4,0,'后台模板 body 标签结束之前','admin_before_body_end','','后台模板 body 标签结束之前'),(27,2,0,'后台登录页面','admin_login','admin','后台登录页面'),(28,1,1,'前台模板切换','switch_theme','cmf','前台模板切换'),(29,3,0,'主要内容之后','after_content','','主要内容之后'),(30,2,0,'文章显示之前','portal_before_assign_article','portal','文章显示之前'),(31,2,0,'后台文章保存之后','portal_admin_after_save_article','portal','后台文章保存之后'),(32,2,1,'获取上传界面','fetch_upload_view','user','获取上传界面'),(33,3,0,'主要内容之前','before_content','cmf','主要内容之前'),(34,1,0,'日志写入完成','log_write_done','cmf','日志写入完成'),(35,1,1,'后台模板切换','switch_admin_theme','cmf','后台模板切换'),(36,1,1,'验证码图片','captcha_image','cmf','验证码图片'),(37,2,1,'后台模板设计界面','admin_theme_design_view','admin','后台模板设计界面'),(38,2,1,'后台设置网站信息界面','admin_setting_site_view','admin','后台设置网站信息界面'),(39,2,1,'后台清除缓存界面','admin_setting_clear_cache_view','admin','后台清除缓存界面'),(40,2,1,'后台导航管理界面','admin_nav_index_view','admin','后台导航管理界面'),(41,2,1,'后台友情链接管理界面','admin_link_index_view','admin','后台友情链接管理界面'),(42,2,1,'后台幻灯片管理界面','admin_slide_index_view','admin','后台幻灯片管理界面'),(43,2,1,'后台管理员列表界面','admin_user_index_view','admin','后台管理员列表界面'),(44,2,1,'后台角色管理界面','admin_rbac_index_view','admin','后台角色管理界面'),(45,2,1,'门户后台文章管理列表界面','portal_admin_article_index_view','portal','门户后台文章管理列表界面'),(46,2,1,'门户后台文章分类管理列表界面','portal_admin_category_index_view','portal','门户后台文章分类管理列表界面'),(47,2,1,'门户后台页面管理列表界面','portal_admin_page_index_view','portal','门户后台页面管理列表界面'),(48,2,1,'门户后台文章标签管理列表界面','portal_admin_tag_index_view','portal','门户后台文章标签管理列表界面'),(49,2,1,'用户管理本站用户列表界面','user_admin_index_view','user','用户管理本站用户列表界面'),(50,2,1,'资源管理列表界面','user_admin_asset_index_view','user','资源管理列表界面'),(51,2,1,'用户管理第三方用户列表界面','user_admin_oauth_index_view','user','用户管理第三方用户列表界面'),(52,2,1,'后台首页界面','admin_index_index_view','admin','后台首页界面'),(53,2,1,'后台回收站界面','admin_recycle_bin_index_view','admin','后台回收站界面'),(54,2,1,'后台菜单管理界面','admin_menu_index_view','admin','后台菜单管理界面'),(55,2,1,'后台自定义登录是否开启钩子','admin_custom_login_open','admin','后台自定义登录是否开启钩子'),(56,4,0,'门户后台文章添加编辑界面右侧栏','portal_admin_article_edit_view_right_sidebar','portal','门户后台文章添加编辑界面右侧栏'),(57,4,0,'门户后台文章添加编辑界面主要内容','portal_admin_article_edit_view_main','portal','门户后台文章添加编辑界面主要内容'),(58,2,1,'门户后台文章添加界面','portal_admin_article_add_view','portal','门户后台文章添加界面'),(59,2,1,'门户后台文章编辑界面','portal_admin_article_edit_view','portal','门户后台文章编辑界面'),(60,2,1,'门户后台文章分类添加界面','portal_admin_category_add_view','portal','门户后台文章分类添加界面'),(61,2,1,'门户后台文章分类编辑界面','portal_admin_category_edit_view','portal','门户后台文章分类编辑界面'),(62,2,1,'门户后台页面添加界面','portal_admin_page_add_view','portal','门户后台页面添加界面'),(63,2,1,'门户后台页面编辑界面','portal_admin_page_edit_view','portal','门户后台页面编辑界面'),(64,2,1,'后台幻灯片页面列表界面','admin_slide_item_index_view','admin','后台幻灯片页面列表界面'),(65,2,1,'后台幻灯片页面添加界面','admin_slide_item_add_view','admin','后台幻灯片页面添加界面'),(66,2,1,'后台幻灯片页面编辑界面','admin_slide_item_edit_view','admin','后台幻灯片页面编辑界面'),(67,2,1,'后台管理员添加界面','admin_user_add_view','admin','后台管理员添加界面'),(68,2,1,'后台管理员编辑界面','admin_user_edit_view','admin','后台管理员编辑界面'),(69,2,1,'后台角色添加界面','admin_rbac_role_add_view','admin','后台角色添加界面'),(70,2,1,'后台角色编辑界面','admin_rbac_role_edit_view','admin','后台角色编辑界面'),(71,2,1,'后台角色授权界面','admin_rbac_authorize_view','admin','后台角色授权界面');

#
# Structure for table "cmf_hook_plugin"
#

DROP TABLE IF EXISTS `cmf_hook_plugin`;
CREATE TABLE `cmf_hook_plugin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态(0:禁用,1:启用)',
  `hook` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子名',
  `plugin` varchar(50) NOT NULL DEFAULT '' COMMENT '插件',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='系统钩子插件表';

#
# Data for table "cmf_hook_plugin"
#


#
# Structure for table "cmf_link"
#

DROP TABLE IF EXISTS `cmf_link`;
CREATE TABLE `cmf_link` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:显示;0:不显示',
  `rating` int(11) NOT NULL DEFAULT '0' COMMENT '友情链接评级',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '友情链接描述',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '友情链接地址',
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '友情链接名称',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '友情链接图标',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '友情链接打开方式',
  `rel` varchar(50) NOT NULL DEFAULT '' COMMENT '链接与网站的关系',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='友情链接表';

#
# Data for table "cmf_link"
#

INSERT INTO `cmf_link` VALUES (1,1,1,8,'thinkcmf官网','http://www.thinkcmf.com','ThinkCMF','','_blank','');

#
# Structure for table "cmf_nav"
#

DROP TABLE IF EXISTS `cmf_nav`;
CREATE TABLE `cmf_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_main` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否为主导航;1:是;0:不是',
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '导航位置名称',
  `remark` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='前台导航位置表';

#
# Data for table "cmf_nav"
#

INSERT INTO `cmf_nav` VALUES (1,1,'主导航','主导航'),(2,0,'底部导航','');

#
# Structure for table "cmf_nav_menu"
#

DROP TABLE IF EXISTS `cmf_nav_menu`;
CREATE TABLE `cmf_nav_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_id` int(11) NOT NULL COMMENT '导航 id',
  `parent_id` int(11) NOT NULL COMMENT '父 id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:显示;0:隐藏',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '菜单名称',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '打开方式',
  `href` varchar(100) NOT NULL DEFAULT '' COMMENT '链接',
  `icon` varchar(20) NOT NULL DEFAULT '' COMMENT '图标',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '层级关系',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='前台导航菜单表';

#
# Data for table "cmf_nav_menu"
#

INSERT INTO `cmf_nav_menu` VALUES (1,1,0,1,0,'首页','','home','','0-1');

#
# Structure for table "cmf_option"
#

DROP TABLE IF EXISTS `cmf_option`;
CREATE TABLE `cmf_option` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `autoload` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否自动加载;1:自动加载;0:不自动加载',
  `option_name` varchar(64) NOT NULL DEFAULT '' COMMENT '配置名',
  `option_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT '配置值',
  PRIMARY KEY (`id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='全站配置表';

#
# Data for table "cmf_option"
#

INSERT INTO `cmf_option` VALUES (1,1,'site_info','{\"site_name\":\"ThinkCMF\\u5185\\u5bb9\\u7ba1\\u7406\\u6846\\u67b6\",\"site_seo_title\":\"ThinkCMF\\u5185\\u5bb9\\u7ba1\\u7406\\u6846\\u67b6\",\"site_seo_keywords\":\"ThinkCMF,php,\\u5185\\u5bb9\\u7ba1\\u7406\\u6846\\u67b6,cmf,cms,\\u7b80\\u7ea6\\u98ce, simplewind,framework\",\"site_seo_description\":\"ThinkCMF\\u662f\\u7b80\\u7ea6\\u98ce\\u7f51\\u7edc\\u79d1\\u6280\\u53d1\\u5e03\\u7684\\u4e00\\u6b3e\\u7528\\u4e8e\\u5feb\\u901f\\u5f00\\u53d1\\u7684\\u5185\\u5bb9\\u7ba1\\u7406\\u6846\\u67b6\"}');

#
# Structure for table "cmf_plugin"
#

DROP TABLE IF EXISTS `cmf_plugin`;
CREATE TABLE `cmf_plugin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '插件类型;1:网站;8:微信',
  `has_admin` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否有后台管理,0:没有;1:有',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:开启;0:禁用',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '插件安装时间',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '插件标识名,英文字母(惟一)',
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '插件名称',
  `demo_url` varchar(50) NOT NULL DEFAULT '' COMMENT '演示地址，带协议',
  `hooks` varchar(255) NOT NULL DEFAULT '' COMMENT '实现的钩子;以“,”分隔',
  `author` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '插件作者',
  `author_url` varchar(50) NOT NULL DEFAULT '' COMMENT '作者网站链接',
  `version` varchar(20) NOT NULL DEFAULT '' COMMENT '插件版本号',
  `description` varchar(255) NOT NULL COMMENT '插件描述',
  `config` text COMMENT '插件配置',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='插件表';

#
# Data for table "cmf_plugin"
#


#
# Structure for table "cmf_portal_category"
#

DROP TABLE IF EXISTS `cmf_portal_category`;
CREATE TABLE `cmf_portal_category` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '分类父id',
  `post_count` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '分类文章数',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:发布,0:不发布',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '分类名称',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '分类描述',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '分类层级关系路径',
  `seo_title` varchar(100) NOT NULL DEFAULT '',
  `seo_keywords` varchar(255) NOT NULL DEFAULT '',
  `seo_description` varchar(255) NOT NULL DEFAULT '',
  `list_tpl` varchar(50) NOT NULL DEFAULT '' COMMENT '分类列表模板',
  `one_tpl` varchar(50) NOT NULL DEFAULT '' COMMENT '分类文章页模板',
  `more` text COMMENT '扩展属性',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='portal应用 文章分类表';

#
# Data for table "cmf_portal_category"
#

INSERT INTO `cmf_portal_category` VALUES (1,0,0,1,0,10000,'金融','','0-1','','','','list','article','{\"thumbnail\":\"\"}');

#
# Structure for table "cmf_portal_category_post"
#

DROP TABLE IF EXISTS `cmf_portal_category_post`;
CREATE TABLE `cmf_portal_category_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `category_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:发布;0:不发布',
  PRIMARY KEY (`id`),
  KEY `term_taxonomy_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='portal应用 分类文章对应表';

#
# Data for table "cmf_portal_category_post"
#

INSERT INTO `cmf_portal_category_post` VALUES (1,1,1,10000,0),(2,2,1,10000,0),(3,3,1,10000,1),(4,4,1,10000,0),(5,5,1,10000,1),(6,6,1,10000,1),(7,7,1,10000,1),(8,8,1,10000,1),(9,9,1,10000,1),(10,10,1,10000,1),(11,11,1,10000,1),(12,12,1,10000,1),(13,13,1,10000,1);

#
# Structure for table "cmf_portal_post"
#

DROP TABLE IF EXISTS `cmf_portal_post`;
CREATE TABLE `cmf_portal_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '父级id',
  `post_type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '类型,1:文章;2:页面',
  `post_format` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '内容格式;1:html;2:md',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '发表者用户id',
  `post_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:已发布;0:未发布;',
  `comment_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '评论状态;1:允许;0:不允许',
  `is_top` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否置顶;1:置顶;0:不置顶',
  `recommended` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐;1:推荐;0:不推荐',
  `post_hits` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '查看数',
  `post_favorites` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '收藏数',
  `post_like` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '点赞数',
  `comment_count` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '评论数',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `published_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `post_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'post标题',
  `post_keywords` varchar(150) NOT NULL DEFAULT '' COMMENT 'seo keywords',
  `post_excerpt` varchar(500) NOT NULL DEFAULT '' COMMENT 'post摘要',
  `post_source` varchar(150) NOT NULL DEFAULT '' COMMENT '转载文章的来源',
  `thumbnail` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `post_content` text COMMENT '文章内容',
  `post_content_filtered` text COMMENT '处理过的文章内容',
  `more` text COMMENT '扩展属性,如缩略图;格式为json',
  PRIMARY KEY (`id`),
  KEY `type_status_date` (`post_type`,`post_status`,`create_time`,`id`),
  KEY `parent_id` (`parent_id`),
  KEY `user_id` (`user_id`),
  KEY `create_time` (`create_time`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='portal应用 文章表';

#
# Data for table "cmf_portal_post"
#

INSERT INTO `cmf_portal_post` VALUES (1,0,1,1,1,1,1,0,0,5,0,0,0,1589016927,1589016982,1589019378,1589019445,'赛岳恒：1150亿！工行农行10%股权划转社保 对养老及股市有何影响','','','财经综合','','\n&lt;p&gt;&amp;lt;div class=&quot;news-article&quot;&amp;gt;&lt;/p&gt;\n&lt;p&gt;            &amp;lt;h1 class=&quot;title&quot;&amp;gt;赛岳恒：1150亿！工行农行10%股权划转社保 对养老及股市有何影响&amp;lt;/h1&amp;gt;&lt;/p&gt;\n&lt;p&gt;            &amp;lt;div class=&quot;meta clearfix&quot;&amp;gt;&lt;/p&gt;\n&lt;p&gt;                &amp;lt;div class=&quot;date&quot;&amp;gt;&amp;lt;i class=&quot;icon icon-clock&quot;&amp;gt;&amp;lt;/i&amp;gt;2019-09-26 09:25&amp;lt;/div&amp;gt;&lt;/p&gt;\n&lt;p&gt;                &amp;lt;div class=&quot;share&quot;&amp;gt;&amp;lt;/div&amp;gt;&lt;/p&gt;\n&lt;p&gt;            &amp;lt;/div&amp;gt;&lt;/p&gt;\n&lt;p&gt;            &amp;lt;div class=&quot;article-body&quot;&amp;gt;&lt;/p&gt;\n&lt;p&gt;                &amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　国资划转社保基金进入全速推进阶段。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　9月25日，一天之内，财政部将所持有的工商银行、农业银行股权的10%全部划转给社保基金会，两项股权划转总价值超过1150亿元。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　&amp;lt;strong style=&quot;margin: 0px; padding: 0px;&quot;&amp;gt;财政部将持有工行、农行股权10%划转给社保基金会&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　9月25日晚间，先是中国农业银行发公告称，该银行股东财政部将其持有的本行股权的10%一次性划转给全国社会保障基金理事会持有。本次划转的股份数为13723909471股A股股份，占该银行普通股股份总数的3.92%。按照农行A股9月25日收盘价3.46元计算，财政部此次划转给社保基金会的股权价值超474.8亿元。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal; text-align: center;&quot;&amp;gt;&amp;lt;img src=&quot;http://u.thsi.cn/imgsrc/input/34ab8becfa28b7e22917e23ff9758bd3.jpg&quot; border=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; max-width: 100%;&quot;&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　农行半年报显示，截至6月30日，农业银行的前三大股东中央汇金投资有限责任公司、财政部、社保基金会分别持有40.03%、39.21%、2.8%。此次股权划转之后，社保基金会持有农行股份比例升至6.09%，财政部持股比例降至35.29%。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　紧随农行之后，中国工商银行银行发布公告称，近日，该银行收到通知，股东财政部将其持有的工商银行股权的10%一次性划转给全国社会保障基金理事会持有。本次划转前，财政部持有工行123316451864股A股股份，占该银行普通股股份总数34.60%；本次划转的股份数为12331645186股A股股份，占该银行普通股股份总数的3.46%。按照工商银行9月25日A股收盘价5.49元计算，此次划转股权价值超677亿元。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal; text-align: center;&quot;&amp;gt;&amp;lt;img src=&quot;http://u.thsi.cn/imgsrc/input/1871acfbdf6c4c7624b01845b4fd8780.jpg&quot; border=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; border: 0px; max-width: 100%;&quot;&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　工行半年报显示，截至6月30日，工商银行前四大股东中央汇金投资有限责任公司、财政部、平安资产管理有限责任公司、社保基金会分别持有34.71%、34.6%、3.41%、2.43%。经过本次划转之后，社保基金会持有工商银行股份升至5.89%，财政部持有工商银行比例降至31.14%。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　在工行、农行之前，财政部已将其持有的中国人保（601319）、中国太平等国有大型金融机构股权的10%划转至社保基金会。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　&amp;lt;strong style=&quot;margin: 0px; padding: 0px;&quot;&amp;gt;国资划转社保基金进入全速推进阶段&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　2017年11月，国务院印发《划转部分国有资本充实社保基金实施方案》(下称《实施方案》)，决定划转部分国有资本弥补企业职工基本养老保险基金缺口。划转对象为中央和地方国有及国有控股大中型企业、金融机构，划转比例统一为企业国有股权的10%。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　《实施方案》明确，按照“试点先行、分级组织、稳步推进”的原则完成划转工作。按此要求，财政部会同人力资源社会保障部、国资委及时启动划转试点工作。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　经国务院批准，2018年首先在中国联通等3家中央管理企业，中国再保险等2家中央金融机构，以及浙江省和云南省开展试点。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　在试点基本完成的基础上，中央层面又对15家中央管理企业和4家中央金融机构实施了划转，即中央层面，完成两批24家企业的划转工作。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　试点工作取得了成效，积累了经验，同时，也反映出需要进一步规范和明确的问题。为增强我国社保基金可持续性，进一步夯实养老社会保障制度基础。2019年7月10日，国务院常务会议决定，今年全面推开划转部分国有资本充实社保基金工作。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　9月10日，财政部、人力资源社会保障部、国资委、税务总局、证监会联合印发了《关于全面推开划转部分国有资本充实社保基金工作的通知》(下称《通知》)对全国划转工作提出了时间要求。中央层面，具备条件的企业于2019年底前基本完成，确有难度的企业可于2020年底前完成，中央行政事业单位所办企业待集中统一监管改革完成后予以划转；地方层面，于2020年底前基本完成划转工作。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　近期，中央层面就将对35家中央管理企业实施划转，预计中央层面59家企业划转国有资本总额6600亿元左右。地方层面，除试点省份外，其他省份也相继开展了划转前期准备工作，包括企业情况摸底排查、制定实施方案、选择承接主体等，为下一步实施划转奠定了基础。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　9月25日，工行、农行已将财政部将持有的股权10%划转给社保基金会，也意味着全面推开划转部分国有资本充实社保基金工作进入实施阶段。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　财政部资产管理司司长陆庆平告诉记者，下一步，财政部将会同人力资源社会保障部、国资委、证监会、社保基金会等有关部门，全力推动全国划转工作。主要工作包括：&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　一是各相关部门密切配合，加强指导督促，跟踪工作进展，及时解决出现的问题。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　二是国资委和财政部分别做好中央管理企业和中央金融机构股权划出工作，督促企业及时办理产权变动和工商变更登记等手续。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　三是社保基金会扎实做好中央企业股权接收工作，并保证接收股权的集中持有和单独核算，接受考核监督。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　四是地方人民政府要对划转工作加强组织领导，周密安排，结合实际抓紧制定具体工作方案，确保按要求完成划转任务。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　&amp;lt;strong style=&quot;margin: 0px; padding: 0px;&quot;&amp;gt;对资本市场将产生积极正面影响&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　划转部分国有资本充实社保基金对企业的生产经营是否有影响？划转部分国有资本充实社保基金是否会涉及上市企业股权变动？对资本市场有何影响？这些都是国资划转社保中备受关注的问题。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　陆庆平解释，国务院印发的《实施方案》明确，划转中央和地方国有及国有控股大中型企业、金融机构的部分国有资本充实社保基金，划转比例统一为企业国有股权的10%。此处所指的企业国有股权，是指各级政府授权国有资产监督管理机构，包括财政部门、国资部门等持有的国有股权。对于企业而言，是国有股东持股比例的改变，属于国有股权的多元化持有。划转不改变现行国有资产管理体制，社保基金会等承接主体，作为长期财务投资者，主要通过股权分红获取收益，不干预企业日常生产经营管理活动，因此也不会对企业的生产经营造成影响。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　9月25日，工行、农行的公告中，关于所涉及后续事项中也明确提到，本次权益变动不会导致本行控股股东及实际控制人发生变化。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　据记者了解，划转部分国有资本充实社保基金，主要划转对象是中央和地方企业集团的股权，一般不涉及上市企业。对于少量涉及的上市企业，划转是原国有股东将其10%的股权转至社保基金会等承接主体，属于国有股权的多元化持有，不改变企业国有股权的属性和总量。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　社保基金会等承接主体作为长期财务投资者，以获得股权分红收益为主。涉及上市企业的划转，不会改变现行管理体制和方式。社保基金会等承接主体作为上市企业的国有股东之一，除履行方案中有关禁售期的义务外，国有股权的变动等事项需执行国有股权管理的相关制度规定。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　同时，社保基金会等承接主体参与持股，将进一步优化上市企业法人治理结构，有利于提升企业经营水平，对资本市场将产生积极正面的影响。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　&amp;lt;strong style=&quot;margin: 0px; padding: 0px;&quot;&amp;gt;国资划转社保将有效养老保险基金支付压力&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　我国社保制度可持续性面临的挑战，主要来源于过去社保制度转型成本形成的缺口，以及未来老龄化趋势带来的挑战。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　上世纪90年代，我国养老保险制度建立之初，规定制度建立后覆盖的第一批人即使没有缴费也“视同缴费”。这就形成了支付缺口，需要相关的责任主体弥补。从世界各国实践看，用国有资本支付社保转型成本，是一个通行做法。这些年来，我国国有资本规模不断扩大，具备了支付转型成本的基础。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　老龄化是全球普遍面临的挑战，我国也不例外。根据国家统计局公布的数据，截至2018年底，我国60周岁以上人口已经达到2.49亿，占总人口的17.9%，比2017年增长了0.6个百分点，其中65周岁及以上人口达到1.67亿，占总人口的11.9%，比2017年增长了0.5个百分点。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　老龄化造成的养老保险基金支付压力日益增大。要缓解这种压力，很难再通过提高当代人缴费率、增加税收等途径来实现。把属于全民的国有资产的收益注入社保基金，形成防范未来风险的资金池，将有助于建立更加公平、更可持续的养老保险制度。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　划转部分国有资本充实社保基金意义重大，是在统筹考虑基本养老保险制度改革和深化国有企业改革的基础上，增强基本养老保险制度可持续性的重要举措：&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　一是有利于充分体现国有企业全民所有，发展成果全民共享，增进民生福祉。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　二是有利于实现基本养老保险制度的代际公平，避免将实施视同缴费年限政策形成的基本养老保险基金缺口，通过增加税收、提高在职人员养老金缴费率等方式转移给下一代人。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　三是有利于推进国有企业深化改革，实现国有股权多元化持有，推动完善公司治理结构，建立现代企业制度，促进国有资本做强做优做大，发展成果更多用于保障和改善民生。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　中国财政科学研究院副院长白景明向记者表示，全面推开划转部分国有资本充实社保基金，有利于促进建立更加公平更可持续的养老保险制度，应对人口老龄化加速问题，稳定社会预期，体现了未雨绸缪、超前布局。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;　　据记者从国资委了解到的情况，去年3月，国资委选择了中国联通、中国有色、中农发三家企业开展了首批股权划转试点。去年11月又选择了中国华能等15家企业开展第二批划转工作，现在两批试点是18家。根据划转时点的财务数据，这两批18家企业一共划转了国有资本750亿。另外，根据2018年度的财务快报，划转部分目前已经增值到817亿，增幅是8.9%。这是什么概念呢？750亿是按照当时划转时点的财务数据，按照2018年财务报表的数据，已经变成817亿，实现了国有资产的保值增值。&amp;lt;/p&amp;gt;&amp;lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px 0px 10px; line-height: 30px; color: rgb(51, 51, 51); font-family: arial, &amp;amp;quot;microsoft yahei&amp;amp;quot;, tahoma, sans-serif; white-space: normal;&quot;&amp;gt;赛岳恒官网声明：资讯仅代表作者个人观点。不保证该信息（包括但不限于文字，数据及图标）全部或者部分内容的准确性，真实性，完整性，有效性，及时性，原创性等，若有侵权，请第一时间告知删除。仅供投资者参考，并不构成投资建议。投资者据此操作，风险自担。&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;&amp;lt;br&amp;gt;&amp;lt;/p&amp;gt;            &amp;lt;/div&amp;gt;&lt;/p&gt;\n&lt;p&gt;&lt;br&gt;&lt;/p&gt;\n&lt;p&gt;&lt;br&gt;&lt;/p&gt;\n',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\"}'),(2,0,1,1,1,1,1,0,0,10,0,0,0,1589018075,1589181790,1589019900,1589181841,'商务部:对美欧的进口相关无缝钢管继续征收反倾销税','','','财经综合','','\n&lt;p&gt;原标题：&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%95%86%E5%8A%A1%E9%83%A8?source=article&quot;&gt;商务部&lt;/a&gt;公告2020年第9号 关于原产于美国和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%AC%A7%E7%9B%9F?source=article&quot;&gt;欧盟&lt;/a&gt;的进口相关高温承压用合金钢无缝钢管反倾销措施期终复审裁定的公告&lt;/p&gt;\n&lt;p&gt;【发布单位】中华人民共和国商务部&lt;/p&gt;\n&lt;p&gt;【发布文号】公告2020年第9号&lt;/p&gt;\n&lt;p&gt;【发布日期】2020-5-9&lt;/p&gt;\n&lt;p&gt;2014年5月9日，商务部发布2014年第34号公告，决定对原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管征收反倾销税，实施期限为自2014年5月10日起5年。2019年6月14日，商务部发布2019年第24号公告，决定自2019年6月14日起调整原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管所适用的反倾销税率。2019年5月9日，应国内相关高温承压用合金钢无缝钢管产业申请，商务部发布2019年第20号公告，决定自2019年5月10日起，对原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管所适用的反倾销措施进行期终复审调查。&lt;/p&gt;\n&lt;p&gt;商务部对如果终止反倾销措施，原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管对国内相关高温承压用合金钢无缝钢管产业的倾销和损害继续或再度发生的可能性进行了调查，并依据《中华人民共和国反倾销条例》（以下称《反倾销条例》）第四十八条作出复审裁定（见附件）。现将有关事项公告如下：&lt;/p&gt;\n&lt;p&gt;一、复审裁定&lt;/p&gt;\n&lt;p&gt;商务部裁定，如果终止反倾销措施，原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管对中国的倾销可能继续或再度发生，对国内相关高温承压用合金钢无缝钢管产业造成的损害可能继续或再度发生。&lt;/p&gt;\n&lt;p&gt;二、反倾销措施&lt;/p&gt;\n&lt;p&gt;根据《反倾销条例》第五十条的规定，商务部根据调查结果向&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9B%BD%E5%8A%A1%E9%99%A2?source=article&quot;&gt;国务院&lt;/a&gt;关税税则委员会提出继续实施反倾销措施的建议，国务院关税税则委员会根据商务部的建议作出决定，自2020年5月10日起，对原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管继续征收反倾销税，实施期限为5年。&lt;/p&gt;\n&lt;p&gt;征收反倾销税的产品范围是原反倾销措施所适用的产品，与商务部2014年第34号和2019年第24号公告中的产品范围一致。具体如下：&lt;/p&gt;\n&lt;p&gt;被调查产品名称：相关高温承压用合金钢无缝钢管，又名P92无缝钢管、10Cr9MoW2VNbBN无缝钢管、X10CrWMoVNb9-2无缝钢管等。&lt;/p&gt;\n&lt;p&gt;英文名称：Certain Alloy-Steel Seamless Tubes and Pipes for High Temperatureand Pressure Service。&lt;/p&gt;\n&lt;p&gt;具体描述：外径在127mm以上（含127mm），化学成分（wt%）中碳（C）的含量大于等于0.07且小于等于0.13、铬（Cr）的含量大于等于8.5且小于等于9.5、钼（Mo）的含量大于等于0.3且小于等于0.6、钨（W）的含量大于等于1.5且小于等于2.0、抗拉强度大于等于620MPa、屈服强度大于等于440MPa的合金钢无缝钢管，不论是否经过进一步的加工处理。&lt;/p&gt;\n&lt;p&gt;主要用途：相关高温承压用合金钢无缝钢管具有较强的高温强度和抗蠕变性能，主要用于超临界、超超临界电站锅炉和电站汽水管道上。&lt;/p&gt;\n&lt;p&gt;该产品归在《中华人民共和国&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%BF%9B%E5%87%BA%E5%8F%A3?source=article&quot;&gt;进出口&lt;/a&gt;税则》：73045110、73045190、73045910和73045990。上述税则号项下不符合被调查产品具体描述的其他钢管产品，不属于本次调查范围。&lt;/p&gt;\n&lt;p&gt;继续征收反倾销税的税率与商务部2019年第24号公告的规定相同。具体如下：&lt;/p&gt;\n&lt;p&gt;美国公司 &lt;/p&gt;\n&lt;p&gt;1． 美国威曼高登锻造有限公司 101.0%&lt;/p&gt;\n&lt;p&gt;（Wyman-Gordon Forgings， Inc．） &lt;/p&gt;\n&lt;p&gt;2． 其他美国公司 147.8%&lt;/p&gt;\n&lt;p&gt;（All others） &lt;/p&gt;\n&lt;p&gt;欧盟公司&lt;/p&gt;\n&lt;p&gt;1． 瓦卢瑞克德国公司 57.9%&lt;/p&gt;\n&lt;p&gt;（Vallourec Deutschland GmbH） &lt;/p&gt;\n&lt;p&gt;2． 瓦卢瑞克法国钢管公司 57.9%&lt;/p&gt;\n&lt;p&gt;（VALLOUREC TUBES FRANCE） &lt;/p&gt;\n&lt;p&gt;3． 意大利IBF公司 60.8 %&lt;/p&gt;\n&lt;p&gt;（IBF S.P.A．） &lt;/p&gt;\n&lt;p&gt;4． 其他欧盟公司 60.8 %&lt;/p&gt;\n&lt;p&gt;（All others） &lt;/p&gt;\n&lt;p&gt;三、征收反倾销税的方法&lt;/p&gt;\n&lt;p&gt;自2020年5月10日起，进口经营者在进口原产于美国和欧盟的相关高温承压用合金钢无缝钢管时，应向中华人民共和国&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%B5%B7%E5%85%B3?source=article&quot;&gt;海关&lt;/a&gt;缴纳相应的反倾销税。反倾销税以海关审定的完税价格从价计征，计算公式为：反倾销税额=海关完税价格×反倾销税税率。进口环节&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%A2%9E%E5%80%BC%E7%A8%8E?source=article&quot;&gt;增值税&lt;/a&gt;以海关审定的完税价格加上关税和反倾销税作为计税价格从价计征。&lt;/p&gt;\n&lt;p&gt;四、行政复议和行政诉讼&lt;/p&gt;\n&lt;p&gt;根据《中华人民共和国反倾销条例》第五十三条的规定，对本复审决定不服的，可以依法申请行政复议，也可以依法向人民法院提起诉讼。&lt;/p&gt;\n&lt;p&gt;五、本公告自2020年5月10日起执行&lt;/p&gt;\n&lt;p&gt;附件：商务部关于原产于美国和欧盟的进口相关高温承压用合金钢无缝钢管所适用反倾销措施的期终复审裁定&lt;/p&gt;\n&lt;p&gt;中华人民共和国商务部&lt;/p&gt;\n&lt;p&gt;2020年5月9日&lt;/p&gt;\n',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"http:\\/\\/z0.sinaimg.cn\\/auto\\/crop?size=200_134&amp;img=https%3A%2F%2Fn.sinaimg.cn%2Fsinanews%2F334%2Fw200h134%2F20200221%2F2583-ipvnsze3496495.png\",\"name\":\"\"}]}'),(3,0,1,1,1,1,1,0,0,13,0,0,0,1589018376,1589018506,1589020168,0,'一季度地方财政报告：28省收入负增长 仅西藏正增长','','','财经综合','','&lt;article&gt;&lt;p&gt;原标题：一季度地方财政报告&lt;/p&gt;\n&lt;p&gt;来源：21世纪经济报道&lt;/p&gt;\n&lt;p&gt;&lt;img src=&quot;default/20200509/faa906209f52cec94adacb280bcbc8b6.jpg&quot; title=&quot;1b4a-iteyfww6757610.jpg&quot; alt=&quot;1b4a-iteyfww6757610.jpg&quot;&gt;&lt;/p&gt;\n&lt;p&gt;截至5月8日，从官方披露数据来看，一季度有28个省份财政收入负增长，目前仅西藏正增长，河北、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%96%B0%E7%96%86?source=article&quot;&gt;新疆&lt;/a&gt;尚未披露具体财政数据。&lt;/p&gt;\n&lt;p&gt;疫情短期冲击下，一季度我国GDP下降6.8%，全国一般公共预算收入下降14.3%。相应地，全国绝大多数省份一季度财政收入录得负增长。即便是前2个月表现亮眼的浙江省，一季度财政收入同比下降5.1%，降幅为东部省份最小。&lt;/p&gt;\n&lt;p&gt;3月以来，随着我国复工复产进度加快，宏观经济指标改善明显。财政收入形势与经济密切相关，长远来看，财政收入降幅有望收窄，并逐渐恢复正增长。&lt;/p&gt;\n&lt;p&gt;省域层面财政收入出现负增长，地级市财政收入多数为负增长，不少基层政府多措并举保工资、保运转、保基本民生。各级&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%B4%A2%E6%94%BF%E9%83%A8?source=article&quot;&gt;财政部&lt;/a&gt;门均在想办法重点力保“基层运转”，中央预留更多资金给地方，省级财政加大了对市县转移支付，地方加大盘活存量资产等。&lt;/p&gt;\n&lt;p&gt;21世纪经济报道记者采访获悉，在一季度负增长已成定局，二季度可能收窄的态势下，部分地方已经在考虑下调年度预算。不过，由于中央明确要提高&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%B5%A4%E5%AD%97?source=article&quot;&gt;赤字&lt;/a&gt;率、增加专项债规模，还将推出抗疫特别&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9B%BD%E5%80%BA?source=article&quot;&gt;国债&lt;/a&gt;等，后续来自中央的转移支付力度可能加大，地方也在观望并期待这部分政策的落地。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;东部大省相对亮眼&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;整体来看，财政收入的降幅，大于GDP的降幅。比如，经济、财政第一大省广东，一季度GDP同比下降6.7%，地方一般公共预算收入下降8.4%。重庆一季度GDP下降6.5%，但财政收入下降了23.3%。&lt;/p&gt;\n&lt;p&gt;分区域来看，东部大省的财政相对亮眼，降幅低于全国平均水平。浙江得益于&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=160636&quot;&gt;互联网&lt;/a&gt;平台经济贡献，前2个月财政收入实现难得的正增长，但综合一季度来看，疫情拖累下财政收入下降了5.1%。&lt;/p&gt;\n&lt;p&gt;浙江一季度GDP下降5.6%，稍逊于江苏，在东部大省中表现较好。其中，浙江的三产&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%A2%9E%E5%8A%A0%E5%80%BC?source=article&quot;&gt;增加值&lt;/a&gt;抗跌性较强，一季度仅下降1.5%，与广东相当，好于江苏、山东、上海、北京。&lt;/p&gt;\n&lt;p&gt;具体而言，浙江一季度&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%87%91%E8%9E%8D%E4%B8%9A?source=article&quot;&gt;金融业&lt;/a&gt;增加值增长10.3%，信息传输、软件和&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=159939&quot;&gt;信息技术&lt;/a&gt;&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%9C%8D%E5%8A%A1%E4%B8%9A?source=article&quot;&gt;服务业&lt;/a&gt;增加值增长9.7%，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%88%BF%E5%9C%B0%E4%BA%A7%E4%B8%9A?source=article&quot;&gt;房地产业&lt;/a&gt;增加值下降-1.2%，这些行业有效地抵消了住宿餐饮、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E4%BA%A4%E9%80%9A%E8%BF%90%E8%BE%93?source=article&quot;&gt;交通运输&lt;/a&gt;、批发&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%9B%B6%E5%94%AE%E4%B8%9A?source=article&quot;&gt;零售业&lt;/a&gt;的拖累。&lt;/p&gt;\n&lt;p&gt;疫情期间，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%94%B5%E5%AD%90%E5%95%86%E5%8A%A1?source=article&quot;&gt;电子商务&lt;/a&gt;、网上办公、远程医疗、线上课堂等数字经济加快崛起，平台经济发达的浙江获益颇多，1-2月浙江企业所得税同比增长13.6%，其中信息传输、软件和信息技术服务业更是同比增长了311.3%。&lt;/p&gt;\n&lt;p&gt;部分中西部省份财政收入降幅比较低，比如广西、云南、湖南等省份，降幅低于6%。这些省份近年GDP增速居于全国前列，工业投资增速较快。&lt;/p&gt;\n&lt;p&gt;像广西一季度GDP下降3.3%，地方财政收入下降2.8%。但广西主要靠非税收入带动，其一季度&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%A8%8E%E6%94%B6%E6%94%B6%E5%85%A5?source=article&quot;&gt;税收收入&lt;/a&gt;下降了20.7%。&lt;/p&gt;\n&lt;p&gt;云南则与浙江类似，由于前2个月财政收入形势较好，一季度财政收入仅下降5.3%。其中，企业所得税上涨了17.7%，得益于上年四季度企业盈利较好，企业所得税集中在今年1月份入库。&lt;/p&gt;\n&lt;p&gt;部分省份财政收入降幅超过20%，包括湖北、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%B5%B7%E5%8D%97?source=article&quot;&gt;海南&lt;/a&gt;、重庆、黑龙江、内蒙古等。&lt;/p&gt;\n&lt;p&gt;像重庆一季度GDP下降6.5%，经济形势好于全国平均。但重庆工业拖累明显，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%A7%84%E6%A8%A1%E4%BB%A5%E4%B8%8A%E5%B7%A5%E4%B8%9A?source=article&quot;&gt;规模以上工业&lt;/a&gt;降幅达到10.6%。市场活跃度下降、减税降费、非税收入负增长等综合作用下，重庆一季度地方财政收入同比下降23.2%。&lt;/p&gt;\n&lt;p&gt;不过，重庆的经济在加快恢复，近期其落地了一些重大的汽车产业项目，2020年重庆的&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%93%81%E8%B7%AF?source=article&quot;&gt;铁路&lt;/a&gt;投资、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%96%B0%E5%9F%BA%E5%BB%BA?source=article&quot;&gt;新基建&lt;/a&gt;投资等也将提速。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;二季度降幅可能收窄&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;辽宁大学地方财政研究院院长王振宇对21世纪经济报道记者表示，GDP和财政收入增速的口径不同，一个是不变价，一个是现价。财政收入与经济活跃度相关，疫情下经济活动放缓，收入出现负增长。3月以来经济在加快恢复，但财政的恢复会滞后于经济；疫情期间，主动减免税费等政策，也使得财政收入降幅要更大一些。&lt;/p&gt;\n&lt;p&gt;有地方财政人士对21世纪经济报道记者表示，3月以来地方重大项目加快开工，一些重大&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9F%BA%E5%BB%BA?source=article&quot;&gt;基建&lt;/a&gt;项目投资体量很大，对GDP拉动作用明显，但这些项目的财政贡献度很有限，这也造成了经济在加快恢复，但财政收入降幅较大的局面。&lt;/p&gt;\n&lt;p&gt;展望二季度，财政部国库支付中心主任刘金云曾在新闻发布会上表示，受国际国内新冠肺炎疫情形势发展变化影响，财政收入仍呈下降态势。但随着我国生产生活秩序加快恢复，复工复产正在逐步接近或达到正常水平，财政收入降幅会逐步收窄。&lt;/p&gt;\n&lt;p&gt;虽然一季度数据比较“亮眼”，但云南省财政厅已经发出预警：由于企业所得税申报周期的原因，今年一季度疫情对企业所得税收入的影响，预计在4月份显现。&lt;/p&gt;\n&lt;p&gt;东部某省财政厅预算处相关负责人对21世纪经济报道记者表示，由于一季度企业所得税在4月进行申报，4月是企业所得税的入库大月，这部分影响会集中体现在4月。3月经济虽然在加快恢复，但传导到税款上还有一定时间差，4月份财政收入降幅可能会扩大。受海外疫情影响，外贸企业比较困难，上半年财政增收压力比较大，紧平衡的状况会持续。&lt;/p&gt;\n&lt;p&gt;部分地级市也预计，未来财政收入降幅会趋缓，但增收压力比较大。比如亳州市财政局表示，随着企业复工复产，经济社会活动逐步恢复，全市财政收入也将随之增长。但是考虑到疫情期间国家出台的阶段性、有针对性的减税降费措施，叠加去年实施的更大规模减税降费政策翘尾等减收因素，预计后期全市财政增收压力依然较大。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;多措并举保基本&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;近期有媒体报道，部分县级政府国库资金亮红灯了。&lt;/p&gt;\n&lt;p&gt;“财政库款监测显示，部分市县库款资金足够‘三保’支出，但实际上‘三保’面临问题。因为地方支出项目很多，包括国企退休人员&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%85%BB%E8%80%81%E9%87%91?source=article&quot;&gt;养老金&lt;/a&gt;、重大&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9F%BA%E7%A1%80%E8%AE%BE%E6%96%BD%E5%BB%BA%E8%AE%BE?source=article&quot;&gt;基础设施建设&lt;/a&gt;、不得拖欠民营企业账款、已经承诺的政策等，这些支出计划没法拖延，库款资金虽然还有，但是可能会挤占‘三保’资金”，东部某国家级&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%BC%80%E5%8F%91%E5%8C%BA?source=article&quot;&gt;开发区&lt;/a&gt;财政局相关负责人对21世纪经济报道记者表示。&lt;/p&gt;\n&lt;p&gt;该负责人直言，现在税收收入已经是负增长，外贸企业也面临订单流失，财政整体比较困难。不同层级财政间调度资金本是常态，该负责人也感受到上级财政的紧张：他们向地级市政府申请调度资金，最终未能争取到任何新增资金。&lt;/p&gt;\n&lt;p&gt;面对疫情冲击下的经济形势，中央明确提出“六保”的概念，保居民&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%B0%B1%E4%B8%9A?source=article&quot;&gt;就业&lt;/a&gt;、保基本民生、保市场主体、保&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%B2%AE%E9%A3%9F?source=article&quot;&gt;粮食&lt;/a&gt;能源安全、保产业链&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E4%BE%9B%E5%BA%94%E9%93%BE?source=article&quot;&gt;供应链&lt;/a&gt;稳定、保基层运转。&lt;/p&gt;\n&lt;p&gt;近期，多省召开政府常务会议，部署要求坚持底线思维，全力做好重要&lt;a class=&quot;article-a&quot; href=&quot;//quotes.sina.cn/hs/company/quotes/view/sz000061?tabsource=cjzwy&quot;&gt;农产品&lt;/a&gt;稳供保价工作，切实抓好基层“保工资、保运转、保基本民生”，大力支持重要骨干支柱产业和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E4%B8%AD%E5%B0%8F%E5%BE%AE%E4%BC%81%E4%B8%9A?source=article&quot;&gt;中小微企业&lt;/a&gt;发展，坚决守住不发生颠覆性风险的底线。&lt;/p&gt;\n&lt;p&gt;早在3月3日，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9B%BD%E5%8A%A1%E9%99%A2?source=article&quot;&gt;国务院&lt;/a&gt;常务会议决定加大对地方财政支持，提高保基本民生保工资保运转能力，具体举措包括提高地方资金留用比例。&lt;/p&gt;\n&lt;p&gt;王振宇表示，地方刚性支出越来越多，财政平衡的难度越来越大。一季度疫情对财政收入冲击很大，“三保”等开支没出现问题，一方面在提前下达转移支付，加大了资金调度；另一方面在于调整支出结构，目前除了还债付息、公共卫生防疫、社会保障、脱贫攻坚等是正增长，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%95%99%E8%82%B2?source=article&quot;&gt;教育&lt;/a&gt;、科技、文化等很多都是负增长。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;特别国债如何发力&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;疫情对财政短期冲击较大，部分地方已经在考虑调整年度预算目标。但是中央政策如何输血，也尚未最终确定。&lt;/p&gt;\n&lt;p&gt;目前市场机构对于提高2020年赤字率相对有共识，部分认为可以提高到3.5%左右，专项债规模可扩张至3万亿左右，但对于特别国债的规模，以及如何使用争议较大。&lt;/p&gt;\n&lt;p&gt;国务院发展研究中心宏观经济部副部长冯俏彬对21世纪经济报道记者表示，地方财政当前面临的资金紧张，应该主要通过提高赤字率，来补充一般公共预算支出。地方专项债主要用于有收益的项目投资。特别国债是有专门用途的，作用主要有几方面，一是对应中央级大项目，用于投资；二是用于疫后恢复，比如通过担保、财政贴息等&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=159940&quot;&gt;金融&lt;/a&gt;化的方式，来放大&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%80%BA%E5%8A%A1?source=article&quot;&gt;债务&lt;/a&gt;资金的使用效果。&lt;/p&gt;\n&lt;p&gt;市场也有不同的看法。&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%A4%BE%E7%A7%91%E9%99%A2?source=article&quot;&gt;社科院&lt;/a&gt;财经战略研究院副院长杨志勇对21世纪经济报道记者表示，抗疫特别国债主要用于消除疫情影响，使用方式可以比较开放，可以用于投资、补贴消费，也可以用于缓解地方财力紧张。但是力度要足够大，因为“六稳”“六保”归根到底要稳预期，通过较大力度的积极&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%B4%A2%E6%94%BF%E6%94%BF%E7%AD%96?source=article&quot;&gt;财政政策&lt;/a&gt;来提振市场信心。&lt;/p&gt;\n&lt;p&gt;近期，中国财政科学研究院院长刘尚希表示，特别国债的预算规模可以考虑达到5万亿，分次发行，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%A4%AE%E8%A1%8C?source=article&quot;&gt;央行&lt;/a&gt;扩表，零利率购买。实际执行下来，可以小于5万亿元，但基于当前市场悲观情绪蔓延，预算规模可以大一些。&lt;/p&gt;\n',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/z3.sinaimg.cn\\/auto\\/crop?size=200_134&amp;img=https%3A%2F%2Fn.sinaimg.cn%2Fsinanews%2F334%2Fw200h134%2F20200303%2F6ad6-iqfqmat7374405.jpg\",\"name\":\"\"}]}'),(4,0,1,1,1,0,1,0,0,0,0,0,0,1589018612,1589018612,1589018552,1589018758,'特朗普称四月份就业报告完全在预料之中 不该责怪他','','','财经综合','','',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/z4.sinaimg.cn\\/auto\\/crop?size=200_134&amp;img=https%3A%2F%2Fn.sinaimg.cn%2Fclient%2Ftransform%2F334%2Fw200h134%2F20200509%2F2ec6-iteyfww6790839.jpg\",\"name\":\"\"}]}'),(5,0,1,1,1,1,1,0,0,8,0,0,0,1589018700,1589018872,1589020168,0,'特朗普称四月份就业报告完全在预料之中 不该责怪他','','','财经综合','','&lt;article&gt;&lt;p&gt;美国总统唐纳德·&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%89%B9%E6%9C%97%E6%99%AE?source=article&quot;&gt;特朗普&lt;/a&gt;周五表示，政府报告显示&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%96%B0%E5%86%A0%E7%96%AB%E6%83%85?source=article&quot;&gt;新冠疫情&lt;/a&gt;导致美国损失大量&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%B0%B1%E4%B8%9A?source=article&quot;&gt;就业&lt;/a&gt;岗位并不令人意外，而且不应该责怪他。&lt;/p&gt;\n&lt;p&gt;“完全在预料之中，不奇怪，”他在接受采访时，数据正好发布。“即便是民主党人也不能怪我。我能做的就是让它恢复过来。”&lt;/p&gt;\n&lt;p&gt;美国劳工部周五公布的数据显示，由于实施社交隔离措施导致经济显著滑坡，4月份美国损失了2050万个就业岗位。失业率增长约两倍，达到14.7%。特朗普表示，他相信由于封锁措施的人为性质，就业数据会很快反弹。&lt;/p&gt;\n&lt;p&gt;“我们人为地关停了经济。这些工作都会回来的，他们会很快恢复，明年会非常繁荣。大家都做好了准备，我们必须要安全地重启。大家都准备好了，”他说。&lt;/p&gt;\n&lt;p&gt;他表示，如果不采取停业、停课、居家令等影响了经济的限制性措施，200万或者更多的人会因为病毒的传播而死去。&lt;/p&gt;\n&lt;p&gt;“我们那时候比谁都强。我们是整个世界羡慕的对象，然后他们来向我做了解释，他们说‘总统先生，一定得关停’，”特朗普周五表示。“从来没有人听到过这样的事情，但他们说的是对的。”&lt;/p&gt;&lt;/article&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"https:\\/\\/z4.sinaimg.cn\\/auto\\/crop?size=200_134&amp;img=https%3A%2F%2Fn.sinaimg.cn%2Fclient%2Ftransform%2F334%2Fw200h134%2F20200509%2F2ec6-iteyfww6790839.jpg\",\"name\":\"\"}]}'),(6,0,1,1,1,1,1,0,0,4,0,0,0,1589018996,1589019098,1589020168,0,'消失的外贸订单：东莞宁波等城市受重创 事关2亿人就业','','','财经综合','','&lt;article&gt;&lt;blockquote&gt;\n&lt;p&gt;&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%A4%96%E8%B4%B8?source=article&quot;&gt;外贸&lt;/a&gt;链条上的多米诺骨牌纷纷倒下&lt;/p&gt;\n&lt;p&gt;牵动了许多企业的命运&lt;/p&gt;\n&lt;p&gt;关乎基本的&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%B0%B1%E4%B8%9A?source=article&quot;&gt;就业&lt;/a&gt;和民生&lt;/p&gt;\n&lt;/blockquote&gt;\n&lt;p&gt;外贸的抗疫“持久战”&lt;/p&gt;\n&lt;p&gt;本刊记者/杨智杰&lt;/p&gt;\n&lt;p&gt;发于2020.5.11总第946期《中国新闻周刊》&lt;/p&gt;\n&lt;p&gt;两个多月前，东莞一家家具制造厂的外贸经理邓虹最头疼的，是工厂何时能复工。她不得不逐个给客户发邮件，说服对方把订单推迟到3月交货，同时担心破坏长期维护的客户关系。&lt;/p&gt;\n&lt;p&gt;进入3月，国内疫情缓和，大部分工人回到了工厂。情况却出现反转，此时，疫情“震中”从中国转移到欧美。3月20日起，原本催单的客户主动给邓虹发了邮件，称疫情下当地门店关停，订单继续推迟，时间待定。如今，邓虹所在的工厂再也没有接到一笔新订单，九成的海外订单被推迟。&lt;/p&gt;\n&lt;p&gt;&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%B5%B7%E5%85%B3?source=article&quot;&gt;海关&lt;/a&gt;总署4月14日公布的数据显示，今年1~3月&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%BF%9B%E5%87%BA%E5%8F%A3?source=article&quot;&gt;进出口&lt;/a&gt;总额9432.2亿美元，同比减少8.4%，其中出口同比减少13.3%，进口同比减少2.9%。专业商贸杂志《焦点视界》对全国203家外贸企业进行问卷调查，结果显示：45.6%的企业表示疫情对自身影响较大，面临部分困难，目前勉强维持经营。&lt;/p&gt;\n&lt;p&gt;&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%96%B0%E5%86%A0%E7%96%AB%E6%83%85?source=article&quot;&gt;新冠疫情&lt;/a&gt;“&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%BB%91%E5%A4%A9%E9%B9%85?source=article&quot;&gt;黑天鹅&lt;/a&gt;”重创各行各业，当全球的商贸和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%89%A9%E6%B5%81?source=article&quot;&gt;物流&lt;/a&gt;停摆，外贸行业也不可避免沦为重灾区。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;“退单潮”推倒多米诺骨牌&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;邓虹工作的家具制造厂有400多名工人，大部分货物出口海外，客户分布在中东、欧洲和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%BE%B3%E5%A4%A7%E5%88%A9%E4%BA%9A?source=article&quot;&gt;澳大利亚&lt;/a&gt;，是典型的出口型企业。3月10日，公司除了湖北籍的员工，其余工人全部到位。大家正准备大干一场，把前期的损失抢回来，却没料到国外疫情开始暴发。&lt;/p&gt;\n&lt;p&gt;最严重的是，欧美疫情重灾区，又恰好是中国主要的贸易伙伴。海关总署统计显示，2019年，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%AC%A7%E7%9B%9F?source=article&quot;&gt;欧盟&lt;/a&gt;、美国和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E4%B8%9C%E7%9B%9F?source=article&quot;&gt;东盟&lt;/a&gt;，分别是中国前三大贸易伙伴，其中，中国出口最多的欧盟国家是德国、荷兰，增速最快的是英国。“中国对美国、英国、法国、西班牙、意大利的出口依存度大于进口依存度，国外需求限制将导致中国出口面临压力。”国务院发展研究中心产业经济研究部研究室主任魏际刚等人撰文分析。&lt;/p&gt;\n&lt;p&gt;由于家具是刚需，邓虹所在的工厂仅仅是被推迟订单，情况不算最惨。3月以来，网上流传许多截图，在一些外贸论坛上，不少外贸从业者抱怨：“好几个美国大客户开始取消订单”“欧美订单全部取消，全公司停摆”。&lt;/p&gt;\n&lt;p&gt;“货物堆积在仓库，尾款没办法收回，供应商也会给我们施加压力。”邓虹告诉《中国新闻周刊》，“如果客人一直不要货，没有哪个老板能承受得了，要么只能让工人暂时放假。”&lt;/p&gt;\n&lt;p&gt;停工是最糟糕的情况，邓虹不希望它发生在自己身上。不过，厄运已经提前降临到了一些工厂。3月23日，东莞精度表业有限公司在厂内发布公告称，最重要的客户宝利“Fossil”属于美国品牌，现已全部停止下单，同时要求取消或暂停原生产订单，导致工厂无法正常开工，公司经营出现重大危机，面临随时关停的风险，接受全体员工辞职，全厂暂时放假3个月。&lt;/p&gt;\n&lt;p&gt;精度表业是当地一家知名成表厂。东莞一个小型的手表加工企业老板向《中国新闻周刊》提到精度表业以往的业绩时，语气中透露出些许羡慕，“Fossil是一个大客户，精度只做这一家产品的代工，一年就可以挣很多钱，我们是做不到的，我们合作的都是小客户。”&lt;/p&gt;\n&lt;p&gt;不过，正是这点将精度表业推入深渊。“某一个大客户占生意比重很大，风险就大。所以公司一般都会有至少三个客户，均分风险。”邓虹告诉《中国新闻周刊》。&lt;/p&gt;\n&lt;p&gt;中国贸促会研究院&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%9B%BD%E9%99%85%E8%B4%B8%E6%98%93?source=article&quot;&gt;国际贸易&lt;/a&gt;研究部主任赵萍告诉《中国新闻周刊》，这次疫情暴露出的问题之一，便是“对于单一国别的市场依赖程度过高，可能会在国际贸易中面临较高的、不确定的风险。”她建议，在国际贸易当中，不能把&lt;a class=&quot;article-a&quot; href=&quot;http://gu.sina.cn/ft/hq/nf.php?tabsource=cjzwy&amp;amp;symbol=JD0&quot;&gt;鸡蛋&lt;/a&gt;放在一个篮子里。要努力去探索市场多元化，来有效地分散风险，避免对单一市场的过度依赖。&lt;/p&gt;\n&lt;p&gt;也有一些企业无力招架，提前倒下。3月23日，东莞市茶山人社分局发布消息，在距离精度表业40多公里外的茶山镇，一家经营28年的港资企业——东莞泛达玩具有限公司，因外贸订单取消导致公司业务量骤减，资金链断裂，无法维持正常经营、宣布结业，老板目前欠薪逃匿。&lt;/p&gt;\n&lt;p&gt;《焦点视界》的调查显示，对于疫情带来的“挑战和风险”，1/4的公司表示市场需求萎缩、订单减少，但随之带来的，是&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%8E%B0%E9%87%91%E6%B5%81?source=article&quot;&gt;现金流&lt;/a&gt;紧张、货运受阻、通关困难、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E4%BE%9B%E5%BA%94%E9%93%BE?source=article&quot;&gt;供应链&lt;/a&gt;端效率下降、成本提高、客户流失等一系列连锁反应。&lt;/p&gt;\n&lt;p&gt;外贸链条上的多米诺骨牌纷纷倒下，牵动了许多企业的命运，也关乎基本的就业和民生。根据海关总署的统计，2019年，民营企业首次超过外企，成为中国第一大外贸主体，有进出口实绩的民营企业达到40.6万家。&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%95%86%E5%8A%A1%E9%83%A8?source=article&quot;&gt;商务部&lt;/a&gt;部长&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%92%9F%E5%B1%B1?source=article&quot;&gt;钟山&lt;/a&gt;表示，外贸&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%A4%96%E8%B5%84?source=article&quot;&gt;外资&lt;/a&gt;直接和间接带动就业超过2亿人，占就业总量的1/4左右，其中包括大量农村和贫困地区人口。&lt;/p&gt;\n&lt;p&gt;&lt;img src=&quot;default/20200509/8021adeca6b8bd79d000cc322012a9ed.jpg&quot; title=&quot;728c-iteyfww6698480.jpg&quot; alt=&quot;728c-iteyfww6698480.jpg&quot;&gt;&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;外向型城市的危机&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;新冠肺炎疫情对不少外贸依赖性的地方经济造成重创。&lt;/p&gt;\n&lt;p&gt;东莞被称为“世界工厂”，深度融入全球产业链，2019年全市进出口总额达到13801.65亿元。外需疲软，集中反映在了一季度的外贸数据上。今年一季度，东莞市外贸进出口2502亿元，同比减少14.3%。其中，出口1495.3亿元，减少13.3%；进口1006.7亿元，减少15.8%。&lt;/p&gt;\n&lt;p&gt;“疫情给东莞外贸带来三方面的影响：一是海外需求端萎缩，这是当前影响企业的主要问题。二是供应链受限，随着日韩疫情趋稳已经有所缓解；三是国际通道受阻，货物、人员流动受到制约。”东莞商务局副局长黄朝东指出。&lt;/p&gt;\n&lt;p&gt;除了东莞以外，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%8F%A0%E4%B8%89%E8%A7%92?source=article&quot;&gt;珠三角&lt;/a&gt;、&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=512650&quot;&gt;长三角&lt;/a&gt;、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%8E%AF%E6%B8%A4%E6%B5%B7?source=article&quot;&gt;环渤海&lt;/a&gt;也汇集许多外向型城市。2019年，《中国海关》杂志公布了2018年“中国外贸百强城市”排名，深圳、上海、东莞、苏州、珠海、厦门、&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%B9%BF%E5%B7%9E?source=article&quot;&gt;广州&lt;/a&gt;、宁波、天津和北京是前十大外贸强市。第一财经曾统计，东莞、苏州、深圳、厦门外贸进出口总额与GDP的比值均超过100%，外向度最高。&lt;/p&gt;\n&lt;p&gt;对于外向型城市而言，疫情带来的城市经济复苏难题，不是光靠自己就能解决。&lt;/p&gt;\n&lt;p&gt;“当前宁波外贸企业的困难，已从复工复产过程中存在的返岗难、物流难、产业链配套难、订单履约难，转为买家收货和付款风险上升、外需下降、资金链绷紧、接单困难、接单以后不敢生产、生产以后不敢发货等新的难题。”宁波商务局告诉《中国新闻周刊》，一季度，宁波出口1148.1亿元，进口694.1亿元，同比分别下降11.8%和7.6%。&lt;/p&gt;\n&lt;p&gt;对很多城市而言，无法左右的是海外市场的需求萎缩。4月14日，国际货币基金组织（IMF）在最新一期世界经济展望报告中预测，2020年&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%85%A8%E7%90%83%E7%BB%8F%E6%B5%8E?source=article&quot;&gt;全球经济&lt;/a&gt;萎缩3%，美国和&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%AC%A7%E5%85%83%E5%8C%BA?source=article&quot;&gt;欧元区&lt;/a&gt;将分别萎缩5.2%和7.3%。2020年全球经济将急剧收缩3%，比2008~2009年&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%87%91%E8%9E%8D%E5%8D%B1%E6%9C%BA?source=article&quot;&gt;金融危机&lt;/a&gt;期间的情况还要糟糕得多，为20世纪30年代大萧条以来最糟经济衰退。国际&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%9B%B6%E5%94%AE?source=article&quot;&gt;零售&lt;/a&gt;巨头包括Gap、JCP、&lt;a class=&quot;article-a&quot; href=&quot;//gu.sina.cn/us/hq/quotes.php?code=WMT&amp;amp;tabsource=cjzwy&quot;&gt;沃尔玛&lt;/a&gt;、&lt;a class=&quot;article-a&quot; href=&quot;//gu.sina.cn/us/hq/quotes.php?code=M&amp;amp;tabsource=cjzwy&quot;&gt;梅西百货&lt;/a&gt;、H&amp;amp;M、Zara、Tommy等都已经着手推迟发货或者取消订单。&lt;/p&gt;\n&lt;p&gt;宁波市商务局表示，据不完全统计，从3月份起，全球已经有64场展会延期或者取消，包括德国科隆五金工业展、法兰克福灯光照明及建筑物技术与设备展、香港电子展等。国内展会中，华交会已经延期，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%B9%BF%E4%BA%A4%E4%BC%9A?source=article&quot;&gt;广交会&lt;/a&gt;改为网上举办。过去每年的展会上，宁波外贸企业会承接丰厚的新订单，常规的境外客户也会借此商业拜访。如今，这些开拓市场的机会，都因疫情被迫中断。&lt;/p&gt;\n&lt;p&gt;厦门是另一个外贸大市，该市商务局向《中国新闻周刊》提供的数据显示，在摸底的210家外贸流通型企业一季度订单中，189家企业在手订单数量同比减少，平均降幅达24%。影响面不仅仅集中在东南沿海省份。公开资料显示，进出口相关的企业大部分集中在广东、江苏、浙江、上海、山东等外贸大省，近些年，也正向湖南、云南、四川、重庆等中西部省市蔓延。&lt;/p&gt;\n&lt;p&gt;过去的传统出口&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=161715&quot;&gt;大宗商品&lt;/a&gt;受到冲击最大。今年年初，海关总署副署长邹志武介绍2019年我国外贸发展的6大特点，其中之一是“出口商品以机电产品和劳动密集型产品为主，机电产品所占比重接近六成”。&lt;/p&gt;\n&lt;p&gt;宁波和厦门商务局向《中国新闻周刊》提供的数据均显示，机电产品和劳动密集型产品受疫情冲击最为显著。一季度，厦门机电产品出口335.9亿元，下降8.4%，其中液晶显示板同比下降42.8%。劳动密集型产品出口215.8亿元，下降10.4%。3月份，宁波市的服装、纺织品、塑料制品、家具、玩具、鞋类、箱包等7大类劳动密集型产品出口下降15.6%。&lt;/p&gt;\n&lt;p&gt;不过，防疫物资出口，带来了为数不多的增长亮点。疫情期间，有些企业开始转向生产防疫物资，对一些地方的出口形成一定支撑。一季度，厦门市医疗物资出口5.6亿元，同比增长41.5%。3月份，宁波市的医药品和医疗仪及器械分别增长54%、19%。&lt;/p&gt;\n&lt;p&gt;宁波的高新技术产品出口也逆势增长。数据显示，一季度宁波市高新技术产品出口99.4亿元，同比增长5.5%，甚至比去年同期提升1.4个百分点。其中电子元器件出口增长38.7%，拉动全市出口增长0.6个百分点。&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;艰难的自救&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;Jaden在东莞一家女装加工企业工作，企业产品全部出口，和一些国外快消女装品牌合作，3/4的客户在欧美。他对《中国新闻周刊》介绍，复工后，工厂没有接到新订单，原先的订单中，60%被取消或者延迟。&lt;/p&gt;\n&lt;p&gt;4月初，工厂接到一个美国重要客户的大订单——6万件女装。在“订单荒”的当下，这无疑是令人兴奋的事情。但是坏消息很快就来了，“当天我们工厂把布料、辅料全部买好，第二天，对方就取消了订单。”Jaden说。&lt;/p&gt;\n&lt;p&gt;工厂压力陡然增加，除了被动接受，他们也在主动寻求自救。不少企业尝试出口转内销，起初，Jaden所在工厂尝试直播卖货。他们与&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%94%B5%E5%95%86?source=article&quot;&gt;电商&lt;/a&gt;平台合作，找人气高的&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%BD%91%E7%BA%A2?source=article&quot;&gt;网红&lt;/a&gt;主播带货。但是10天下来，销售量极低，老板放弃了这条路。Jaden解释，卖不出去货，是因为外贸服装真的不适合国内市场，“我们主要是开发欧美的款式，与国内流行的款式、颜色不同步，如果开发国内的流行款式，则需要时间。”&lt;/p&gt;\n&lt;p&gt;在&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%AE%B6%E5%85%B7%E8%A1%8C%E4%B8%9A?source=article&quot;&gt;家具行业&lt;/a&gt;，出口转内销也很难。“内销和外销产品，完全不一样。第一，材料不同。比如外销产品，我们目前主要以密度&lt;a class=&quot;article-a&quot; href=&quot;http://gu.sina.cn/ft/hq/nf.php?tabsource=cjzwy&amp;amp;symbol=FB0&quot;&gt;纤维板&lt;/a&gt;材料为主，但在内销市场，大家不接受这种材料，觉得不&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%8E%AF%E4%BF%9D?source=article&quot;&gt;环保&lt;/a&gt;；第二，设计审美也不同。”邓虹对《中国新闻周刊》说。&lt;/p&gt;\n&lt;p&gt;在4月16日的商务部例行新闻发布会上，商务部新闻发言人高峰表示，内外贸市场环境不同，外贸企业在拓展内销市场时，面临拓展销售渠道难；生产线转向难；品牌建设难等痛点。但商务部也在通过降低企业内销成本、加大内销支持力度、用好产销对接平台、拓宽线上合作渠道等具体方法，帮助外贸企业拓展国内市场。&lt;/p&gt;\n&lt;p&gt;不少城市也在主动探索出从外贸到内销的转型之路。宁波商务局告诉《中国新闻周刊》，为推动外贸企业拓展国内市场，宁波市与&lt;a class=&quot;article-a&quot; href=&quot;//gu.sina.cn/us/hq/quotes.php?code=PDD&amp;amp;tabsource=cjzwy&quot;&gt;拼多多&lt;/a&gt;签订协议，计划未来1年内，宁波超过1.5万家企业参与本次活动，覆盖全市各优势产业集群，预计带动企业在拼多多平台年销售额超过800亿元，实现外贸转内销市场订单超200亿元。近期，东莞市也与&lt;a class=&quot;article-a&quot; href=&quot;//quotes.sina.cn/hk/company/quotes/view/09988?tabsource=cjzwy&quot;&gt;阿里巴巴&lt;/a&gt;、拼多多合作，开拓国内市场。&lt;/p&gt;\n&lt;p&gt;拥抱&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E8%B7%A8%E5%A2%83%E7%94%B5%E5%95%86?source=article&quot;&gt;跨境电商&lt;/a&gt;，是企业自救的另一种选择。跨境电商，是指跨境网络零售，常见的平台有阿里巴巴国际站、亚马逊、&lt;a class=&quot;article-a&quot; href=&quot;//gu.sina.cn/us/hq/quotes.php?code=EBAY&amp;amp;tabsource=cjzwy&quot;&gt;eBay&lt;/a&gt;等。Jaden的公司注意到，疫情期间，有些国外女装品牌实体店歇业，只能在网上销售，他们通过跨境电商和中国工厂合作，做得很好。Jaden所在的工厂通过跨境电商合作，拿到了不少订单，弥补了近期订单不足的困境。Jaden介绍，复工以来，工厂仍然正常运转，工人没有降薪，只是因为订单量减少，遣散了100多名工人，还有300多人得以继续工作。&lt;/p&gt;\n&lt;p&gt;跨境电商也是近期外贸的一个新增长点。“外贸新业态增长比较迅猛。今年一季度，通过海关跨境电商平台进出口额增长速度达到34.7%，说明新业态活力充沛。在适应疫情带来的新形势和新挑战过程中，表现出了较强的适应性和自主发展能力。”赵萍对《中国新闻周刊》说。&lt;/p&gt;\n&lt;p&gt;她建议，外贸和供应链企业，要积极拥抱数字经济，通过发展跨境电商和数字贸易，实现对外出口和线上线下的融合，“这样就可以既保持原有的老客户以及原有的贸易渠道，同时又拓展新的增长更快的线上渠道。”&lt;/p&gt;\n&lt;p&gt;&lt;strong&gt;一场持久战&lt;/strong&gt;&lt;/p&gt;\n&lt;p&gt;“国内复工复产带动外贸出口供应能力、以及国内进口需求稳步提升，对外贸稳增长形成了有力的支撑。”赵萍指出，当前，全国超过76%的外贸重点企业产能恢复率超过70%。&lt;/p&gt;\n&lt;p&gt;她认为，3月份外贸进出口回暖，也和国内消费市场需求逐步恢复有关。“对猪肉等民生&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%B6%88%E8%B4%B9%E5%93%81?source=article&quot;&gt;消费品&lt;/a&gt;的需求不断增长，也促进了这些商品的进口增速提升。一季度，&lt;a class=&quot;article-a&quot; href=&quot;http://gu.sina.cn/ft/hq/nf.php?tabsource=cjzwy&amp;amp;symbol=B0&quot;&gt;大豆&lt;/a&gt;进口量增加了6.2%，猪肉进口量增加1.7倍，&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E7%89%9B%E8%82%89?source=article&quot;&gt;牛肉&lt;/a&gt;进口量增加了64.9%。” 赵萍分析，另外，这与国内深入推进“&lt;a class=&quot;article-a&quot; href=&quot;http://stocks.sina.cn/fund/?tabsource=cjzwy&amp;amp;code=502013&quot;&gt;一带一路&lt;/a&gt;”战略，推动外贸转型升级有着直接关系。一季度，国内对东盟以及“一带一路”沿线国家进出口逆势上涨，增速保持在较高的水平。&lt;/p&gt;\n&lt;p&gt;外贸行业也并不都是坏消息。3月，中欧班列共开行809列，同比增长30%。“源源不断的中欧班列，反映出欧洲市场急需中国的各种日用消费品，包括劳动密集型的瓷砖、家电、鞋帽、箱包、儿童用品、玩具等产品。另外，拉美国家也在增加中国商品的订单。”商务部原副部长&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E9%AD%8F%E5%BB%BA%E5%9B%BD?source=article&quot;&gt;魏建国&lt;/a&gt;撰文分析，中国最早复工复产，预计疫情中后期，全球的市场订单都将聚集于中国，至于进口，由于全球外贸市场都出现疲惫状态，唯一的亮点就在中国。他预估，在疫情期间&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E5%85%A8%E7%90%83%E8%B4%B8%E6%98%93?source=article&quot;&gt;全球贸易&lt;/a&gt;总量下降时，中国的进出口贸易量会逆势而上。&lt;/p&gt;\n&lt;p&gt;尽管如此，受访专家们普遍认为，二季度外贸的压力仍然很大。几个东莞的工厂告诉《中国新闻周刊》，工厂现在的出口订单只能做到4月底或者上半年，现在依然没有客户来询价、谈业务，如果情况一直没有改变，工厂就会面临无外贸订单可做的状况。&lt;/p&gt;\n&lt;p&gt;宁波市商务局告诉《中国新闻周刊》，综合“订单+清单”监测预警系统和近期企业调研等情况，宁波市进出口尤其是出口增速将取决于全球疫情的控制程度，总体反映，二季度出口形势更为严峻。&lt;/p&gt;\n&lt;p&gt;出口是拉动经济的三驾马车之一，二季度外贸依旧不好过，对经济会产生怎样的影响？赵萍分析，外贸受阻，肯定会对经济产生一定负面影响，“但是影响中国经济增长的程度相对较小”。&lt;/p&gt;\n&lt;p&gt;“近几年，外贸净出口占GDP的比重在持续下降，2018年数据显示，我国的GDP构成中，外贸净出口的占比只有0.7%，对GDP的贡献率是11%。因此，无论是从GDP的存量还是增量上看，外贸占比都是三驾马车中最低的。”但赵萍指出，净出口规模大幅度下降，可能会拖累GDP增长，她预测，今年净出口对GDP的贡献率可能为个位数，甚至可能为负。另外，外贸对中国经济的影响，会通过投资和消费显现出来。&lt;/p&gt;\n&lt;p&gt;“一方面，由于受到疫情影响，大宗商品、中间产品以及关键零部件的进口增速下降，可能会影响国内投资增长。国内基础设施以及相关产业的投资，会因为进口增速下降而受到影响，从而影响GDP。另一方面，进口消费品，可以更好满足国内市场的消费需求，但是疫情影响消费品进口，也会影响消费对GDP的贡献。”赵萍对《中国新闻周刊》解释。&lt;/p&gt;\n&lt;p&gt;“受到全球疫情影响，世界经济陷入严重衰退，已成必然的结果。”赵萍指出。对于外贸及其供应链上的企业，她建议，要在疫情面前抓住外贸新业态这个新机会，更好地利用线上平台拓展外贸业务，通过线上出口来弥补一般贸易出口的损失。其次，外贸企业可以重点关注外贸增长最快的市场，“目前看主要是东盟，包括东盟在内的‘一带一路’沿线的国家。”&lt;/p&gt;\n&lt;p&gt;厦门市商务局向《中国新闻周刊》提供的资料显示，一季度，出口市场中传统市场降幅高于&lt;a class=&quot;article-a&quot; href=&quot;//cj.sina.cn/person_menu/view/%E6%96%B0%E5%85%B4%E5%B8%82%E5%9C%BA?source=article&quot;&gt;新兴市场&lt;/a&gt;，厦门对美国、欧盟、东盟出口分别下降16.9%、9.1%和6.4%，而对“一带一路”沿线国家出口232.9亿元，下降5.5%。接下来，厦门市也计划引导企业加大开拓受疫情影响较小的大部分“一带一路”国家，拓展新客户。&lt;/p&gt;\n&lt;p&gt;“从进出口商品看，一季度，我国与东盟国家在集成电路贸易进出口上，出现较大增幅，&lt;a class=&quot;article-a&quot; href=&quot;//quotes.sina.cn/hs/company/quotes/view/sz000061?tabsource=cjzwy&quot;&gt;农产品&lt;/a&gt;的进出口也增速很快。”赵萍建议，像广东、浙江这些外贸依存度高、工业基础好的省份，可以更多考虑和东盟开展集成电路的产业内贸易。&lt;/p&gt;\n&lt;p&gt;无论是此前的中美贸易战，还是新冠疫情席卷全球，外贸企业都被推到了前排。为了减少风险，商务部研究院国际市场研究所副所长白明建议，从长远看，外贸企业需要做两手准备，不要把宝全部押在国外市场，可以同时拓展中国市场，“假设自己进入一个新的市场，以高标准的模式进行拓展”。&lt;/p&gt;\n&lt;p&gt;（应受访者要求，邓虹为化名）&lt;/p&gt;\n&lt;p&gt;&lt;br&gt;&lt;/p&gt;\n',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"https:\\/\\/z5.sinaimg.cn\\/auto\\/crop?size=200_134&amp;img=https%3A%2F%2Fn.sinaimg.cn%2Fclient%2Ftransform%2F334%2Fw200h134%2F20200509%2Fa3a2-iteyfww6799112.jpg\",\"name\":\"\"}]}'),(7,0,1,1,1,1,1,0,0,5,0,0,0,1589019263,1589019263,1589020168,0,'我国股票市场的投资者状况：自然人投资者经验和行权意识提升','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;&lt;span style=&quot;font-family: KaiTi_GB2312, KaiTi;&quot;&gt;作者|证券投资者保护基金公司全国股票市场投资者状况调查组‘调查组组长：刘慧兰；调查组成员：肖蕊　吴祖欣　李静　张琦　韩桃　万明皓　张靖雯；作者单位：中国证券投资者保护基金有限责任公司’&lt;/span&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;span style=&quot;font-family: KaiTi_GB2312, KaiTi;&quot;&gt;文章|《中国金融》2020年第9期&lt;/span&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;截至2019年12月31日，全国股票投资者数量达15975.24万，较上年同期增长9.04%，其中自然人投资者占比99.76%。日渐庞大的投资者群体反映了我国广大人民群众日益增长的财富管理需求，也对投资者保护工作提出了新的考验。较为科学地掌握我国投资者状况，是有关各方进一步把握资本市场运行规律，精准开展投资者保护的基础。中国证券投资者保护基金有限责任公司（以下简称“投保基金公司”）作为国务院批准设立的投资者保护专门机构，一直高度关注并持续观测分析我国股票市场的投资者状况，为立法机构、监管部门、自律组织、市场主体开展投资者保护工作提供依据。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;2019年12月30日~2020年1月17日，投保基金公司组织开展了“2019年度全国股票市场投资者状况调查”。本次调查共收回有效问卷19.8万份，参与调查者覆盖自然人投资者（197658份）、一般机构投资者（613份）、专业机构投资者（188份），全部为市场活跃投资者，统计分布特点符合总体特征。调查显示，我国资本市场投资者结构未呈根本性改变，但个人投资者行为特点继续呈现积极变化，与此同时机构投资者作用凸显，投资者选择更加理性。主要结论如下。 &lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;自然人投资者知识、经验和行权意识有所提升&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;自然人投资者证券知识水平有所提升。当问及投资者证券知识水平时，受调查投资者中属于“新手上路”的占15.3%；“对投资有基本认知”的占48.6%，占比最高；“对投资产品较为熟悉”和“对投资较为专业”的占比合计为36.1%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;与上一年度相比，属于“新手上路”的占比降低了13个百分点，属于“对投资有基本认知”“对投资产品较为熟悉”和“对投资较为专业”的占比均有不同程度的提升，其中“对投资产品较为熟悉”的占比提升9.1个百分点，提升程度最为明显。2019年，自然人的整体证券知识水平有所提升，但仍有提升空间。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;自然人投资者的投资经验有了较大幅度的提高。对于金融产品的投资经验，受调查投资者曾购买过的金融产品前三位依次是股票及期货（76.4%）、银行理财产品（66.6%）、公募基金及&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;证券公司&lt;/a&gt;或基金公司集合理财计划（44.8%）等。与上一年度相比，曾购买过集合理财计划和公募基金等金融产品的投资者占比增长最快，由2018年的26.7%提升至2019年的44.8%，增长18.1个百分点；其次是股票、期货等，由66.6%提升至76.4%；投资者对其余各类型金融产品的投资经验均有不同程度的提升。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;与2018年相比，在股票投资中盈利的受调查自然人投资者比例由四分之一提升至半数以上，“10%~30%”为主要盈利区间。2019年，受调查投资者中股票投资盈利的合计占比55.2%，盈亏持平的占比17.6%，亏损的合计占比27.2%。从各盈亏区间的投资者占比来看，“盈利10%~30%”的投资者最多，占比23.6%；其次是“盈亏持平”的投资者，占比17.6%；“盈利10%以内”的投资者占比次之，为16.6%。与上一年度相比，盈利的投资者比例由24.9%提升至55.2%。具体来看，盈利50%以上的投资者比例由3.5%提升至5%，盈利30%~50%的投资者比例由3.1%提升至10%，盈利10%~30%的比例由7.5%提升至23.6%，盈利10%以内的比例由10.8%提升至16.6%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;受调查自然人投资者认为自身证券知识储备及对市场的理解是决定其股票投资盈亏的最主要因素。在投资决策的方式上，67.1%的受调查投资者依靠自己的分析作出投资决策，占比最多；根据朋友推介或跟着朋友投资的占比16.5%；根据网上投资专家推介和接受投资顾问辅导的两类投资者占比合计不足两成。与上一年度相比，自己分析决定投资策略的比例由72.9%降至67.1%，而倾向于接受投资顾问辅导的投资者比例由6.4%提升至10.1%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;自然人投资者的行权意识有所提升。调查显示，2019年行使过股东权利的受调查投资者占比17.5%，与上一年度相比增加了4.4个百分点。从投资者行使的主要股东权利类型来看，决策参与权和知情权仍然是行使最多的两项权利，同时受调查投资者行使决策参与权、撤销请求权、建议质询权、求偿权的比例较上一年度均有不同程度的提升。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在各项投资者保护工作措施中，明确市场规则并强化信息披露仍是受调查自然人投资者重点关注的方面。在列出的11项投资者保护工作中，“进一步明确市场规则，强化信息披露”是投资者认为最应明确和强调的方面，与上一年度调查结果一致。投资者对“增加上市公司分红制度”“进一步强化投资者教育和宣传引导”“修改完善退市制度”“强化证券违法犯罪的打击力度，加大行政处罚限额”和“加强证券基金行业文化建设”的关注度也较高，均排在前六位。其他投资者保护举措受到的关注度相对较低。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;一般机构投资者与自然人投资者的比较&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在平均持股时间上，受调查一般机构投资者要长于自然人投资者。从平均持股时间来看，受调查一般机构投资者的投资偏向中长期，平均持股时间在1~6个月的受调查者占30.0%，6个月至1年的占28.1%，1~3年的占20.6%，3年以上的占15.3%，而1个月以内的仅占6.0%。对于自然人投资者，平均持股时间在1~6个月的受调查者占32.8%，6个月至1年的占24.6%，1~3年的占17.4%，1个月以内的占比14.3%，3年以上的占10.9%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在买卖股票的操作风格上，一般机构投资者以长线为主，自然人投资者以中长线为主。在买卖股票的操作风格方面，55.5%的受调查一般机构投资者倾向于“价值投资、长线为主”，选择“波段操作、中线为主”和“快进快出，短线为主”的占比分别为29.5%和6.4%。自然人投资者倾向于以中长线投资为主，其中，38.1%的受调查自然人投资者倾向于“波段操作，中线为主”，占比最高；35.2%倾向于“价值投资，长线为主”；倾向于“快进快出，短线为主”的受调查自然人投资者占比17.9%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在杠杆使用方面，使用杠杆资金炒股的一般机构投资者和自然人投资者占比均为三成左右。调查显示，受调查一般机构投资者投资股票时使用杠杆资金的比例较低，仅27.6%的受调查者表示使用了杠杆资金，且杠杆资金占本金的比例不高，基本在本金的50%以内。本次调查中使用杠杆资金炒股的自然人投资者占比为29.1%；使用杠杆资金的比例未超过自有本金的投资者占比为25.4%；使用杠杆资金的比例超过自有本金的投资者较少，仅占3.7%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在止盈变现方面，一般机构投资者对于止盈变现的收益率区间选择与自然人投资者差别不大。调查显示，九成以上的受调查一般机构投资者表示投资股票盈利10%以上才会卖出变现，选择在盈利10%~30%、30%~50%和50%以上时卖出变现的受调查者占比分别为33.9%、36.2%和22.2%。受调查自然人投资者对于股票投资的盈利，多数选择在10%~30%和30%~50%两个盈利区间卖出变现，其选择比例分别为38.8%和32.1%，合计占比70.9%；在50%以上和10%以内两个盈利区间卖出变现的投资者相对较少，分别占比20.4%和8.7%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在投资目标方面，与自然人投资者相比，一般机构投资者更注重获取中长期收益。调查结果显示，受调查一般机构投资者的投资目标多为获取中长期收益，尽可能实现收益的稳定增长。具体而言，对于投资目标，58.6%的受调查者表示注重长期收益、希望稳定增长，只有6.0%的受调查者表示注重短期收益、追求高波动，余下35.4%的受调查者表示投资目标介于前两者之间。对于自然人投资者，51.6%的受调查自然人投资者表示“注重长期受益，希望稳定增长”，13%的受调查者表示“注重短期受益，追求高波动”，剩余受调查者认为自己的投资目标介于上述两者之间。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;一般机构投资者在投资金融产品时最关注产品风险，而自然人投资者最关注收益率。本次调查中，受调查一般机构投资者表示在投资金融产品时主要考虑的因素是风险程度和收益率，且对风险程度的选择占比（73.6%）略高于对收益率的选择占比（69.0%），主要考虑投资期限和买卖便利度的占比分别为17.6%和16.6%，而相关投资费用和最低投资额度则不是一般机构投资者考虑的主要因素，选择比例很低。对于自然人投资者，78.5%的受调查者选择“收益率”，54.1%的受调查者选择“风险程度”。相比之下，“投资期限”“买卖的便利度”“相关的投资费用”和“最低投资额度”对投资者选择投资品种的影响较小，选择比例均较低。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;专业机构投资者的情况&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;2019年专业机构投资者的盈利情况显著高于一般机构投资者和自然人投资者。本次接受调查的188位专业机构投资者所在机构或所管理的产品2019年获利情况良好，年度有盈利的机构或产品合计占比高达91.4%，其中，盈利10%~30%的占35.6%、盈利30%~50%的占25.5%；年度盈亏持平的机构或产品占5.9%，而年度亏损的合计占比仅为2.7%。受调查一般机构投资者股票投资获利情况较好，共有68.9%的受调查者表示盈利，其中盈利30%以内的占到48.6%，21.9%的受调查者表示盈亏持平，表示亏损的受调查者仅占9.2%。受调查自然人投资者中股票投资盈利的合计占比55.2%。其中，“盈利10%~30%”的投资者最多，占比23.6%；盈亏持平的占比17.6%；亏损的合计占比27.2%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;宏观经济预期和行业基本面变化是影响专业机构投资者对市场预期的主要因素，在不同的市场预期下，专业机构投资者的股票持仓情况存在明显差异。受调查专业机构投资者普遍认为影响其所在机构对于市场整体预期的主要因素是“宏观经济预期”和“行业基本面变化”，选择这两项的占比分别为62.2%和60.1%，而“场内外资金变化”“国际经济金融环境”以及“技术指标”的选择比例分别为21.8%、19.1%和14.9%。在预期市场未来处于不同阶段时，受调查者所在机构或所管理产品的股票整体持仓仓位差异较大，预期市场走势向&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;好时&lt;/a&gt;则选择高仓位的受调查者占比较大，预期市场走势不佳时则选择低仓位的受调查者占比较大。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;超四成受调查专业机构投资者所在机构或所管理的产品中股票投资金额占比在80%以上，过半数重点配置了科技行业。受调查专业机构投资者中，其所在机构或所管理的产品中股票投资金额在各类型投资中占比较大。其中股票投资金额占比在80%以上的有44.1%，股票投资金额占比在50%~80%的有28.2%，股票投资金额占比在50%以下的合计为27.7%。受调查者所在机构或所管理的产品在2018年与2019年的重点配置行业基本一致，电子、计算机、通信等科技行业位列第一，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;医药生物&lt;/a&gt;次之，日常消费位列第三。有所区别的是，2018年机构对上述三个行业的配置相对均衡，而2019年机构对科技行业的配置更为集中，有一半的受调查机构在2019年均重点配置了科技行业。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;关于投资者保护的下一步展望&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;做好资本市场投资端的研究。目前传统的资本市场研究是以上市公司为核心，基于融资端的研究；针对投资者交易行为、心理预期、情绪因素等投资端的研究相对较少。为适应投资者保护工作的需要，我们应当加强投资者调查分析工作，不断丰富投资者角度的研究分析方法和工具，更高效、精准地获取基于投资端的第一手数据，进而在全面掌握投资者基本状况的基础上深入开展对投资者行为结构、情绪因素等方面的分析与研究，为完善资本市场投资者保护、实现让广大人民群众财富保值增值的普惠金融提供助力。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;运用科技监管提升投资者保护效能。伴随着以互联网、大数据、人工智能应用为主要特征的金融科技的快速发展，我们需要科技监管的思维和前沿技术的运用来适应投资者保护新形势的需要。一方面，需要立法、司法、行政以及社会各方的共同努力来实现投资者保护相关数据信息的融合，通过健全相关机制和建设投资者保护数据中心平台来实现信息和资源的共享；另一方面，要强化科技思维、提升技术能力，运用科技手段实现对投资者权益的精准维护，从而节约监管资源，提升投资者保护效能。■&lt;/p&gt;\n&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"http:\\/\\/k.sinaimg.cn\\/n\\/spider202059\\/629\\/w900h529\\/20200509\\/18b3-itmiwry2465535.jpg\\/w160h120l1t1a88.jpg\",\"name\":\"\"}]}'),(8,0,1,1,1,1,1,0,0,2,0,0,0,1589019369,1589019400,1589020168,0,'道指又大涨，下半年经济将报复性反弹？A股应该关注啥？','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;全球确诊超400万！美国新增3万，彭斯新闻秘书被感染！&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;道指&lt;/a&gt;又大涨，下半年经济将报复性反弹？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;证券时报 彭勃 e公司官微&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美国白宫又有重要人员感染新冠，这次是美国副总统彭斯的新闻秘书。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;世界卫生组织8日公布的最新数据显示，中国以外新冠确诊病例达到3675552例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;世卫组织每日疫情报告显示，截至欧洲中部时间8日10时（北京时间16时），中国以外新冠确诊病例较前一日增加87723例，达到3675552例；中国以外死亡病例较前一日增加5429例，达到254831例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;全球范围内，新冠确诊病例较前一日增加87729例，达到3759967例；死亡病例较前一日增加5429例，达到259474例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;Worldometers实时统计数据显示，截至目前，全球新冠肺炎确诊病例累计超过400万例，达4000282例，死亡病例275423例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;特朗普表示，美国可能最终有9.5万人或更多人死于冠状病毒。美国约翰斯·霍普金斯大学疫情实时监测系统统计，截至美东时间5月8日下午5时32分，美国已有新冠病毒感染病例1281246例，其中包括死亡病例76901例。美国新增病例为28335例，新增死亡病例为1454例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;英国在当地时间5月8日发布新增的626例新冠死亡病例中，有一名6周大的婴儿，该婴儿目前为英国年龄最小的新冠肺炎死亡病例。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;彭斯新闻秘书新冠病毒检测呈阳性&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;当地时间8日，特朗普在记者会上确认，美国副总统彭斯的新闻秘书凯蒂·米勒新冠病毒检测呈阳性。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;特朗普说，她在很长一段时间里的检测结果都很好，但今天突然间，她的检测结果呈阳性。特朗普也确认自己没有和米勒进行接触，但她经常和彭斯接触。白宫同时也在向记者提供更多的检测。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;凯蒂·米勒的丈夫在白宫担任高级顾问，凯蒂现年25岁。特朗普的一名贴身人员新冠病毒检测呈阳性后，特朗普和彭斯将每天接受新冠病毒检测。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;为此，彭斯推迟赴爱荷华州的行程，最新的新冠病毒检测结果呈阴性。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;又大涨！道指飙升450点&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;虽然感染人数仍在不断增加，但美股没有停下反弹的步伐。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;周五美国三大股指集体收高，道指涨逾450点，纳指涨1.58%，标普500指数涨1.69%。卡特彼勒涨4.5%，埃克森美孚涨4.4%，波音涨3.7%，纷纷领涨道指。金山云上市首日收涨逾40%。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;美国大型科技股多数上涨，苹果涨2.38%，亚马逊涨0.51%，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;奈飞&lt;/a&gt;跌0.22%，谷歌涨1.1%，Facebook涨0.52%，微软涨0.59%，特斯拉涨5.05%。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;热门中概股集体上涨，阿里巴巴涨2.5%，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;京东&lt;/a&gt;涨4.51%，百度涨1.62%；美美证券涨24.53%，36氪涨17.72%，趣店涨14.38%，唯品会涨13.54%，迅雷涨12.06%，拼多多涨9.09%，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;蔚来汽车&lt;/a&gt;涨4.13%，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;网易&lt;/a&gt;涨3.58%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在市场情况不断好转的情况下，美联储继续下调国债购买规模，将下周（5月11日-5月15日）每日购债规模由80亿美元下调至70亿美元。此外，MBS购买量降至每日50亿美元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美联储本轮QE始于3月13日，3月19日至4月1日期间国债购买规模一度达到每日750亿美元。进入4月后，随着市场流动性缓解，以及其他配套政策陆续上线，美联储购债脚步开始逐步放缓，每日购债规模已较峰值下降九成。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美国下半年经济增速将为20%？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美国劳工部周五公布的数据显示，4月季调后非农就业人口录得-2050万人，预期为-2200万人，创纪录最大降幅；4月失业率录得14.7%，低于预期的16%，创纪录新高。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;虽然美国相关数据惨不忍睹，但股市为何还在走高？事实上，还是受经济重启利好影响。而下半年美国经济被预计将迎来报复性反弹。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美国国家经济顾问库德洛就表示，美国国会预算办公室（CBO）预计下半年经济增速将为20%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;特朗普也表示，今年第三季度将是一个过渡期，明年将是很好的一年。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;伊利诺伊州出现与新冠病毒相关未知疾病&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;当地时间5月8日，《芝加哥论坛报》称美国伊利诺伊州出现与新冠病毒相关的未知疾病，目前至少有6名儿童患病，症状包括皮疹、发热、手脚肿大、呕吐等。专家表示，这是一种炎症性疾病。如果患者血压突降，体内器官运作异常，将可能出现休克。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;研究发现，患病儿童多数可能曾感染新冠病毒，因为在他们体内能够检测到新冠病毒的抗体。类似疾病已经在纽约及欧洲部分城市出现。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;当地时间5月8日，世卫组织卫生紧急项目负责人迈克尔·瑞安表示，新冠病毒通过呼吸系统传播，但部分患者出现其他的炎症，如心血管或身体其他部位，一些病例出现脑炎、肿胀等脑部炎症，仍需要进一步的研究。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;WHO警告：各国应缓慢解封&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;随着世界各地经济开始重启，世界卫生组织再次发出警告。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;世界卫生组织卫生紧急项目技术负责人范凯尔克霍弗周五再次强调，各国政府需要以遏制疫情为前提，缓慢而可控地解除封闭，从而复工复产、重启经济。各国还需提高它们的病毒检测能力和流行病学调查能力。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;范凯尔克霍弗表示，世界与病毒之间的拉锯战还会持续一段时间。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;不过，目前世界经济状况下，各国重启经济已是不得不做的决定，今日一组数据显示，墨西哥和巴西的汽车产量在4月份崩跌99%，仅仅生产了5569台机动车辆，因为爆发新冠肺炎疫情的缘故。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;A股应该关注啥？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;光大证券建议，应重点关注作为逆周期抓手的纯内需标的， 2020年Q1和Q2可能分别是中国经济和海外经济的至暗时刻，基建投资与汽车是启动冰封经济的相对可靠的抓手，可关注新老基建、地产、汽车以及建材、化工、机械等部分中游产品。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;另外，必需消费估值已在历史高位，性价比有所下降，随着各类稳消费措施逐渐出台，后期可选消费或有更大的收益空间。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;第三，市场风险溢价已回升到2019年以来高位，后期政策取向有望偏松，科技股最差的时期可能已经过去，可适当关注左侧机会。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;最后，如果欧美二季度复工不及预期，从供应链的角度，存在进口替代、出口产品的全球市场份额提升和必需品因供给收缩而涨价的三条投资主线。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;span class=&quot;img_descr&quot;&gt;&lt;/span&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"http:\\/\\/k.sinaimg.cn\\/n\\/sinakd20200509s\\/63\\/w605h258\\/20200509\\/3f63-iteyfww6722794.jpg\\/w160h120l1t1e31.jpg\",\"name\":\"\"}]}'),(9,0,1,1,1,1,1,0,0,1,0,0,0,1589019676,1589019676,1589020168,0,'美国之后欧盟也推量子通信计划 A股小伙伴又嗨了？','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;来源：e公司官微&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;2018年10月，由欧盟委员会资助欧洲量子技术旗舰计划开始施行（以下简称“旗舰计划”），该计划将历时十年，预算为10亿欧元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;近日，旗舰计划在其官方网站上发布了一份战略研究议程（SRA）报告，表示未来三年将推动建设欧洲范围的量子通信网络，完善和扩展现有数字基础设施，为未来的“量子互联网”远景奠定基础。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;早在2月份，美国白宫网站就发布了一份《美国量子网络战略构想》，提出美国将开辟量子互联网，确保量子信息科学（QIS）惠及大众，A股量子通信概念股应声而涨。此次欧盟的“旗舰计划”是否会再次点燃A股相关板块？            &lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;“旗舰计划”发布战略研究议程（SRA）报告&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;前不久，“旗舰计划”在其官方网站上发布了一份长达110页的战略研究议程（SRA）报告。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;该份SRA报告开篇指出，旗舰计划的长期愿景是实现量子互联网，该网络能够为欧洲数字基础设施提供安全保障。在“量子通信”章节中，阐明了量子通信技术对于保障基础设施安全的重要意义，认为一个基于量子安全的强大而安全的通信基础设施对于保护欧洲主权及其经济至关重要。而建设欧洲范围的量子通信网络，完善和扩展现有数字基础设施，将为未来的量子互联网打下基础。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;文章表示，量子密码技术是最先进的量子技术之一，已经有了用于量子随机数生成和量子密钥分发的商业产品和原型。量子密钥分发（QKD）提供了一种在远距离双方之间建立密钥的可证明的安全方法，该密钥随后可用于各种密码应用中。QKD应作为安全系统中的一个组件运行，例如作为安全通信基础设施，用于电信或关键基础设施之中。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;然而，尽管如此，它的广泛采用仍然存在重大障碍。挑战包括降低技术成本、提高性能以及加强网络安全系统和通信系统的整合。需要QKD试验网络来解决这些集成问题，并作为开发新应用和工业标准的试验台。这是2019年6月签署的《量子通信基础设施（EQCI）宣言》中设想的将地面和卫星连接纳入泛欧量子互联网的重要步骤。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;报告指出，在目前的发展阶段，基于量子通信的技术可能面临的主要挑战是缺乏适当的经济和人力资源。开发允许部署这些技术的基础设施，以及开发能够充分挖掘量子互联网潜力的新组件和系统所需的投资数额是巨大的。然而，未来十年，量子密码学数十亿欧元的业务有望得到发展，并为欧洲经济带来直接的收益。一些研究预测量子密钥分发系统和服务的销售将迅猛增长。事实上，面对日益严峻的网络安全挑战，一个基于量子安全的强大而安全的通信基础设施对于保护欧洲主权及其经济至关重要。它将使金融、医疗、政府和企业部门的广大用户受益，并为整个欧洲数百万个就业岗位提供支撑。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;报告强调，推进量子网络需要一个广泛的长期和集中的工程努力，以便与物理学和计算机科学的进步协同。应该鼓励应鼓励量子密码学家和经典密码学家之间的合作，以促进新的量子安全应用，经典密码协议和功能需要纳入到更大的量子互联网框架中。欧洲必须在制定量子网络的标准方面发挥带头作用。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;（图片来源：欧盟“旗舰计划”发布战略研究议程（SRA）报告）&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;报告片段翻译：短期目标（3年愿景）包括：基于欧洲量子通信基础设施（EuroQCI）端到端安全的考虑，开发用例和商业模型，开发用于城市间和城市内的经济高效且可扩展的设备和系统；开发可信节点网络的功能，提升光纤、自由空间和卫星链路之间的互操作性；利用QKD协议和具有可信节点的网络，开发用于全球安全密钥分发的基于卫星的量子密码；与欧洲电信标准化协会（ETSI）等主要欧洲标准组织合作开展标准制定工作，制定用于QRNG和QKD的认证方法；进一步发展QKD、QRNG和量子安全认证系统，应表明其为用于关键基础设施、物联网和5G做好了技术准备；实现欧盟国家间可信节点上的端到端安全通信等。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;中长期目标（6~10年愿景）包括：演示一系列物理距离遥远（至少800公里）的量子中继器；演示至少20个量子比特的量子网络节点；演示设备无关的QRNG和QKD等。       &lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;多国已未雨绸缪 科技行业迎最强风口&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;量子互联网则是一个由量子计算机和其他量子设备组成的庞大网络，可以对量子信息进行同样的传递、处理和存储。这一系统网络将实现众多量子信息任务，包括任意节点之间的量子隐形传态、分布式量子计算和高精度量子测量。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;有专家指出：如果说互联网的发明将人类带入信息时代，那么量子互联网则将提供另一个能够真正改变世界的机会，它能够带来一场科技革命。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;欧盟DG CONNECT副总干事Khalil Rouhana在去年10月发表的博客中直言：“欧洲的未来属于量子领域”。&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;（图片来源：欧盟官网）&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;除欧盟外，世界其他多个国家对此领域也有布局，全球科技行业或迎来最强风口。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美国：2月份，白宫国家量子协调办公室发布了《美国量子网络的战略构想》，提出美国将开辟“量子互联网”，确保量子信息科学（QIS）惠及大众，并明确了两个具体目标：一是，在未来的五年中，美国的公司和实验室将演示量子网络的基础科学和关键技术，从量子互连、量子中继器、量子存储器到高通量量子信道和探索跨洲际距离的天基纠缠分发。同时，将查明这些系统的潜在影响和改进的应用，以获得商业、科学、卫生和国家安全方面的好处；二是，在未来20年里，量子互联网链路将利用网络化量子设备实现经典技术无法实现的新功能，同时促进我们对纠缠作用的理解。文件认为，量子信息技术仍处于早期阶段，而其远景取决于开创能够可靠地连接量子设备的基础设施平台的能力，也取决于开发量子信息科学在安全、传感和计算模式等方面的应用的能力。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;俄罗斯：目前正在积极研究打造量子互联网。圣彼得堡国立信息技术、机械与光学研究大学与俄罗斯风险投资公司合作，将利用俄罗斯铁路公司的基础设施打造量子互联网平台，量子互联网平台试验区将在2021年启动。 &lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;日本：东芝公司此前宣布，今后将涉足信息安全业务服务，其中将提供理论上能够杜绝任何窃听行为的量子加密通信技术。2020年，这项业务将首先在美国开展。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;印度：印度近期提出一项新国家量子任务，计划未来5年投入800亿卢比（11.2亿美元），推动量子技术的发展。新国家量子任务旨在加速印度量子通信、量子计算、量子材料开发和密码学等量子技术的发展步伐。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;目前中国还没有提出量子互联网等战略，但在2019年12月中共中央、国务院发布的《长江三角洲区域一体化发展规划纲要》中明确，“快量子通信产业发展，统筹布局和规划建设量子保密通信干线网，实现与国家广域量子保密通信骨干网络无缝对接，开展量子通信应用试点”。2020年3月，科技部《关于科技创新支撑复工复产和经济平稳运行的若干措施》中表示，要加大5G、人工智能、量子通信、脑科学、工业互联网、重大传染病防治、重大新药、高端医疗器械、新能源、新材料等重大科技项目的实施和支持力度。                   &lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;A股小伙伴又嗨了？&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;自白宫发布了《美国量子网络的战略构想》后，A股量子技术板块的投资热情被点燃，4个交易日内累计涨幅达23.2%。根据wind数据统计，量子技术板块共有包括&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;迪普科技&lt;/a&gt;等在内的19家上市公司。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;量子通信方面，2月20日，国盾量子向证监会正式提交IPO注册闯关科创板，拟募资3.04亿元用于量子通信网络设备项目和研发中心建设项目，其中，量子通信网络设备项目拟使用2.57亿元，研发中心建设项目拟使用4689.06万元，有望成为A股首家纯正的量子通信公司。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;此外，A股还有多家“小伙伴”主营业务涉及量子通信上下游产业链：行业的上游为“核心光电子器件及线缆”，国内代表上市公司包括：&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;中天科技、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;光迅科技&lt;/a&gt;、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;福晶科技&lt;/a&gt;等；设备制造商的下游则是项目集成商或运营商，国内代表企业为：凯乐科技、四创电子、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;神州数码&lt;/a&gt;等。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;而&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;神州信息&lt;/a&gt;早在2018年就与国盾量子、国翔辰瑞三方共同出资成立神州国信（北京）量子科技有限公司，三方合作将极大加速量子通信技术的产品化、产业化发展，推动量子通信产业化应用全面开花。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;华鑫证券指出，若选取主营业务为信息安全领域以提供密码产品的A股上市公司作为对标公司，对标公司的TTM-PE平均为87倍，具有较高的估值溢价。量子保密通信行业处于推广期，属于技术和资金密集型行业，门槛极高，作为行业龙头，预计国盾量子上市后市场将会给予较高的估值。&lt;/p&gt;\n&lt;p style=&quot;text-align:right;&quot; class=&quot;article-editor&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/k.sinaimg.cn\\/n\\/finance\\/transform\\/284\\/w164h120\\/20200509\\/e42e-itmiwry1972790.jpg\\/w160h120l1t15d7.jpg\",\"name\":\"\"}]}'),(10,0,1,1,1,1,1,0,0,0,0,0,0,1589019817,1589179452,1589020140,0,'创业板负面清单：已向券商征求意见 哪些企业可上市？','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;原标题：创业板“负面清单”来了，已向券商征求意见，哪些企业可以上市？“选材”不再一刀切&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;创业板注册制改革衔枚疾进！&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;什么企业推荐到创业板上市？这项问题自创业板改革推出后一直受到市场关注。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;5月8日深交所就“负面清单”向券商征求意见。据券商人士透露，传统行业比如农林牧渔、采矿、金融、房地产、仓储邮政，监管层原则上不支持这类行业的企业。但如果上述传统行业中有与互联网、大数据、云计算、自动化、新能源、人工智能等新技术深度融合的创新创业企业仍然可以到创业板上市。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;支持传统行业与“四新”融合的企业上市&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;券商中国记者从投行人士处了解到，5月8日深交所就“负面清单”（ 《深圳证券交易所创业板企业发行上市申报及推荐暂行规定》）向保荐机构征求意见。早在4月27日，监管层已提出创业板板块要有新定位，深交所将制定“负面清单”明确哪类企业不能到创业板上市。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;根据此前监管层的表态，创业板定位是“深入贯彻创新驱动发展战略，适应发展更多依靠创新、创造、创意的大趋势，主要服务成长型创新创业企业，并支持传统产业与新技术、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;新产业&lt;/a&gt;、新业态、新模式深度融合。”&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;券商人士透露，上述《暂行规定》征求意见时显示要求保荐人顺应国家经济发展战略和产业政策导向，推荐符合高新技术产业和战略性新兴产业发展方向的创新创业企业，以及其他符合创业板定位的企业在创业板上市。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;事实上，目前创业板的国家高新技术企业占比超过九成，战略性新兴产业公司占比超过七成。鼓励更多高新技术企业到创业板上市，符合板块特色；同时创业板也能更好服务创新创业。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;券商投行人士透露，根据征求意见的情况显示，农林牧渔、农副食品加工、采矿、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;食品饮料&lt;/a&gt;、纺织服装、黑色金属、电力热力燃气、建筑、交通运输、仓储邮政、住宿餐饮、金融、房地产、居民服务和修理等传统行业，原则上监管层不支持属于上述行业的企业申报创业板上市。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;但监管层并非“一刀切”，上述行业中如果有与互联网、大数据、云计算、自动化、新能源、人工智能等新技术、新产业、新业态、新模式深度融合的创新创业企业仍可以在创业板上市。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;广州一家中介机构人士向券商中国记者表示，目前征求意见的“负面清单”包容性很强，覆盖新业态和新模式，体现对“三创四新”的支持。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;资深投行人士王骥跃表示，“负面清单”第一体现包容性，不在负面清单的都可以上。第二体现倾向性，在负面清单的、不符合定位的不推荐。第三点，即使行业在负面清单，但新技术新产业新业态新模式深度融合是放行的，也体现着对传统产业升级换代的创新创业的支持。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;那么，未来是否会有传统企业蹭“四新”概念，蒙混闯关？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;对此，有券商投行人士表示，上述《暂行规定》征求意见稿要求保荐人对推荐的此类企业进行尽职调查，做出专业判断，在发行保荐书中说明相关核查过程、依据和结论，充分体现创业板服务创新创业的定位。“这方面的信息披露要求不会低。”他还表示，深交所会对此类申报企业的业务模式、核心技术、研发优势等情况予以重点关注，并可根据需要向行业咨询专家库专家进行咨询。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在审企业怎么办？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;“负面清单”事实上也备受证监会在审企业高度关注。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;据了解，按照征求意见情况显示，创业板在审企业中有的所属行业为传统行业，根据平移方案相关安排，这类企业可以按照“新老划断”原则，向深交所申报在创业板上市。《暂行规定》也对此安排予以了明确，规定此前已向证监会申报在创业板上市的企业不适用该规定。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;王骥跃谈到，实行新老划断，对已申报项目不影响，也是务实包容体现。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;截至4月30日，根据证监会公开资料显示，除了已经过会企业以外，目前还有187家企业排队审核。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;有券商人士指出，该规定充分突出创业板特色，出台可以更好引导、规范创业板发行人申报和保荐人推荐工作，促进创业板市场持续健康发展，更好服务创新驱动发展战略和实体经济，符合市场预期，为接下来券商做好企业上市服务工作提供了平稳预期。&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/z1.sinaimg.cn\\/auto\\/crop?size=200_160&amp;img=http%3A%2F%2Fn.sinaimg.cn%2Fdefault%2Ffeedbackpics%2Ftransform%2F116%2Fw550h366%2F20180418%2FrxsU-fzihnep5206374.png\",\"name\":\"\"}]}'),(11,0,1,1,1,1,1,0,0,1,0,0,0,1589019938,1589019986,1589020168,0,'外资一季度新进226股 大摩再度公开&quot;表白&quot;：超配A股','','','财经综合','','\n&lt;p&gt;&lt;img src=&quot;default/20200509/155d8fb01f7bcc5de1aa4dae03cffc13.png&quot; title=&quot;ae26-itmiwry1316995.png&quot; alt=&quot;ae26-itmiwry1316995.png&quot;&gt;&lt;/p&gt;\n&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;超配A股！国际大行再度公开“表白”，外资一季度新进226股！央行也在放大招，外资正虎视眈眈中国资产&lt;/p&gt;\n&lt;a href=&quot;JavaScript:void(0)&quot;&gt;&lt;/a&gt;&lt;p class=&quot;art_p&quot;&gt;外资正虎视眈眈中国资产！&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;摩根士丹利&lt;/a&gt;刚刚发布报告强调，应超配中国A股，正值这家国际巨头不久前在中国获批控股一家&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;证券公司&lt;/a&gt;和一家基金公司，并将在中国申请更多的牌照业务。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;上述巨头在一份报告中表示，虽然有国际贸易紧张、疫情等风险，但也不足以动摇对中国股票的超配评级，因中国线上经济占比较高，在保持社交距离的状态下也更有韧性，A股股票变得更有吸引力，即便全球情况变得更糟，A股面临的赎回风险也非常低。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;美股一季度期间连续熔断，巴菲特在美股市场接连踩雷，而中国公募基金却在全球疫情爆发的前四个月内，超过八成权益类基金都实现正收益，最高收益率接近40%，这也是外资QFII一季度强力增持中国资产的重要原因。数据显示，有226家A股公司成为外资QFII一季度重仓的新宠，而QFII同期减持的A股公司仅为86家。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;值得注意的是，5月7日，央行、国家外汇管理局发布《境外机构投资者境内证券期货投资资金管理规定》，明确并简化境外机构投资者境内证券期货投资资金管理要求，取消境外机构投资者额度限制，进一步便利境外投资者参与我国金融市场。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;大摩&lt;/a&gt;强调A股股票全球最佳&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;近日，摩根士丹利发布了一份报告，这家全球投行巨头表示，其他因素不足以动摇对中国股票的超配评级，MSCI中国的相对表现将继续好于其他新兴市场；与美国存托凭证（ADR）相比，建议超配A股。中国经济复苏态势明确、主权偿债能力更强，而且，线上经济占比较高，在保持社交距离的状态下更有韧性。摩根士丹利维持基准预测下MSCI中国2020年盈利同比下滑2%、沪深300盈利持平，远好于新兴市场13%的预计下滑幅度。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;分析师Laura Wang等人在报告中认为，国际贸易紧张局势的风险在上升，但现阶段也不足以动摇中国市场强于新兴市场的表现，因中国经济复苏态势明确、主权偿债能力更强，而且，线上经济占比较高，在保持社交距离的状态下更有韧性。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;同时，报告判断美方对于国际贸易的非关税行动可能会继续，不过更高的关税不大可能。报告认为，面对国际贸易的不确定性，与ADR相比，A股更具优势。除了A股受汇率波动的影响更小，报告还认为外资在A股的持股还不算高，这意味着如果情况更糟，A股面临的赎回风险也更低。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;连续控股A股市场相关牌照业务&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;天下熙熙，皆为利来；天下攘攘，皆为利往。摩根士丹利看好中国A股，正值这家全球巨头机构在几张关键业务牌照中，从参投的小股东变成控股的大股东。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在这份报告发表前一个月，摩根士丹利在2020年3月27日宣布，已获中国证监会批准，将在摩根士丹利华鑫证券有限责任公司的的持股比例从33%增至51%。这还不算，摩根士丹利也表示，希望最终能全资拥有这家证券公司。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;此外，这家国际巨头还希望在中国获得更多的金融牌照。摩根士丹利亚太区联席首席执行官兼中国首席执行官孙玮表示，作为第一步，摩根士丹利将申请更多牌照，拓宽产品并投资于新业务。随着中国证券市场变得更加制度化，摩根士丹利计划建立本地经纪和做市业务，还将扩大资产管理方面的合作，并最终取得控制权。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在更早之前，证监会已于2019年6月核准了深圳市招融投资控股有限公司转让摩根士丹利华鑫基金股权至摩根士丹利国际控股公司的申请。股权变更完成后，摩根士丹利国际控股公司持有大摩华鑫基金公司44%的股份，晋升为第一大股东，大摩华鑫基金公司的业务为基金募集和资产管理，主要面向A股。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;外资QFII在A股收益率秒杀巴菲特？&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;即便有无利不起早的因素，如果考虑到今年以来A股市场的强势以及美股的连续熔断，也大致可看出中国资产的安全性更令资金趋之若鹜。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;虽然疫情肆虐全球，但与巴菲特踩雷美股、抱怨已看不懂美股连续熔断所不同，第一季度期间A股主要行业企业盈利增速尽管受到疫情影响，但A股的赚钱效应却不小，同时，受影响的行业在疫情期间也表现出一定的抗跌能力，正因上述背景，A股的权益类基金在前四个月内业绩表现不俗。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;券商中国记者发现，在今年前四个月的操作中，权益类基金操作策略百花齐放，科技类、消费类、防疫概念等板块均为基金贡献正收益。数据显示，截至4月30日，2020年以来3575只主动偏股型基金平均净值增长率达5.66%，有超过2900只基金获正收益，占比超过八成，收益率超30%的有21只，超20%的基金多达197只，排名前列的基金收益率更是接近40%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;具体而言，表现最好的基金是万家基金公司旗下万家经济新动能基金，前四个月净值增长率达37.72%，年初至今的净值增长率更是超过42%。其次是金鹰基金公司旗下的金鹰策略配置基金，前四个月的净值增长率达到35.45%，年初至今的净值增长率也超过40%。此外，万家基金公司旗下的万家行业优选基金、华润元大基金公司旗下的信息传媒科技基金，以及创金合信基金公司旗下的医疗保健行业基金，广发基金旗下的广发新经济基金等，年初至今的净值增长率也都接近40%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;上述基金在疫情期间所获40%的收益率，显示出A股市场“独立行情”的姿态明显。同时，因QFII的投资策略越来越多的与国内公募基金公司趋同，QFII在今年第一季度期间也非常活跃，显示出在疫情因素下，外资机构越来越多的将A股作为全球投资的重点。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;也正因为外资QFII与公募基金的投资趋同性，也意味着QFII在今年前四月内大概率也维持相当不错的收益。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;Wind数据显示，截止目前QFII重仓的A股股票大约400家，虽然QFII在一季度期间也减持了86只股票的持仓，但相比QFII新增买进的重仓股，仍是小巫见大巫。数据显示，有226家A股公司成为QFII一季度的新宠，显示出疫情虽然对上市公司的业绩整体造成一定的影响，但由于中国在疫情期间采取的成功措施，反令中国资产更受外资的青睐，也因此让QFII资金在A股的投资变得更为活跃。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;海外资金或加速流入A股&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;有市场人士强调，早在中国疫情开始得以控制的三月份，外资机构就已经开始将重心投入中国资产上，尤其是当美股市场当时因为疫情混乱的局面，导致市场连续熔断，中国疫情得以控制以及坚挺的市场，吸引外资持续进入中国资产。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;国际投行瑞士银行在2020年第一季度期间就已强调，鉴于欧洲低迷的经济和企业盈利增长前景，与欧元区股票相比，中国股票看起来尤其具有吸引力。摩根士丹利于也在3月1日也调高了中国、新加坡的股市评级，其中中国股市的评级由持有上调至增持，并表示中国将成为投资者的“避风港”。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;根据券商中国早前的报道，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;港交所&lt;/a&gt;今年3月16日披露的信息显示，3月10日，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;摩根大通&lt;/a&gt;一天内大幅增持15家中国公司，包括邮储银行、中海油田、中石化炼化工程等，其中，摩根大通对中国平安最为青睐，该机构加仓幅度更是高达21亿港元，折合19.20亿元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;国电集团旗下的龙源电力也成为摩根大通的扫货对象。港交所披露，摩根大通于3月10日以每股平均价4.4016港元增持约337.61万股，涉资约1486.03万港元，增持后，摩根大通持有龙源电力为20244.87万股，持股比例由5.96%升至6.06%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;券商中国记者发现，摩根大通似乎正在根据政策主线投资中国，上述中国公司主要涉及银行保险、基建、投资、能源化工等。这似乎与中国最新的政策有关。2020年3月3日，相关政策会议强调必须更有针对性加大稳就业、稳金融、稳外贸、稳外资、稳投资、稳预期工作力度，更有效应对疫情对经济运行的影响。这显示出外资QFII也在依据中国政策主线进行布局。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;前海开源基金公司杨德龙也认为，中国企业已得到全球资本认可，外资流入速度预计会越来越快。他认为，资本逐利，外资从来都是配置全球最好的资产，从企业ROE来看，外资持股最多的前10个A股上市企业，不仅仅是中国最好的企业，即便在美国都是出类拔萃的企业，现在外资主要是通过陆股通这个渠道进入中国股市，截至2019年12月31日，已经流入9670亿元，同比增长33.57%，比2014年底增长了93倍。随着未来科创板纳入沪深港通、蚂蚁金服等优质公司上市等，全球投资者或将持续买入A股。&lt;/p&gt;&lt;/section&gt;\n',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/k.sinaimg.cn\\/n\\/front20200509ac\\/48\\/w596h252\\/20200509\\/6e56-itmiwry1317262.jpg\\/w160h120l1t1024.jpg\",\"name\":\"\"}]}'),(12,0,1,1,1,1,1,0,0,0,0,0,0,1589020096,1589020096,1589020168,0,'工资单里A股图鉴:千万&quot;打工皇帝&quot;安在 &quot;潦倒者&quot;年薪不够罚款','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;&lt;span style=&quot;font-family: KaiTi_GB2312, KaiTi;&quot;&gt;“工资单”里A股图鉴：千万“打工皇帝”安在“潦倒者”年薪不够罚款&lt;/span&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;span style=&quot;font-family: KaiTi_GB2312, KaiTi;&quot;&gt;  21世纪资本研究院研究员 杨坪&lt;/span&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;br&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;　&lt;span style=&quot;font-family: KaiTi_GB2312, KaiTi;&quot;&gt;　对于部分风险和经营压力较大的上市公司而言，高管薪酬过高无疑会侵蚀企业利润和股东利益，上市公司高管不该一味追求高薪酬，而投资者也须对高管的实际价值与对公司的重大贡献进行考察。&lt;/span&gt;&lt;/p&gt;\n&lt;p&gt;&lt;br&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;哪些公司“钱少事多还背锅”，哪些公司“钱多事少离家近”？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院研究数据显示，截至5月8日，除了约百家企业因疫情等原因延期披露年报外，A股2019年年度报告基本披露完毕。已披露财务数据的3800余家上市公司，合计实现营收50.55万亿，同比上年同期增长了8.78%，实现净利润4.15万亿，同比增长6.68%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;宏观经济换挡，新冠疫情当前，国内外重重挑战。强有力的管理团队，是保障上市公司稳定经营的重要条件 。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在这一背景下，是否有表现不佳的企业高管，领“巨额工资”侵占上市公司利益？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;截至5月8日合计有披露员工薪酬的上市公司3571家，其中&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;华夏幸福&lt;/a&gt;联席董事长兼总裁吴向东荣登2019年A股年度“打工皇帝”。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;其2019年合计薪资高达3868.93万元，抵得过一家中等创业板企业一年的净利润。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;吴向东2019年2月才加入华夏幸福的， 2019年华夏幸福实现营收1052.1亿元，同比增长25.6%，首次突破千亿大关。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;不过，并非所有人都有吴向东的能力与“运气”。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在数千家上市公司群体中，还有85家上市公司董事长、54名总经理年薪不到10万，10家上市公司金额前三的高管薪酬合计不超过30万。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;金融“造富”能力强&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;同是“总经理”，甚至同是上市公司“总经理”，工资单可有天壤之别。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院研究统计，目前已披露相关数据的3676家上市公司管理层合计薪资305.24亿元，较2018年的281.56亿元增长了8.41%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;平均每家上市公司管理层薪资为830.36万元，但实际上管理层总薪资超过平均水平的企业只有1106家。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;6家上市公司用于支付的管理层年度薪酬总额超过亿元，显著拉高了平均水平，分别是中信证券（1.55亿元）、华夏幸福（1.41亿元）、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;方大特钢&lt;/a&gt;（1.34亿元）、中国平安（1.30亿元）、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;迈瑞医疗&lt;/a&gt;（1.17亿元）和三一重工（1.12亿元）。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院发现，高管薪资发放较高的上市公司规模、盈利能力及行业地位，均居于前列。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;分行业来看，金融业、房地产仍是最“挣钱”的领域，这些行业是最有能力，也最愿意将薪资投入到人力当中，平均每家公司管理层薪资要远超过其他行业。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;目前已披露2019年数据的上市公司中，平均管理层薪酬最高的为非银行业，79家公司中，平均每家企业用于管理层薪资发放的金额高达2290万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;其次是银行业，平均每家企业管理层年度薪酬总额为2084.91万元；排名第三的房地产业，该数值也高达1580.04万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;值得注意的是，这些行业的业绩水平也高于其他行业，2019年，银行、非银金融、房地产上市公司平均净利润分别为471.91亿元、54.83亿元和22.37亿元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;与前述热门行业形成鲜明对比的是，国防军工的高管或许是最“穷”的群体。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;68家国防军工上市公司合计投入到管理层薪资的金额为3.98亿元，平均每家企业管理层年度薪酬总额为584.61万元，其中亚星锚链、江龙船艇金额前三的高管薪酬合计分别仅为81.43万元、95万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;具体到企业而言，对高管最为抠门的莫过于*ST凯瑞。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;2019年管理层年度薪酬总额仅56.03万元，其中董事长纪晓文从公司领取的税前报酬仅8万元，不过纪晓文从2019年6月才正式履新董事长一职，公司前董事长孙俊2019年任职5个月，从公司领取的报酬为2万。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;公司2019年经历的两任董秘，在当年则分别领取了6万、8.2万元的税前薪资，加起来税前年薪也只有14.2万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;值得一提的是，从*ST凯瑞当前的状况来看，公司处境风雨飘摇，高管层也不断换届。其中仅2019年从公司领取薪酬但目前已离职的高管数量高达9名。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;2019年*ST凯瑞实现营业收入1532.67万元，同比下滑38.78%，实现净利润854.12万元，通过债务重组勉强扭亏。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;高管薪资两极分化&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;具体到个人来看，不同企业的不同高管境遇也并不相同，尤其是作为一家上市公司的“定海神针”，董事长一职的待遇在一定程度上也能代表企业对于高管的态度。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在2019年的薪资排名上，华夏幸福联席董事长吴向东以3868.93万元的高薪冠绝A股，而在上一年，“打工皇帝”的宝座还被方大特钢时任董事长谢飞鸣占据。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;2018年谢飞鸣领取的年薪高达3169.67万元，但2019年6月，谢飞鸣离职，但其在短短六个月内仍然从方大特钢获得了4122.46万元的税前报酬。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;此外，A股年薪超过千万的董事长还有&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;鹏鼎控股&lt;/a&gt;沈庆芳（2661.28万元）、迈瑞医疗李西廷（2291.88万元）、金科股份蒋思海（1939.19万元）、伊利股份潘刚（1934.47万元）、药明康德李革（1805.86万元）、中南建设陈锦石（1461万元）、万科A郁亮（1251.70万元）等10名企业家。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;但反观另一边，同样是A股上市公司，有的董事长年薪还不到一万块钱。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;如永吉股份邓代兴2019年从上市公司处领取的报酬仅为1000元。不过公司总经理、副总经理、财务总监、董秘等一众高管的税前报酬均在51万元以上；中海达董事长廖定海年薪为2400元，此外，盾安环境、科力远董事长年薪分别仅1万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院认为，前述领取“低薪”报酬的董事长均为民营企业掌舵人，且同时为公司实际控制人。当民营企业董事长同为公司实控人时，董事长低薪酬可减少成本，降低公司业绩敏感度。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;值得一提的是，除了董事长之外，上市公司体系内另一大重要高管职位董秘的薪酬也是各方关注的焦点。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;作为信披的直接负责人，一旦公司未按规定披露，董秘必然难辞其咎。尤其是在新《证券法》体系下，违法成本大幅提高，监管力度也日趋严格。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;仅沪市，2019年就有110家上市公司、533名“董监高”被实施纪律处分或监管关注。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在这一背景下，A股上市公司董秘的待遇如何呢？&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院统计发现，目前设有董秘且公开披露了董秘薪酬的上市公司合计3479家，董秘们总薪酬为23.39亿元，即平均每家上市公司董秘的薪资为67.22万元，但有2333家企业的董秘并没有达到平均线，占比约为2/3。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;薪资最高的光线传媒董秘侯俊，年薪高达672万元，万科董秘朱旭紧随其后，年薪568.3万元，绿地控股董秘王晓东年薪也超过了五百万。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;已披露的数据中有549家企业董秘年薪超过百万。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;“富豪”董秘并非常态。截至目前，有151家上市公司董秘2019年领取的薪资不到15万，更有甚者，在部分风险公司中，董秘不仅薪酬惨不忍睹，还常年提心吊胆。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;较为典型的*ST凯瑞前董秘张彬，2019年7月，*ST凯瑞收到证监会的《行政处罚事先告知书》，公司因为信息披露违法违规被证监会罚款60万元，时任董秘被证监会罚款10万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;但2018年、2019年，张彬在*ST凯瑞的薪酬分别只有8.1万元、8.2万元，这也就意味着，其一年的工资尚不足以缴纳罚款。2019年5月，似乎预见到危机的张彬火速辞去公司董秘一职。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;&lt;strong&gt;高薪与业绩反向增长&lt;/strong&gt;&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;某上市公司高管在与21世纪资本研究院沟通时表示，在该上市公司任职期间，未获得一分钱工作薪资。该高管为股东方重组后派驻，仅在股东方领取了基本工资。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;因重组未达预期，该公司已经抽回派驻人员。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;在上市公司高管薪资两极分化的背后，21世纪资本研究院注意到，尽管大公司、高品牌更容易出高薪，但高管薪资的高低与公司的经营业绩并不完全“挂钩”。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;其中，不少公司因为高管薪资过高，引起中小股东“声讨”。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院统计发现，2019年，有19家上市公司管理层年度薪酬总额超过公司净利润，170家上市公司高管薪资总额达到公司当年净利润的30%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;其中占比最高的莫过于顺钠股份，2019年净利润仅为292.44万元，但当年董事、监事和高级管理人员报酬合计927.58万元，是净利润的三倍有余。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;此外，部分上市公司在巨亏的情况，也未影响高管领取高薪。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;据21世纪资本研究院统计，2019年巨亏超过10亿的95家上市公司中，*ST东科、*ST安信、*ST中天、金科文化、恺英网络等16家上市公司高管总薪酬超过千万。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;华谊兄弟在连续两年巨亏（2018年、2019年分别亏损9.09亿元、40.23亿元）的情况下，公司高管的总薪酬却一直维持在1300万元左右水平，董事长王忠军也一直保持着两百万以上的高薪。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;且在公司增亏的情况下，王忠军2019年的年薪还较2018年增长了15.27%。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;而类似于此类上市公司业绩不断下滑，但高管薪酬却持续增长的现象并不少见。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院统计发现，2019年，有151家企业在管理层年度薪酬总额大幅增长（增幅超过30%）的情况下，业绩却大幅下降（净利润降幅超过30%）。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;较为典型的是华星创业，公司2019年实现净利润-2.14亿元，上年同期公司盈利1093.44万元（2018年、2019年扣非净利润均为负值），但公司管理层薪酬总额却从2018年的增长185.24万元激增至2019年的421.88万元。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;21世纪资本研究院认为，对于部分风险和经营压力较大的上市公司而言，高管薪酬过高无疑会侵蚀企业利润和股东利益，上市公司高管不该一味追求高薪酬，而投资者也须对高管的实际价值与对公司的重大贡献进行考察，判断高管是否值得高薪酬。&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/k.sinaimg.cn\\/n\\/finance\\/transform\\/284\\/w164h120\\/20200116\\/7043-imztzhp3900711.jpg\\/w160h120l1t1228.jpg\",\"name\":\"\"}]}'),(13,0,1,1,1,1,1,0,0,1,0,0,0,1589020163,1589177989,1589020140,0,'杨德龙：北上资金重回A股抢筹 意欲何为？','','','财经综合','','&lt;section&gt;&lt;p class=&quot;art_p&quot;&gt;文/前海开源基金首席经济学家杨德龙&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;本周是五一节过后的首个交易周，只有三个交易日，但是A股市场的表现超出了很多人的预期，节假日期间外围市场出现普跌，特别是欧美股市跌幅较大，港股也出现大跌，但并没有影响到节后A股的表现，这三个交易日里有两个交易日出现大涨，首个交易日更是吸引了大量的资金流入，两融余额也站稳1万亿以上，外资则持续6个交易日流入，周五外资再次大量流入A股来进行抢筹，流入量超过预计超过50亿以上。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;从政策面来看，央行释放利好政策，5月7日央行取消了QFII和RQFII的流入额度限制，这是一个重大的资本市场改革的信号，虽然之前QFII、RQFII额度已经从1500亿美元提高到3000亿美元，已经翻倍，这完全可以满足外资投资中国资本市场的额度需求，但是这一次直接放开QFII、RQFII额度显示出我们对外开放的决心非常大，同时对外资的汇出也简化了流程，并取消了限制，外资流出也很方便，这可以更好地吸引外资配置A股市场。近几年，A股开通了沪港通、深港通，外资流进流出的通道已经完全打通，可以说外资这两年每年有3000亿流入A股，实际上就是我国不断地对外开放，加上中国一些优质的公司确实具备投资吸引力有关，现在央行进一步取消了QFII、RQFII额度，将会吸引更多外资流入。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;本周市场出现强势上攻，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;上证指数&lt;/a&gt;最高冲到2900点以上，标志着A股已经完成了探底，正式确立了反弹的走势，在前几周我就给大家讲过，今年大盘受国内疫情和海外疫情的两次冲击，砸出两个黄金坑，已经完全探明了底部，即使后面外围市场再出现较大幅度波动，对A股的拖累作用也将大大减轻，A股市场走出独立行情的可能性较大，究其原因有几点：一是经济面方面，我国疫情控制取得了良好的成效，经济复苏力度较大，领先全球主要经济体复苏，从最近公布的PMI等宏观数据来看，二季度经济环比一季度都有明显的增长，虽然我国疫情得到了控制，各地复工复产率比较高，这将进一步提升经济复苏的力度，经济企稳回升无疑是资本市场走强的基础，也成为全球资金的避风港。第二点是A股市场的估值出于历史大底的位置，无论是从历史上进行比较，还是和全球主要资本市场横向比较，A股的估值都具有吸引力，&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;上证50&lt;/a&gt;的市盈率不到10倍，上证指数的市盈率也就13倍，这么低的估值确实下跌空间不大，有资金流入就会出现回升。第三，政策面对于资本市场支持力度越来越大，4月份金融委会议以及多个部门出台的一系列政策，对资本市场的改革都是大力支持的，将会释放出改革红利。第四点就是为了应对疫情的影响，央行不断的下调MLF逆回购，以及这个LPR的利率，低利率环境更有利于资本市场走强。最后一个原因就是资本市场现在发展已达30年时间，进入了而立之年，投资者投资于资本市场的热情将会不断提高。今年1月3日银保监会发出通知要求银行保险公司多渠道引导居民储蓄进入资本市场，做价值投资、长期投资，这其实就指明了未来居民储蓄流动的大方向，我一直给大家讲未来十年主要投资机会是在资本市场，A股市场将迎来黄金十年，居民储蓄从银行、楼市流入股市是大势所趋，当然大部分居民是通过买入基金产品进入到资本市场，机构投资者时代来临。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;从2019年起，我就建议大家关注三大方向，消费、券商和科技龙头股，今年以来先是春节之后科技股迎来一波大涨的行情，科技龙头股甚至翻番，随后受到美股暴跌的拖累，很多科技股跌幅较大，现在重新又吸引了抄底资金入场，包括两融资金以及北上资金，都在抢筹一些科技龙头股，所以科技股有望迎来上涨的窗口。值得一提的是，我一直建议大家配置白酒、食品饮料、医药等消费白马股，我明确指出消费白马股是可以拿着养老的品种。本周以茅台为代表的白龙马股股价屡创历史新高，带动了投资者对于白龙马的关注度。我2016年提出白龙马的概念，现在已经深入人心，并得到了市场的验证，白龙马高度概括了一批能够代表中国经济实力、既有现有业绩又是行业龙头的好股票，他们的股权价值将越来越值钱，甚至有媒体报道我的观点，在去年的时候说“现在不买白马股，相当于10年前不买房”，现在已经初步得到了验证，白龙马股在过去几年的涨幅达到几倍，远远超过指数的表现，也跑赢大多数的股票。我在2016年就提出跟着外资学投资，外资更注重基本面的投资，更注重价值投资，所以外资大量流入到白龙马股上，大家可以看一下外资流入的前十大股票都是清一色的白龙马，这也导致了外资在过去几年超额收益巨大，有人测算了从2016年到现在外资的整体投资收益跑赢指数350%， 获得了很明显的成效，所以我一直建议大家跟着外资学投资，学的就是这种投资理念和选股方法。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;北京时间5月3日凌晨4：30，巴菲特在今年线上股东大会&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;上为&lt;/a&gt;大家讲了4个半小时，再次强调了他的价值投资理念。巴菲特多达1000多亿美元的资金基本上都配置在行业龙头股上，可以说是美国的白马股，它前五大重仓股，像苹果、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;美国银行&lt;/a&gt;、&lt;a href=&quot;javascript:void(0);&quot; target=&quot;app&quot; class=&quot;j_call_native&quot;&gt;美国运通&lt;/a&gt;、可口可乐、富国银行都是行业的龙头。巴菲特一直崇尚投资于行业最优秀的公司，把投资当做一门生意来做，所以才能够创造55年2万多倍的汇报，这个投资奇迹实际上就是价值投资的胜利，由于今年美国见顶之后大幅下挫，疫情又加重了美股下跌幅度，所以巴菲特持有的这些股票也大幅下跌，伯克希尔哈撒韦资产也出现了大幅缩水，一季度缩水了接近500亿美元，但这并不能否定价值投资的魅力，因为美股的下跌只要是多头都难以避免，现在巴菲特仍然持有1300亿美元的现金等待抄底。股神巴菲特现在还没有出手，说明他对美国经济、对疫情以及美股的表现仍然比较悲观，所以还没有出手，美股大概率还是会出现二次探底，等到巴菲特真正出手的时候，可能就会成为很多人开始大量配置股市的时候。&lt;/p&gt;\n&lt;p class=&quot;art_p&quot;&gt;前段时间我提出全球金融市场巨震需要经过三个阶段，现在已经明确从流动性枯竭的第一阶段，进入到流动性改善的第二阶段。全球资本市场进入反弹阶段，但分化和反复震荡仍是第二阶段特征，大家还是要谨慎一些。什么时候到第三阶段呢？我们就要观察海外疫情开始出现拐点、每日新增确诊人数出现趋势性下降，这时才能够果断做多，A股市场也将延续慢牛长牛的走势。&lt;/p&gt;&lt;/section&gt;',NULL,'{\"audio\":\"\",\"video\":\"\",\"thumbnail\":\"\",\"template\":\"\",\"photos\":[{\"url\":\"\\/\\/k.sinaimg.cn\\/n\\/finance\\/transform\\/284\\/w164h120\\/20200509\\/1200-itmiwry1414546.jpg\\/w160h120l1t1bc6.jpg\",\"name\":\"\"}]}');

#
# Structure for table "cmf_portal_tag"
#

DROP TABLE IF EXISTS `cmf_portal_tag`;
CREATE TABLE `cmf_portal_tag` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:发布,0:不发布',
  `recommended` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否推荐;1:推荐;0:不推荐',
  `post_count` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '标签文章数',
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '标签名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='portal应用 文章标签表';

#
# Data for table "cmf_portal_tag"
#


#
# Structure for table "cmf_portal_tag_post"
#

DROP TABLE IF EXISTS `cmf_portal_tag_post`;
CREATE TABLE `cmf_portal_tag_post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tag_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '标签 id',
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '文章 id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:发布;0:不发布',
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='portal应用 标签文章对应表';

#
# Data for table "cmf_portal_tag_post"
#


#
# Structure for table "cmf_recycle_bin"
#

DROP TABLE IF EXISTS `cmf_recycle_bin`;
CREATE TABLE `cmf_recycle_bin` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `object_id` int(11) DEFAULT '0' COMMENT '删除内容 id',
  `create_time` int(10) unsigned DEFAULT '0' COMMENT '创建时间',
  `table_name` varchar(60) DEFAULT '' COMMENT '删除内容所在表名',
  `name` varchar(255) DEFAULT '' COMMENT '删除内容名称',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COMMENT=' 回收站';

#
# Data for table "cmf_recycle_bin"
#

INSERT INTO `cmf_recycle_bin` VALUES (1,4,1589018758,'portal_post','特朗普称四月份就业报告完全在预料之中 不该责怪他',1),(2,1,1589019445,'portal_post','赛岳恒：1150亿！工行农行10%股权划转社保 对养老及股市有何影响',1),(3,2,1589181841,'portal_post','商务部:对美欧的进口相关无缝钢管继续征收反倾销税',1);

#
# Structure for table "cmf_role"
#

DROP TABLE IF EXISTS `cmf_role`;
CREATE TABLE `cmf_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父角色ID',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '状态;0:禁用;1:正常',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `list_order` float NOT NULL DEFAULT '0' COMMENT '排序',
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '角色名称',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='角色表';

#
# Data for table "cmf_role"
#

INSERT INTO `cmf_role` VALUES (1,0,1,1329633709,1329633709,0,'超级管理员','拥有网站最高管理员权限！'),(2,0,1,1329633709,1329633709,0,'普通管理员','权限由最高管理员分配！');

#
# Structure for table "cmf_role_user"
#

DROP TABLE IF EXISTS `cmf_role_user`;
CREATE TABLE `cmf_role_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '角色 id',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户角色对应表';

#
# Data for table "cmf_role_user"
#


#
# Structure for table "cmf_route"
#

DROP TABLE IF EXISTS `cmf_route`;
CREATE TABLE `cmf_route` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '路由id',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '状态;1:启用,0:不启用',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'URL规则类型;1:用户自定义;2:别名添加',
  `full_url` varchar(255) NOT NULL DEFAULT '' COMMENT '完整url',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '实际显示的url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='url路由表';

#
# Data for table "cmf_route"
#


#
# Structure for table "cmf_slide"
#

DROP TABLE IF EXISTS `cmf_slide`;
CREATE TABLE `cmf_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:显示,0不显示',
  `delete_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '删除时间',
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片分类',
  `remark` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '分类备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='幻灯片表';

#
# Data for table "cmf_slide"
#


#
# Structure for table "cmf_slide_item"
#

DROP TABLE IF EXISTS `cmf_slide_item`;
CREATE TABLE `cmf_slide_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slide_id` int(11) NOT NULL DEFAULT '0' COMMENT '幻灯片id',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态,1:显示;0:隐藏',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '幻灯片名称',
  `image` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片图片',
  `url` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '幻灯片链接',
  `target` varchar(10) NOT NULL DEFAULT '' COMMENT '友情链接打开方式',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT '幻灯片描述',
  `content` text CHARACTER SET utf8 COMMENT '幻灯片内容',
  `more` text COMMENT '扩展信息',
  PRIMARY KEY (`id`),
  KEY `slide_id` (`slide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='幻灯片子项表';

#
# Data for table "cmf_slide_item"
#


#
# Structure for table "cmf_theme"
#

DROP TABLE IF EXISTS `cmf_theme`;
CREATE TABLE `cmf_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '安装时间',
  `update_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后升级时间',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '模板状态,1:正在使用;0:未使用',
  `is_compiled` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '是否为已编译模板',
  `theme` varchar(20) NOT NULL DEFAULT '' COMMENT '主题目录名，用于主题的维一标识',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '主题名称',
  `version` varchar(20) NOT NULL DEFAULT '' COMMENT '主题版本号',
  `demo_url` varchar(50) NOT NULL DEFAULT '' COMMENT '演示地址，带协议',
  `thumbnail` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `author` varchar(20) NOT NULL DEFAULT '' COMMENT '主题作者',
  `author_url` varchar(50) NOT NULL DEFAULT '' COMMENT '作者网站链接',
  `lang` varchar(10) NOT NULL DEFAULT '' COMMENT '支持语言',
  `keywords` varchar(50) NOT NULL DEFAULT '' COMMENT '主题关键字',
  `description` varchar(100) NOT NULL DEFAULT '' COMMENT '主题描述',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "cmf_theme"
#

INSERT INTO `cmf_theme` VALUES (1,0,0,0,0,'simpleboot3','simpleboot3','1.0.2','http://demo.thinkcmf.com','','ThinkCMF','http://www.thinkcmf.com','zh-cn','ThinkCMF模板','ThinkCMF默认模板');

#
# Structure for table "cmf_theme_file"
#

DROP TABLE IF EXISTS `cmf_theme_file`;
CREATE TABLE `cmf_theme_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_public` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否公共的模板文件',
  `list_order` float NOT NULL DEFAULT '10000' COMMENT '排序',
  `theme` varchar(20) NOT NULL DEFAULT '' COMMENT '模板名称',
  `name` varchar(20) NOT NULL DEFAULT '' COMMENT '模板文件名',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '操作',
  `file` varchar(50) NOT NULL DEFAULT '' COMMENT '模板文件，相对于模板根目录，如Portal/index.html',
  `description` varchar(100) NOT NULL DEFAULT '' COMMENT '模板文件描述',
  `more` text COMMENT '模板更多配置,用户自己后台设置的',
  `config_more` text COMMENT '模板更多配置,来源模板的配置文件',
  `draft_more` text COMMENT '模板更多配置,用户临时保存的配置',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "cmf_theme_file"
#

INSERT INTO `cmf_theme_file` VALUES (1,0,10,'simpleboot3','文章页','portal/Article/index','portal/article','文章页模板文件','{\"vars\":{\"hot_articles_category_id\":{\"title\":\"Hot Articles\\u5206\\u7c7bID\",\"value\":\"1\",\"type\":\"text\",\"tip\":\"\",\"rule\":[]}}}','{\"vars\":{\"hot_articles_category_id\":{\"title\":\"Hot Articles\\u5206\\u7c7bID\",\"value\":\"1\",\"type\":\"text\",\"tip\":\"\",\"rule\":[]}}}',NULL),(2,0,10,'simpleboot3','联系我们页','portal/Page/index','portal/contact','联系我们页模板文件','{\"vars\":{\"baidu_map_info_window_text\":{\"title\":\"\\u767e\\u5ea6\\u5730\\u56fe\\u6807\\u6ce8\\u6587\\u5b57\",\"name\":\"baidu_map_info_window_text\",\"value\":\"ThinkCMF<br\\/><span class=\'\'>\\u5730\\u5740\\uff1a\\u4e0a\\u6d77\\u5e02\\u5f90\\u6c47\\u533a\\u659c\\u571f\\u8def2601\\u53f7<\\/span>\",\"type\":\"text\",\"tip\":\"\\u767e\\u5ea6\\u5730\\u56fe\\u6807\\u6ce8\\u6587\\u5b57,\\u652f\\u6301\\u7b80\\u5355html\\u4ee3\\u7801\",\"rule\":[]},\"company_location\":{\"title\":\"\\u516c\\u53f8\\u5750\\u6807\",\"value\":\"\",\"type\":\"location\",\"tip\":\"\",\"rule\":{\"require\":true}},\"address_cn\":{\"title\":\"\\u516c\\u53f8\\u5730\\u5740\",\"value\":\"\\u4e0a\\u6d77\\u5e02\\u5f90\\u6c47\\u533a\\u659c\\u571f\\u8def0001\\u53f7\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"address_en\":{\"title\":\"\\u516c\\u53f8\\u5730\\u5740\\uff08\\u82f1\\u6587\\uff09\",\"value\":\"NO.0001 Xie Tu Road, Shanghai China\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"email\":{\"title\":\"\\u516c\\u53f8\\u90ae\\u7bb1\",\"value\":\"catman@thinkcmf.com\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"phone_cn\":{\"title\":\"\\u516c\\u53f8\\u7535\\u8bdd\",\"value\":\"021 1000 0001\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"phone_en\":{\"title\":\"\\u516c\\u53f8\\u7535\\u8bdd\\uff08\\u82f1\\u6587\\uff09\",\"value\":\"+8621 1000 0001\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"qq\":{\"title\":\"\\u8054\\u7cfbQQ\",\"value\":\"478519726\",\"type\":\"text\",\"tip\":\"\\u591a\\u4e2a QQ\\u4ee5\\u82f1\\u6587\\u9017\\u53f7\\u9694\\u5f00\",\"rule\":{\"require\":true}}}}','{\"vars\":{\"baidu_map_info_window_text\":{\"title\":\"\\u767e\\u5ea6\\u5730\\u56fe\\u6807\\u6ce8\\u6587\\u5b57\",\"name\":\"baidu_map_info_window_text\",\"value\":\"ThinkCMF<br\\/><span class=\'\'>\\u5730\\u5740\\uff1a\\u4e0a\\u6d77\\u5e02\\u5f90\\u6c47\\u533a\\u659c\\u571f\\u8def2601\\u53f7<\\/span>\",\"type\":\"text\",\"tip\":\"\\u767e\\u5ea6\\u5730\\u56fe\\u6807\\u6ce8\\u6587\\u5b57,\\u652f\\u6301\\u7b80\\u5355html\\u4ee3\\u7801\",\"rule\":[]},\"company_location\":{\"title\":\"\\u516c\\u53f8\\u5750\\u6807\",\"value\":\"\",\"type\":\"location\",\"tip\":\"\",\"rule\":{\"require\":true}},\"address_cn\":{\"title\":\"\\u516c\\u53f8\\u5730\\u5740\",\"value\":\"\\u4e0a\\u6d77\\u5e02\\u5f90\\u6c47\\u533a\\u659c\\u571f\\u8def0001\\u53f7\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"address_en\":{\"title\":\"\\u516c\\u53f8\\u5730\\u5740\\uff08\\u82f1\\u6587\\uff09\",\"value\":\"NO.0001 Xie Tu Road, Shanghai China\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"email\":{\"title\":\"\\u516c\\u53f8\\u90ae\\u7bb1\",\"value\":\"catman@thinkcmf.com\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"phone_cn\":{\"title\":\"\\u516c\\u53f8\\u7535\\u8bdd\",\"value\":\"021 1000 0001\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"phone_en\":{\"title\":\"\\u516c\\u53f8\\u7535\\u8bdd\\uff08\\u82f1\\u6587\\uff09\",\"value\":\"+8621 1000 0001\",\"type\":\"text\",\"tip\":\"\",\"rule\":{\"require\":true}},\"qq\":{\"title\":\"\\u8054\\u7cfbQQ\",\"value\":\"478519726\",\"type\":\"text\",\"tip\":\"\\u591a\\u4e2a QQ\\u4ee5\\u82f1\\u6587\\u9017\\u53f7\\u9694\\u5f00\",\"rule\":{\"require\":true}}}}',NULL),(3,0,5,'simpleboot3','首页','portal/Index/index','portal/index','首页模板文件','{\"vars\":{\"top_slide\":{\"title\":\"\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"admin\\/Slide\\/index\",\"multi\":false},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"tip\":\"\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"rule\":{\"require\":true}}},\"widgets\":{\"features\":{\"title\":\"\\u5feb\\u901f\\u4e86\\u89e3ThinkCMF\",\"display\":\"1\",\"vars\":{\"sub_title\":{\"title\":\"\\u526f\\u6807\\u9898\",\"value\":\"Quickly understand the ThinkCMF\",\"type\":\"text\",\"placeholder\":\"\\u8bf7\\u8f93\\u5165\\u526f\\u6807\\u9898\",\"tip\":\"\",\"rule\":{\"require\":true}},\"features\":{\"title\":\"\\u7279\\u6027\\u4ecb\\u7ecd\",\"value\":[{\"title\":\"MVC\\u5206\\u5c42\\u6a21\\u5f0f\",\"icon\":\"bars\",\"content\":\"\\u4f7f\\u7528MVC\\u5e94\\u7528\\u7a0b\\u5e8f\\u88ab\\u5206\\u6210\\u4e09\\u4e2a\\u6838\\u5fc3\\u90e8\\u4ef6\\uff1a\\u6a21\\u578b\\uff08M\\uff09\\u3001\\u89c6\\u56fe\\uff08V\\uff09\\u3001\\u63a7\\u5236\\u5668\\uff08C\\uff09\\uff0c\\u4ed6\\u4e0d\\u662f\\u4e00\\u4e2a\\u65b0\\u7684\\u6982\\u5ff5\\uff0c\\u53ea\\u662fThinkCMF\\u5c06\\u5176\\u53d1\\u6325\\u5230\\u4e86\\u6781\\u81f4\\u3002\"},{\"title\":\"\\u7528\\u6237\\u7ba1\\u7406\",\"icon\":\"group\",\"content\":\"ThinkCMF\\u5185\\u7f6e\\u4e86\\u7075\\u6d3b\\u7684\\u7528\\u6237\\u7ba1\\u7406\\u65b9\\u5f0f\\uff0c\\u5e76\\u53ef\\u76f4\\u63a5\\u4e0e\\u7b2c\\u4e09\\u65b9\\u7ad9\\u70b9\\u8fdb\\u884c\\u4e92\\u8054\\u4e92\\u901a\\uff0c\\u5982\\u679c\\u4f60\\u613f\\u610f\\u751a\\u81f3\\u53ef\\u4ee5\\u5bf9\\u5355\\u4e2a\\u7528\\u6237\\u6216\\u7fa4\\u4f53\\u7528\\u6237\\u7684\\u884c\\u4e3a\\u8fdb\\u884c\\u8bb0\\u5f55\\u53ca\\u5206\\u4eab\\uff0c\\u4e3a\\u60a8\\u7684\\u8fd0\\u8425\\u51b3\\u7b56\\u63d0\\u4f9b\\u6709\\u6548\\u53c2\\u8003\\u6570\\u636e\\u3002\"},{\"title\":\"\\u4e91\\u7aef\\u90e8\\u7f72\",\"icon\":\"cloud\",\"content\":\"\\u901a\\u8fc7\\u9a71\\u52a8\\u7684\\u65b9\\u5f0f\\u53ef\\u4ee5\\u8f7b\\u677e\\u652f\\u6301\\u4e91\\u5e73\\u53f0\\u7684\\u90e8\\u7f72\\uff0c\\u8ba9\\u4f60\\u7684\\u7f51\\u7ad9\\u65e0\\u7f1d\\u8fc1\\u79fb\\uff0c\\u5185\\u7f6e\\u5df2\\u7ecf\\u652f\\u6301SAE\\u3001BAE\\uff0c\\u6b63\\u5f0f\\u7248\\u5c06\\u5bf9\\u4e91\\u7aef\\u90e8\\u7f72\\u8fdb\\u884c\\u8fdb\\u4e00\\u6b65\\u4f18\\u5316\\u3002\"},{\"title\":\"\\u5b89\\u5168\\u7b56\\u7565\",\"icon\":\"heart\",\"content\":\"\\u63d0\\u4f9b\\u7684\\u7a33\\u5065\\u7684\\u5b89\\u5168\\u7b56\\u7565\\uff0c\\u5305\\u62ec\\u5907\\u4efd\\u6062\\u590d\\uff0c\\u5bb9\\u9519\\uff0c\\u9632\\u6cbb\\u6076\\u610f\\u653b\\u51fb\\u767b\\u9646\\uff0c\\u7f51\\u9875\\u9632\\u7be1\\u6539\\u7b49\\u591a\\u9879\\u5b89\\u5168\\u7ba1\\u7406\\u529f\\u80fd\\uff0c\\u4fdd\\u8bc1\\u7cfb\\u7edf\\u5b89\\u5168\\uff0c\\u53ef\\u9760\\uff0c\\u7a33\\u5b9a\\u7684\\u8fd0\\u884c\\u3002\"},{\"title\":\"\\u5e94\\u7528\\u6a21\\u5757\\u5316\",\"icon\":\"cubes\",\"content\":\"\\u63d0\\u51fa\\u5168\\u65b0\\u7684\\u5e94\\u7528\\u6a21\\u5f0f\\u8fdb\\u884c\\u6269\\u5c55\\uff0c\\u4e0d\\u7ba1\\u662f\\u4f60\\u5f00\\u53d1\\u4e00\\u4e2a\\u5c0f\\u529f\\u80fd\\u8fd8\\u662f\\u4e00\\u4e2a\\u5168\\u65b0\\u7684\\u7ad9\\u70b9\\uff0c\\u5728ThinkCMF\\u4e2d\\u4f60\\u53ea\\u662f\\u589e\\u52a0\\u4e86\\u4e00\\u4e2aAPP\\uff0c\\u6bcf\\u4e2a\\u72ec\\u7acb\\u8fd0\\u884c\\u4e92\\u4e0d\\u5f71\\u54cd\\uff0c\\u4fbf\\u4e8e\\u7075\\u6d3b\\u6269\\u5c55\\u548c\\u4e8c\\u6b21\\u5f00\\u53d1\\u3002\"},{\"title\":\"\\u514d\\u8d39\\u5f00\\u6e90\",\"icon\":\"certificate\",\"content\":\"\\u4ee3\\u7801\\u9075\\u5faaApache2\\u5f00\\u6e90\\u534f\\u8bae\\uff0c\\u514d\\u8d39\\u4f7f\\u7528\\uff0c\\u5bf9\\u5546\\u4e1a\\u7528\\u6237\\u4e5f\\u65e0\\u4efb\\u4f55\\u9650\\u5236\\u3002\"}],\"type\":\"array\",\"item\":{\"title\":{\"title\":\"\\u6807\\u9898\",\"value\":\"\",\"type\":\"text\",\"rule\":{\"require\":true}},\"icon\":{\"title\":\"\\u56fe\\u6807\",\"value\":\"\",\"type\":\"text\"},\"content\":{\"title\":\"\\u63cf\\u8ff0\",\"value\":\"\",\"type\":\"textarea\"}},\"tip\":\"\"}}},\"last_news\":{\"title\":\"\\u6700\\u65b0\\u8d44\\u8baf\",\"display\":\"1\",\"vars\":{\"last_news_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/Category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}','{\"vars\":{\"top_slide\":{\"title\":\"\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"admin\\/Slide\\/index\",\"multi\":false},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"tip\":\"\\u9876\\u90e8\\u5e7b\\u706f\\u7247\",\"rule\":{\"require\":true}}},\"widgets\":{\"features\":{\"title\":\"\\u5feb\\u901f\\u4e86\\u89e3ThinkCMF\",\"display\":\"1\",\"vars\":{\"sub_title\":{\"title\":\"\\u526f\\u6807\\u9898\",\"value\":\"Quickly understand the ThinkCMF\",\"type\":\"text\",\"placeholder\":\"\\u8bf7\\u8f93\\u5165\\u526f\\u6807\\u9898\",\"tip\":\"\",\"rule\":{\"require\":true}},\"features\":{\"title\":\"\\u7279\\u6027\\u4ecb\\u7ecd\",\"value\":[{\"title\":\"MVC\\u5206\\u5c42\\u6a21\\u5f0f\",\"icon\":\"bars\",\"content\":\"\\u4f7f\\u7528MVC\\u5e94\\u7528\\u7a0b\\u5e8f\\u88ab\\u5206\\u6210\\u4e09\\u4e2a\\u6838\\u5fc3\\u90e8\\u4ef6\\uff1a\\u6a21\\u578b\\uff08M\\uff09\\u3001\\u89c6\\u56fe\\uff08V\\uff09\\u3001\\u63a7\\u5236\\u5668\\uff08C\\uff09\\uff0c\\u4ed6\\u4e0d\\u662f\\u4e00\\u4e2a\\u65b0\\u7684\\u6982\\u5ff5\\uff0c\\u53ea\\u662fThinkCMF\\u5c06\\u5176\\u53d1\\u6325\\u5230\\u4e86\\u6781\\u81f4\\u3002\"},{\"title\":\"\\u7528\\u6237\\u7ba1\\u7406\",\"icon\":\"group\",\"content\":\"ThinkCMF\\u5185\\u7f6e\\u4e86\\u7075\\u6d3b\\u7684\\u7528\\u6237\\u7ba1\\u7406\\u65b9\\u5f0f\\uff0c\\u5e76\\u53ef\\u76f4\\u63a5\\u4e0e\\u7b2c\\u4e09\\u65b9\\u7ad9\\u70b9\\u8fdb\\u884c\\u4e92\\u8054\\u4e92\\u901a\\uff0c\\u5982\\u679c\\u4f60\\u613f\\u610f\\u751a\\u81f3\\u53ef\\u4ee5\\u5bf9\\u5355\\u4e2a\\u7528\\u6237\\u6216\\u7fa4\\u4f53\\u7528\\u6237\\u7684\\u884c\\u4e3a\\u8fdb\\u884c\\u8bb0\\u5f55\\u53ca\\u5206\\u4eab\\uff0c\\u4e3a\\u60a8\\u7684\\u8fd0\\u8425\\u51b3\\u7b56\\u63d0\\u4f9b\\u6709\\u6548\\u53c2\\u8003\\u6570\\u636e\\u3002\"},{\"title\":\"\\u4e91\\u7aef\\u90e8\\u7f72\",\"icon\":\"cloud\",\"content\":\"\\u901a\\u8fc7\\u9a71\\u52a8\\u7684\\u65b9\\u5f0f\\u53ef\\u4ee5\\u8f7b\\u677e\\u652f\\u6301\\u4e91\\u5e73\\u53f0\\u7684\\u90e8\\u7f72\\uff0c\\u8ba9\\u4f60\\u7684\\u7f51\\u7ad9\\u65e0\\u7f1d\\u8fc1\\u79fb\\uff0c\\u5185\\u7f6e\\u5df2\\u7ecf\\u652f\\u6301SAE\\u3001BAE\\uff0c\\u6b63\\u5f0f\\u7248\\u5c06\\u5bf9\\u4e91\\u7aef\\u90e8\\u7f72\\u8fdb\\u884c\\u8fdb\\u4e00\\u6b65\\u4f18\\u5316\\u3002\"},{\"title\":\"\\u5b89\\u5168\\u7b56\\u7565\",\"icon\":\"heart\",\"content\":\"\\u63d0\\u4f9b\\u7684\\u7a33\\u5065\\u7684\\u5b89\\u5168\\u7b56\\u7565\\uff0c\\u5305\\u62ec\\u5907\\u4efd\\u6062\\u590d\\uff0c\\u5bb9\\u9519\\uff0c\\u9632\\u6cbb\\u6076\\u610f\\u653b\\u51fb\\u767b\\u9646\\uff0c\\u7f51\\u9875\\u9632\\u7be1\\u6539\\u7b49\\u591a\\u9879\\u5b89\\u5168\\u7ba1\\u7406\\u529f\\u80fd\\uff0c\\u4fdd\\u8bc1\\u7cfb\\u7edf\\u5b89\\u5168\\uff0c\\u53ef\\u9760\\uff0c\\u7a33\\u5b9a\\u7684\\u8fd0\\u884c\\u3002\"},{\"title\":\"\\u5e94\\u7528\\u6a21\\u5757\\u5316\",\"icon\":\"cubes\",\"content\":\"\\u63d0\\u51fa\\u5168\\u65b0\\u7684\\u5e94\\u7528\\u6a21\\u5f0f\\u8fdb\\u884c\\u6269\\u5c55\\uff0c\\u4e0d\\u7ba1\\u662f\\u4f60\\u5f00\\u53d1\\u4e00\\u4e2a\\u5c0f\\u529f\\u80fd\\u8fd8\\u662f\\u4e00\\u4e2a\\u5168\\u65b0\\u7684\\u7ad9\\u70b9\\uff0c\\u5728ThinkCMF\\u4e2d\\u4f60\\u53ea\\u662f\\u589e\\u52a0\\u4e86\\u4e00\\u4e2aAPP\\uff0c\\u6bcf\\u4e2a\\u72ec\\u7acb\\u8fd0\\u884c\\u4e92\\u4e0d\\u5f71\\u54cd\\uff0c\\u4fbf\\u4e8e\\u7075\\u6d3b\\u6269\\u5c55\\u548c\\u4e8c\\u6b21\\u5f00\\u53d1\\u3002\"},{\"title\":\"\\u514d\\u8d39\\u5f00\\u6e90\",\"icon\":\"certificate\",\"content\":\"\\u4ee3\\u7801\\u9075\\u5faaApache2\\u5f00\\u6e90\\u534f\\u8bae\\uff0c\\u514d\\u8d39\\u4f7f\\u7528\\uff0c\\u5bf9\\u5546\\u4e1a\\u7528\\u6237\\u4e5f\\u65e0\\u4efb\\u4f55\\u9650\\u5236\\u3002\"}],\"type\":\"array\",\"item\":{\"title\":{\"title\":\"\\u6807\\u9898\",\"value\":\"\",\"type\":\"text\",\"rule\":{\"require\":true}},\"icon\":{\"title\":\"\\u56fe\\u6807\",\"value\":\"\",\"type\":\"text\"},\"content\":{\"title\":\"\\u63cf\\u8ff0\",\"value\":\"\",\"type\":\"textarea\"}},\"tip\":\"\"}}},\"last_news\":{\"title\":\"\\u6700\\u65b0\\u8d44\\u8baf\",\"display\":\"1\",\"vars\":{\"last_news_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/Category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}',NULL),(4,0,10,'simpleboot3','文章列表页','portal/List/index','portal/list','文章列表模板文件','{\"vars\":[],\"widgets\":{\"hottest_articles\":{\"title\":\"\\u70ed\\u95e8\\u6587\\u7ae0\",\"display\":\"1\",\"vars\":{\"hottest_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}},\"last_articles\":{\"title\":\"\\u6700\\u65b0\\u53d1\\u5e03\",\"display\":\"1\",\"vars\":{\"last_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}','{\"vars\":[],\"widgets\":{\"hottest_articles\":{\"title\":\"\\u70ed\\u95e8\\u6587\\u7ae0\",\"display\":\"1\",\"vars\":{\"hottest_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}},\"last_articles\":{\"title\":\"\\u6700\\u65b0\\u53d1\\u5e03\",\"display\":\"1\",\"vars\":{\"last_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}',NULL),(5,0,10,'simpleboot3','单页面','portal/Page/index','portal/page','单页面模板文件','{\"widgets\":{\"hottest_articles\":{\"title\":\"\\u70ed\\u95e8\\u6587\\u7ae0\",\"display\":\"1\",\"vars\":{\"hottest_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}},\"last_articles\":{\"title\":\"\\u6700\\u65b0\\u53d1\\u5e03\",\"display\":\"1\",\"vars\":{\"last_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}','{\"widgets\":{\"hottest_articles\":{\"title\":\"\\u70ed\\u95e8\\u6587\\u7ae0\",\"display\":\"1\",\"vars\":{\"hottest_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}},\"last_articles\":{\"title\":\"\\u6700\\u65b0\\u53d1\\u5e03\",\"display\":\"1\",\"vars\":{\"last_articles_category_id\":{\"title\":\"\\u6587\\u7ae0\\u5206\\u7c7bID\",\"value\":\"\",\"type\":\"text\",\"dataSource\":{\"api\":\"portal\\/category\\/index\",\"multi\":true},\"placeholder\":\"\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\",\"tip\":\"\",\"rule\":{\"require\":true}}}}}}',NULL),(6,0,10,'simpleboot3','搜索页面','portal/search/index','portal/search','搜索模板文件','{\"vars\":{\"varName1\":{\"title\":\"\\u70ed\\u95e8\\u641c\\u7d22\",\"value\":\"1\",\"type\":\"text\",\"tip\":\"\\u8fd9\\u662f\\u4e00\\u4e2atext\",\"rule\":{\"require\":true}}}}','{\"vars\":{\"varName1\":{\"title\":\"\\u70ed\\u95e8\\u641c\\u7d22\",\"value\":\"1\",\"type\":\"text\",\"tip\":\"\\u8fd9\\u662f\\u4e00\\u4e2atext\",\"rule\":{\"require\":true}}}}',NULL),(7,1,0,'simpleboot3','模板全局配置','public/Config','public/config','模板全局配置文件','{\"vars\":{\"enable_mobile\":{\"title\":\"\\u624b\\u673a\\u6ce8\\u518c\",\"value\":1,\"type\":\"select\",\"options\":{\"1\":\"\\u5f00\\u542f\",\"0\":\"\\u5173\\u95ed\"},\"tip\":\"\"}}}','{\"vars\":{\"enable_mobile\":{\"title\":\"\\u624b\\u673a\\u6ce8\\u518c\",\"value\":1,\"type\":\"select\",\"options\":{\"1\":\"\\u5f00\\u542f\",\"0\":\"\\u5173\\u95ed\"},\"tip\":\"\"}}}',NULL),(8,1,1,'simpleboot3','导航条','public/Nav','public/nav','导航条模板文件','{\"vars\":{\"company_name\":{\"title\":\"\\u516c\\u53f8\\u540d\\u79f0\",\"name\":\"company_name\",\"value\":\"ThinkCMF\",\"type\":\"text\",\"tip\":\"\",\"rule\":[]}}}','{\"vars\":{\"company_name\":{\"title\":\"\\u516c\\u53f8\\u540d\\u79f0\",\"name\":\"company_name\",\"value\":\"ThinkCMF\",\"type\":\"text\",\"tip\":\"\",\"rule\":[]}}}',NULL);

#
# Structure for table "cmf_third_party_user"
#

DROP TABLE IF EXISTS `cmf_third_party_user`;
CREATE TABLE `cmf_third_party_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '本站用户id',
  `last_login_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT 'access_token过期时间',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '绑定时间',
  `login_times` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '状态;1:正常;0:禁用',
  `nickname` varchar(50) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `third_party` varchar(20) NOT NULL DEFAULT '' COMMENT '第三方惟一码',
  `app_id` varchar(64) NOT NULL DEFAULT '' COMMENT '第三方应用 id',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `access_token` varchar(512) NOT NULL DEFAULT '' COMMENT '第三方授权码',
  `openid` varchar(40) NOT NULL DEFAULT '' COMMENT '第三方用户id',
  `union_id` varchar(64) NOT NULL DEFAULT '' COMMENT '第三方用户多个产品中的惟一 id,(如:微信平台)',
  `more` text COMMENT '扩展信息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='第三方用户表';

#
# Data for table "cmf_third_party_user"
#


#
# Structure for table "cmf_user"
#

DROP TABLE IF EXISTS `cmf_user`;
CREATE TABLE `cmf_user` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '用户类型;1:admin;2:会员',
  `sex` tinyint(2) NOT NULL DEFAULT '0' COMMENT '性别;0:保密,1:男,2:女',
  `birthday` int(11) NOT NULL DEFAULT '0' COMMENT '生日',
  `last_login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `coin` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '金币',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `user_status` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '用户状态;0:禁用,1:正常,2:未验证',
  `user_login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码;cmf_password加密',
  `user_nickname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '用户昵称',
  `user_email` varchar(100) NOT NULL DEFAULT '' COMMENT '用户登录邮箱',
  `user_url` varchar(100) NOT NULL DEFAULT '' COMMENT '用户个人网址',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '用户头像',
  `signature` varchar(255) NOT NULL DEFAULT '' COMMENT '个性签名',
  `last_login_ip` varchar(15) NOT NULL DEFAULT '' COMMENT '最后登录ip',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '' COMMENT '激活码',
  `mobile` varchar(20) NOT NULL DEFAULT '' COMMENT '中国手机不带国家代码，国际手机号格式为：国家代码-手机号',
  `more` text COMMENT '扩展属性',
  PRIMARY KEY (`id`),
  KEY `user_login` (`user_login`),
  KEY `user_nickname` (`user_nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户表';

#
# Data for table "cmf_user"
#

INSERT INTO `cmf_user` VALUES (1,1,0,0,1589177972,0,0,0.00,1589016782,1,'admin','###f0090d1477150dd77fcff17d79d5beb3','admin','aaa@b.com','','','','127.0.0.1','','',NULL);

#
# Structure for table "cmf_user_action"
#

DROP TABLE IF EXISTS `cmf_user_action`;
CREATE TABLE `cmf_user_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '更改积分，可以为负',
  `coin` int(11) NOT NULL DEFAULT '0' COMMENT '更改金币，可以为负',
  `reward_number` int(11) NOT NULL DEFAULT '0' COMMENT '奖励次数',
  `cycle_type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '周期类型;0:不限;1:按天;2:按小时;3:永久',
  `cycle_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '周期时间值',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '用户操作名称',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '用户操作名称',
  `app` varchar(50) NOT NULL DEFAULT '' COMMENT '操作所在应用名或插件名等',
  `url` text COMMENT '执行操作的url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户操作表';

#
# Data for table "cmf_user_action"
#

INSERT INTO `cmf_user_action` VALUES (1,1,1,1,2,1,'用户登录','login','user','');

#
# Structure for table "cmf_user_action_log"
#

DROP TABLE IF EXISTS `cmf_user_action_log`;
CREATE TABLE `cmf_user_action_log` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '访问次数',
  `last_visit_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后访问时间',
  `object` varchar(100) NOT NULL DEFAULT '' COMMENT '访问对象的id,格式:不带前缀的表名+id;如posts1表示xx_posts表里id为1的记录',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '操作名称;格式:应用名+控制器+操作名,也可自己定义格式只要不发生冲突且惟一;',
  `ip` varchar(15) NOT NULL DEFAULT '' COMMENT '用户ip',
  PRIMARY KEY (`id`),
  KEY `user_object_action` (`user_id`,`object`,`action`),
  KEY `user_object_action_ip` (`user_id`,`object`,`action`,`ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='访问记录表';

#
# Data for table "cmf_user_action_log"
#


#
# Structure for table "cmf_user_balance_log"
#

DROP TABLE IF EXISTS `cmf_user_balance_log`;
CREATE TABLE `cmf_user_balance_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户 id',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `change` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '更改余额',
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '更改后余额',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `remark` varchar(255) NOT NULL DEFAULT '' COMMENT '备注',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户余额变更日志表';

#
# Data for table "cmf_user_balance_log"
#


#
# Structure for table "cmf_user_favorite"
#

DROP TABLE IF EXISTS `cmf_user_favorite`;
CREATE TABLE `cmf_user_favorite` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户 id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '收藏内容的标题',
  `thumbnail` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `url` varchar(255) DEFAULT NULL COMMENT '收藏内容的原文地址，JSON格式',
  `description` text COMMENT '收藏内容的描述',
  `table_name` varchar(64) NOT NULL DEFAULT '' COMMENT '收藏实体以前所在表,不带前缀',
  `object_id` int(10) unsigned DEFAULT '0' COMMENT '收藏内容原来的主键id',
  `create_time` int(10) unsigned DEFAULT '0' COMMENT '收藏时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户收藏表';

#
# Data for table "cmf_user_favorite"
#


#
# Structure for table "cmf_user_like"
#

DROP TABLE IF EXISTS `cmf_user_like`;
CREATE TABLE `cmf_user_like` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0' COMMENT '用户 id',
  `object_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '内容原来的主键id',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `table_name` varchar(64) NOT NULL DEFAULT '' COMMENT '内容以前所在表,不带前缀',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '内容的原文地址，不带域名',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '内容的标题',
  `thumbnail` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `description` text COMMENT '内容的描述',
  PRIMARY KEY (`id`),
  KEY `uid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户点赞表';

#
# Data for table "cmf_user_like"
#


#
# Structure for table "cmf_user_login_attempt"
#

DROP TABLE IF EXISTS `cmf_user_login_attempt`;
CREATE TABLE `cmf_user_login_attempt` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `login_attempts` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '尝试次数',
  `attempt_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '尝试登录时间',
  `locked_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '锁定时间',
  `ip` varchar(15) NOT NULL DEFAULT '' COMMENT '用户 ip',
  `account` varchar(100) NOT NULL DEFAULT '' COMMENT '用户账号,手机号,邮箱或用户名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='用户登录尝试表';

#
# Data for table "cmf_user_login_attempt"
#


#
# Structure for table "cmf_user_score_log"
#

DROP TABLE IF EXISTS `cmf_user_score_log`;
CREATE TABLE `cmf_user_score_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户 id',
  `create_time` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '用户操作名称',
  `score` int(11) NOT NULL DEFAULT '0' COMMENT '更改积分，可以为负',
  `coin` int(11) NOT NULL DEFAULT '0' COMMENT '更改金币，可以为负',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='用户操作积分等奖励日志表';

#
# Data for table "cmf_user_score_log"
#


#
# Structure for table "cmf_user_token"
#

DROP TABLE IF EXISTS `cmf_user_token`;
CREATE TABLE `cmf_user_token` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0' COMMENT '用户id',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT ' 过期时间',
  `create_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `token` varchar(64) NOT NULL DEFAULT '' COMMENT 'token',
  `device_type` varchar(10) NOT NULL DEFAULT '' COMMENT '设备类型;mobile,android,iphone,ipad,web,pc,mac,wxapp',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='用户客户端登录 token 表';

#
# Data for table "cmf_user_token"
#

INSERT INTO `cmf_user_token` VALUES (1,1,1604568807,1589016807,'a87f2ff8c9bb5c45f9e5a06d039533d4b3c14747be5da836024987ffe971f1b4','web');

#
# Structure for table "cmf_verification_code"
#

DROP TABLE IF EXISTS `cmf_verification_code`;
CREATE TABLE `cmf_verification_code` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '表id',
  `count` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '当天已经发送成功的次数',
  `send_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后发送成功时间',
  `expire_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '验证码过期时间',
  `code` varchar(8) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '最后发送成功的验证码',
  `account` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '手机号或者邮箱',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='手机邮箱数字验证码表';

#
# Data for table "cmf_verification_code"
#


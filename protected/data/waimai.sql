drop table if exists wm_cuisine_menu;

drop table if exists wm_cuisine_type;

drop table if exists wm_shops_cuisinetype;

drop table if exists wm_takeaway_shops;

/*==============================================================*/
/* Table: wm_cuisine_menu                                       */
/*==============================================================*/
create table wm_cuisine_menu
(
   cuisine_id           int(11) not null auto_increment comment '美食ID',
   cuisine_shop_id      int(11) default NULL comment '美食所属店铺ID',
   cuisine_type_id      int(11) default NULL comment '美食所属类型ID',
   cuisine_name         varchar(50) default NULL comment '美食名称',
   cuisine_price        double(5,2) default NULL comment '美食价格',
   Column_6             char(10),
   Column_7             char(10),
   Column_8             char(10),
   Column_9             char(10),
   Column_10            char(10),
   Column_11            char(10),
   Column_12            char(10),
   Column_13            char(10),
   Column_14            char(10),
   Column_15            char(10),
   primary key (cuisine_id)
)
ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;

alter table wm_cuisine_menu comment '美食菜单';

/*==============================================================*/
/* Table: wm_cuisine_type                                       */
/*==============================================================*/
create table wm_cuisine_type
(
   type_id              int(11) not null auto_increment comment '美食类型ID',
   type_name            varchar(50) default NULL comment '类型名称',
   Column_3             char(10),
   Column_4             char(10),
   Column_5             char(10),
   Column_6             char(10),
   Column_7             char(10),
   Column_8             char(10),
   Column_9             char(10),
   Column_10            char(10),
   primary key (type_id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

alter table wm_cuisine_type comment '美食类型';

/*==============================================================*/
/* Table: wm_shops_cuisinetype                                  */
/*==============================================================*/
create table wm_shops_cuisinetype
(
   shop_id              int(11) not null comment '外卖店铺ID',
   type_id              int(11) not null comment '美食类型ID',
   type_order           int(11) default NULL comment '类型排序',
   Column_4             char(10),
   Column_5             char(10),
   Column_6             char(10),
   Column_7             char(10),
   Column_8             char(10),
   Column_9             char(10),
   Column_10            char(10),
   primary key (shop_id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8;

alter table wm_shops_cuisinetype comment '关联外卖店铺和美食类型';

/*==============================================================*/
/* Table: wm_takeaway_shops                                     */
/*==============================================================*/
create table wm_takeaway_shops
(
   shop_id              int(11) not null auto_increment comment '店铺ID',
   shop_name            varchar(50) not null comment '店铺名称',
   shop_tel1            bigint(12) not null comment '店铺电话1',
   shop_tel2            bigint(12) default NULL comment '店铺电话2',
   shop_address         varchar(100) default NULL comment '店铺地址',
   shop_opentime        time default NULL comment '店铺开门时间',
   shop_closetime       time default NULL comment '店铺打烊时间',
   shop_transportationcosts double(5,0) default NULL comment '外卖起送费用',
   shop_deliveryfee     double(5,0) default NULL comment '外卖送餐费',
   shop_averagecost     double(5,0) default NULL comment '客人平均消费',
   shop_remark          varchar(100) default NULL comment '备注',
   Column_12            char(10),
   Column_13            char(10),
   Column_14            char(10),
   Column_15            char(10),
   Column_16            char(10),
   Column_17            char(10),
   Column_18            char(10),
   Column_19            char(10),
   Column_20            char(10),
   Column_21            char(10),
   Column_22            char(10),
   Column_23            char(10),
   Column_24            char(10),
   Column_25            char(10),
   Column_26            char(10),
   Column_27            char(10),
   Column_28            char(10),
   Column_29            char(10),
   Column_30            char(10),
   primary key (shop_id)
)
ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

alter table wm_takeaway_shops comment '外卖店铺';

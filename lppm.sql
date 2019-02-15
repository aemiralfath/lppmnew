/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2/15/2019 7:20:21 PM                         */
/*==============================================================*/


drop table if exists admin;

drop table if exists event;

drop table if exists event_photo;

drop table if exists pengumuman;

drop table if exists pengumuman_files;

/*==============================================================*/
/* Table: admin                                                 */
/*==============================================================*/
create table admin
(
   id_admin             varchar(255) not null,
   password             varchar(255),
   nama                 varchar(255),
   primary key (id_admin)
);

/*==============================================================*/
/* Table: event                                                 */
/*==============================================================*/
create table event
(
   id_event             int(11) not null auto_increment,
   id_admin             varchar(255),
   title                varchar(255),
   content              text,
   post_date            timestamp,
   primary key (id_event)
);

/*==============================================================*/
/* Table: event_photo                                           */
/*==============================================================*/
create table event_photo
(
   id_event_photo       int not null auto_increment,
   id_event             int(11),
   filename             varchar(255),
   primary key (id_event_photo)
);

/*==============================================================*/
/* Table: pengumuman                                            */
/*==============================================================*/
create table pengumuman
(
   id_pengumuman        int not null auto_increment,
   id_admin             varchar(255),
   title                varchar(255),
   content              text,
   post_date            timestamp,
   primary key (id_pengumuman)
);

/*==============================================================*/
/* Table: pengumuman_files                                      */
/*==============================================================*/
create table pengumuman_files
(
   id_pengumuman_files  int not null auto_increment,
   id_pengumuman        int,
   caption              varchar(255),
   filename             varchar(255),
   primary key (id_pengumuman_files)
);

alter table event add constraint FK_reference_4 foreign key (id_admin)
      references admin (id_admin) on delete restrict on update restrict;

alter table event_photo add constraint FK_reference_1 foreign key (id_event)
      references event (id_event) on delete restrict on update restrict;

alter table pengumuman add constraint FK_reference_3 foreign key (id_admin)
      references admin (id_admin) on delete restrict on update restrict;

alter table pengumuman_files add constraint FK_reference_2 foreign key (id_pengumuman)
      references pengumuman (id_pengumuman) on delete restrict on update restrict;


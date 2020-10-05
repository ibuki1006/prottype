-- Project Name : IW27
-- Date/Time    : 2020/09/17 13:41:38
-- Author       : nhs90418
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

/*
  BackupToTempTable, RestoreFromTempTable疑似命令が付加されています。
  これにより、drop table, create table 後もデータが残ります。
  この機能は一時的に $$TableName のような一時テーブルを作成します。
*/

-- チケット詳細
--* RestoreFromTempTable
create table t_ticketDetail (
  f_ticketNo BIGINT(100) not null
  , f_detail1 bit(1)
  , f_detail2 bit(1)
  , f_detail3 bit(1)
  , f_detail4 bit(1)
  , f_detail5 bit(1)
  , f_detail6 bit(1)
  , f_detail7 bit(1)
  , f_detail8 bit(1)
  , f_detail9 bit(1)
  , f_detail10 bit(1)
  , f_detail11 bit(1)
  , f_detail12 bit(1)
  , f_detail13 bit(1)
  , f_detail14 bit(1)
  , f_detail15 bit(1)
  , f_detail16 bit(1)
  , f_detail17 bit(1)
  , f_detail18 bit(1)
  , constraint t_ticketDetail_PKC primary key (f_ticketNo)
) ;

-- チケットテーブル
--* RestoreFromTempTable
create table t_ticket (
  f_ticketNo BIGINT(100) not null auto_increment
  , f_ticketName VARCHAR(100) not null
  , f_ticketPrice INT(100) not null
  , f_startPoint VARCHAR(50) not null
  , f_startTime VARCHAR(10) not null
  , f_endPoint VARCHAR(50) not null
  , f_endTime VARCHAR(10) not null
  , f_remainSeats INT(80) not null
  , f_DayOrNight INT(80) not null
  , constraint t_ticket_PKC primary key (f_ticketNo)
) ;

-- ユーザテーブル
--* RestoreFromTempTable
create table t_user (
  f_userNo bigint(100) auto_increment not null auto_increment
  , f_userId varchar(16) not null
  , f_userPass varchar(128) not null
  , f_userName varchar(10) not null
  , f_userKana varchar(20) not null
  , f_userPhone varchar(15)
  , f_userAddress varchar(100)
  , f_userMail varchar(50) not null
  , constraint t_user_PKC primary key (f_userNo)
) ;

alter table t_ticketDetail
  add constraint t_ticketDetail_FK1 foreign key (f_ticketNo) references t_ticket(f_ticketNo)
  on delete no action
  on update no action;


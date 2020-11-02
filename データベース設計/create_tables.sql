-- Project Name : IW27
-- Date/Time    : 2020/10/27 9:53:33
-- Author       : nhs90418
-- RDBMS Type   : MySQL
-- Application  : A5:SQL Mk-2

/*
  BackupToTempTable, RestoreFromTempTable�^�����߂��t������Ă��܂��B
  ����ɂ��Adrop table, create table ����f�[�^���c��܂��B
  ���̋@�\�͈ꎞ�I�� $$TableName �̂悤�Ȉꎞ�e�[�u�����쐬���܂��B
*/

-- ���C�ɓ���e�[�u��
--* RestoreFromTempTable
create table t_like (
  f_userNo BIGINT(100) not null
  , f_ticketNo BIGINT(100) not null
  , constraint t_like_PKC primary key (f_userNo,f_ticketNo)
) ;

-- �`�P�b�g�ڍ�
--* RestoreFromTempTable
create table t_ticketDetail (
  f_ticketNo BIGINT(100) not null
  , f_detail VARCHAR(100) not null
  , constraint t_ticketDetail_PKC primary key (f_ticketNo,f_detail)
) ;

-- �`�P�b�g�e�[�u��
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
  , f_DayOrNight bit(1) not null
  , constraint t_ticket_PKC primary key (f_ticketNo)
) ;

-- ���[�U�e�[�u��
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


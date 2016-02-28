# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# Хост: localhost
# Время создания: Июл 31 2009 г., 16:26
# Версия сервера: 3.23.53
# Версия PHP: 4.3.6
# 
# БД : `mysql`
# 

# --------------------------------------------------------

#
# Структура таблицы `messages`
#


#
# Дамп данных таблицы `messages`
#


# --------------------------------------------------------

#
# Структура таблицы `oshibka`
#

CREATE TABLE `oshibka` (
  `ip` varchar(12) NOT NULL default '',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  `col` int(1) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Дамп данных таблицы `oshibka`
#

INSERT INTO `oshibka` VALUES ('127.0.0.1', '2009-07-30 15:47:44', 1);

# --------------------------------------------------------

#
# Структура таблицы `users`
#

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `login` varchar(15) NOT NULL default '',
  `password` varchar(255) NOT NULL default '',
  `avatar` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Дамп данных таблицы `users`
#


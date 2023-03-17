drop database if exists chat;
create database if not exists chat;
use chat;

CREATE TABLE `chat_users` (
`userid` int(11) NOT NULL,
`firstname` varchar(255) NOT NULL,
`lastname` varchar(255) NOT NULL,
`email` varchar(255) NOT NULL,
`password` varchar(255) NOT NULL,
`image` varchar(255) NOT NULL,
`status` varchar(255) NOT NULL
 
);
CREATE TABLE `chat` (
`chatid` int(11) NOT NULL,
`sender_userid` int(11) NOT NULL,
`reciever_userid` int(11) NOT NULL,
`message` text NOT NULL,
`timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`status` int(1) NOT NULL
);
CREATE TABLE `chat_login_details` (
`id` int(11) NOT NULL,
`userid` int(11) NOT NULL,
`last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`is_typing` enum('no','yes') NOT NULL
);

INSERT INTO `chat_users` (`userid`, `firstname`,`lastname`, `email`,`password`, `image`,`status`) VALUES
(1, 'Yasmine','Aichouba','yasmine@gmail.com' ,'123', 'user1.jpg','0' ),
(2, 'Sarah','Aichouba','Sarah@gmail.com' , '123', 'user2.jpg','1' ),
(3, 'adame',' houba','adame@gmail.com' , '123', 'user3.jpg' ,'3'),
(4, 'youccef','Ahouba','youccef@gmail.com' , '123', 'user4.jpg','3'),
(5, 'rachid','Aiouba','rachid@gmail.com' , '123', 'user5.jpg','3'),
(6, 'nour','Aichou ','nour@gmail.com' ,'123', 'user6.jpg' ,'3');

select * from chat_users;
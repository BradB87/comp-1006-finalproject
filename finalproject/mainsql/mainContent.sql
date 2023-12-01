  CREATE TABLE mainContent (
  id int not null auto_increment,
fname VARCHAR(255) NOT NULL,
lname VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
confirm_password VARCHAR (255) NOT NULL,
primary key (id)
);
INSERT into mainContent ( fname, lname, phone ,email, password, confirm_password )
VALUES ('Joe', 'Biden', '7051234567', 'joe@email.ca', 'xxxxxxxx', 'yyyyyyyy'),
    ('Donald', 'Trump','7051234567', 'trump_tower@gmail.ca', 'xxxxxxx', 'yyyyyyy'),
    ('Jesus', 'Christ', '7051234567','jesus@gmail.ca', 'xxxxxxx', 'yyyyyy'),
    ('George', 'Bush','7051234567','bush_yeah@email.com', 'xxxxxx', 'yyyyyy');
    
   
    


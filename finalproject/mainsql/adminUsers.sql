CREATE TABLE adminUsers (
  user_id int not null auto_increment,
  fname VARCHAR(255) NOT NULL,
  lname VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  primary key (user_id)
);
INSERT into adminUsers ( fname, lname, email, password )
VALUES ('Joe', 'Biden', 'joe@email.ca','xxxxxxxxx'),
    ('Donald', 'Trump', 'Trump@gmail.ca','xxxxxxxx'),
    ('Jesus', 'Christ','jesus@gmail.ca','xxxxxxxx'),
    ('George', 'Bush','bushyeah@email.com','xxxxxxxx');
    
    
    
    

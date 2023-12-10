CREATE TABLE adminUsers (
  user_id int not null auto_increment,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  primary key (user_id)
);
INSERT into adminUsers ( fname, lname, email, password )
VALUES ('joe@email.ca','xxxxxxxxx'),
    ('Trump@gmail.ca','xxxxxxxx'),
    ('jesus@gmail.ca','xxxxxxxx'),
    ('bushyeah@email.com','xxxxxxxx');
    
    
    
    

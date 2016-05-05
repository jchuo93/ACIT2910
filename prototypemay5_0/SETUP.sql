drop table listing;

create table listing
( 
    listing_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(listing_id)
    
);
    
insert into listing (name, image, price, description) values('towels', 'towel.jpg', 0.05,'facial');
insert into listing (name, image, price, description) values('bottled water', 'water.jpg', 0.10,'Aquafina');
insert into listing (name, image, price, description) values('Sprite', 'sprite.jpg', 0.10,'Soda');
insert into listing (name, image, price, description) values('Vacuum room', 'vacuum.jpg', 0.10,'room service will go to your room and vacuum before you get back');
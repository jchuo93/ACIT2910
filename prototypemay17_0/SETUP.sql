drop table listing;
drop table breakfast;
drop table lunch;
drop table dinner;

create table listing
( 
    listing_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(listing_id)
    
);
    
insert into listing (name, image, price, description) values('Towels', 'towel.jpg', 0.25,'Room service will stock your bathroom with facial towels.');
insert into listing (name, image, price, description) values('Bottled water', 'water.jpg', 1.25,'Room service will fill your refridgerator with Aquafina bottled water.');
insert into listing (name, image, price, description) values('Sprite', 'sprite.jpg', 1.50,'Room service will fill your refridgerator with soda.');
insert into listing (name, image, price, description) values('Vacuum Cleaning', 'vacuum.jpg', 4.00,'Room service will go to your room and vacuum before you get back.');


create table breakfast
( 
    listing_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(listing_id)
    
);
    
insert into breakfast (name, image, price, description) values('Bacon, Eggs, Pancakes', 'breakfast1.jpg', 8.25,'Room service will bring the food to your room at your requested time.');
insert into breakfast (name, image, price, description) values('French Toast,Bacon, Eggs, Potato', 'breakfast2.jpg', 7.25,'Room service will bring the food to your room at your requested time.');
insert into breakfast (name, image, price, description) values('Chicken Mushroom Salad', 'breakfast3.jpg', 5.50,'Room service will bring the food to your room at your requested time.');
insert into breakfast (name, image, price, description) values('StrawBerry Waffles', 'breakfast4.jpg', 4.99,'Room service will bring the food to your room at your requested time.');

create table lunch
( 
    listing_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(listing_id)
    
);
    
insert into lunch (name, image, price, description) values('Parmesan Spaghetti', 'lunch1.jpg', 9.25,'Room service will bring the food to your room at your requested time.');
insert into lunch (name, image, price, description) values('Honey Mustard Chicken', 'lunch2.jpg', 6.25,'Room service will bring the food to your room at your requested time.');
insert into lunch (name, image, price, description) values('Grilled Chicken Wrap', 'lunch3.jpg', 5.00,'Room service will bring the food to your room at your requested time.');
insert into lunch (name, image, price, description) values('Tomato Soup', 'lunch4.jpg', 3.50,'Room service will bring the food to your room at your requested time.');

create table dinner
( 
    listing_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(listing_id)
    
);
    
insert into dinner (name, image, price, description) values('Chili Ground Beef', 'dinner1.jpg', 10.25,'Room service will bring the food to your room at your requested time.');
insert into dinner (name, image, price, description) values('Roasted Steak Dinner', 'dinner2.jpg', 19.55,'Room service will bring the food to your room at your requested time.');
insert into dinner (name, image, price, description) values('BBQ Chicken Breast', 'dinner3.jpg', 11.50,'Room service will bring the food to your room at your requested time.');
insert into dinner (name, image, price, description) values('Thin Crust Chicken Pizza', 'dinner4.jpg', 9.50,'Room service will bring the food to your room at your requested time.');
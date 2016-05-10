##Paste this code when you want to remove all the tables (teardown)
drop table cart_food;
drop table cart_service;
drop table cart;
drop table food;
drop table service;
drop table room;

##Paste this code when you want to add all the tables (setup)
create table room
(
    room_id INT AUTO_INCREMENT NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY(room_id)
);


create table service
( 
    service_id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(service_id)
    
);
    
insert into service (name, image, price, description) values('Towels', 'towel.jpg', 0.25,'Room service will stock your bathroom with facial towels.');
insert into service (name, image, price, description) values('Bottled water', 'water.jpg', 1.25,'Room service will fill your refridgerator with Aquafina bottled water.');
insert into service (name, image, price, description) values('Sprite', 'sprite.jpg', 1.50,'Room service will fill your refridgerator with soda.');
insert into service (name, image, price, description) values('Vacuum Cleaning', 'vacuum.jpg', 4.00,'Room service will go to your room and vacuum before you get back.');


create table food
(
    food_id INT AUTO_INCREMENT NOT NULL,
    course VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(255) NOT NULL,
    PRIMARY KEY(food_id)
);


##breakfast    
insert into food (course, name, image, price, description) values('Breakfast', 'Bacon, Eggs, Pancakes', 'breakfast1.jpg', 8.25,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Breakfast', 'French Toast,Bacon, Eggs, Potato', 'breakfast2.jpg', 7.25,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Breakfast', 'Chicken Mushroom Salad', 'breakfast3.jpg', 5.50,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Breakfast', 'StrawBerry Waffles', 'breakfast4.jpg', 4.99,'Room service will bring the food to your room at your requested time.');

##lunch    
insert into food (course, name, image, price, description) values('Lunch', 'Parmesan Spaghetti', 'lunch1.jpg', 9.25,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Lunch', 'Honey Mustard Chicken', 'lunch2.jpg', 6.25,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Lunch', 'Grilled Chicken Wrap', 'lunch3.jpg', 5.00,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Lunch', 'Tomato Soup', 'lunch4.jpg', 3.50,'Room service will bring the food to your room at your requested time.');

##dinner   
insert into food (course, name, image, price, description) values('Dinner', 'Chili Ground Beef', 'dinner1.jpg', 10.25,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Dinner', 'Roasted Steak Dinner', 'dinner2.jpg', 19.55,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Dinner', 'BBQ Chicken Breast', 'dinner3.jpg', 11.50,'Room service will bring the food to your room at your requested time.');
insert into food (course, name, image, price, description) values('Dinner', 'Thin Crust Chicken Pizza', 'dinner4.jpg', 9.50,'Room service will bring the food to your room at your requested time.');

create table cart 
(
    cart_id INT AUTO_INCREMENT NOT NULL,
    state VARCHAR(255),
    total VARCHAR(255),
    PRIMARY KEY(cart_id)
);

create table cart_service
(
    cart_id INT NOT NULL,
    service_id INT NOT NULL,
    quantity INT NOT NULL,
    CONSTRAINT pk_cart_service PRIMARY KEY(cart_id, service_id),
    CONSTRAINT fk_cart_service FOREIGN KEY (cart_id) REFERENCES cart(cart_id),
    CONSTRAINT fk_service FOREIGN KEY (service_id) REFERENCES service(service_id)
);

create table cart_food
(
    cart_id INT NOT NULL,
    food_id INT NOT NULL,
    quantity INT NOT NULL,
    CONSTRAINT pk_cart_food PRIMARY KEY(cart_id, food_id),
    CONSTRAINT fk_cart_food FOREIGN KEY (cart_id) REFERENCES cart(cart_id),
    CONSTRAINT fk_food FOREIGN KEY (food_id) REFERENCES food(food_id)
);
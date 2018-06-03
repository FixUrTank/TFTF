CREATE TABLE users(
    user_uid varchar(32) NOT NULL PRIMARY KEY,
    user_first varchar(32) NOT NULL,
    user_last varchar(32) NOT NULL,
    user_email varchar(32) NOT NULL,
    user_pwd varchar(32) NOT NULL
);

CREATE TABLE vehicles(
    vehicle_id int(5) NOT NULL PRIMARY KEY,
    vehicle_type varchar(32) NOT NULL,
    vehicle_name varchar(32) NOT NULL,
    vehicle_price varchar(32) NOT NULL,
    IsVehicleInStorage tinyint(1) NOT NULL
);

CREATE TABLE tourguides(
    tour_type varchar(32) NOT NULL,
    tour_guide_id int(5) NOT NULL PRIMARY KEY,
    tour_guide_name varchar(32)
);

CREATE TABLE tours(
    tour_guide_id int(5) NOT NULL,
    tour_price int(5) NOT NULL,
    FOREIGN KEY (tour_guide_id) REFERENCES tourguides(tour_guide_id)
);

CREATE TABLE receipt(
    receipt_id int(5) NOT NULL,
    user_uid varchar(32) NOT NULL,
    vehicle_id int(5) NOT NULL,
    tour_guide_id int(5) NOT NULL
    total_price int(5) NOT NULL,
    FOREIGN KEY (user_uid) REFERENCES users(user_uid),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(vehicle_id),
    FOREIGN KEY (tour_guide_id) REFERENCES tourguides(tour_guide_id) 
);

CREATE TABLE rented(
    user_uid varchar(32) NOT NULL,
    vehicle_id int(5) NOT NULL,
    DateOut DATE NOT NULL,
    DateBack DATE NOT NULL,
    FOREIGN KEY (user_uid) REFERENCES users(user_uid),
    FOREIGN KEY (vehicle_id) REFERENCES vehicles(vehicle_id)
);

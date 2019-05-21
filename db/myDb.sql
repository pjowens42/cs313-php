CREATE TABLE users_table (  
    users_id SERIAL PRIMARY KEY,
    users_name VARCHAR(32),
    users_email VARCHAR(32)
)

CREATE TABLE reviews_table (
    reviews_id SERIAL PRIMARY KEY,
    reviews_data VARCHAR(200),
    reviews_name VARCHAR(32) REFERENCES restaurant_table(restaurant_id)
)

CREATE TABLE restaurant_table (
    restaurant_id SERIAL PRIMARY KEY,
    restaurant_name VARCHAR (32),
    restaurant_address VARCHAR (100)
)

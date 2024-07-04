CREATE TABLE users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(40) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIME
);
-- result:
-- Query OK, 0 rows affected (0.013 sec)

CREATE TABLE paws(
    paw_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    age INT,
    breed VARCHAR(30),
    description VARCHAR(255) DEFAULT 'No description available',
    type ENUM('donate', 'adopt') NOT NULL,
    end_date TIMESTAMP NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIME
);
-- result:
-- Query OK, 0 rows affected (0.011 sec)

CREATE TABLE donations(
    donation_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    paw_id INT NOT NULL,
    amount DECIMAL(12, 2) NOT NULL CHECK (amount > 0),
    messages VARCHAR(255) DEFAULT 'No message attached',
    created_at TIMESTAMP DEFAULT CURRENT_TIME,
    FOREIGN KEY(user_id) REFERENCES users(user_id),
    FOREIGN KEY(paw_id) REFERENCES paws(paw_id)
);
-- result:
-- Query OK, 0 rows affected (0.017 sec)

CREATE TABLE donation_target(
    donation_target_id INT AUTO_INCREMENT PRIMARY KEY,
    target_amount DECIMAL(12, 2) NOT NULL CHECK (target_amount > 20000.00),
    current_amount DECIMAL(12, 2) DEFAULT 0
);
-- result:
-- Query OK, 0 rows affected (0.011 sec)

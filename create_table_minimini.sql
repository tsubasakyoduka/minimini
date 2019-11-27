CREATE TABLE members (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(100),
    picture VARCHAR(255),
    created DATETIME,
    modified TIMESTAMP
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    message TEXT,
    member_id INT,
    reply_message_id INT,
    created DATETIME,
    modified TIMESTAMP
);
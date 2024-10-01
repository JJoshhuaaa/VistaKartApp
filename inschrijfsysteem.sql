CREATE TABLE allowed_users
(
    id INT
    AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR
    (255) UNIQUE NOT NULL
);

    INSERT INTO allowed_users
        (email)
    VALUES
        ('518997@vistacollege.nl'),
        ('516872@vistacollege.nl');

# Accounts
CREATE TABLE IF NOT EXISTS accounts (
    `username` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`username`)
);
INSERT INTO accounts (`username`, `password`) VALUES ('admin', 'admin');

# Settings
CREATE TABLE IF NOT EXISTS settings (
    `name` VARCHAR(255) NOT NULL,
    `val` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`name`)
);
INSERT INTO settings (`name`, `val`) VALUES ('mailHost', 'smtp.example.com');
INSERT INTO settings (`name`, `val`) VALUES ('mailUser', 'user@example.com');
INSERT INTO settings (`name`, `val`) VALUES ('mailPassword', 'secret');
INSERT INTO settings (`name`, `val`) VALUES ('mailPort', '465');
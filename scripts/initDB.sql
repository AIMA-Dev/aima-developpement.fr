# Jobs
CREATE TABLE IF NOT EXISTS jobs (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `linkedin` TEXT,
    PRIMARY KEY (`id`)
);

# Accounts
CREATE TABLE IF NOT EXISTS accounts (
    `username` VARCHAR(255) NOT NULL UNIQUE,
    `password` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`username`)
);
INSERT INTO accounts (`username`, `password`) VALUES ('admin', 'gUbykF1/7nFuI8JTXWpSMYRwTNHESyDDbX/wJgopnAQ=');

# Settings
CREATE TABLE IF NOT EXISTS settings (
    `name` VARCHAR(255) NOT NULL UNIQUE,
    `val` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`name`)
);
INSERT INTO settings (`name`, `val`) VALUES ('mailHost', 'smtp.example.com');
INSERT INTO settings (`name`, `val`) VALUES ('mailUser', 'user@example.com');
INSERT INTO settings (`name`, `val`) VALUES ('mailPassword', 'secret');
INSERT INTO settings (`name`, `val`) VALUES ('mailPort', '465');
-- Développé avec ❤️ par : www.noasecond.com.
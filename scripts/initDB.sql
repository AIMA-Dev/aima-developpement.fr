CREATE TABLE IF NOT EXISTS settings (
    `name` VARCHAR(255) NOT NULL,
    `val` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`name`)
);

INSERT INTO settings (`name`, `val`) VALUES ('admin', 'admin');
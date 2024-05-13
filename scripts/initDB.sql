CREATE TABLE IF NOT EXISTS parameters (
    `key` VARCHAR(255) NOT NULL,
    `value` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`key`)
);

INSERT INTO parameters (`key`, `value`) VALUES ('admin', 'admin');
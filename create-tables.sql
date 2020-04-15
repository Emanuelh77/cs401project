USE heroku_e7a01c19c54ad2a;

CREATE TABLE Users (
    Username VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL PRIMARY KEY,
    Password LONGTEXT NOT NULL
);

CREATE TABLE Items (
    ItemName VARCHAR(200) NOT NULL PRIMARY KEY,
    OverallRating DECIMAL(4,2) NOT NULL,
    ProcessingPower DECIMAL(4,2) NOT NULL,
    Affordability DECIMAL(4,2) NOT NULL,
    BatteryLife DECIMAL(4,2),
    Design DECIMAL(4,2) NOT NULL
);

CREATE TABLE Suggestions (
    suggID int AUTO_INCREMENT PRIMARY KEY,
    suggestion VARCHAR(256) NOT NULL
);

INSERT INTO Items (ItemName, OverallRating, ProcessingPower, Affordability, BatteryLife, Design) VALUES ('macbook', 9, 9, 3, 9, 9);
INSERT INTO Items (ItemName, OverallRating, ProcessingPower, Affordability, BatteryLife, Design) VALUES ('iphone', 9, 8, 5, 10, 9);

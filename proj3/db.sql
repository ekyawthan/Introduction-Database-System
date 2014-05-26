CREATE TABLE CD (
        title VARCHAR(140) NOT NULL  ,
        year INT NOT NULL,
        type VARCHAR(10),
        PRIMARY KEY(title, year)
);

CREATE TABLE Song(
        name VARCHAR(140),
        artist VARCHAR(100),
        trackNo INT,
        title VARCHAR(140) NOT NULL,
        year INT NOT NULL,
        FOREIGN KEY (title, year) REFERENCES CD(title, year)
);

CREATE TABLE Producer(
        name VARCHAR(140) NOT NULL,
        address VARCHAR(200),
        PRIMARY KEY(name)
);
CREATE TABLE Supplier(
        name VARCHAR(140) NOT NULL,
        address VARCHAR(200),
        PRIMARY KEY(name)
);

CREATE TABLE Customer(
        ssn INT NOT NULL,
        name VARCHAR(140),
        phoneNo INT,
        PRIMARY KEY(ssn)
);

CREATE TABLE VIP(
        ssn INT NOT NULL,
        FOREIGN KEY(ssn) REFERENCES Customer(ssn),
        start DATE,
        discount INT,
        UNIQUE KEY (ssn)
);

CREATE TABLE CD_Produced_By(
        title VARCHAR(140) NOT NULL,
        year INT NOT NULL,
        name VARCHAR(140) NOT NULL,
        UNIQUE KEY (title, year, name),
        FOREIGN KEY(name) REFERENCES Producer(name),
        FOREIGN KEY(title, year) REFERENCES CD(title, year)
        
);
CREATE TABLE CD_Supply_By(
        title VARCHAR(140) NOT NULL,
        year INT NOT NULL,
        FOREIGN KEY(title, year) REFERENCES CD(title, year),
        name VARCHAR(140) NOT NULL,
        FOREIGN KEY(name) REFERENCES Supplier(name),
        UNIQUE KEY (title, year, name)
);

CREATE TABLE Rent(
        title VARCHAR(140) NOT NULL,
        year INT NOT NULL,
        FOREIGN KEY(title, year) REFERENCES CD(title, year),
        ssn INT NOT NULL,
        FOREIGN KEY(ssn) REFERENCES Customer(ssn),
        rentDate DATE NOT NULL,
        returnDate DATE NOT NULL
);
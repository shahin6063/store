. Customer Table:

CREATE TABLE customer (
    customer_id INT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(50),
    phone_number VARCHAR(20)
);


2. Book Table:

CREATE TABLE book (
    book_id INT PRIMARY KEY,
    title VARCHAR(100),
    price DECIMAL(10, 2),
    publication_date DATE,
    publisher_id INT,
    FOREIGN KEY (publisher_id) REFERENCES publisher(publisher_id)
);


3. Author Table:

CREATE TABLE author (
    author_id INT PRIMARY KEY,
    name VARCHAR(50)
);


4. Publisher Table:

CREATE TABLE publisher (
    publisher_id INT PRIMARY KEY,
    name VARCHAR(50)
);


5. Purchase Table:

CREATE TABLE purchase (
    purchase_id INT PRIMARY KEY,
    customer_id INT,
    book_id INT,
    purchase_date DATE,
    FOREIGN KEY (customer_id) REFERENCES customer(customer_id),
    FOREIGN KEY (book_id) REFERENCES book(book_id)
);


6. Book_Author Table:

CREATE TABLE book_author (
    book_id INT,
    author_id INT,
    PRIMARY KEY (book_id, author_id),
    FOREIGN KEY (book_id) REFERENCES book(book_id),
    FOREIGN KEY (author_id) REFERENCES author(author_id)
);

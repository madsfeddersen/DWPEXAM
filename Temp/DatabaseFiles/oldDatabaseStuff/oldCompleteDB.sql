DROP DATABASE IF EXISTS DuckShopDB;
CREATE DATABASE DuckShopDB;
USE DuckShopDB;


CREATE TABLE ´Employee´ (
    EmployeeID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Rank int (255),
    Username varchar (255),
    Password varchar (255),
    Phone_number varchar (255)
);

CREATE TABLE ´Customer´ (
    CustomerID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Billing_address varchar (255),
    Email varchar (255),
    First_name varchar (255),
    Last_name varchar (255),
    Password varchar (255),
    A_purchases varchar (255)

);

CREATE TABLE ´Order´ (
    OrderID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Product_names varchar (255),
    Product_quantities varchar (255),
    Shipping_addresses varchar (255)
);


CREATE TABLE ´Product´ (
    ProductID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Product_number int (8),
    A_color varchar (255),
    Product_description varchar (255),
    A_size varchar (3),
    Item_name varchar (255),
    Item_cost int (255),
    Stock int (255)
                        
);

CREATE TABLE ´Duck_Shop´ (
    ShopID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Address varchar(255),
    Phone_number varchar (255)
);

CREATE TABLE ´Customer_order´ (
CustomerID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
OrderID int NOT NULL,
FOREIGN KEY (CustomerID) REFERENCES Customer (CustomerID),
FOREIGN KEY (OrderID) REFERENCES ´Order´ (OrderID),
    Billing_address varchar (255),
    Email varchar (255),
    First_name varchar (255),
    Last_name varchar (255),
    Password varchar (255),
    A_purchases varchar (255),
    Product_names varchar (255),
    Product_quantities varchar (255),
    Shipping_addresses varchar (255),
    Total_cost varchar (255)

);

CREATE TABLE ´Order_product´ (
OrderID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
ProductID int NOT NULL,
FOREIGN KEY (OrderID) REFERENCES ´Order´ (OrderID),
FOREIGN KEY (ProductID) REFERENCES Product (ProductID),
    A_purchases varchar (255),
    Product_names varchar (255),
    Product_quantities varchar (255),
    Shipping_addresses varchar (255),
    Total_cost varchar (255),
    Product_number int (8),
    A_color varchar (255),
    Product_description varchar (255),
    A_size varchar (3),
    Item_name varchar (255),
    Item_cost int (255),
    Stock int (255) 
);

CREATE TABLE ´A_purchases´ (
PurchasesID int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
CustomerID int NOT NULL,
FOREIGN KEY (PurchasesID) REFERENCES Purchases (PurchasesID),
FOREIGN KEY (CustomerID) REFERENCES Customer (CustomerID),
Billing_address varchar (255),
Email varchar (255),
First_name varchar (255),
Last_name varchar (255),
Password varchar (255),
A_purchases varchar (255)
);

CREATE TABLE ´A_product_names´ (
ProductNamesID int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
OrderID int NOT NULL,
FOREIGN KEY (ProductNamesID) REFERENCES ProductNames (ProductNamesID),
FOREIGN KEY (OrderID) REFERENCES ´Order´ (OrderID),
Product_names varchar (255),
Product_quantities varchar (255),
Shipping_addresses varchar (255)
);

CREATE TABLE ´A_product_quantities´ (
ProductQuantitiesID int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
OrderID int NOT NULL,
FOREIGN KEY (ProductQuantitiesID) REFERENCES ProductQuantities (ProductQuantitiesID),
FOREIGN KEY (OrderID) REFERENCES ´Order´ (OrderID),
Product_names varchar (255),
Product_quantities varchar (255),
Shipping_addresses varchar (255)  
);

CREATE TABLE ´A_shipping_address´ (
ShippingAddressID int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
OrderID int NOT NULL,
FOREIGN KEY (ShippingAddressID) REFERENCES ShippingAddress (ShippingAddressID),
FOREIGN KEY (OrderID) REFERENCES ´Order´ (OrderID),
Product_names varchar (255),
Product_quantities varchar (255),
Shipping_addresses varchar (255)
);


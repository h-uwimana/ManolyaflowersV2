<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231023205448 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Attributes (AttributeID INT AUTO_INCREMENT NOT NULL, AttributeName VARCHAR(255) DEFAULT NULL, PRIMARY KEY(AttributeID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Categories (CategoryID INT AUTO_INCREMENT NOT NULL, CategoryName VARCHAR(255) DEFAULT NULL, Description TEXT DEFAULT NULL, PRIMARY KEY(CategoryID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Coupons (CouponID INT AUTO_INCREMENT NOT NULL, CouponCode VARCHAR(50) DEFAULT NULL, Description TEXT DEFAULT NULL, DiscountAmount NUMERIC(10, 2) DEFAULT NULL, ExpiryDate DATETIME DEFAULT NULL, UNIQUE INDEX CouponCode (CouponCode), PRIMARY KEY(CouponID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Customers (CustomerID INT AUTO_INCREMENT NOT NULL, FirstName VARCHAR(255) DEFAULT NULL, LastName VARCHAR(255) DEFAULT NULL, Email VARCHAR(255) DEFAULT NULL, PasswordHash VARCHAR(255) DEFAULT NULL, Address VARCHAR(255) DEFAULT NULL, City VARCHAR(255) DEFAULT NULL, PostalCode VARCHAR(10) DEFAULT NULL, Country VARCHAR(255) DEFAULT NULL, Phone VARCHAR(20) DEFAULT NULL, DateRegistered DATETIME DEFAULT NULL, UNIQUE INDEX Email (Email), PRIMARY KEY(CustomerID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Inventory (InventoryID INT AUTO_INCREMENT NOT NULL, Quantity INT DEFAULT NULL, PurchasePrice NUMERIC(10, 2) DEFAULT NULL, DateReceived DATETIME DEFAULT NULL, ProductID INT DEFAULT NULL, SupplierID INT DEFAULT NULL, INDEX ProductID (ProductID), INDEX SupplierID (SupplierID), PRIMARY KEY(InventoryID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE OrderItems (OrderItemID INT AUTO_INCREMENT NOT NULL, Quantity INT DEFAULT NULL, PriceEach NUMERIC(10, 2) DEFAULT NULL, ProductID INT DEFAULT NULL, OrderID INT DEFAULT NULL, INDEX OrderID (OrderID), INDEX ProductID (ProductID), PRIMARY KEY(OrderItemID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Orders (OrderID INT AUTO_INCREMENT NOT NULL, OrderDate DATETIME DEFAULT NULL, ShipDate DATETIME DEFAULT NULL, ShippingAddress VARCHAR(255) DEFAULT NULL, ShippingCity VARCHAR(255) DEFAULT NULL, ShippingPostalCode VARCHAR(10) DEFAULT NULL, ShippingCountry VARCHAR(255) DEFAULT NULL, Total NUMERIC(10, 2) DEFAULT NULL, OrderStatus VARCHAR(50) DEFAULT NULL, CouponID INT DEFAULT NULL, CustomerID INT DEFAULT NULL, ShippingMethodID INT DEFAULT NULL, INDEX CustomerID (CustomerID), INDEX ShippingMethodID (ShippingMethodID), INDEX CouponID (CouponID), PRIMARY KEY(OrderID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Payments (PaymentID INT AUTO_INCREMENT NOT NULL, Amount NUMERIC(10, 2) DEFAULT NULL, PaymentDate DATETIME DEFAULT NULL, PaymentMethod VARCHAR(50) DEFAULT NULL, OrderID INT DEFAULT NULL, INDEX OrderID (OrderID), PRIMARY KEY(PaymentID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ProductAttributes (ProductAttributeID INT AUTO_INCREMENT NOT NULL, Value VARCHAR(255) DEFAULT NULL, AttributeID INT DEFAULT NULL, ProductID INT DEFAULT NULL, INDEX AttributeID (AttributeID), INDEX ProductID (ProductID), PRIMARY KEY(ProductAttributeID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ProductReviews (ReviewID INT AUTO_INCREMENT NOT NULL, Rating INT DEFAULT NULL, Comment TEXT DEFAULT NULL, DateAdded DATETIME DEFAULT NULL, ProductID INT DEFAULT NULL, CustomerID INT DEFAULT NULL, INDEX CustomerID (CustomerID), INDEX ProductID (ProductID), PRIMARY KEY(ReviewID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Products (ProductID INT AUTO_INCREMENT NOT NULL, ProductName VARCHAR(255) DEFAULT NULL, Description TEXT DEFAULT NULL, Price NUMERIC(10, 2) DEFAULT NULL, Stock INT DEFAULT NULL, ImageURL VARCHAR(255) DEFAULT NULL, DateAdded DATETIME DEFAULT NULL, CategoryID INT DEFAULT NULL, INDEX CategoryID (CategoryID), PRIMARY KEY(ProductID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Returns (ReturnID INT AUTO_INCREMENT NOT NULL, Reason TEXT DEFAULT NULL, DateReturned DATETIME DEFAULT NULL, OrderID INT DEFAULT NULL, ProductID INT DEFAULT NULL, INDEX OrderID (OrderID), INDEX ProductID (ProductID), PRIMARY KEY(ReturnID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Shipments (ShipmentID INT AUTO_INCREMENT NOT NULL, ShipDate DATETIME DEFAULT NULL, TrackingNumber VARCHAR(50) DEFAULT NULL, ShippingCarrier VARCHAR(50) DEFAULT NULL, OrderID INT DEFAULT NULL, INDEX OrderID (OrderID), PRIMARY KEY(ShipmentID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ShippingMethods (ShippingMethodID INT AUTO_INCREMENT NOT NULL, MethodName VARCHAR(255) DEFAULT NULL, Cost NUMERIC(10, 2) DEFAULT NULL, EstimatedDeliveryTime VARCHAR(255) DEFAULT NULL, PRIMARY KEY(ShippingMethodID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ShoppingCart (CartID INT AUTO_INCREMENT NOT NULL, Quantity INT DEFAULT NULL, DateAdded DATETIME DEFAULT NULL, CustomerID INT DEFAULT NULL, ProductID INT DEFAULT NULL, INDEX CustomerID (CustomerID), INDEX ProductID (ProductID), PRIMARY KEY(CartID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Suppliers (SupplierID INT AUTO_INCREMENT NOT NULL, SupplierName VARCHAR(255) DEFAULT NULL, ContactName VARCHAR(255) DEFAULT NULL, Address VARCHAR(255) DEFAULT NULL, City VARCHAR(255) DEFAULT NULL, PostalCode VARCHAR(10) DEFAULT NULL, Country VARCHAR(255) DEFAULT NULL, Phone VARCHAR(20) DEFAULT NULL, Email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(SupplierID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE SupportTickets (TicketID INT AUTO_INCREMENT NOT NULL, Subject VARCHAR(255) DEFAULT NULL, Message TEXT DEFAULT NULL, DateSubmitted DATETIME DEFAULT NULL, Status VARCHAR(50) DEFAULT NULL, CustomerID INT DEFAULT NULL, INDEX CustomerID (CustomerID), PRIMARY KEY(TicketID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE TicketResponses (ResponseID INT AUTO_INCREMENT NOT NULL, Message TEXT DEFAULT NULL, DateResponded DATETIME DEFAULT NULL, TicketID INT DEFAULT NULL, RespondedBy INT DEFAULT NULL, INDEX TicketID (TicketID), INDEX RespondedBy (RespondedBy), PRIMARY KEY(ResponseID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Wishlist (WishlistID INT AUTO_INCREMENT NOT NULL, DateAdded DATETIME DEFAULT NULL, CustomerID INT DEFAULT NULL, ProductID INT DEFAULT NULL, INDEX CustomerID (CustomerID), INDEX ProductID (ProductID), PRIMARY KEY(WishlistID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Inventory ADD CONSTRAINT FK_33DCC8958FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE Inventory ADD CONSTRAINT FK_33DCC895AB3682CB FOREIGN KEY (SupplierID) REFERENCES Suppliers (SupplierID)');
        $this->addSql('ALTER TABLE OrderItems ADD CONSTRAINT FK_7F568F958FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE OrderItems ADD CONSTRAINT FK_7F568F95EF06D63 FOREIGN KEY (OrderID) REFERENCES Orders (OrderID)');
        $this->addSql('ALTER TABLE Orders ADD CONSTRAINT FK_E283F8D86CF52A6C FOREIGN KEY (CouponID) REFERENCES Coupons (CouponID)');
        $this->addSql('ALTER TABLE Orders ADD CONSTRAINT FK_E283F8D8854CF4BD FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE Orders ADD CONSTRAINT FK_E283F8D8CE6B71E4 FOREIGN KEY (ShippingMethodID) REFERENCES ShippingMethods (ShippingMethodID)');
        $this->addSql('ALTER TABLE Payments ADD CONSTRAINT FK_9CA4F964EF06D63 FOREIGN KEY (OrderID) REFERENCES Orders (OrderID)');
        $this->addSql('ALTER TABLE ProductAttributes ADD CONSTRAINT FK_7359B8CA50B2D108 FOREIGN KEY (AttributeID) REFERENCES Attributes (AttributeID)');
        $this->addSql('ALTER TABLE ProductAttributes ADD CONSTRAINT FK_7359B8CA8FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE ProductReviews ADD CONSTRAINT FK_F0E60C6C8FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE ProductReviews ADD CONSTRAINT FK_F0E60C6C854CF4BD FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE Products ADD CONSTRAINT FK_4ACC380CE8042869 FOREIGN KEY (CategoryID) REFERENCES Categories (CategoryID)');
        $this->addSql('ALTER TABLE Returns ADD CONSTRAINT FK_44AB7539EF06D63 FOREIGN KEY (OrderID) REFERENCES Orders (OrderID)');
        $this->addSql('ALTER TABLE Returns ADD CONSTRAINT FK_44AB75398FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE Shipments ADD CONSTRAINT FK_16981877EF06D63 FOREIGN KEY (OrderID) REFERENCES Orders (OrderID)');
        $this->addSql('ALTER TABLE ShoppingCart ADD CONSTRAINT FK_2B2F0082854CF4BD FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE ShoppingCart ADD CONSTRAINT FK_2B2F00828FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
        $this->addSql('ALTER TABLE SupportTickets ADD CONSTRAINT FK_2756DBC3854CF4BD FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE TicketResponses ADD CONSTRAINT FK_90C29A48C5E8A6B3 FOREIGN KEY (TicketID) REFERENCES SupportTickets (TicketID)');
        $this->addSql('ALTER TABLE TicketResponses ADD CONSTRAINT FK_90C29A4892E777C4 FOREIGN KEY (RespondedBy) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE Wishlist ADD CONSTRAINT FK_65974867854CF4BD FOREIGN KEY (CustomerID) REFERENCES Customers (CustomerID)');
        $this->addSql('ALTER TABLE Wishlist ADD CONSTRAINT FK_659748678FE6346E FOREIGN KEY (ProductID) REFERENCES Products (ProductID)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Inventory DROP FOREIGN KEY FK_33DCC8958FE6346E');
        $this->addSql('ALTER TABLE Inventory DROP FOREIGN KEY FK_33DCC895AB3682CB');
        $this->addSql('ALTER TABLE OrderItems DROP FOREIGN KEY FK_7F568F958FE6346E');
        $this->addSql('ALTER TABLE OrderItems DROP FOREIGN KEY FK_7F568F95EF06D63');
        $this->addSql('ALTER TABLE Orders DROP FOREIGN KEY FK_E283F8D86CF52A6C');
        $this->addSql('ALTER TABLE Orders DROP FOREIGN KEY FK_E283F8D8854CF4BD');
        $this->addSql('ALTER TABLE Orders DROP FOREIGN KEY FK_E283F8D8CE6B71E4');
        $this->addSql('ALTER TABLE Payments DROP FOREIGN KEY FK_9CA4F964EF06D63');
        $this->addSql('ALTER TABLE ProductAttributes DROP FOREIGN KEY FK_7359B8CA50B2D108');
        $this->addSql('ALTER TABLE ProductAttributes DROP FOREIGN KEY FK_7359B8CA8FE6346E');
        $this->addSql('ALTER TABLE ProductReviews DROP FOREIGN KEY FK_F0E60C6C8FE6346E');
        $this->addSql('ALTER TABLE ProductReviews DROP FOREIGN KEY FK_F0E60C6C854CF4BD');
        $this->addSql('ALTER TABLE Products DROP FOREIGN KEY FK_4ACC380CE8042869');
        $this->addSql('ALTER TABLE Returns DROP FOREIGN KEY FK_44AB7539EF06D63');
        $this->addSql('ALTER TABLE Returns DROP FOREIGN KEY FK_44AB75398FE6346E');
        $this->addSql('ALTER TABLE Shipments DROP FOREIGN KEY FK_16981877EF06D63');
        $this->addSql('ALTER TABLE ShoppingCart DROP FOREIGN KEY FK_2B2F0082854CF4BD');
        $this->addSql('ALTER TABLE ShoppingCart DROP FOREIGN KEY FK_2B2F00828FE6346E');
        $this->addSql('ALTER TABLE SupportTickets DROP FOREIGN KEY FK_2756DBC3854CF4BD');
        $this->addSql('ALTER TABLE TicketResponses DROP FOREIGN KEY FK_90C29A48C5E8A6B3');
        $this->addSql('ALTER TABLE TicketResponses DROP FOREIGN KEY FK_90C29A4892E777C4');
        $this->addSql('ALTER TABLE Wishlist DROP FOREIGN KEY FK_65974867854CF4BD');
        $this->addSql('ALTER TABLE Wishlist DROP FOREIGN KEY FK_659748678FE6346E');
        $this->addSql('DROP TABLE Attributes');
        $this->addSql('DROP TABLE Categories');
        $this->addSql('DROP TABLE Coupons');
        $this->addSql('DROP TABLE Customers');
        $this->addSql('DROP TABLE Inventory');
        $this->addSql('DROP TABLE OrderItems');
        $this->addSql('DROP TABLE Orders');
        $this->addSql('DROP TABLE Payments');
        $this->addSql('DROP TABLE ProductAttributes');
        $this->addSql('DROP TABLE ProductReviews');
        $this->addSql('DROP TABLE Products');
        $this->addSql('DROP TABLE Returns');
        $this->addSql('DROP TABLE Shipments');
        $this->addSql('DROP TABLE ShippingMethods');
        $this->addSql('DROP TABLE ShoppingCart');
        $this->addSql('DROP TABLE Suppliers');
        $this->addSql('DROP TABLE SupportTickets');
        $this->addSql('DROP TABLE TicketResponses');
        $this->addSql('DROP TABLE Wishlist');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

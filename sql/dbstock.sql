create database stockDB;
use stockDB;

 create table TblPago (
 idPago int auto_increment,
 idDescripcion varchar(20),
 primary key (idPago), );
 
 create table TblBanco (
 idBanco int auto_increment,
 primary key (idBanco)
 Nombre varchar(20),);

create table TblSupplier (
SupplierID int auto_increment,
primary key (SupplierID),
SupplierName varchar(30) );

create table TblQuotes (
QuoteID int auto_increment,
primary key (QuoteID),
SupplierID int ,
QuoteNo int,
QuoteValue double,
foreign key (SupplierID) references TblSupplier (SupplierID) );

create table TblPurchaseOrder (
POID int auto_increment,
primary key (POID),
SupplierID int ,
PONumber varchar(12),
PODate datetime,
POValue double,
foreign key (SupplierID) references TblSupplier (SupplierID) );

create table TblProduct (
ProductID int auto_increment,
primary key (ProductID ),
ProductName varchar(30),
ProductDescription varchar(30),
UnitOfMeasure varchar(12) );

create table TblDeliveryNote (
DeliveryNoteID int auto_increment,
primary key (DeliveryNoteID),
DeliveryNoteNo int,
DeliveryNoteDate  datetime );

create table TblStockIn (
StockInID int auto_increment,
primary key (StockInID),
SupplierID int ,
ProductID int ,
DeliveryNoteID int ,
DateIn datetime,
QuantityIN int ,   
UnitCost double ,
foreign key (SupplierID) references TblSupplier (SupplierID),
foreign key (ProductID) references TblProduct (ProductID),
foreign key (DeliveryNoteID) references TblDeliveryNote (DeliveryNoteID) );

create table TblStockOut (
StockOutID int auto_increment,
primary key (StockOutID),
StockInID int,
DateOut datetime,
QuantityOut int,
UnitPrice double,
foreign key (StockInID) references TblStockIn (StockInID) );

create table Tbltrucks (
IdTruck int ,
primary key (Idtruck),
description varchar(30) );

create table Tblcustomers (
IdCustomers int auto_increment,
primary key (IdCustomers),
Name varchar (50),
LastName varchar(30),
Domicilio varchar(50),
NumExt varchar
Colonia varchar(50),
Ciudad varchar(30),
Pais varchar(20),
Estado varchar(20),
Municipio varchar(20), 
Cp varchar (10),
Telefono varchar (20),
Rfc  varchar(15),
MetodoPago varchar(20),
Banco varchar(20),
email varchar(30), );

create table TblRepair (
RepairId int auto_increment,
primary key (RepairId),
IdTruck int ,
StockOutID int ,
OrderDate datetime,
foreign key (IdTruck) references Tbltrucks (IdTruck),
foreign key (StockOutID) references TblStockOut (StockOutID) );

create table TblSales (
SaleID int auto_increment,
IdCustomers int,
StockOutID int,
OrderDate datetime,
TipoPersona varchar(20),
Moneda varchar(15),
Descuento double,
Iva double, 
Credito bool,
primary key (SaleID),
 foreign key (idPAgo) references TblPago (idPago),
 foreign key (StockOutID) references TblStockOut (StockOutID),
 foreign key (IdCustomers) references Tblcustomers (IdCustomers) );
 

 
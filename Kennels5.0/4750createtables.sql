-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql213.byetcluster.com
-- Generation Time: Nov 05, 2017 at 07:45 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

DROP DATABASE IF EXISTS b7_20951820_kennelsRus;
CREATE DATABASE b7_20951820_kennelsRus;
USE b7_20951820_kennelsRus; 

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-06:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: b7_20951820_kennelsRus
--

-- --------------------------------------------------------

--
-- Table structure for table Customer
--

CREATE TABLE IF NOT EXISTS Customer (
  cust_id int(11) NOT NULL AUTO_INCREMENT,
  cust_last_name varchar(30) DEFAULT NULL,
  cust_first_name varchar(30) DEFAULT NULL,
  cust_phone varchar(12) DEFAULT NULL,
  cust_email varchar(50) DEFAULT NULL,
  cust_street varchar(50) DEFAULT NULL,
  cust_city varchar(30) DEFAULT NULL,
  cust_state char(2) DEFAULT NULL,
  cust_zip varchar(10) DEFAULT NULL,
  cust_password varchar(20) DEFAULT NULL,
  PRIMARY KEY (cust_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Order Status
--

CREATE TABLE IF NOT EXISTS Order_Status (
  status_id int(11) NOT NULL,
  status_name varchar(20) NOT NULL,
  PRIMARY KEY (status_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Orders
--

CREATE TABLE IF NOT EXISTS Orders (
  order_id int(11) NOT NULL,
  cust_id int(11) NOT NULL,
  order_date date NOT NULL,
  ship_date date DEFAULT NULL,
  ship_fee decimal(10,2) DEFAULT NULL,
  ship_name varchar(50) NOT NULL,
  ship_street varchar(50) NOT NULL,
  ship_city varchar(30) NOT NULL,
  ship_state char(2) NOT NULL,
  ship_zip varchar(10) NOT NULL,
  credit_card int(11) DEFAULT NULL,
  status_id int(11) NOT NULL,
  PRIMARY KEY (order_id),
  FOREIGN KEY (cust_id) REFERENCES Customer(cust_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Suppliers
--

CREATE TABLE IF NOT EXISTS Suppliers (
  supplier_id int(11) NOT NULL,
  supplier_name varchar(60) NOT NULL,
  contact_name varchar(50) NOT NULL,
  contact_phone varchar(12) NOT NULL,
  contact_email varchar(50) NOT NULL,
  PRIMARY KEY (supplier_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Inventory
--

CREATE TABLE IF NOT EXISTS Inventory (
  part_id int(11) NOT NULL AUTO_INCREMENT,
  part_name varchar(40) NOT NULL,
  part_price decimal(10,2) NOT NULL,
  units int(11) NOT NULL,
  unit_of_measure varchar(10) NOT NULL,
  supplier_id int(11) NOT NULL,
  PRIMARY KEY (part_id),
  FOREIGN KEY (supplier_id) REFERENCES Suppliers(supplier_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Model
--

CREATE TABLE IF NOT EXISTS Model (
  model_id int(11) NOT NULL,
  model_name varchar(60) NOT NULL,
  model_price decimal(10,2) NOT NULL,
  PRIMARY KEY (model_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Customization
--

CREATE TABLE IF NOT EXISTS Customization (
  custom_id int(11) NOT NULL AUTO_INCREMENT,
  custom_name varchar(60) NOT NULL,
  custom_price decimal(10,2) NOT NULL,
  PRIMARY KEY (custom_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Customization_Details
--

CREATE TABLE IF NOT EXISTS Customization_Details (
  custom_id int(11) NOT NULL,
  part_id int(11) NOT NULL,
  custom_quanity int(11) NOT NULL,
  PRIMARY KEY (custom_id,part_id),
  FOREIGN KEY (custom_id) REFERENCES Customization(custom_id),
  FOREIGN KEY (part_id) REFERENCES Inventory(part_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



-- --------------------------------------------------------

--
-- Table structure for table Department
--

CREATE TABLE IF NOT EXISTS Department (
  dept_id int(11) NOT NULL AUTO_INCREMENT,
  dept_name varchar(20) NOT NULL,
  PRIMARY KEY (dept_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table Employee
--

CREATE TABLE IF NOT EXISTS Employee (
  emp_id int(11) NOT NULL,
  emp_last_name varchar(30) NOT NULL,
  emp_first_name varchar(30) NOT NULL,
  dept_id int(11) NOT NULL,
  job_title varchar(25) NOT NULL,
  emp_phone varchar(12) NOT NULL,
  emp_email varchar(50) NOT NULL,
  emp_street varchar(50) NOT NULL,
  emp_city varchar(30) NOT NULL,
  emp_state char(2) NOT NULL,
  emp_zip varchar(10) NOT NULL,
  hire_date date NOT NULL,
  currently_employed varchar(3) NOT NULL,
  retire_date date DEFAULT NULL,
  emp_password varchar(20) NOT NULL,
  PRIMARY KEY (emp_id),
  FOREIGN KEY (dept_id) REFERENCES Department(dept_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Model Details
--

CREATE TABLE IF NOT EXISTS Model_Details (
  model_id int(11) NOT NULL,
  part_id int(11) NOT NULL,
  model_quantity int(11) NOT NULL,
  PRIMARY KEY (model_id,part_id),
  FOREIGN KEY (part_id) REFERENCES Inventory(part_id)
  
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------



--
-- Table structure for table Order Details
--

CREATE TABLE IF NOT EXISTS Order_Details (
  order_id int(11) NOT NULL,
  model_id int(11) NOT NULL,
  custom_id int(11) DEFAULT NULL,
  order_quantity int(11) NOT NULL,
  discount int(11) DEFAULT NULL,
  PRIMARY KEY (order_id,model_id),
  FOREIGN KEY (order_id) REFERENCES Orders(order_id),
  FOREIGN KEY (model_id) REFERENCES Model(model_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table Part Orders
--

CREATE TABLE IF NOT EXISTS Part_Orders (
  placed_date date NOT NULL,
  part_id int(11) NOT NULL,
  units_received int(11) DEFAULT NULL,
  received_date date DEFAULT NULL,
  supplier_id int(11) NOT NULL,
  PRIMARY KEY (placed_date,part_id),
  FOREIGN KEY (part_id) REFERENCES Inventory(part_id),
  FOREIGN KEY (supplier_id) REFERENCES Suppliers(supplier_id)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
GRANT SELECT, INSERT, DELETE, UPDATE
ON b7_20951820_kennelsRus.*
TO b7_20951820@localhost
IDENTIFIED BY 'Group4project';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

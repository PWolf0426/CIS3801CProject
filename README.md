# CIS3801CProject by Paul Nater

### Description
This project is a simple web application project demonstrating the steps in building a simple website with a database backend for a fictional bakery.  The goals of this project are for demostrating how to build web pages using HTML, CSS, and JavaScript as well as using PHP and MySQL to build simple backend support to pull data from the database and display that data on the frontend web page.
### Installation Instructions
1. Install LAMP development stack.
2. Login to myPhpAdmin.
3. In the query window in myPhpAdmin, run the following queries to create the database and product table.
```SQL
CREATE DATABASE myBakeryDatabase;
CREATE TABLE Products(ProductID int NOT NULL AUTO_INCREMENT, ProductName varchar(255), Price double, Description varchar(255), Thumbnail varchar(255), PRIMARY KEY (ProductID));
```
4. Copy all files and folders located in the project folder of this repository to your **htdocs** or equivalent folder to complete the installation.
### Usage
The site can be used as a basic template/starting point to begin building a website for a small business.  It can also be used as a learning tool to help learning web developers get starting with building their own web applications.
### Credits
Author: Paul Nater

### License Information

MIT License

Copyright (c) 2018 Paul Nater

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

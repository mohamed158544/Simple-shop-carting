CONTENTS OF THIS FILE
---------------------

 * Introduction
 * problem identification
 * provided solution
 * Attached files
 * Code Running sequence
 * Reasons for using php and html5
 * Trades-off made and future work



INTRODUCTION
------------

Now a days the life style of the people is different. People feel uncomfortable and time consuming for going crowded markets. 
So, E-Shopping is a boon as it saves lot of time. Online shopping is a process whereby consumers directly buy goods, services etc. 
from a seller without an intermediary service over the Internet. Shoppers can visit web stores from the comfort of their 
house and shop as by sitting in front of the computer. Online stores are usually available 24 hours a day and 
many consumers have internet access both at work and at home. So it is very convenient for them to shop Online. 
One of the most enticing factors about online shopping, particularly during holiday season is, 
it alleviates the need to wait in long lines or search from a store for a particular item. 
Variety of goods are available in online.


PROBLEM IDENTIFICATION 
----------------------

The problem of online shopping is how the users are going to calculate the payment of the products selected in the cart depending 
on the price, the shipping, VAT, and the offers if available. Which is very difficult to be done manually by the user. 
Also, it is important to show the selected products at the end because the user may change his decision. 


SOLUTION
--------

The solution of the online shopping is provided by the developer by creating and online shopping cart using the php and html5 (full stack solution). 
The back-end code is calculating the subtotal, shipping rat, VAT, and the offers applied on the product selected if available. Then calculate 
the total payment of the selected products. 


ATTACHED FILES
--------------
The code of the shopping cart is written in form of three files in a localhost using XAMPP to run the php files.  

1) prodcut.php 
2) product_results.php
3) style5.css
 
When running the code the main file is the product.php which contains front-end of the online shopping, the input data of the selected 
products, and the second file is the equations files which calculates the total payment and shows the offers taken. 


CODE RUNNING SEQUENCE
----------------
1) Start-up the available localhost.
2) Got to the website of the attahced php files.   
1) Enter the number of each required product
2) Send the data to the second file using the submit button
3) recieve the data of the selected products
4) Running the equation and calculate the payment 
5) Display the output of the selected prodcuts, payments, and applied offers. 


REASONS FOR USING PHP AND HTML5 
-------------------------------

PHP is considered to be the most widely used open-source scripting language. Its main ability is to generate the dynamic page content.
PHP as all backend languages is responsible for business logic. 

Moreover, it has the capability to collect data, set, and receive cookies.
Also, PHP gives the ability to change, update or delete data in the database, set user access to this data, and encrypt it.

1) PHP solution can work on various operating systems – Windows, Linux, Mac, Unix.
2) This programming language provides compatibility with most servers. 
3) Simple is usage and coding comparing to other scripting languages.
4) PHP works quickly and efficiently on a server-side in most cases.
5) It supports different types of databases.
6) PHP is an open-source framework and can be downloaded for free.


TRADS-OFF AND FUTURE WORK
-------------------------

The features of the provided solution are: 

1) Very simple to be used by anyone.
2) Good seperation between front-end and back-end sections. 
3) Clear code can be understood by anyone and maintainable. 
4) The back-end solves the solution correctly taken into considration all of offers and any amount of prodcuts.

There are more future work to be added to the solution if there is more time: 

1) Imporve the front-end section. 

2) Add more features to the cart like removeing and adding without going back to the first page, 
which requires a javascript to be implemented.

3) Create a database for the provided prodcuts instead of defining the variables at the php section.    























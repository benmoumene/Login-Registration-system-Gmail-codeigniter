# PHP-CodeIgniter-Login
It is a Login and Registration system configured with SMTP. Unique tokens are also being initialized for forgot password feature. <br>
Note: Only the home page is fully responsive.

* Customer
  <br> •	Login or create an account
•	Verify account through registered email
•	Retrieve forgotten password through registered email
•	View a short introductory of the bakery shop.
•	View cakes and milk tea that are available in the menu
•	Add items into cart
•	Remove items from cart
•	Checkout and make payment
• View Delivery Status
•	View Order History
•	Logout from account
 
* Staff 
  <br> •	Login into account
• View profile
•	View orders placed by customers 
• Update customer's order status
•	Remove sold out items
•	Modify menu price
• Update daily sales
• Update chatbot system
•	Logout from account

* Owner
  <br> •	Login into account
•	Add new items into menu
• View customer profile
• Update own profile
•	View all orders placed by customers
• View daily sales in bar chart form
• View profit in line chart form
•	Logout from account





## Getting Started
1. Install  [WAMP](https://www.wampserver.com/en/download-wampserver-64bits/) for MySQL server.

2. Import  [wpu-login.sql](/PHP-CodeIgniter-Login/wpu-login/sql/wpu-login.sql) to phpMyAdmin. 

3. Run the program using local host in default browser.

4. Please take note that Port 3308 is being used within the config folder.

5. Base url for this project = $config['base_url'] = 'http://localhost/wpu-login/';

## Screenshot 

-----

<div align="center">
  <h2>Registration Page</h2>
<img src="images/homepage.png" alt="image">
</div>

-----

<div align="center">
  <h2>Login Page</h2>
<img src="images/login.PNG" alt="image">
</div>

-----

<div align="center">
  <h2>Email Verification</h2>
<img src="images/user.PNG" alt="image">
</div>

-----

<div align="center">
  <h2>Forgot Password</h2>
<img src="images/menu.PNG" alt="image">
</div>

-----

<div align="center">
  <h2>Add New SubMenu</h2>
<img src="images/cart.PNG" alt="image">
</div>

-----

<div align="center">
  <h2>Modify User Access</h2>
<img src="images/scheckout.PNG" alt="image">
</div>

-----




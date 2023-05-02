To run this project you will need XAMMP Server and install this project in dir "C:\xampp\htdocs\"

After installation run Apache Server and go to http://localhost/dashboard to check Servers are running or not.
If Page get load properly then go to http://localhost/login to access the site.


For MySQL create database and table as per following commands.

1. create database food_ordering;
2. use food_ordering;
3. create table users(id int NOT NULL AUTO_INCREMENT PRIMARY KEY, name varchar(100),email varchar(50),password varchar(100),phone BIGINT);
4. CREATE TABLE IF NOT EXISTS `products` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(200) NOT NULL,
	`desc` text NOT NULL,
	`price` decimal(7,2) NOT NULL,
	`rrp` decimal(7,2) NOT NULL DEFAULT '0.00',
	`quantity` int NOT NULL,
	`img` text NOT NULL,
	`date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
);

5. INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`) VALUES
(1, 'Italian Pizza', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '2.59', '4', 10, 'pizza-1.jpg'),
(2, 'Greek Pizza', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '2.99', '4', 34, 'pizza-2.jpg'),
(3, 'Caucasian Pizza', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '3.99', '4', 23, 'pizza-3.jpg'),
(4, 'American Pizza', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '3.99', '4', 7, 'pizza-4.jpg'),
(5, 'Tomatoe Pie', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '2.99', '4', 7, 'pizza-5.jpg'),
(6, 'Margherita', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'pizza-6.jpg'),
(7, 'Bacon Pizza', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'pizza-7.jpg'),
(8, 'Ultimate Overload', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'pizza-8.jpg'),
(9, 'Classic Burger', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'burger-1.jpg'),
(10, 'American Burgur', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'burger-2.jpg'),
(11, 'Big Spice Burgur', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia ', '5.99', '4', 7, 'burger-3.jpg');


If you have password set for MySQL then change 3 parameter of cmd in every instance.

$conn = mysqli_connect('localhost','root','{Your password}','food_ordering');
// Project Member - Himanshu, Aryan, Danish

// 1 Step

// Database `cart`


// 2 Step
// Create a table named `registration`

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
)


// 3 Step
// Insert into `registration` if you want

// 4 Step
// Create a table named `tbl_order`

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `itemname` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `itemquanity` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `itemprice` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `itemid` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
)

// 5 Step
// Insert into `tbl_order` if you want

// 6 Step
// Create a table named `tbl_product`

CREATE TABLE IF NOT EXISTS `tbl_product`(
`id` int(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `image` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `price` int(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
)

// 7 Step
// Insert into `tbl_product`

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Cheese Grilled Sandwich', 'CheeseGrilledSandwich.png', 45),
(2,'Cheese Sandwich','CheeseSandwich.png', 45 ),
(3,'Chinese bhel','Chinesebhel.png',15),
(4,'Dabeli','Dabeli.png',12),
(5,'Frankie','Frainkie.jpg',40),
(6,'Grilled Sandwich','GrilledSandwich.png',40),
(7,'Mayo Cheese Frankie','MayoCheeseFrankie.jpg',50),
(8,'Vada Pav','VadaPav.png','13),
(9,'Veg Sandwich','VegSandwich.png',25),
(10, 'Noodles', 'HakkaNoodles.png', 40),
(11, 'Masala Dosa', 'MasalaDosa.png', 35),
(12, 'Schezwan Rice', 'SchezwanRice.png', 40),
(13, 'Tawa Pulao', 'TawaPulao.png', 50),
(14, 'Dal Khichdi', 'DalKhichdi.png', 50),
(15, 'Chai', 'Chai.png', 10),
(16,'Coffee','Coffee.png', 15 ),                                                                                                                                                      
(17,'Kokam Sherbat','KokamSherbat.png',15),
(18,'Chhaas','Chhaas.png',18);


// 8 Step
// Create a table named `tbl_user`


CREATE TABLE IF NOT EXISTS `tbl_user`(
`classno` int(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `mobilemo` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT ''
)


// 9 Step
// Create a table named `admin`


CREATE TABLE IF NOT EXISTS `admin`(
`username` int(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT ''
)

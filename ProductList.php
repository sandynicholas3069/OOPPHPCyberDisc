<?php

abstract class Product {
    protected $name;
    protected $price;
    protected $discount;

    public function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getDiscount() {
        return $this->discount;
    }

    public function setDiscount($discount) {
        $this->discount = $discount;
    }
}

class CDMusic extends Product {
    private $artist;
    private $genre;

    public function __construct($name, $price, $discount, $artist, $genre) {
        parent::__construct($name, $price, $discount);
        $this->artist = $artist;
        $this->genre = $genre;
        // Menyesuaikan harga dan diskon
        parent::setPrice($price * 1.1); // Menambahkan 10% pada harga
        parent::setDiscount($discount * 1.05); // Menambahkan 5% pada diskon
    }

    public function getArtist() {
        return $this->artist;
    }

    public function setArtist($artist) {
        $this->artist = $artist;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }
}

class CDCabinet extends Product {
    private $capacity;
    private $model;

    public function __construct($name, $price, $discount, $capacity, $model) {
        parent::__construct($name, $price, $discount);
        $this->capacity = $capacity;
        $this->model = $model;
        // Menyesuaikan harga
        parent::setPrice($price * 1.15); // Menambahkan 15% pada harga
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function setCapacity($capacity) {
        $this->capacity = $capacity;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
    }
}

// Membuat array untuk menyimpan objek CD Music
$cdMusicArray = [
    new CDMusic("That's Why You Go Away", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("Take Me To Your Heart", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("The Actor", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("25 Minutes", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("Paint My Love", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("I Do", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("Sleeping Child", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("This Is Who I Am", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("You Took My Heart Away", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
    new CDMusic("If You Leave My World", 20, 0.1, "Michael Learns To Rock", "Soft Rock"),
];

// Membuat array untuk menyimpan objek CD Cabinet
$cdCabinetArray = [
    new CDCabinet("Cabinet Pop", 50, 0.05, "Max. 50 CD's All Type", "Model A"),
    new CDCabinet("Cabinet Blues", 50, 0.05, "Max. 50 CD's All Type", "Model B"),
    new CDCabinet("Cabinet Jazz", 50, 0.05, "Max. 50 CD's All Type", "Model C"),
    new CDCabinet("Cabinet Rock", 50, 0.05, "Max. 50 CD's All Type", "Model D"),
    new CDCabinet("Cabinet Classic", 50, 0.05, "Max. 50 CD's All Type", "Model E"),
    new CDCabinet("Cabinet Disco", 50, 0.05, "Max. 50 CD's All Type", "Model F"),
    new CDCabinet("Cabinet Folk", 50, 0.05, "Max. 50 CD's All Type", "Model G"),
    new CDCabinet("Cabinet Country", 50, 0.05, "Max. 50 CD's All Type", "Model H"),
    new CDCabinet("Cabinet Hip-Hop", 50, 0.05, "Max. 50 CD's All Type", "Model I"),
    new CDCabinet("Cabinet Funk", 50, 0.05, "Max. 50 CD's All Type", "Model J"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Catalogue Information</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #000000;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #ff6347;
            color: #000000;
        }
        table, td {
            background-color: #ff9e81;
            color: #000000;
        }
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #000000;
            padding: 10px 20px;
            border: 0;
            border-bottom: 2px solid #ff9e81;
            margin-top: 0;
            font-size: 15px;
            z-index: 1000;
        }
        .nav__content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo a {
            font-size: 24px;
            text-decoration: none;
            color: #ff9e81;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        ul li {
            display: inline;
            margin-right: 20px;
        }
        ul li a {
            padding: 0.5rem 1rem;
            border: 2px solid transparent;
            text-decoration: none;
            font-weight: 600;
            color: #ffffff;
            transition: 0.3s;
            color: #ff9e81;
        }
        ul li a:hover {
            border-top-color: #ff6347;
            border-bottom-color: #ff6347;
            color: #ff6347;
        }
        .section {
            padding: 40px 0;
            padding-top: 60px;
            margin-top: 20px;
        }
        .section__container h2, p, img, footer {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        h2, p, footer {
            color: #ff9e81;
            font-family: Arial, sans-serif;
        }
        caption {
            color: #ff9e81;
            font-weight: Arial, sans-serif, bold;
            font-size: 32px;
        }
        section {
            padding-top: 40px;
        }
        #cd-music table, #cd-cabinet table {
            width: 100%;
            border-collapse: collapse;
        }
        #cd-music th, #cd-music td, #cd-cabinet th, #cd-cabinet td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
            width: 20%; /* Menyesuaikan lebar kolom */
        }
        #cd-music th {
            background-color: #ff6347;
            color: #000000;
        }
        #cd-music td {
            background-color: #ff9e81;
            color: #000000;
        }
        img {
            max-width: 30%;
            height: auto;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav__content">
            <div class="logo"><a href="#">CyberDisk</a></div>
            <ul>
                <li><a href="#home">HOME</a></li>
                <li><a href="#all-products">ALL PRODUCTS</a></li>
                <li><a href="#cd-music">CD MUSIC</a></li>
                <li><a href="#cd-cabinet">CD CABINET</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="section">
    <div class="section__container">
        <div class="logo">
            <img src="Cyber Disk.png" alt="Logo CyberDisk">
        </div>
        <div class="home-description">
            <h2>Welcome to CyberDisk Website!</h2>
            <p>A Paradise Store for CD Music and CD Cabinet enthusiasts!</p>
            <p>Offers a wide range of products to choose from with a catalogue table.</p>
        </div>
    </div>
    </section>

    <section id="all-products" class="section">
        <div class="section__container">
            <table>
                <caption>List All Products</caption>
                <tr>
                    <th>Product Type (CD)</th>
                    <th>Name</th>
                    <th>Price (USD)</th>
                    <th>Discount (%)</th>
                    <th>Detail Product (Detail Of CD Type)</th>
                </tr>
                <?php foreach ($cdMusicArray as $cd) { ?>
                    <tr>
                        <td>CD Music</td>
                        <td><?php echo $cd->getName(); ?></td>
                        <td>$<?php echo $cd->getPrice(); ?></td>
                        <td><?php echo ($cd->getDiscount() * 100); ?>%</td>
                        <td><?php echo $cd->getArtist(); ?> (Artist) - <?php echo $cd->getGenre(); ?> (Genre)</td>
                    </tr>
                <?php } ?>
                <?php foreach ($cdCabinetArray as $cd) { ?>
                    <tr>
                        <td>CD Cabinet</td>
                        <td><?php echo $cd->getName(); ?></td>
                        <td>$<?php echo $cd->getPrice(); ?></td>
                        <td><?php echo ($cd->getDiscount() * 100); ?>%</td>
                        <td><?php echo $cd->getCapacity(); ?> (Capacity) - <?php echo $cd->getModel(); ?> (Model)</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>

    <section id="cd-music" class="section">
        <div class="section__container">
            <table>
                <caption>CD Music Information</caption>
                <tr>
                    <th>Name</th>
                    <th>Price (USD)</th>
                    <th>Discount (%)</th>
                    <th>Artist</th>
                    <th>Genre</th>
                </tr>
                <?php foreach ($cdMusicArray as $cd) { ?>
                    <tr>
                        <td><?php echo $cd->getName(); ?></td>
                        <td>$<?php echo $cd->getPrice(); ?></td>
                        <td><?php echo ($cd->getDiscount() * 100); ?>%</td>
                        <td><?php echo $cd->getArtist(); ?></td>
                        <td><?php echo $cd->getGenre(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>

    <section id="cd-cabinet" class="section">
        <div class="section__container">
            <table>
                <caption>CD Cabinet Information</caption>
                <tr>
                    <th>Name</th>
                    <th>Price (USD)</th>
                    <th>Discount (%)</th>
                    <th>Capacity</th>
                    <th>Model</th>
                </tr>
                <?php foreach ($cdCabinetArray as $cd) { ?>
                    <tr>
                        <td><?php echo $cd->getName(); ?></td>
                        <td>$<?php echo $cd->getPrice(); ?></td>
                        <td><?php echo ($cd->getDiscount() * 100); ?>%</td>
                        <td><?php echo $cd->getCapacity(); ?></td>
                        <td><?php echo $cd->getModel(); ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </section>

    <footer>
        &copy; 2024 CyberDisk. All rights reserved. Created by Sandy Nicholas 22081010237.
    </footer>

</body>
</html>
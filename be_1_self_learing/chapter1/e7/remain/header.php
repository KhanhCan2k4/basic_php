<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a , #product{
            display: block;
            width: 100px;
            height: 20px;
            text-decoration: none;
            color: brown;
            border: 1px solid black;
            text-align: center;
            line-height: 20px;
            float: left;
            margin: 5px;
        }
    </style>
</head>
<body>
<a href="/free_exercise/e7/index.php" class="main">Main Page</a>
<div href="" class="product">
    <select name="product" id="product">
        <option value="" disabled="disabled" selected="selected">
                Product
        </option>
        <option value="/free_exercise/e7/products/product1.php">
            Product 1
        </option>
        <option value="/free_exercise/e7/products/product2.php">
            Product 2
        </option>
        <option value="/free_exercise/e7/products/product3.php">
            Product 3
        </option>
    </select>
    </div>
<a href="/free_exercise/e7/intro.php" class="intro">Introduction</a>
<a href="/free_exercise/e7/service.php" class="service">Service</a>
<a href="/free_exercise/e7/contact.php" class="contact">Contact</a>
<br>

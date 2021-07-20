<!doctype html>
<html>
<head>

</head>
<style>
.menu-bar {
  background-color: #0ABAB5;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.menu-bar a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.menu-bar a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.menu-bar a.active {
  background-color: #04AA6D;
  color: white;
}

.judgeName{
  float: right;
}
</style>
<body>
<div>
    <div id="menu-bar" class="menu-bar">
        <nav>
            <a href="fwspeed.php">Forward S</a>
            <a href="fish.php">Fish</a>
            <a href="xspeed.php">Cross</a>
            <a href="bwspeed.php">Backward S</a>
            <a href="skatecross.php">Skate Cross</a>
            <p style="float:right" class="judgeName" id="judgeName"></p>
        </nav>
    </div><br>
</div>
</body>
</html>
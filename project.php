<html>
 
<head>
<link rel="stylesheet" type="text/css" href="phpstyle.css">
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
 </head>
<body>
	<header> 
    <ul class="ulclass">
        <li><a href="https://www.google.com/gmail/about/">LOGIN</a></li>
      </ul>
      <ul class="ulclass">
        <li><a href="checkout.php">LOGOUT</a></li>
      </ul>
       <p class="links"><a href="#">My Cart</a></p>  <p class="links"><a href="#">My Wishlist</a></p> <p class="links"><a href="#">My Account</a></p>
        <h2><b>TRAVEL  BLOG</b></h2> 
       <form action="project.php" method="GET">
        <input type="text" name="name" placeholder="Type here">
        <input type="submit" name="submit" value="Search">
        </form> 
	 </header><br>
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header"></div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">HOME
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#hotelsearch">Travel Blog</a></li>
          <li><a href="#cheaphotels">Cheap Hotels</a></li>
          <li><a href="#howtobook">Bookings</a></li>
        </ul>
      </li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CONTACT US
        <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="#mmt">Contacts</a></li>
        	</ul>
    </li>
	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">TOURS
        <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="#tourtable">Know About Tours</a></li>
        	</ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PLAN
        <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="#transfer">Plan Your Trip</a></li>
        	</ul>
    </li>
	<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">HOTELS
        <span class="caret"></span></a>
        	<ul class="dropdown-menu">
          		<li><a href="#hot">Find Your Ideal Hotel</a></li>
        	</ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">TRENDING
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#popular">What's popular</a></li>
          </ul>
    </li>
    </ul>
  </div>
</nav>
<style>
  .item{
    height: 400px;
    overflow: hidden;
  }
  .item img{
    margin: auto;
    height: 400px;
    vertical-align: center;
  }
</style>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item">
      <img src="latest.jpg">
    </div>
    <div class="item">
      <img src="newimg1.jpg">
    </div>
    <div class="item">
      <img src="newimg2.jpg">
    </div>
    <div class="item active">
      <img src="best.jpg">
    </div>
  </div>
  <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>
	<div id="main">
		<br><br>
			<div id="formfill">
			<form action="feedform.php" method="POST">
        <h2><b>Have Website Related Feedback Or Suggestions?</b></h2>
        <br>
			Name: <input type="text" name="name">
  			<br><br>
  			E-mail: <input type="text" name="email">
  			<br><br>
  			Website: <input type="text" name="website">
  			<br><br>
  			Your FeedBack: <textarea name="comment" rows="5" cols="40"></textarea>
  			<br><br>
  			Gender:
  			<input type="radio" name="gender" value="female">Female
  			<input type="radio" name="gender" value="male">Male
  			<br><br>
  			<input type="submit" name="submit" value="submit">
			</form><br><br>

			<div id="popular">
				<h3 style="text-align:center;font-size:25px;color:white"><b><u>Popular Posts</u></b></h3>
    <marquee direction="up">
				<div class="sidebox">
					<img class="myside" src="weekend.jpg">
					<p class="side">Weekend Trips<br><br>
					               Starting At Rs.3499
          </p>
				</div>
				<div class="sidebox">
					<img class="myside" src="service.png">
					<p class="side">Yatra Service Assurance<br><br>
					   Starting At Rs. 3499</p>
				</div>
				<div class="sidebox">
					<img class="myside" src="sale.jpg">
					<p class="side">Mega Sale<br><br>
					   Starting At Rs. 28990</p>
				</div>
				<div class="sidebox">
					<img class="myside" src="honey.jpg">
					<p class="side">Honey Moon<br><br>
					   Starting At Rs. 5500</p>
				</div>
				<div class="sidebox">
					<img class="myside" src="adventure.jpg">
					<p class="side">Adventure<br><br>
				      Starting At Rs. 5500
          </p>
				</div>
				<div class="sidebox">
					<img class="myside" src="beach.jpg">
					<p class="side">Beach<br><br>
					   Starting At Rs. 5999
           </p>
				</div>
    </marquee>
			</div><br>
<table id="tourtable" style="width=100%">
  <h3>Popular International Routes from India</h3>
  <tr>
    <td>Mumbai to Dubai flights</td>
  </tr>
  <tr>
    <td>Delhi to Bangkok flights</td>
  </tr>
  <tr>
    <td>Chennai to Dubai flights</td>
  </tr>
  <tr>
    <td>Delhi to london flights</td>
  </tr>
  <tr>
    <td>Chennai to Singapore flights</td>
  </tr>
  <tr>
    <td>Hyderabad to Dubai flights</td>
  </tr>
  <tr>
    <td>Delhi to Toronto flights</td>
  </tr>
  <tr>
    <td>Delhi to Kathmandu flights</td>
  </tr>
  <tr>
    <td>Kolkata to Bangkok flights</td>
  </tr>
  <tr>
    <td>Bangkok to Delhi flights</td>
  </tr>
</table>
		</div>
		<br>
    <div id="transfer">
        <form action="calc.php" method="post">
          From:<input type="text" name="input" placeholder="from">
          To:<input type="text" name="output" placeholder="to"><br><br>
          Check In:<input type="date" name="calendar1">
          Check Out:<input type="date" name="calendar2">
          <input type="submit" name="search" value="search">
        </form>
    </div>

<div id="hot">
    <h6 id="discover"><u>Discover Hot Deals</u></h6>
        <div class="deal2">
          <img class="me" src="jaipur.jpg">
            <p>
              New Delhi-Jaipur<br>
              Weekend breaks.<br>
              Affordable prices<br>
              4 deals
            </p>
        </div>
        <div class="deal2">
           <img class="me" src="aa.jpg">
            <p>
              New Delhi-Ahmedabad<br>
              Popular deals.<br> 
              Fly now!<br>
              4 deals
            </p>
        </div>
        <div class="deal2">
          <img class="me" src="mahindra.jpg">
            <p>
             Goa | Apple Inn one BHK deluxe Apartment.<br>
            Few rooms left.<br> 
            Book Now!<br>
            1 deal<br>
          </p>
        </div>
        <div class="deal2">
           <img class="me" src="jai.jpg">
            <p>
              Jaipur <br>
              Hotel Royal Orchid Jaipur<br>
              Few rooms left.<br>
              Book Now!<br>
              3 deals
            </p>
        </div>
        <div class="deal2">
           <img class="me" src="cochin.jpg">
            <p>
             Cochin | IMA House<br>
             Few rooms left.<br> Book Now!<br>
             1 deal.
           </p>
        </div>
        <div class="deal2">
          <img class="me" src="chandigarh.jpg">
            <p>
              New Delhi-Chandigarh<br>
              Trending destination<br>
              Great prices<br>
              4 deals
              </p>
        </div>
</div>

 

		<div id="hotelsearch">
			<h3><b>Travel Blog Global Hotel Search</b></h3>
			<img class="images" src="hotel.jpg">
			<p>Travel Blog's Hotel search allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries. With 1.4 billion visits annually to our site, travellers regularly use the hotel comparison to compare deals in the same city. Get information for weekend trips to cities like Mumbai or Bengaluru and you can find the right hotel on trivago quickly and easily. Delhi and its surrounding area are great for trips that are a week or longer with the numerous hotels available.</p>
	 	</div>
    <br>
    <div id="cheaphotels">
			<h3><b>Find Cheap Hotels On Travel Blog</b></h3>
			<img class="images" src="cheap.jpg">
			<p>With Travel Blog you can easily find your ideal hotel for the best price. Simply enter where you want to go and your desired travel dates, and let our hotel search engine compare accommodation prices for you. To refine your search results, simply filter by price, distance (e.g. from the beach), star category, facilities and more. From budget hostels to luxury suites, trivago makes it easy to book online. You can search from a large variety of rooms and locations across India, like Shimla and Jaipur to popular cities and holiday destinations abroad!</p> 
		</div>
		<br>
		<div id="howtobook">
			<h3><b>How To Book</b></h3>
			<img class="images" src="book.jpg">
			<p>Travel Blog is a hotel search with an extensive price comparison. The prices shown come from numerous hotels and booking websites. This means that while users decide on trivago which hotel best suits their needs, the booking process itself is completed through the booking sites (which are linked to our website). By clicking on the “view deal” button, you will be forwarded onto a booking site where you can complete the reservation for the hotel deal found on Travel Blog.
			Let Travel Blog help you to find the best price from over 400 booking sites!</p> 
		</div>
	</div>
	<footer>
		<h3><b>Contact Us</b></h3>
    <p id="mmt"><b>Partner Programs</b><br>
                Our Retail Stores, Franchise Program Details, Foreign Exchange, Apollo Munich – Travel Insurance, List your hotel</p><br>
		<p>Company Inc., 8901 Marmora
		<p>Road , Glasgow,Delhi.</p>
		<h3><b>Call Us Now toll free</b></h3>
		<p>(800) 2345-6789</p>
	</footer>
	<p id="last">Copyright © 2018 Travel Blog Private Limited, India. All rights reserved</p>
</body>
</html>
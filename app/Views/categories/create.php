
<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

   
        
     <style>
     .card {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info-box {
            background-color: #0046fd;;
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
        }

        .info-box i {
            font-size: 30px;
            margin-right: 15px;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-list li {
            margin-bottom: 10px;
        }
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
:root{
	--blue:#0046fd;
	--white:#fff;
	--black:#000;
	--lightblue:#b3bbd1;
	--gray:#e5e5e5;
}
*{margin: 0px;  padding: 0px; font-family: 'Montserrat', sans-serif;}
body{height: 100vh;}
.sidebar{
	width: 20%;
	float: left;
	background: var(--blue);
	height: 100vh;
	position: relative;
}
.main{width: 75%;float: left;height: 90vh; padding: 30px;}
.logo{text-align: center;color: var(--white); margin-top: 50px; font-weight: 800;
margin-bottom: 50px;}
.nav{margin-left: 40px;}
.nav li{list-style: none; padding: 16px 19px;}
.nav li i{ margin-right: 10px;}
.nav li a{color: var(--white); text-decoration: none; font-weight: 600;}
.active{
	background:var(--white);
	border-radius: 27px;
	position: relative;
}
.nav > .active::before, .nav > .active::after {
     content: "";
     position: absolute;
}
.nav > li{
    border-radius: 60px 0 0 60px;
        width: 92%;
    margin-left: -15px;
}
.nav > .active::before {
    top: -80px;
    right: 0px;
    height: 80px;
    width: 62px;
    border-bottom-right-radius: 80px;
    box-shadow: 0 40px 0 0 var(--white);
    transform: rotateZ(360deg);
}
.nav > .active::after {
    top: 51px;
    right: 0px;
    height: 80px;
    width: 62px;
    border-top-right-radius: 80px;
    box-shadow: 0 -40px 0 0 var(--white);
    transform: rotateZ(360deg);
    
}
.active a{color: var(--blue)!important;}
.social{position: absolute;bottom: 10px; left: 20px;}
.social li{
	list-style: none;
	float: left;
	padding: 10px;
}
.social li a{font-size: 14px; color: var(--white);}
.clearfix{clear: both;}
.col-6{width: 50%; float: left;}
.hicon{margin-right: 20px; font-size: 22px!important;position: relative;}
.hicon:nth-child(1):after{
	content: '';
	position:absolute;
	width: 7px;
	height: 7px;
	background: red;
	border-radius: 10px;
	left: 13px;
    top: 7px;
    transform: scale(0.5);
	box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
	animation: pulse-red 2s infinite;
	cursor: pointer;

}

@keyframes pulse-red {
	0% {
		transform: scale(0.85);
		box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
	}
	
	70% {
		transform: scale(1);
		box-shadow: 0 0 0 25px rgba(255, 82, 82, 0);
	}
	
	100% {
		transform: scale(0.85);
		box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
	}
}
.user{
	background:var(--lightblue);
    padding: 5px;
    width: 30px;
    margin-bottom: -11px;
    border-radius: 5px;
    cursor: pointer;
}
.profile-div{
  background-color: var(--gray);
  width: 140px;
  border: 1px solid #ddd;
  padding: 10px 0px;
  right: 2%;
  border-radius: 5px;
  position: absolute;
  z-index: 9;
  display: none;
  top: 84px;
  text-align: left;
}
.profile-div:after{
  content: '';
    position: absolute;
    height: 10px;
    width: 10px;
    background-color: var(--gray);
    top: -6px;
    border-left: 1px solid #ddd;
    border-top: 1px solid #ddd;
    transform: rotate(45deg);
    right: 10%;
}
.profile-div p{margin: 0px;padding: 10px 20px;}
.profile-div p:hover{
  margin: 0px;
    padding: 10px 20px;
    background-color: var(--blue);
    border-radius: 0px;
    color: var(--white);
}
.notification-div{
  background-color: var(--gray);
  width: 246px;
  border: 1px solid #ddd;
  padding: 10px 0px;
  right: 9.4%;
  border-radius: 5px;
  position: absolute;
  z-index: 9;
  display: none;
  top: 84px;
  text-align: left;
}
.notification-div:after{
  content: '';
    position: absolute;
    height: 10px;
    width: 10px;
    background-color: var(--gray);
    top: -6px;
    border-left: 1px solid #ddd;
    border-top: 1px solid #ddd;
    transform: rotate(45deg);
    right: 10%;
}
.notification-div p{margin: 0px;padding: 10px 20px;}
.notification-div p:hover{
  margin: 0px;
    padding: 10px 20px;
    background-color: var(--blue);
    border-radius: 0px;
    color: var(--white); 
}
.search{ padding: 5px; display: none; outline: none; border:none;
	border-bottom: 1px solid black;
}
table {
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
  border-spacing: 0 15px;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd!important;
  padding: .35em;
  margin-bottom: 10px;
}

table th,
table td {
  padding: 1.5em;
  text-align: left;

}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}
.tab-img{
	display: inline-block;
    width: 30px;
    vertical-align: middle;
    border: 1px solid #000;
    border-radius: 18px;
    margin-right: 8px;
}
.ticon{
	padding: 5px;
	background: var(--gray);
	border-radius: 4px;
	width: 15px;
	height: 15px;
	text-align: center;
}
.pe{
	content: '';
	position:absolute;
	width: 7px;
	height: 7px;
	background: red;
	border-radius: 10px;
	left: 10px;
    top: 37px;
    transform: scale(0.5);
	box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
	animation: pulse-red 2s infinite;
	cursor: pointer;
}
.de{
	content: '';
	position:absolute;
	width: 7px;
	height: 7px;
	background: green;
	border-radius: 10px;
	left: 10px;
    top: 37px;
    transform: scale(0.5);
	box-shadow: 0 0 0 0 rgba(255, 82, 82, 1);
	animation: pulse-green 2s infinite;
	cursor: pointer;
}
@keyframes pulse-green {
	0% {
		transform: scale(0.85);
		box-shadow: 0 0 0 0 rgba(82, 255, 82, 0.7);
	}
	
	70% {
		transform: scale(1);
		box-shadow: 0 0 0 25px rgba(82, 255, 82, 0);
	}
	
	100% {
		transform: scale(0.85);
		box-shadow: 0 0 0 0 rgba(82, 255, 82, 0);
	}
}
.active-tr{
	background: var(--blue);
	color: var(--white);
}
.active-tr .ticon{
	background: #e5e5e54f;
}
</style>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
	<div class="sidebar">
		<h1 class="logo">M-SoftTech</h1>

    <ul class="nav">
    <li><a href="http://localhost:8081/index.php/accueil"><i class="fa fa-windows"></i> Dashboard</a></li>
    <li><a href="http://localhost:8081/index.php/categories"><i class="fa fa-shopping-bag"></i> Categories</a></li>
    <li><a href="http://localhost:8081/index.php/articles"><i class="fa fa-pie-chart"></i> Articles</a></li>
    
    <li><a href="http://localhost:8081/clients"><i class="fa fa-user"></i> users</a></li>
    <li><a href="http://localhost:8081/clients"><i class="fa fa-user"></i> contacts</a></li>
    <li><a href="http://localhost:8081/index.php/commande/liste"><i class="fa fa-database"></i> Orders</a></li>
    <li><a href="http://localhost:8081/index.php/admin"><i class="fa fa-power-off"></i>Logout</a></li>

</ul>

		

	</div>
	<div class="main">
    <div class="content">
        <div class="container mt-5">
            <div class="card mx-auto" style="max-width: 400px;">
                <div style="text-align: center;">
                    <div class="card mx-auto" style="max-width: 400px;">
                        <div class="card-header " style="background-color: #0046fd;; color: white;  text-align: center;">
                            <h2 class="mb-0" style=" color: black;" >Add a Category</h2>
                        </div>
                        <div class="card-body">
                            <form action="/categories/store" method="post" class="mx-auto">
                                <div class="mb-3">
                                    <label for="nomcategory" class="form-label">Category Name:</label>
                                    <input type="text" class="form-control" name="nomcategory" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" style=" background-color: #0046fd; color: black; text-align: center;">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        </div>
    </div>
</div>
    </div>
</div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
		
		

			


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $(".user").click(function(){
    $(".profile-div").toggle(1000);
  });
  $(".hicon:nth-child(1)").click(function(){
    $(".notification-div").toggle(1000);
  });
  $(".sicon").click(function(){
    $(".search").toggle(1000);
  });
});
</script>

<script type="text/javascript">
	$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});



	
</script>
</body>
</html>
</head>
<body>




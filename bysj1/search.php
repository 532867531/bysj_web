<html lang="en">
<head>
  <title>Domestic Fertility Database</title>
  <meta charset="utf-8">
  <meta name="author" content="szj">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name= "keyword" content="demostic fertility">
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/default.index.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
<body>

<div class=" container" id="header" >
<div class="jumbotron">
    <h1><strong>Demoestic Fertility Database<strong></h1><!--加入说明文字><-->
</div>
<!--加入导航栏-->
<ul class="nav nav-tabs nav-justified">
	<li><a href="index.php">Home</a></li>
	<li class="active"><a href="#">Search</a></li>
	<li><a href="download.php">Download</a></li>
	<li><a href="analyse.php">Analyse</a></li>
	<li><a href="contact.php">Contact</a></li>
</ul>
<!--导航栏加入结束-->
</div>






<div class="container" id="body" >
<!--插入下拉菜单按钮组-->
<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Search the Database</h3>
	</div>
	<div class="panel-body">
		<!--填入信息插入搜索框-->
	<!--第一个下拉菜单开始-->
	<div class="dropdown" style="display:inline">
	<button type="button" class="btn dropdown-toggle" id="dropdownMenu1" name="物种" 
			data-toggle="dropdown">
		<span id="zhuti">Species</span>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Pig</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Sheep</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)" >Goat</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Horse</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Chicken</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Duck</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Bos</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Goose</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="searchLiandong1to2(this.innerHTML)">Dankey</a>
		</li>
	</ul>
	</div>
	<!--第一个下拉菜单结束-->
	<!--第二个下拉菜单开始-->
	<div class="dropdown" style="display:inline">
	<button type="button" class="btn dropdown-toggle" id="dropdownMenu2" name="物种英文名"
			data-toggle="dropdown">
		<span id="zhuti2">All English Name</span>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu"  id="dropdownMenu2UiList" aria-labelledby="dropdownMenu2">
		<!--li role="presentation">
			<a role="menuitem" tabindex="-1"  onclick="changeParentLable(this.innerHTML)">All English Name</a>
		</li-->
	</ul>
	</div>
	<!--第二个下拉菜单结束-->
	<!--第三个下拉菜单开始-->
	<div class="dropdown" style="display:inline">
	<button type="button" class="btn dropdown-toggle" id="dropdownMenu2" 
			data-toggle="dropdown">
		<span id="zhuti3">All EnglishTerm</span>
		<span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu"  aria-labelledby="dropdownMenu1">
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="#" onclick="searchLiandong(this.innerHTML)">Pig</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="#" onclick="searchLiandong(this.innerHTML)">Sheep</a>
		</li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="#" onclick="searchLiandong(this.innerHTML)" >Goat</a>
		</li>
		<li role="presentation" class="divider"></li>
		<li role="presentation">
			<a role="menuitem" tabindex="-1" href="#" onclick="searchLiandong(this.innerHTML)">分离的链接</a>
		</li>
	</ul>
	</div>
	<!--第三个下拉菜单结束-->
	</div>
<!--插入搜索框结束-->
</div>
<div class="panel panel-success" style="height:600px">
	<div class="panel-heading">
		<h3 class="panel-title">面板标题</h3>
	</div>
	<div class="panel-body">
		这是一个基本的面板
	</div>
</div>

</div>
<div class = "container" id="footer">

</div>
  



</body>
</html>
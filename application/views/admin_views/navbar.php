<link rel="stylesheet" href="../assets/styles/style_adminpage.css">

<div class="nav-side-menu">
	<div class="brand">Sacramento Logo</div>
	<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
	<div class="menu-list">
		<ul id="menu-content" class="menu-content collapse out">
			  <a href="../admin/" class="dash_link">
				<li>
				  <i class="fa fa-dashboard fa-lg"></i> Dashboard
				</li>
			  </a>
			<li  data-toggle="collapse" data-target="#products" class="collapsed">
			  <a href="#"></i>Orders<span class="arrow"></span></a>
			</li>
			<ul class="sub-menu collapse" id="products">
				<a href="../admin/ordered" class="dash_link"><li>Ordered</li></a>
				<a href="../admin/shipped" class="dash_link"><li>Shipped</li></a>
			</ul>
			<li data-toggle="collapse" data-target="#service" class="collapsed">
			  <a href="#">Products/Boxes<span class="arrow"></span></a>
			</li>
			<ul class="sub-menu collapse" id="service">
			  <a href="../admin/products" class="dash_link"><li>Products</li></a>
			  <a href="../admin/boxes" class="dash_link"><li>Boxes</li></a>
			  <a href="../admin/add_product" class="dash_link"><li>Add Product</li></a>
			  <a href="../admin/add_box" class="dash_link"><li>Add Box</li></a>
			</ul>
			<ul class="sub-menu">
				 <a href="../admin/log_out" class="dash_link"><li>Log Out</li></a>
			</ul>
		</ul>
 </div>
</div>

<?php
$location=this_page();
 ?>
<style type="text/css">
 body
 {
    margin-top: 0px !important;
   background-color: #C8D2D9;
 }
 #nav
 {
  background-color: #232F3E;
  z-index: 0;
 }
 .img_header{
   margin-left: 40px;
 }
 .p_header{
   z-index: 1;
   color: white;
   padding: 15px;
   display: inline-block;
   font-size: 28px;
   /*margin-right: 20px;*/
 }
 #cart{
   text-decoration: none;
   color: white;
   margin-right: 80px;
 }
 .nav{
   display: inline-block;
 }
 .white_href_header{
   color: white !important;
   font-size: 18px !important;
 }
 #nav_options{
   padding-right: 112px;
   padding-top: 26px;
 }
/*..................menu_drop_down...............*/

 ul.dropdown-cart{
 min-width:250px;
}
ul.dropdown-cart li .item{
 display:block;
 padding:3px 10px;
 margin: 3px 0;
}
ul.dropdown-cart li .item:hover{
 background-color:#f3f3f3;
}
ul.dropdown-cart li .item:after{
 visibility: hidden;
 display: block;
 font-size: 0;
 content: " ";
 clear: both;
 height: 0;
}
.dropdown-menu
{
min-width: 221px !important;
}

ul.dropdown-cart li .item-left{
 float:left;
}
ul.dropdown-cart li .item-left .img_header,
ul.dropdown-cart li .item-left span.item-info{
 float:left;
}
ul.dropdown-cart li .item-left span.item-info{
 margin-left:10px;
}
ul.dropdown-cart li .item-left span.item-info span{
 display:block;
}
ul.dropdown-cart li .item-right{
 float:right;
}
ul.dropdown-cart li .item-right button{
 margin-top:14px;
}
#view_cart{
color: black !important;
}
#id {
 color: white;
}
.navbar-default .navbar-nav>li>a {
 color: white !important;
}
.product_images {
    width: 250px;
    height: 250px;
}
   </style>
 <nav id="nav" class="navbar navbar-default">
 <img src="../assets/img/company_logo.png" width=100 height=100 class="img_header">
 <p class="p_header">Sacramento In A Box</p>
 <ul id="nav_options" class="nav nav-pills pull-right">
<?php $index='';$faq='';$suggestions='';$shop='';$in_the_box='';$contact='';$cart='';
      switch ($location)
      {
        case 'index':
        $index="id='nav_list' class='active'";
        break;
        case 'faq':
        $faq="id='nav_list' class='active'";
        break;
        case 'shop':
        $shop= "id='nav_list' class='active'";
        break;
        case 'suggestions':
        $suggestions="id='nav_list' class='active'";
        break;
        case 'in_the_box':
        $in_the_box="id='nav_list' class='active'";
        break;
        case 'contact':
        $contact="id='nav_list' class='active'";
        break;
        $cart="id='nav_list' class='active'";
        break;
      }


 ?>
   <li <?= $index;?>>
     <a href="/" class="white_href_header">Home</a>
   </li>
   <li <?= $faq ?>><a href="faq" class="white_href_header">FAQ</a></li>
   <li <?= $shop ?>><a href="shop" class="white_href_header">Shop</a></li>
   <li <?= $suggestions ?>><a href="suggestions" class="white_href_header">Suggestions</a></li>
   <li <?= $in_the_box ?>><a href="in_the_box" class="white_href_header">What's in the box?</a></li>
   <li <?= $contact ?>><a href="contact" class="white_href_header">Contact Us</a></li>
   <li <?= $cart ?>><a href='cart' class="white_href_header">Cart</a></li>
   </ul>
 </ul>
 </nav>

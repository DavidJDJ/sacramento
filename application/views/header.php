<style type="text/css">
 body
 {
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
   margin-right: 20px;
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
   </style>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <nav id="nav" class="navbar navbar-default">
 <img src="../assets/img/company_logo.png" width=100 height=100 class="img_header">
 <p class="p_header">Sacramento In A Box</p>
 <ul id="nav_options" class="nav nav-pills pull-right">
   <li id="nav_list" class="active">
     <a href="/" class="white_href_header">Home</a>
   </li>
   <li><a href="faq" class="white_href_header">FAQ</a></li>
   <li><a href="shop" class="white_href_header">Shop</a></li>
   <li><a href="suggestions" class="white_href_header">Suggestions</a></li>
   <li><a href="boxcontent" class="white_href_header">What's in the box?</a></li>
   <li><a href="contact" class="white_href_header">Contact Us</a></li>
   <ul class="nav navbar-nav navbar-right">
     <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" class="white_href_header"> <span class="glyphicon glyphicon-shopping-cart"></span id="white"> 7 - Items<span class="caret"></span></a>
       <ul class="dropdown-menu dropdown-cart" role="menu">
           <li>
               <span class="item">
                 <span class="item-left">
                     <img src="http://lorempixel.com/50/50/" alt="" class="img_header"/>
                     <span class="item-info">
                         <span>Item name</span>
                         <span>23$</span>
                     </span>
                 </span>
                 <span class="item-right">
                     <button class="btn btn-xs btn-danger pull-right">x</button>
                 </span>
             </span>
           </li>
           <li>
               <span class="item">
                 <span class="item-left">
                     <img src="http://lorempixel.com/50/50/" alt="" class="img_header"/>
                     <span class="item-info">
                         <span>Item name</span>
                         <span>23$</span>
                     </span>
                 </span>
                 <span class="item-right">
                     <button class="btn btn-xs btn-danger pull-right">x</button>
                 </span>
             </span>
           </li>
           <li>
               <span class="item">
                 <span class="item-left">
                     <img src="http://lorempixel.com/50/50/" alt="" class="img_header"/>
                     <span class="item-info">
                         <span>Item name</span>
                         <span>23$</span>
                     </span>
                 </span>
                 <span class="item-right">
                     <button class="btn btn-xs btn-danger pull-right">x</button>
                 </span>
             </span>
           </li>
           <li>
               <span class="item">
                 <span class="item-left">
                     <img src="http://lorempixel.com/50/50/" alt="" class="img_header"/>
                     <span class="item-info">
                         <span>Item name</span>
                         <span>23$</span>
                     </span>
                 </span>
                 <span class="item-right">
                     <button class="btn btn-xs btn-danger pull-right">x</button>
                 </span>
             </span>
           </li>
           <li class="divider"></li>
           <li><a class="text-center" id="view_cart" href="" class="white_href_header">View Cart</a></li>
       </ul>
     </li>
   </ul>
 </ul>
 </nav>

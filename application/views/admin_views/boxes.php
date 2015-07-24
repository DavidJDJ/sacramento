<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pagination</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
            </div>
        </div>      

    <table class="table" style="height: 452px;">
<h2>Boxes</h2>        
        <thead>
            <tr>
              <th>No.</th>
              <th>Image</th>
              <th>Name</th>
              <th>Number of Items in the Box</th>
              <th>Box Price</th>
              <th>Action</th>
        </thead>
        <tbody class="tb">
        </tbody>
    </table>


<!--     <hr>
 -->    <div class="row clear-fix">
        <div class="col-md-4 pull-right">
            <button  id="previous" class="btn btn-sm btn-primary">Previous</button>
            <lable>Page <lable id="page_number"></lable> of <lable id="total_page"></lable></lable>
            <button  id="next" class="btn btn-sm btn-primary">Next</button>
        </div>
    </div>

    <div style="text-align: center">
        
    <img id="load_ajax_png" src="http://sanwebe.com/assets/ajax-load-more-results/ajax-loader.gif" alt="loading" style="display: none"/>
    </div>
    </div>

    
    <script>
                         var page_number=0;
                         var total_page =null;
                         var sr =0;
                         var sr_no =0;
        
    
                        var getReport = function(page_number){
                            if(page_number==0){
                                $("#previous").prop('disabled', true);}
                                else{
                                    $("#previous").prop('disabled', false);}

                            if(page_number==(total_page-1)){
                                $("#next").prop('disabled', true);}
                                else{
                                    $("#next").prop('disabled', false);}

                             $("#page_number").text(page_number+1);
        
                                 $.ajax({
                                     url:"/admin/pagination_boxes",
                                     type:"POST",
                                     dataType: 'json',
                                     data:'page_number='+page_number,
                                     success:function(data){
                                      console.log(data[0].Rows);
                                         window.mydata = data;
                                          total_page= mydata[0].TotalRows;
                                         $("#total_page").text(total_page);
                                         var record_par_page = mydata[0].Rows;
                                          $.each(record_par_page, function (key, data) {
                                               console.log(key);
                                               console.log(record_par_page[key].id);
                                               sr =(key+1);    
                                                $(".tb").append('<tr><td>'+sr+'</td><td>'+data.image+'</td><td>'+data.name+'</td><td>'+data.item_amount+'</td><td>'+data.price+'</td><td>'
                                                  +"<a class='btn btn-default' href='edit_product/"+ record_par_page[key].id + "' role='button'>Edit</a><a class='btn btn-default' href='remove_product/"+ record_par_page[key].id + "' role='button'>Remove</a>"           
                                                  +'</td></tr>');

                              
                                                
                                           });
                                      }
                                 });
                               };
                               
                               var search = function (str){
                               if(str!=''){
//                                   $.ajax({
//                                       url:"<?php echo base_url() ?>index.php/welcome/pagination",
//                                     type:"POST",
//                                     dataType: 'json',
//                                     data:'search='+str,
//                                     success:function(data){
//                                         window.mydata = data;
//                                          total_page= mydata[0].TotalRows;
//                                         $("#total_page").text(total_page);
//                                         var record_par_page = mydata[0].Rows;
//                                          $.each(record_par_page, function (key, data) {
//                                               sr =(key+1);    
//                                                $(".tb").append('<tr><td>'+sr+'</td><td>'+data.id+'</td><td>'+data.name+'</td></tr>');
//                                           });
//                                      }
//                                   });
                               }
                               };

                          
                       $(document).ready(function(e){
                       
                          getReport(page_number);
                          console.log(sr);
                           
                         $("#next").on("click", function(){
                               $(".tb").html("");
                               page_number = (page_number+1);
                               getReport(page_number);
                               console.log(sr);
                               
                         });
                            
                         $("#previous").on("click", function(){
                              $(".tb").html("");
                              page_number = (page_number-1);
                              getReport(page_number);
                         });
                         
                         
                         $("#search").on('keyup', function(){
                             var str = $.trim($(this).val());
                             
                                search(str);
                         });
                    });
    </script>

<!--  -->




</body>
</html>
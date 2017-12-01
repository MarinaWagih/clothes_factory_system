$(document).ready(function() {
$('#New_trader_Entery').hide();
$('#New_Matrial_Order_Entery').hide();
$('#New_Matrial_Entery').hide();
$('#New_Customer_Entery').hide();
$('#New_Product_Entery').hide();
$('#New_Order_Entery').hide();
$('#New_E_trader_Entry').hide();
$( "#New_Extra_Entery" ).hide();
$('#New_Extra_Order_Entery').hide();
$('.inpute_txet').val('');
$('#New_trader').click(function() {
    $( "#New_trader_Entery" ).slideDown( "slow" );
	$('#New_Matrial_Order_Entery').hide();
    $('#New_Matrial_Entery').hide();
    $('#New_Customer_Entery').hide();
    $('#New_Product_Entery').hide();
    $('#New_Order_Entery').hide();
    $('#New_E_trader_Entry').hide();
    $( "#New_Extra_Entery" ).hide();
    $('#New_Extra_Order_Entery').hide();
    $('#Submite_New_trader').click(function(){
    var Name=$('#Trader_Name').val();
    var Phone=$('#Trader_Phone').val();
    var address=$('#Trader_Address').val();
    var Instalment=$('#Installment').val();
    // alert(Name+" "+Phone+ " "+address+"   "+Instalment);
    $.post("AddNew.php", {"Type" :"0","Name":Name,"Phone":Phone,"Address":address,"Instalment":Instalment}, function(data) { 
       alert(data);
       $('#Trader_Name').val('');
	   $('#Trader_Phone').val('');
	   $('#Trader_Address').val('');
	   $('#Installment').val('');

       });
      });
    $('.Back').click(function() {
	$( ".Add" ).slideUp("slow",function(){
     $( ".Main_Op" ).slideDown( "slow" );});
});
	});
$('#New_matrial').click(function() {
	//$( "#Main_Op" ).slideUp("slow",function(){
     $( "#New_Matrial_Entery" ).slideDown( "slow" );
	 $('#New_trader_Entery').hide();
	 $('#New_Matrial_Order_Entery').hide();
     $('#New_Customer_Entery').hide();
     $('#New_Product_Entery').hide();
     $('#New_Order_Entery').hide();
     $('#New_E_trader_Entry').hide();
     $( "#New_Extra_Entery" ).hide();
     $('#New_Extra_Order_Entery').hide();
     $('#Submite_New_Matrial').click(function(){
    var   Des=$('#Matrial_des').val();
    var Quant=$('#Matrial_Quant').val();
    var Price=$('#Matrial_Price').val();
     //alert(Des+" "+Quant+ " "+Price);
    $.post("AddNew.php", {"Type" :"1","Des":Des,"Quant":Quant,"Price":Price}, function(data) {
     alert(data);
     $('#Matrial_des').val('');
     $('#Matrial_Quant').val('');
     $('#Matrial_Price').val('');
       });
      });
	 
	 });
//});
$('#New_matrial_Order').click(function() {
//	$( "#Main_Op" ).slideUp("slow",function(){
    $( "#New_Matrial_Order_Entery" ).slideDown( "slow" );
     $('#Order_Trader').children().remove();
     $('#Order_matrial').children().remove();
    $.post("SelectAll.php", {"Type" :"0"}, function(data)
     {
      // $('#Order_Trader').empty();
     
      $('#Order_Trader').append(data);
     //alert(data);
  });
     $.post("SelectAll.php", {"Type" :"1"}, function(data) {
      $('#Order_matrial').append(data);
    // alert(data);
  });
     // $('select option').add();
	 $('#New_trader_Entery').hide();
   $('#New_Matrial_Entery').hide();
   $('#New_Customer_Entery').hide();
   $('#New_Product_Entery').hide();
	 $('#New_Order_Entery').hide();
	 $('#New_E_trader_Entry').hide();
	 $( "#New_Extra_Entery" ).hide();
   $('#New_Extra_Order_Entery').hide();
   var Cost;
   $('#Order_matrial').focusout(function(){
       var Material=$('#Order_matrial').val().split(',');
      // var Material
      Cost=Material[1];
      // alert(Material[0]);
      // alert(Cost);
      $('#Order_price').val(Cost);
      });

   $('#Order_Quantity').focusout(function(){
    var Total=$('#Order_Quantity').val()*Cost;
    $('#Order_Total').val(Total);
   //  alert(Total);
   });
    $('#Order_price').focusout(function(){
    var Total=$('#Order_Quantity').val()*$('#Order_price').val();
    $('#Order_Total').val(Total);
   //  alert(Total);
   });
  $('#Submite_New_Matrial_Order').click(function(){
    var TraderID=$('#Order_Trader').val();
    //alert(TraderID);
    var Material=$('#Order_matrial').val().split(',');
   // var Material
     //alert(Material[0]);
    var Quant=$('#Matrial_Quant').val();
    var Price=$('#Matrial_Price').val();

     //alert(Des+" "+Quant+ " "+Price);
    $.post("AddNew.php", {"Type" :"1","Des":Des,"Quant":Quant,"Price":Price}, function(data) {
     alert(data);
     $('#Matrial_des').val('');
     $('#Matrial_Quant').val('');
     $('#Matrial_Price').val('');
       });
      });
   
 });
//});
$('#New_Customer').click(function() {
//	$( "#Main_Op" ).slideUp("slow",function(){
     $( "#New_Customer_Entery" ).slideDown( "slow" );
	 $('#New_trader_Entery').hide();
	 $('#New_Matrial_Order_Entery').hide();
	 $('#New_Matrial_Entery').hide();
	 $('#New_Product_Entery').hide();
	 $('#New_Order_Entery').hide();
	 $('#New_E_trader_Entry').hide();
	 $( "#New_Extra_Entery" ).hide();
   $('#New_Extra_Order_Entery').hide();
	 $('#Submite_New_Customer').click(function(){
    var name=$('#Customer_Name').val();
    var Phone=$('#Customer_phone').val();
    var address=$('#Customer_address').val();
     //alert(name+" "+Phone+ " "+address);
    $.post("AddNew.php", {"Type" :"2","name":name,"Phone":Phone,"address":address}, function(data) {
     alert(data);
     $('#Customer_Name').val('');
     $('#Customer_phone').val('');
     $('#Customer_address').val('');
       });
      });
	//}); 
	 });

$('#New_Product').click(function() {
//	$( "#Main_Op" ).slideUp("slow",function(){
     $( "#New_Product_Entery" ).slideDown( "slow" );
	 $('#New_trader_Entery').hide();
	 $('#New_Matrial_Order_Entery').hide();
	 $('#New_Matrial_Entery').hide();
	 $('#New_Customer_Entery').hide();
	 $('#New_Order_Entery').hide();
	 $('#New_E_trader_Entry').hide();
	 $( "#New_Extra_Entery" ).hide();
   $('#New_Extra_Order_Entery').hide();
	 $('#Submite_New_Product').click(function(){
    var Des=$('#Product_Description').val();
    var Quant=$('#Product_Quantity').val();
    var Cost_P=$('#Product_Cost_price').val();
    var Sell_P=$('#Product_selling_price').val();
     alert(Des+" "+Quant+ " "+Cost_P+" "+Sell_P);
    $.post("AddNew.php", {"Type" :"3","Des":Des,"Quant":Quant,"Cost_P":Cost_P,"Sell_P":Sell_P}, function(data) {
     alert(data);
     $('#Customer_Name').val('');
     $('#Customer_phone').val('');
     $('#Customer_address').val('');
       });
      });
	 });
//});
$('#New_Order').click(function() {
//	$( "#Main_Op" ).slideUp("slow",function(){
     $( "#New_Order_Entery" ).slideDown( "slow" );
	 $('#New_trader_Entery').hide();
	 $('#New_Matrial_Order_Entery').hide();
	 $('#New_Matrial_Entery').hide();
	 $('#New_Customer_Entery').hide();
	 $('#New_Product_Entery').hide();
	 $('#New_E_trader_Entry').hide();
	 $( "#New_Extra_Entery" ).hide();
   $('#New_Extra_Order_Entery').hide();
   $.post("SelectAll.php", {"Type" :"2"}, function(data) {
      $('#Product_customer').append(data);
   // alert(data);
  });
	var CountRow=0;
	$('#ButtonAdd').click(function(){
		CountRow++;
	var Newrow='<tr>'
	Newrow+='<td ><input name="Product_Order_Details_Total" id="Product_Order_Details_Total-'+CountRow+'" class="tdRaw" type="text"></td>';
	Newrow+='<td ><input name="Product_Order_Details_Price" id="Product_Order_Details_Price-'+CountRow+'" class="tdRaw" type="text"></td>';
	Newrow+='<td ><input name="Product_Order_Details_Quant" id="Product_Order_Details_Quant-'+CountRow+'" class="tdRaw" type="text"></td>';
	Newrow+='<td ><input name="Product_Order_Details_Product"   id="Product_Order_Details_Product-'+CountRow+'" class="tdRaw" type="text"></td>';
	Newrow+='<td ><input name="Product_Order_Details_ProductId" id="Product_Order_Details_ProductId-'+CountRow+'" class="tdRaw" type="text"></td>';
	Newrow+='</tr>';
	
	$('table.AddNewRow').append(Newrow);
	});

	$('#Submite_New_Product_order').click(function(){
		if (CountRow==0) {alert('ادخل بيانات الفاتورة');}
      else{
		var i;
		var x='';
       for (i = 1; i <=CountRow; ++i) 
       {
       	 
          x+='<br>'+$('#Product_Order_Details_Total-'+i).val();
          x+='--->'+$('#Product_Order_Details_Price-'+i).val();
          x+='--->'+$('#Product_Order_Details_Quant-'+i).val();
          x+='--->'+$('#Product_Order_Details_Product-'+i).val();
          x+='--->'+$('#Product_Order_Details_ProductId-'+i).val();
           $.post("AddNew.php", {"Type" :"Invoice"}, function(data) { alert(data);});
       }

       $('#result11').append(x);}
	});
});
//});
   $('#New_E_trader').click(function() {
    
   $( "#New_E_trader_Entry" ).slideDown( "slow" );
   $( "#New_Order_Entery" ).hide();
	 $('#New_trader_Entery').hide();
	 $('#New_Matrial_Order_Entery').hide();
	 $('#New_Matrial_Entery').hide();
	 $('#New_Customer_Entery').hide();
	 $('#New_Product_Entery').hide();
	 $( "#New_Extra_Entery" ).hide();
   $('#New_Extra_Order_Entery').hide();
   $('#Submite_New_E_trader').click(function(){
    var Name=$('#Trader_E_Name').val();
    var Phone=$('#Trader_E_Phone').val();
    var address=$('#Trader_E_Address').val();
    var Instalment=$('#E_Installment').val();
     //alert(Name+" "+Phone+ " "+address+"   "+Instalment);
    $.post("AddNew.php", {"Type" :"4","Name":Name,"Phone":Phone,"Address":address,"Instalment":Instalment}, function(data) { 
       alert(data);
       $('#Trader_E_Name').val('');
       $('#Trader_E_Phone').val('');
       $('#Trader_E_Address').val('');
       $('#E_Installment').val('');

       });
      });
 });
   $('#New_Extra').click(function() {
    New_Extra_order
     $( "#New_Extra_Entery" ).slideDown( "slow" );
     $( "#New_Order_Entery" ).hide();
	   $('#New_trader_Entery').hide();
	   $('#New_Matrial_Order_Entery').hide();
	   $('#New_Matrial_Entery').hide();
	   $('#New_Customer_Entery').hide();
	   $('#New_Product_Entery').hide();
	   $('#New_E_trader_Entry').hide();
     $('#New_Extra_Order_Entery').hide();

     $('#Submite_New_Extra').click(function(){
    var Name=$('#Extra_Description').val();
    var Price=$('#Extra_Cost_price').val();
     alert(Name+" "+Price);
    $.post("AddNew.php", {"Type" :"5","Name":Name,"Price":Price}, function(data) { 
       alert(data);
       $('#Extra_Description').val('');
       $('#Extra_Cost_price').val('');
       });
      });
 });
$('#New_Extra_order').click(function() {
    
     $( "#New_Extra_Order_Entery" ).slideDown( "slow" );
     $( "#New_Order_Entery" ).hide();
     $('#New_trader_Entery').hide();
     $('#New_Matrial_Order_Entery').hide();
     $('#New_Matrial_Entery').hide();
     $('#New_Customer_Entery').hide();
     $('#New_Product_Entery').hide();
     $('#New_E_trader_Entry').hide();
     $('#New_Extra_Entery').hide();
      $.post("SelectAll.php", {"Type" :"4"}, function(data) {
      $('#Order_E_Trader').append(data);
   // alert(data);
  });
       $.post("SelectAll.php", {"Type" :"5"}, function(data) {
      $('#Order_Extra').append(data);
   // alert(data);
  });
 });
$('.Back').click(function() {
	$( ".Add" ).slideUp("slow",function(){
     $( ".Main_Op" ).slideDown( "slow" );});
});


});

//add new item script
alert("dddd");
var chek=0;
var arr=[];
function add_item(id){
$("#mycart").load(location.href + " #mycart");
var id_no=id;
document.getElementById('light').style.display='block';
arr[arr.length]=id_no;
$("#bulb").load("add_item.php?name="+ id_no + "&vlues_product=" + arr);
$("#mycart").load(location.href + " #mycart");

//  document.cookie=arr;
//var data=document.cookie;
document.getElementById(id).disabled = true;
document.getElementById(id).title = "disabled";
document.getElementById(id).value = "Item in cart";
}
//temp cart
function temp_cart(){
document.getElementById('temp_cart').style.display='block';
}
function close_temp(){
document.getElementById('temp_cart').style.display='none';
}
function cart(){
window.location.href = 'cart.php?name='+arr;
}
$(window).scroll(function() {
if ($(this).scrollTop() > 1){
    $('.head').addClass("sticky");
    $('header').addClass("sticky");
    document.getElementById('nav').style.display='none';
}
else{

    $('header').removeClass("sticky");
      $('.head').removeClass("sticky");
       $('#nav').slideDown(100);
        document.getElementById('nav').style.display='block';

}
});

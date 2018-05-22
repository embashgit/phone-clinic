/*

My Custom JS
============

Author:  Brad Hussey
Updated: August 2013
Notes:	 Hand coded for Udemy.com

*/
var btn = document.createElement("input");
    btn.setAttribute("type", "button");
    btn.setAttribute("id", "button");
    btn.setAttribute("class", "btn btn-primary btn-sm");
    btn.setAttribute("value", " OK!");
 
function explain(){
    document.getElementById("q").style.display="none";
    document.getElementById('d').innerHTML="VIN is an abreviaton for Vehicle Identification Number which is a unique identifier for your car it can be found at the engine compartment, or at the buttom right of the windscreen, You can quickly get the exact parts of your car by using the VIN search";
    document.getElementById('d').style.display="block";
     document.getElementById('d').style.color="#333";
    document.getElementById('b').appendChild(btn);
}

function back(){
     document.getElementById('q').style.display="block";
    document.getElementById('d').style.display="none";
     document.getElementById('b').style.display="none";
}



window.onload = function(){
document.getElementById('d').style.display="none";

 var vin = document.getElementById("q");


 vin.onclick= function (){
 	explain();
 }

  
}
$(document).ready(function () {
                 $("#sidebar").niceScroll({
                     cursorcolor: '#53619d',
                     cursorwidth: 4,
                     cursorborder: 'none'
                 });

                 $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                 });

                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').addClass('active');
                     $('.overlay').fadeIn();
                     $('.collapse.in').toggleClass('in');
                     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                 });
             });
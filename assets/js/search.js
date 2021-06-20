$(document).ready(function() {
     
            $(".hover").click(function() {
               $(".submenu").toggle();
               $("input[type='text']").focus();
             });
 
        });
	function myFunction() {
    var x = document.getElementById("myulnavigation");
    if (x.className === "ulnavigation") {
        x.className += " responsive";
    } else {
        x.className = "ulnavigation";
    }
}
function sortByName(){
 list = document.getElementsByClassName("productname"); // get all productnames
 productdiv = document.getElementsByClassName("productdiv"); // get field for sorting
 switchcount = 0;
 switching = true;
 dir = "asc";
 while (switching){
   switching = false
   for (i = 0; i < (list.length - 1); i++) {
     shouldSwitch = false;
     if (dir == "asc") {
     if (list[i].innerText.toLowerCase() > list[i + 1].innerText.toLowerCase()){
       shouldSwitch = true;
       break;
     }
   }
   else if (dir == "desc"){
     if (list[i].innerText.toLowerCase() < list[i + 1].innerText.toLowerCase()){
       shouldSwitch = true;
       break;
     }
   }
 }
   if (shouldSwitch){
     productdiv[i].parentNode.insertBefore(productdiv[i + 1], productdiv[i]);
     switching = true;
     switchcount ++;
   } else {
     if (switchcount == 0 && dir == "asc"){
       dir = "desc";
       switching = true;
   }
 }
}
}
function sortByPrice(){
 list = document.getElementsByClassName("productprice"); // get all productprice
 productdiv = document.getElementsByClassName("productdiv"); // get field for sorting
 switchcount = 0;
 switching = true;
 dir = "asc";
 while (switching){
   switching = false
   for (i = 0; i < (list.length - 1); i++) {
     shouldSwitch = false;
     if (dir == "asc") {
     if (Number(list[i].innerText.toLowerCase()) > Number(list[i + 1].innerText.toLowerCase())){
       shouldSwitch = true;
       break;
     }
   }
   else if (dir == "desc"){
     if (Number(list[i].innerText.toLowerCase()) < Number(list[i + 1].innerText.toLowerCase())){
       shouldSwitch = true;
       break;
     }
   }
 }
   if (shouldSwitch){
     productdiv[i].parentNode.insertBefore(productdiv[i + 1], productdiv[i]);
     switching = true;
     switchcount ++;
   } else {
     if (switchcount == 0 && dir == "asc"){
       dir = "desc";
       switching = true;
   }
 }
}
}

function sortByName(){
 list = document.getElementsByClassName("productname"); // get all productnames
 // productdiv = document.getElementsByClassName("productdiv"); // get field for sorting
 filterdiv = document.getElementsByClassName("filterdiv"); // get field for sorting
 btntext = document.getElementById("btnSortName"); // get button for display asc/desc
  
 switchcount = 0;
 switching = true;
 dir = "asc";
 btntext.value = "Aflopend sorteren op naam";
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
     filterdiv[i].parentNode.insertBefore(filterdiv[i + 1], filterdiv[i]);
     switching = true;
     switchcount ++;
   } else {
     if (switchcount == 0 && dir == "asc"){
       dir = "desc";
       btntext.value = "Oplopend sorteren op naam";
       switching = true;
   }
 }
}
}
function sortByPrice(){
 list = document.getElementsByClassName("productprice"); // get all productprice
 // productdiv = document.getElementsByClassName("productdiv"); // get field for sorting
 filterdiv = document.getElementsByClassName("filterdiv"); // get field for sorting
 btntext = document.getElementById("btnSortPrice"); // get button for display asc/desc
 switchcount = 0;
 switching = true;
 dir = "asc";
 btntext.value = "Aflopend sorteren op prijs";
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
     filterdiv[i].parentNode.insertBefore(filterdiv[i + 1], filterdiv[i]);
     switching = true;
     switchcount ++;
   } else {
     if (switchcount == 0 && dir == "asc"){
       dir = "desc";
       btntext.value = "Oplopend sorteren op prijs";
       switching = true;
   }
 }
}
}

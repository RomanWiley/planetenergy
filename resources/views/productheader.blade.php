<div id="productheaderdiv">
<h1>Webshop</h1>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/create">Nieuw product</a></button>

<button class="btn btn-outline-primary" onclick="sortByName()">Sorteer op productnaam</button>
<button class="btn btn-outline-primary" onclick="sortByPrice()">Sorteer op prijs</button>
{{-- input for filter --}}
                <label for="myInput">Zoekfilter: </label>
                <input type="text" id="myInput" name="myInput" placeholder="Filter..">

            <form action="webshopcategory" method="get" target="_self">
                <label class="label" for="product_category">Categorie</label>
                <select id="select_category" name="product_category" onchange="filteroncategory()">
                  <option value="Opwekken">Opwekken</option>
                  <option value="Opslag">Opslag</option>
                  <option value="Isolatie">Isolatie</option>
                  <option value="Besparen">Besparen</option>
                  <option value="Overig">Overig</option>
                </select>
                <input type="submit" value="Submit">
            </form>
<BR>
<BR>

</div>
{{-- <script>
   function filteroncategory(){
    var e = document.getElementById("select_category");
    var strCat = e.options[e.selectedIndex].text;
    alert(strCat.concat(" is gekozen voor de nieuwe view"));
    window.open("../webshopcategory", "_self")
    // $products = DB::table('products')->where('productcategory', product_category)->get();
}
</script> --}}

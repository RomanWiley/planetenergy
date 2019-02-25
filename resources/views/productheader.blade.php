<div id="productheaderdiv">
<h1>Webshop</h1>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/create">Nieuw product</a></button>

<button class="btn btn-outline-primary" onclick="sortByName()">Sorteer op productnaam</button>
<button class="btn btn-outline-primary" onclick="sortByPrice()">Sorteer op prijs</button>
{{-- input for filter --}}
                <label for="myInput">Zoekfilter: </label>
                <input type="text" id="myInput" name="myInput" placeholder="Filter..">

                <label class="label" for="product_category">Categorie</label>
                <select  name="product_category">
                  <option value="Opwekken">Opwekken</option>
                  <option value="Opslag">Opslag</option>
                  <option value="Isolatie">Isolatie</option>
                  <option value="Besparen">Besparen</option>
                  <option value="Overig">Overig</option>
                </select>
<BR>
<BR>

</div>
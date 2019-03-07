<div id="productheaderdiv">
<h1>Webshop</h1>

@auth
@if (Auth::user()->isCompany == 1)
<a class="text-dark font-weight-bold" href="/product/create"><button class="btn btn-info">Nieuw product</button></a>
<a class="text-dark font-weight-bold" href="/product"><button class="btn btn-success">Mijn Producten</button></a>
@endif
@endauth

<input type="button" id="btnSortName" class="btn btn-outline-primary" onclick="sortByName()" value="Oplopend sorteren op naam"></button>
<input type="button" id="btnSortPrice" class="btn btn-outline-primary" onclick="sortByPrice()" value="Oplopend sorteren op prijs"></button>

{{-- input for filter --}}
                <label for="myInput">Zoekfilter: </label>
                <input type="text" id="myInput" name="myInput" placeholder="Filter..">
{{-- form for category filtering --}}
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
</div>

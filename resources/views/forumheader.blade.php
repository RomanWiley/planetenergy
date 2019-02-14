<script>
    var $category = 'members'

    $(document).ready(function(){
        $('#members').click(function (){
            $category='members';
        });
    });

    $(document).ready(function(){
        $('#science').click(function (){
            $category='science';
        });
    });

    $(document).ready(function(){
        $('#innovation').click(function (){
            $category='innovation';
        });
    });

</script>
<ul class="nav nav-pills nav-justified">
        <li class="nav-item">
          <a class="nav-link active" href="/threads">Forum Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/threads/create">Nieuwe thread aanmaken</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">Another Link</a>
        </li>
      </ul>

      <div class="btn-group d-flex justify-content-center" role="group" aria-label="CategorySelection">
            <button id="members" type="button" class="flex-fill btn btn-secondary">Leden</button>
            <button id="science" type="button" class="flex-fill btn btn-secondary">Wetenschap</button>
            <button id="innovation" type="button" class="flex-fill btn btn-secondary">Innovatie</button>
          </div>

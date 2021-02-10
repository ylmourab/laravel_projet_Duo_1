
<section class="container mt-5">
  <form action="">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">text</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($bo_home_1list as $item)
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->texte}}</td>
            </tr> 
          @endforeach
       
      </tbody>
    </table>
  </form>
</section>


   
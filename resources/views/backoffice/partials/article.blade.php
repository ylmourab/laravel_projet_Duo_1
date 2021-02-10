<section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">num</th>
            <th scope="col">title</th>
            <th scope="col">subtitle</th>
            <th scope="col">text</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_Articlelist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->num}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->subtitle}}</td>
              <td>{{$item->text}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  
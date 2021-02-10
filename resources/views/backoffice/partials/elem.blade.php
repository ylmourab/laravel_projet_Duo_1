<section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_imglist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->img}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  <section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_descriplist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->descriptif}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  <section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">button</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_buttonlist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->button}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  <section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">subtitle</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_titlelist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->title}}</td>
              <td>{{$item->subtitle}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  <section class="container mt-5">
    <form action="">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">adresse</th>
            <th scope="col">mail1</th>
            <th scope="col">mail2</th>
            <th scope="col">num1</th>
            <th scope="col">num2</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bo_adresslist as $item)
              <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->adresse}}</td>
              <td>{{$item->mail1}}</td>
              <td>{{$item->mail2}}</td>
              <td>{{$item->num1}}</td>
              <td>{{$item->num2}}</td>
              </tr> 
            @endforeach
         
        </tbody>
      </table>
    </form>
  </section>
  
  
  
  
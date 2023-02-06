<!DOCTYPE html>
<html>
  <head>
    <title>Page Title</title>
    <style>
      .green{
        background-color: green;
      }
      .red{
        background-color: red;
      }
  
     </style>
  </head>
  <body>
    <h1>This is a heading</h1>
    <p>This is a paragraph.</p>
    <h1><a href="/zvonko">Vrati se na pocetnu</a></h1>
    
   @foreach ($items as $jedan)
     <div class="col-md-4 flex {{ $jedan->is_complete ? 'green' : 'red' }}" style="align-items: center;">
     <p>Zadatak: {{ $jedan->name }} <form method="post" action="{{  route('oznaci', $jedan->id) }}" accept-charset="UTF-8">{{ csrf_field() }}<button type="submit" style="max-height: :25px; margin-left:20px;">Izvrsi</button></form>{{ $jedan->is_complete }}</p> 

     </div>
   @endforeach
   
  </body>
</html>
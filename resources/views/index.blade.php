<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>

      @foreach ($books as $book)
        <li> Titolo: {{$book->title}} </li>
        <li> Author:  {{$book->author}} </li>
        <li> Pages:  {{$book->pages}} </li>
        <li> ISBN:  {{$book->isbn}} </li>
        <li> <a href="{{"/book/".$book->id}}">Vai</a> </li>
        <br>
        <br>
      @endforeach

    </ul>
  </body>
</html>

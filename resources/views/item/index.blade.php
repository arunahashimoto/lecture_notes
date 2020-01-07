<table>
 <tr><th>ID</th><th>use_id</th><th>title</th><th>説明</th><th>price</th><th></th></tr>
 @foreach ($items as $item)
<tr>
     <td>{{$item->id}}</td>
     <td>{{$item->user_id}}</td>
     <td>{{$item->title}}</td>
     <td>{{$item->description}}</td>
     <td>{{$item->price}}</td>
 </tr>
 @endforeach
 </table>
 <br>
 <table>
 <tr>
 <th>item</th><th>user</th>
 @foreach ($items as $item)
    <tr>
        <td>{{$item->getDate()}}</td>
        <td>
            @if ($item->user !=null)
            {{$item->user->getDate()}}
            @endif
        </td>
    </tr>
 @endforeach
 </tr>
 </table>

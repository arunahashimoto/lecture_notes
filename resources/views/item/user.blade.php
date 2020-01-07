<table>
 <tr>
 <th>user</th><th>item</th>
 @foreach ($items as $item)
    <tr>
        <td>{{$item->getDate()}}</td>
        <td>
                @foreach ($item->items as $obj)
                {{$obj->getDate()}}
                @endforeach
           
        </td>
    </tr>
 @endforeach
 </tr>
 </table>
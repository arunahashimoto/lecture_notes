<table>
 <tr>
 <th>user</th><th>item</th>
 @foreach ($items as $item)
    <tr>
        <td>{{$item->getDate()}}</td>
        <td>
            @if ($item->item !=null)
            {{$item->item->getDate()}}
            @endif
        </td>
    </tr>
 @endforeach
 </tr>
 </table>
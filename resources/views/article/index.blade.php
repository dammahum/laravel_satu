<br>
<a href="{{url('article/create')}}"> Create Article </a>
<br>
<br>
<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Date</th>
        <th>Action</th>
    </tr>
    
@foreach($article as $row)
     
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->title}}</td>
        <td>{{$row->date}}</td>
        <td>
            <a href="{{url('article/edit'.$row->id)}}"> Edit </a>
            <a href="{{url('article/delete'.$row->id)}}"> Delete </a>
            <a href="{{url('article/detail'.$row->id)}}"> Detail </a>
        </td>        
    </tr>
    
@endforeach
    
</table>


@if(Session::has('article'))
{{Session::get('article')}}
@endif


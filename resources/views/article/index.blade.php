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
    <?php $no = 1; ?>
@foreach($article as $row)
     
    <tr>
        <td>{{$no++}}</td>
        <td>{{$row->title}}</td>
        <td>{{Carbon\Carbon::parse($row->created_at)->format('d F Y H:i')}}</td>
        <td>
            <a href="{{url('article/edit/'.$row->id)}}"> Edit </a>
            <a href="{{url('article/detail/'.$row->id)}}"> Detail </a>
            <a href="{{url('article/delete/'.$row->id)}}"> Delete </a>
        </td>        
    </tr>
    
@endforeach
    
</table>

<br><br>
@if(Session::has('article'))
{{Session::get('article')}}
@endif


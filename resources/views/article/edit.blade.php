<ul>
    @foreach($errors->all() as $row)
        <li> {{$row}} </li>
    @endforeach
</ul>
  

  <form action="{{url('article/edit')}}" method="post">
   <input type="hidden" name="id" value="{{$article->id}}">
    <table>
        <tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" name="title" value="{{$article->title}}"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><input type="text" name="content" value="{{$article->content}}"></td>
        </tr>
    
    {{csrf_field()}}
    
    <tr>
        <td><button type="submit">Update</button></td>
    </tr>
    </table>
    
</form>
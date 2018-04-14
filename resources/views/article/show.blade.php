<form action="{{url('article/edit')}}" method="post">
   <input type="hidden" name="id" value="{{$article->id}}">
    <table>
        <tr>
            <td>Title :</td>
            <td><input type="text" name="title" value="{{$article->title}}"></td>
        </tr>
        <tr>
            <td>Content :</td>
            <td><input type="text" name="content" value="{{$article->content}}"></td>
        </tr>
    
    {{csrf_field()}}
    
    </table>
    
</form>
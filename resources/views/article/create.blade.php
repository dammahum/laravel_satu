<form action="{{url('article/create')}}" method="post">
   
    <table>
        <tr>
            <td>Title</td>
            <td>:</td>
            <td><input type="text" name="title"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td>:</td>
            <td><input type="text" name="content"></td>
        </tr>
    
    {{csrf_field()}}
    
    <tr>
        <td><button type="submit">Submit</button></td>
    </tr>
    </table>
    
</form>
@foreach($todos as $todo)
      <li id="{{$todo->id}}">
      	<a href="#" onClick="task_done('{{$todo->id}}');" class="toggle"></a> 
      	<span id="span_{{$todo->id}}">{{$todo->title}}</span> 
      	<a href="#" onClick="delete_task('{{$todo->id}}');" class="icon-delete">删除</a> 
      	<a href="#" onClick="edit_task('{{$todo->id}}','{{$todo->title}}');" class="icon-edit">编辑</a>
      </li>
@endforeach
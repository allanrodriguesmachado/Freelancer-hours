<div class="flex flex-col">
  @foreach($this->projects AS $project)
        <a href="{{route('project.show', $project)}}">{{$project->title}}</a>
{{--      <li >--}}
{{--          <a href="{{route('project.show', $project)}}">{{$project->id}}. {{$project->title}}</a>--}}
{{--      </li>--}}
  @endforeach
</div>

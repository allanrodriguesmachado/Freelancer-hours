<div>
    @foreach($this->projects AS $project)
        <li>
            <a href="{{route('project.show', $project->id)}}">{{$project->id}}. {{$project->title}}</a>
        </li>
    @endforeach
</div>

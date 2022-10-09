test<br>

@foreach($values as $value)
{{$value->id}}<br>
{{$value->text}}<br>
{{$value->created_at}}<br>
{{$value->updated_at}}<br>
@endforeach


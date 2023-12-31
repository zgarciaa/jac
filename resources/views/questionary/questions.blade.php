@extends('layouts.base')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; padding: 20px;">
            @foreach($questions as $question)
                <div>
                    <x-question-component
                        :question="$question"
                    ></x-question-component>
                </div>
            @endforeach
        </div>
    </div>
@endsection

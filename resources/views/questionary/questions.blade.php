@extends('layouts.base')

@section('content')
    <div style="padding: 30px;">
        <form action="{{ route('questionary.answers') }}" method="post">
            @csrf
            <div style="display: grid; grid-template-columns: repeat(2, 1fr);">
                @foreach($questions as $question)
                    <x-question-component
                        :question="$question"
                    ></x-question-component>
                @endforeach
            </div>
            <div style="text-align: right;">
                <button type="submit">Enviar Respuestas</button>
            </div>
        </form>
    </div>
@endsection

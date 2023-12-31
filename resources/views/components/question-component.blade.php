<div>
    <p>{{ $question->id . '. ' . $question->statement }}</p>
    <ul>
        @foreach ($question->answer_options as $option)
            <label>
                <input
                    type="radio"
                    name="{{ $option->question_id }}"
                    value="{{ $option->letter }}"
                >
                {{ $option->letter . '. ' . $option->value }}
            </label><br>
        @endforeach
    </ul>
</div>

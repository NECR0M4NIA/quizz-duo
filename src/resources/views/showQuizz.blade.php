<p>show a quizz</p>
{{ $quizz->title }}
@foreach ($quizz->questions as $question)
<p>{{ $question->title }}</p>
@endforeach
<a href="/quizzs/{{ $quizz->id }}">question suivante</a>
<x-layout>

<div class="container navbar-container">
    <div class="result-box">
        <h2>Rezultāts</h2>
        <p style="font-size: 16px;">Tu atbildēji pareizi uz <strong>{{ $score }}</strong> no <strong>{{ $total }}</strong> jautājumiem.</p>

        <a href="{{ route('quiz.leaderboard', ['topic' => $topic_id]) }}">
            Skatīt leaderbordu
        </a>

        <div style="margin-top:20px;">
            <!-- atļauj atkal izpildīt to pašu testu -->
            <form action="{{ route('quiz.start') }}" method="POST">
                @csrf
                <input type="hidden" name="topic_id" value="{{ $topic_id }}">
                <button type="submit">Atkārtot šo testu</button>
            </form>

            <!-- aizved atpakaļ uz sākumu, lai izvēlētos jaunu topic -->
            <a href="{{ route('quiz.index') }}">Izvēlēties jaunu tēmu</a>
        </div>
    </div>
</div>

</x-layout>

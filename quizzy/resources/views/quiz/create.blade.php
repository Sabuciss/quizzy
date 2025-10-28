<x-layout>
    <div class="container navbar-container scroll">
        <div class="create-row">
            <div class="create-box">

                <h2>Pievienot jautājumu</h2>
                @if(session('status'))
                    <script>
                        alert("{{ session('status') }}");
                    </script>
                @endif

                @if($errors->any())
                    <script>
                        alert("Neizdevās pievienot jautājumu. Lūdzu pārbaudiet ievades datus.");
                    </script>
                @endif
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf

                    <label for="topic_id">Tēma</label>
                    <select name="topic_id" id="topic_id">
                        @foreach($topics as $topic)
                            <option value="{{ $topic->id }}">{{ $topic->name }}</option>
                        @endforeach
                    </select>

                    <label for="question">Jautājums</label>
                    <textarea name="question" id="question" rows="4"></textarea>

                    <h3>Atbildes varianti:</h3>
                    <label for="correct_answer">Pareizā atbilde</label>
                    <input type="text" name="correct_answer" id="correct_answer" required />

                    <label for="wrong1">Nepareizā atbilde 1</label>
                    <input type="text" name="wrong1" id="wrong1" required />

                    <label for="wrong2">Nepareizā atbilde 2</label>
                    <input type="text" name="wrong2" id="wrong2" />

                    <label for="wrong3">Nepareizā atbilde 3</label>
                    <input type="text" name="wrong3" id="wrong3" />

                    <label for="wrong4">Nepareizā atbilde 4</label>
                    <input type="text" name="wrong4" id="wrong4" />

                    <button type="submit">Saglabāt</button>
                </form>
            </div>

            <div class="create-box">
                
                <h2>Pievienot tēmu</h2>

                <form method="POST" action="{{ route('quiz.storeTopic') }}">
                    @csrf

                    <label for="new_topic_id">Tēma</label>
                    <input type="text" name="new_topic_name" id="new_topic_name" placeholder="Tēmas nosaukums" required />
                    
                    <button type="submit">Saglabāt</button>
                </form>
            </div>
        </div>
        
    </div>
</x-layout>

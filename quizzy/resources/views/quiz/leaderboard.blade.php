<x-layout>
    <div class="leaderboard-wrapper">
         <!-- Kategoriju filtrs -->
        <div class="filters" style="margin-bottom: 20px; text-align: center;">
            <select id="category-select" name="category">
                <option value="all">Visas kategorijas</option>
                <option value="gramatas">Grāmatas</option>
                <option value="sports">Sports</option>
                <option value="minioni">Minioni</option>
                <option value="vesture_dabas_zinas">Vēsture un Dabas zinības</option>
                <option value="aukstpapezu_kurpes">Aukstpapēžu kurpes</option>
            </select>


            <button type="button" class="btn" onclick="filterLeaderboard()">Filtrēt</button>
        </div>

        <table id="leaderboard-table">
            <thead>
                <tr>
                    <th>Vieta</th>
                    <th>Lietotājs</th>
                    <th>Kategorija</th>
                    <th>Punkti</th>
                </tr>
            </thead>
            <tbody>
                @foreach($highscores as $i => $res)
                    <tr data-category="{{ strtolower($res->category ?? 'quiz') }}" @if($res->user_id == auth()->id()) style="background: #d2f6c5;" @endif>
                        <td>{{ $i + 1 }}</td>
                        <td>{{ $res->user->username ?? 'Anonīms' }}</td>
                        <td>{{ ucfirst($res->category ?? 'Tests') }}</td>
                        <td>{{ $res->score }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($userScore)
            <div class="user-score-info" style="margin-top: 20px;">
                <h2>Tavs rezultāts</h2>
                <p><strong>Punkti:</strong> {{ $userScore->score }}</p>
                <p><strong>Vieta:</strong> {{ $userRank }}</p>
            </div>
        @endif
    </div>

    <script>
        function filterLeaderboard() {
            const select = document.getElementById('category-select');
            const category = select.value.toLowerCase();
            const rows = document.querySelectorAll('#leaderboard-table tbody tr');

            rows.forEach(row => {
                const rowCategory = row.getAttribute('data-category');
                if(category === 'all' || rowCategory === category) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
</x-layout>
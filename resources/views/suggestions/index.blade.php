<div class="container mt-5">
    <h2 class="text-center mb-4">Suggested Changes / New Kebabs</h2>
    <button class="btn btn-primary" id="get-suggestions-btn" onclick="toggleSuggestionsTable()">Get All Suggestions</button>
    <div id="suggestions-table-container" style="display:none; margin-top: 20px;">
        <h3 class="mt-3">Suggested Changes</h3>
        <table class="table table-striped mt-3">
            <thead>
            <tr>
                <th>User</th>
                <th>Suggested Subject</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($suggestions as $suggestion)
                <tr>
                    <td>{{ $suggestion->user->name }}</td>
                    <td>{{ $suggestion->subject }}</td>
                    <td>{{ $suggestion->latitude ?? 'N/A' }}</td>
                    <td>{{ $suggestion->longitude ?? 'N/A' }}</td>
                    <td>
                        @if(!$suggestion->is_reviewed)
                            <form action="{{ route('suggestions.markAsReviewed', $suggestion->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-warning btn-sm">Mark as Reviewed</button>
                            </form>
                        @else
                            <span class="text-success">Reviewed</span>
                        @endif
                        <form action="{{ route('suggestions.deleteSuggestion', $suggestion->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function toggleSuggestionsTable() {
        var table = document.getElementById('suggestions-table-container');
        table.style.display = (table.style.display === 'none') ? 'block' : 'none';
    }
</script>

<style>
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #e0a800;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #c82333;
    }

    .btn-sm {
        font-size: 0.8rem;
    }

    .table th, .table td {
        padding: 12px;
        text-align: left;
    }

    .table td form {
        display: inline;
    }

    #suggestions-table-container {
        margin-top: 20px;
    }

    h3 {
        color: #333;
        font-size: 1.5rem;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f9f9f9;
    }
</style>

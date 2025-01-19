<div class="container kebab-container">
    <h2 class="kebab-heading">List of Kebabs</h2>
    <div class="kebab-actions">
        <a href="{{ route('kebabs.create') }}" class="btn-add-new">Add New Kebab</a>
    </div>
    <table class="kebab-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Year Opened</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($kebabs as $kebab)
            <tr>
                <td>{{ $kebab->name }}</td>
                <td>{{ $kebab->address }}</td>
                <td>{{ $kebab->year_opened }}</td>
                <td class="actions">
                    <a href="{{ route('kebabs.edit', $kebab->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('kebabs.destroy', $kebab->id) }}" method="POST" class="form-delete">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
    .kebab-container {
        margin-top: 50px;
        margin-bottom: 50px;
    }

    .kebab-heading {
        text-align: center;
        margin-bottom: 30px;
    }

    .kebab-actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
    }

    .btn-add-new {
        background-color: #28a745;
        color: white;
        padding: 10px 20px;
        font-size: 18px;
        text-decoration: none;
        border-radius: 5px;
    }

    .btn-add-new:hover {
        background-color: #218838;
    }

    .kebab-table {
        width: 100%;
        border-collapse: collapse;
    }

    .kebab-table th, .kebab-table td {
        padding: 12px;
        text-align: left;
        border: 1px solid #ddd;
    }

    .kebab-table th {
        background-color: #343a40;
        color: white;
    }

    .kebab-table tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    .kebab-table tr:hover {
        background-color: #f1f1f1;
    }

    .actions {
        display: flex;
        gap: 10px;
    }

    .btn-edit, .btn-delete {
        padding: 5px 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .btn-edit {
        background-color: #ffc107;
        color: white;
    }

    .btn-edit:hover {
        background-color: #e0a800;
    }

    .btn-delete {
        background-color: #dc3545;
        color: white;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .form-delete {
        display: inline;
    }
</style>

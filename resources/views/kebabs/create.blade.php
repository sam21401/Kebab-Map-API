<div class="container">
    <h2>Add New Kebab</h2>

    <form action="{{ route('kebabs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}" required>
            @error('address')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="latitude" class="form-label">Latitude</label>
            <input type="text" name="latitude" id="latitude" class="form-control" value="{{ old('latitude') }}"
                   required>
            @error('latitude')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="longitude" class="form-label">Longitude</label>
            <input type="text" name="longitude" id="longitude" class="form-control" value="{{ old('longitude') }}"
                   required>
            @error('longitude')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year_opened" class="form-label">Year Opened</label>
            <input type="number" name="year_opened" id="year_opened" class="form-control"
                   value="{{ old('year_opened') }}" required>
            @error('year_opened')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year_closed" class="form-label">Year Closed</label>
            <input type="number" name="year_closed" id="year_closed" class="form-control"
                   value="{{ old('year_closed') }}">
            @error('year_closed')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Add Kebab</button>
    </form>
</div>
<style>

    .form-container h2 {
        text-align: center;
        margin-bottom: 30px;
        font-size: 28px;
    }

    .form-label {
        font-weight: bold;
    }

    .form-control {
        margin-top: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 16px;
        width: 100%;
    }

    .mb-3 {
        margin-bottom: 20px;
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-size: 18px;
        border-radius: 6px;
        cursor: pointer;
    }

    .btn-success {
        background-color: #28a745;
        color: white;
    }

    .btn-success:hover {
        background-color: #218838;
    }


    .text-danger {
        font-size: 14px;
    }
</style>

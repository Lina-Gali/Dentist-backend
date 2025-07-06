@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Liste des Patients</h2>
    <a href="#" class="btn btn-primary">➕ Ajouter Patient</a>
</div>

<table class="table table-bordered align-middle">
    <thead class="table-light">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Date naissance</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
        <tr>
            <td>{{ $patient['id'] }}</td>
            <td>{{ $patient['nom'] }}</td>
            <td>{{ $patient['prenom'] }}</td>
            <td>{{ $patient['telephone'] }}</td>
            <td>{{ $patient['email'] }}</td>
            <td>{{ $patient['date_naissance'] }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-success">👁️</a>
                <a href="#" class="btn btn-sm btn-warning">✏️</a>
                <form action="#" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Supprimer ?')">🗑️</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
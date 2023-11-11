@extends('layouts.app');
@section('content');
     <h2 class="text-center">Bu tashkilotlar ro'yxati</h2>
     
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="{{ route('companies.create') }}" class="btn btn-success" type="button">Tashkilot qo'shish</a>
     </div>

     <table class="table table-bordered">
          <thead>
               <tr>
                    <th>T/R</th>
                    <th>Tashkilot nomi</th>
                    <th>Tashkilot manzili</th>
                    <th>Tashkilot raqami</th>
                    <th>Amallar</th>
               </tr>
          </thead>
          
          <tbody>
               @foreach ($companies as $company)
                <tr>
                    <td>{{ ($companies->currentPage() - 1) * $companies->perPage() + $loop->index + 1 }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>
                        <a href="{{ route('companies.show', ['company' => $company->id]) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('companies.edit', ['company' => $company->id]) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('companies.destroy', ['company' => $company->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
     </table>
     {{ $companies->links() }}
     @endsection
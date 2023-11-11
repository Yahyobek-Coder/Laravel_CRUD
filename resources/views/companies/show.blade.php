@extends('layouts.app');
@section('content');
<h2 class="text-center" style="margin-bottom: 30px">Tashkilot haqida ma'lumot</h2>
     <div class="row justify-content-center">
          <div class="col-md-6">
               <div class="mb-3">
                    <a href="{{ route('companies.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left-circle"></i> Orqaga</a>
               </div>
               <table class="table table-bordered">
                    <tr>
                         <td>Tashkilot nomi</td>
                         <td>{{ $company->name }}</td>
                    </tr>
                    <tr>
                         <td>Tashkilot manzili</td>
                         <td>{{ $company->address }}</td>
                    </tr>
                    <tr>
                         <td>Tashkilot telefon raqami</td>
                         <td>{{ $company->phone }}</td>
                    </tr>
                    <tr>
                         <td>Qo'shilgan vaqt</td>
                         <td>{{ $company->created_at }}</td>
                    </tr>
                    <tr>
                         <td>Taxrirlangan vaqt</td>
                         <td>{{ $company->updated_at }}</td>
                    </tr>
               </table>
          </div>
     </div>


@endsection
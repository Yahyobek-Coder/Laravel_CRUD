@extends('layouts.app');
@section('content');
<h2 class="text-center">Tashkilot ma'lumotlarini taxrirlash</h2>
     <div class="row">
          <div class="col-md-6">
               @if ($errors->any())
                    <div class="alert alert-danger">
                         <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                                   
                              @endforeach
                         </ul>
                    </div>
                    @endif
               <form action="{{ route('companies.update', ['company'=>$company->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
               <div class="mb-3">
                    <label class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" name="name" value="{{ $company->name }}">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" name="address" value="{{ $company->address }}">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot telefon raqami</label>
                    <input type="text" class="form-control" name="phone" value="{{ $company->phone }}">
               </div>
               
                    <button type="submit" class="btn btn-primary">Saqlash</button>
               </form>
          </div>
     </div>


@endsection
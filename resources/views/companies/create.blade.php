@extends('layouts.app');
@section('content');
<h2 class="text-center">Tashkilot qo'shish</h2>
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
               <form action="{{ route('companies.store') }}" method="POST">
                    @csrf
               <div class="mb-3">
                    <label class="form-label">Tashkilot nomi</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot manzili</label>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
               </div>
               <div class="mb-3">
                    <label class="form-label">Tashkilot telefon raqami</label>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
               </div>
               
                    <button type="submit" class="btn btn-primary">Saqlash</button>
               </form>
          </div>
     </div>


@endsection
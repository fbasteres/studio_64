@extends('layouts.appadmin')
@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between mb-4">
        <h2 class="text-2xl font-bold">Planes</h2>
        <a href="#" class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Nuevo Plan</a>
    </div>
    <div class="bg-white shadow-md rounded-lg p-4">
        
       <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
            

          

        <div class="mt-4">
            {{ $planes->links() }}
        </div>
    </div>
</div>
@endsection

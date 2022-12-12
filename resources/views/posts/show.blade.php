@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-slate-800 p-6 rounded-lg">
        <x-post :post="$post" />
    </div>
</div>
@endsection

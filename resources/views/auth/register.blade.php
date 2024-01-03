@extends('layouts.app')
@section('content')
<style type="text/css">
body {
color: #404E67;
background: #F5F7FA;
font-family: 'Open Sans', sans-serif;

}
.table-wrapper {
width: auto;
margin:30px auto;
background: #fff;
padding: 20px;
box-shadow: 0 0px 1px rgb(12, 44, 224);

}
</style>
<div class="container"   style="max-width:90%;" >
    <div class="table-wrapper">
        <h4 >ADD USER</h4>
    <form method="POST" action="{{ route('register') }}"  class="row g-3">
        @csrf
        <div  class="col-md-6">
        <!-- Name -->
        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div></div>
        <div  class="col-md-6">
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div></div>
        <div  class="col-md-6">
          <!-- Phone -->
          <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="form-control" type="tel" name="phone" :value="old('phone')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div></div>
     
        <div  class="col-md-6">
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div></div>
        <div  class="col-md-6">
        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
    </div>
    <div class="col-md-12 text-center mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{route('viewuser')}}">
                {{ __('Already Added?')}}
            </a>
            <x-primary-button  type="submit" class="btn btn-primary">
                {{ __('Add User') }}
            </x-primary-button>
    </div>
    </form>
    </div>
</div>
@endsection

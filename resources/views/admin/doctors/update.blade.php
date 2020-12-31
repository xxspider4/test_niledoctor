<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" >



                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        @if (Session::has('message'))


                        <div class="alert alert-success">
                            <p>
                                {{ Session::get('message') ?? '' }}
                            </p>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('admin.clinics.doctors.update',[$doctor]) }}">
                            @csrf
                            @method('PUT')

                            <!-- Name -->
                            <div>
                                <x-label for="name" :value="__('Name')" />

                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$doctor->name " required autofocus />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-label for="email" :value="__('Email')" />

                                <x-input id="email" class="block mt-1 w-full" type="email" name="email" />
                            </div>
                            <div class="mt-4">
                                <x-label for="username" :value="__('username')" />

                                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value=" $doctor->user->username "  />
                            </div>
                            <div class="mt-4">
                                <x-label for="phone" :value="__('phone')" />

                                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" />
                            </div>


                                {{-- <x-input id="clinic" class="block mt-1 w-full" type="text" name="clinic_id" :value="old('clinic_id')" required /> --}}

                            {{-- <div class="mt-4">
                                <x-input id="clinic" class="block mt-1 w-full" type='hidden' name="user_type" :value="old('clinic_id')" required />
                            </div> --}}
                            <!-- Password -->
                            <div class="mt-4">
                                <x-label for="password" :value="__('Password')" />

                                <x-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                 autocomplete="new-password" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation"  />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a> --}}

                                <x-button class="ml-4">
                                    {{ __('update') }}
                                </x-button>
                            </div>
                        </form>





                </div>


            </div>


        </div>


    </div>
</x-app-layout>

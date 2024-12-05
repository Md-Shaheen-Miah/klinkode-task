@extends('layouts.app')

@section('content')
<div class="Polaris-Page">
    <div class="Polaris-Page__Content">
        <h1 class="Polaris-Heading">Contact Us</h1>


       
    <form action="{{ route('contact.create') }}" method="POST" class="Polaris-Form">
            @csrf
            <div class="Polaris-FormLayout">
              
                <div class="Polaris-FormLayout__Item">
                    <div class="Polaris-TextField">
                        <label class="Polaris-Label" for="name">
                            <span class="Polaris-Label__Text">Name</span>
                        </label>
                        <input type="text" name="name" id="name" class="Polaris-TextField__Input" value="{{ old('name') }}" ><br>


                        @error('name')
                          
                        <span style="color: red;" >{{ $message }}</span>
                          
                        @enderror


                    </div>
                </div><br>

               
                <div class="Polaris-FormLayout__Item">
                    <div class="Polaris-TextField">
                        <label class="Polaris-Label" for="email">
                            <span class="Polaris-Label__Text">Email</span>
                        </label>
                        <input type="email" name="email" id="email" class="Polaris-TextField__Input" value="{{ old('email') }}" ><br>


                        @error('email')
                            
                        <span style="color: red;">{{ $message }}</span>
                          
                        @enderror

                    </div>
                </div><br>

               
                <div class="Polaris-FormLayout__Item">
                    <div class="Polaris-TextField">
                        <label class="Polaris-Label" for="message">
                            <span class="Polaris-Label__Text">Message</span>
                        </label>
                        <textarea name="message" id="message" class="Polaris-TextField__Input" rows="4" >{{ old('message') }}</textarea><br>


                        @error('message')
                            
                        <span style="color: red;">{{ $message }}</span>
                            
                        @enderror


                    </div>
                </div><br>

              
                <div class="Polaris-FormLayout__Item">
                    <button type="submit" class="Polaris-Button Polaris-Button--primary">
                        <span class="Polaris-Button__Content">Submit</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

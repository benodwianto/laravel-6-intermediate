@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <passport-clients :class="`mb-3`"></passport-clients>
                <passport-authorized-clients :class="`mb-3`"></passport-authorized-clients>
                <passport-personal-access-tokens :class="`mb-3`"></passport-personal-access-tokens>
            </div>
        </div>
    </div>
@endsection

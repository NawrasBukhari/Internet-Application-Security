@extends('layouts.app')
@section('content')
    <style>
        .container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <div class="container">
        <div class="card" style="box-shadow: rgba(0, 0, 0, 0.35) 0 5px 15px;">
            <div class="card-header">Demo of secret info</div>
            <div class="card-body mt-5 mb-5 pt-5 pb-5">
                <div style="text-align: center;">
                    <h1 class="text-success">You have accessed this page because you have been authorized!</h1>
                </div>
            </div>
            <div class="card-footer">
                <div style="text-align: center;">
                    <h4 class="text-danger">All rights reserved for Nawras Bukhari</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title')
   Send Email
@endsection

@section('content')
    <h1 class="text-center my-5">Send Email</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <b>Send email to others</b>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach ($errors->all() as $errors)
                                    <li class="list-group-item">
                                        {{ $errors }}
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                    @endif
                    <form action="/send-email" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Recipient email name">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="content" placeholder="Email content" cols="5" rows="5" class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox">
                            <label for="checkbox" class="form-check-label">Send emails automatically</label>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success" style="background-color:rgb(245, 26, 92)">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection

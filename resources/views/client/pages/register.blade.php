
@extends('layouts.client.layout')
@section('content')
<div class="container py-5">
  <div class="py-5"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-warning">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Fill the form to be a member</h4>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control border-warning" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control border-warning" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control border-warning" id="phone" name="phone">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control border-warning" id="subject" name="subject">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control border-warning" id="message" name="message" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-warning text-white">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

            @endsection
@extends('admin.layouts.master')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <div class="row">
      <div class="col-lg-10">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Contact-Us</h5>

            <!-- General Form Elements -->
            <form action="{{ route('contact-admin.update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Phone One</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone_one"  value="{{ $contact->phone_one }}">
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Phone two</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone_two"  value="{{ $contact->phone_two}}">
                </div>
            </div>


              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">mail one</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="mail_one"  value="{{ $contact->mail_one}}">
                </div>
              </div>


              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">mail two</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="mail_two"  value="{{ $contact->mail_two}}">
                </div>
              </div>


              <div class="row mb-3">
                <label for="text" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address"  value="{{ $contact->address}}">
                </div>
              </div>

                <div class="row mb-3">
                    <label for="text" class="col-sm-2 col-form-label">Google Map Link</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="map_link"  value="{{ $contact->map_link}}">
                    </div>

                  </div>

              </div>



              <button type="submit" class="btn btn-primary"> Update </button>
            </form><!-- End General Form Elements -->

          </div>
        </div>

      </div>


    </div>
  </section>
  @endsection

@extends('layouts.layout')

@push('title')

@section('content')
<form class="card bg-dark">
    <div class="container mb-5 mt-5">
      <h4 class="mb-5 text-light text-center"><strong>DATA DIRI</strong></h4>

      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
              <div class="col">
                <div class="form-outline" data-mdb-input-init>
                  <input type="text" placeholder="First name" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">First name<span class="text-red">*</span></label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline" data-mdb-input-init >
                  <input type="text" placeholder="Last name" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Last name<span class="text-red">*</span></label>
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4" data-mdb-input-init>
              <input type="email" placeholder="Email address" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Email address<span class="text-red">*</span></label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4" data-mdb-input-init>
              <input type="number" placeholder="WhatsApp" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">WhatsApp<span class="text-red">*</span></label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-center mb-4">
              <input
                     class="form-check-input me-2"
                     type="checkbox"
                     value=""
                     id="form2Example3"
                     checked
                     />
              <label class="form-check-label text-light" for="form2Example3">
                Notifikasi aku
              </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-secondary btn-block mb-4" data-mdb-ripple-init>
              Submit!
            </button>
          </div>
        </div>
      </div>
    </form>
    @endsection
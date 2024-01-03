
@extends('employe.empnav')
@section('content')
<h3>Home Page</h3>

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
      <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">STARTED</p>
                <h4 class="mb-0">---</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <button class="btn btn-secondary btn-sm" > Full Detail <i class="fa fa-arrow-right"></i></button> 
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">WORKING</p>
                <h4 class="mb-0">---</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
                <button class="btn btn-secondary btn-sm" > Full Detail <i class="fa fa-arrow-right"></i></button> 
             </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">COMPLETED</p>
                <h4 class="mb-0">---</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <button class="btn btn-secondary btn-sm" > Full Detail <i class="fa fa-arrow-right"></i></button> 
              </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
            
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">CLARIFICATION</p>
                <h4 class="mb-0">---</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <button class="btn btn-secondary btn-sm" > Full Detail <i class="fa fa-arrow-right"></i></button> 
              </div>
          </div>
        </div>
      </div>
@endsection
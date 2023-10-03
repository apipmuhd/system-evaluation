@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">

    
    <div class="row profile-body">
      <!-- left wrapper start -->
     
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
  
              <h6 class="card-title">Edit Contester</h6>

              <form method="POST" action="{{route('update.type')}}" class="forms-sample"
               >
              @csrf


                <input type="hidden" name="id" value="{{$types->id}}">
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Contester Name</label>
                      <input type="contester_name" name="contester_name" class="form-control @error('contester_name')
                      is-invalid @enderror" value="{{$types->contester_name}}"  >
                      @error('contester_name')
                      <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Title</label>
                    <input type="Project_title" name="project_title" class="form-control @error('project_title')
                    is-invalid @enderror" value="{{$types->project_title}}" >
                    @error('project_title')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
                </div>


                  



    


                 
                  <button type="submit" class="btn btn-primary me-2">Save Changes</button>
                  
              </form>

                </div>
              </div>
         
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->
      <!-- right wrapper end -->
    </div>

        </div>






@endsection
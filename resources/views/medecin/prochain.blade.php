@extends('layouts.app')

@section('main-content')
@section('headsection')
<style>
  .message_error{
    color:red;
  }
</style>
@endsection
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
   
        <div class="box-body">
  <div class="">
    <p class="login-box-msg">Fixer votre Prochain  Rendez Vous</p>
   
      <form action="{{ route('medecin.prochain_rendez_vous',$edit_client_rv->id) }}" method="post">
      @csrf
      {{ method_field('PUT') }}
      <div class="row col-lg-offset-3 col-lg-6">
      <div class="form-group has-feedback">
        <input type="date" name="date" value="{{ old('date') }}" class="form-control @error('date') is-invalid @enderror">
        <span class="glyphicon glyphicon-date form-control-feedback"></span>
        @error('date')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="form-group has-feedback">
        <input type="time" name="time" value="{{ old('time') }}" class="form-control @error('time') is-invalid @enderror">
        <span class=" form-control-feedback"></span>
        @error('time')
          <span class="invalid-feedback" role="alert">
              <strong class="message_error">{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="box-body pad">
        
        <textarea id="editor1" name="objet" placeholder="Ecriver le objet de votre rendez Vous"
        style="width: 50%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  value="{{ old('bibliographie') }}" class="@error('bibliographie') is-invalid @enderror"></textarea>
        @error('objet')
        <span class="invalid-feedback" role="alert">
          <strong class="message_error">{{ $message }}</strong>
        </span>
        @enderror
        
      </div>
    </div>
      <div class="row col-lg-offset-3 col-lg-6">
        <div class="col-md-5">
        </div>
        <!-- /.col -->
        <div class="col-md-7 text-right">
          <a href="{{ route('medecin.home') }}"  class="btn btn-warning "> <i class="fa fa-back"></i> Retoure</a>
          <button type="submit" class="btn btn-primary  ">Fixer</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  <!-- /.form-box -->
<!-- /.register-box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



@endsection
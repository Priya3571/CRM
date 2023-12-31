@extends('admin.layout.layout')

@section('content')

<div class="x_panel">
    <div class="x_title">
      <h2>Form Design <small>different form elements</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings 1</a>
            </li>
            <li><a href="#">Settings 2</a>
            </li>
          </ul>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br>
      <form id="demo-form2" data-parsley-validate="" method="post" action="{{url('categories/update/')}}" class="form-horizontal form-label-left">
@csrf
        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Sub Category  <span class="required">*</span>
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="name" required="required" name="name" value="<?= $categories->name ?>" class="form-control col-md-7 col-xs-12">
            <input type="hidden" id="name" required="required" name="id" value="<?= $categories->id ?>" class="form-control col-md-7 col-xs-12">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category  Name
          </label>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <select  name="category_id" class="form-control col-md-7 col-xs-12">
                <option value=""> No SubCategroy</option>

            @foreach ($all as $all)



                <option value="{{$all->id}}">{{$all->name}}</option>
                @endforeach
            </select>

        </div>




        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <input type="submit" class="btn btn-success" value="Submit">
          </div>
        </div>

      </form>
    </div>
  </div>

@endsection

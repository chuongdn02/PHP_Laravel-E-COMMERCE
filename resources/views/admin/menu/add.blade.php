@extends('admin.main')

@section('content')
  <form action="" method="POST">
    <div class="card-body">

      <div class="form-group">
        <label for="menu">Tên Danh Mục</label>
        <input type="text" name="menu" class="form-control" id="menu" placeholder="Enter name">
      </div>

      <div class="form-group">
        <label for="menu">Danh Mục</label>
        <select class="form-control" name="parent_id" >
          <option value="0">Danh Mục Cha</option>
          <option value="1">SamSung</option>
        </select>
      </div>

      <div class="form-group">
        <label >Mô tả</label>
        <textarea name="description" class="form-control" ></textarea>
      </div>

      <div class="form-group">
        <label >Mô tả chi tiết</label>
        <textarea name="content" class="form-control" ></textarea>
      </div>
        
        <div class="form-group">
        <label >Kích hoạt</label>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
          <label for="active" class="custom-control-label">có</label>
        </div>
        <div class="custom-control custom-radio">
          <input class="custom-control-input" value="" type="radio" id="no_active" name="active" >
          <label for="no_active" class="custom-control-label">Không</label>
        </div>
      </div>
    </div>

       

      


    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Tạo Danh Mục</button>
    </div>
  </form>
@endsection

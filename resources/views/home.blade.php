@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }} ">
</head>

<body>
    <div class="card-body">
        <div class="card-header">
            <h3 class="card-title"> SE CAMP</h3>
        </div>
    </div>
    <form action="#">
        <div class="card-body">
            <div class="form-group">
                <label for="input_name">ชื่อ</label>
                <input type="text" class="form-control" id="input_name" placeholder="ใส่ชื่อ">
            </div>
            <div class="form-group">
                <label for="input_lname">สกุล</label>
                <input type="text" class="form-control" id="input_lname" placeholder="ใส่นามสกุล">
            </div>
            <div class="form-group">
                <label for="input_date">วัน/เดือน/ปี</label>
                <input type="date" class="form-control" id="input_date">
            </div>
            <div class="form-group">
                <label for="input_age">อายุ</label>
                <input type="text" class="form-control" id="input_age">
            </div>
            <div class="form-group">
                <label>เพศ</label>
                <div class="form-check">
                    <input id="radio_a" type="radio" name="same_radio" class="form-check-input">
                    <label for="radio_a" class="form-check-label">ชาย</label>
                </div>
                <div class="form-check">
                    <input id="radio_b" type="radio" name="same_radio" class="form-check-input">
                    <label for="radio_b" class="form-check-label">หญิง</label>
                </div>
            </div>
            <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
            <div class="form-group">
                <label for="input_address">ที่อยู่</label>
                <textarea rows="4" class="form-control" id="input_address" placeholder="กรุณาป้อนข้อมูล"></textarea>
            </div>
            <div class="form-group">
                <label for="input_color">สีที่ชอบ</label>
                <select class="form-control" id="input_color">
                    <option value="" disabled selected>-</option>
                    <option>สีแดง</option>
                    <option>สีเขียว</option>
                    <option>สีขาว</option>
                    <option>สีดำ</option>
                    <option>สีน้ำเงิน</option>
                    <option>สีชมพู</option>
                </select>
            </div>

            <div class="form-group">
                <label>แนวเพลงที่ชอบ</label>
                <div class="form-check">
                    <input id="radio_c" type="radio" name="music_radio" class="form-check-input">
                    <label for="radio_c" class="form-check-label">POP</label>
                </div>
                <div class="form-check">
                    <input id="radio_d" type="radio" name="music_radio" class="form-check-input">
                    <label for="radio_d" class="form-check-label">Lock</label>
                </div>
                <div class="form-check">
                    <input id="radio_e" type="radio" name="music_radio" class="form-check-input">
                    <label for="radio_e" class="form-check-label">R&B</label>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="my_checkbox" name="my_checkbox">
                <label class="form-check-label" for="my_checkbox">ยินยอมให้เก็บข้อมูล</label>
            </div>
            <div>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <br><br><br>
    </form>
</body>

</html>
    <!-- /.content -->
@endsection
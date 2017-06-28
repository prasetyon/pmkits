@extends('layouts.backend')

@section('content')

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Alumni
            <small>List Alumni</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">List Alumni</li>
          </ol>
        </section>

    <!-- Main content -->
      
    <br><br>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <h3>Data Alumni <a href="#" class="pull-right"> <i class="fa fa-plus"></i></a></h3>
                        <div class="table-responsive" style="overflow: auto">
                        <table id="alumni" class="table table-bordered table-striped">
                        @php $count = 1 @endphp
                            <thead>
                              <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>JK</th>
                                <th>Asal</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Gereja</th>
                                <th>No. HP</th>
                                <th>Pekerjaan</th>
                                <th>Tempat Kerja</th>
                                <th>Asal Fakultas</th>
                                <th>Asal Departemen</th>
                                <th>Angkatan</th>
                                <th>Update</th>
                                <th>Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($alumni as $a)
                              <tr>
                                <td>@php echo $count++ @endphp</td>
                                <td>{{$a->name}}</td>
                                <td>{{$a->email}}</td>
                                <td>{{$a->jk}}</td>
                                <td>{{$a->asal}}</td>
                                <td>{{$a->tgl_lahir}}</td>
                                <td>{{$a->alamat}}</td>
                                <td>{{$a->gereja}}</td>
                                <td>{{$a->no_hp}}</td>
                                <td>{{$a->pekerjaan}}</td>
                                <td>{{$a->tempat_kerja}}</td>
                                <td>{{$a->asal_fakultas}}</td>
                                <td>{{$a->asal_departemen}}</td>
                                <td>{{$a->angkatan}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" href="./alumni?id={{$a->ID}}">Edit</a>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => 'alumni/' . $a->ID)) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', array('onclick'=>"return confirm('Anda yakin akan menghapus data ?');", 'class' => 'btn btn-danger')) }}
                                    {{ Form::close() }}
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                        {{$alumni->render()}}
                        </div> 
                    </div>
                </div>
              </div>
          </div>
        </section>
        <!-- /.Main content -->
    </div>
@stop

<!-- jQuery 2.2.3 -->
<script src="Admin-LTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="Admin-LTE/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="Admin-LTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="Admin-LTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="Admin-LTE/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="Admin-LTE/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="Admin-LTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="Admin-LTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="Admin-LTE/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="Admin-LTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="Admin-LTE/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="Admin-LTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="Admin-LTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="Admin-LTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="Admin-LTE/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="Admin-LTE/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Admin-LTE/dist/js/demo.js"></script>
<script>
$(function() {
    $('#alumni').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
    });
  });
</script>
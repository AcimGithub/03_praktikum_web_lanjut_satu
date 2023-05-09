@extends('adminlte::page')
@section('plugins.Datatables', true)
@section('title', 'Dashboard')

@section('content_header')
<h1>Hallo </h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with minimal features & hover style</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ages as $data)
                <tr>
                    <td>{{$data->Id}}</td>
                    <td>{{$data->Nama}}</td>
                    <td>{{$data->Umur}}</td>
                </tr>
                @endforeach
                

            </tbody>
            <!-- <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Umur</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- <ul>
        @foreach ($ages as $data)
        <li>
            {{$data->ages}}
        </li>
        @endforeach
    </ul> -->
@stop



@section('footer')
<p>Alhamdulillah Luar Biasa POLINEMA <3 <p>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>alert("Selamat Datang!!")
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>


@stop
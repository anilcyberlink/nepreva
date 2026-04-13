@extends('admin.master')
@section('title','Career')
@section('breadcrumb')
@endsection
@section('content')
<div class="tray tray-center" style="height: 647px;">
<div class="panel">
    <div class="panel-body ph20">
        <div class="tab-content">
            <div id="users" class="tab-pane active">
                <div class="table-responsive mhn20 mvn15">
                    <table class="table admin-form table-striped dataTable" id="datatable3">
                        <thead>
                            <tr class="bg-light">
                                <th>SN</th>
                                <th>Full Name</th>
                                <th>Contact Details</th>
                                <th>Position</th>
                                <th>Message</th>
                                <th>CV</th>
                                <th>Cover Letter</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($career) > 0)
                                @foreach($career as $key => $row)
                                    <tr class="bg-light">
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            {{ ucfirst($row->fname) }} {{ ucfirst($row->lname) }}<br>
                                            {{ $row->created_at->format('d M Y') }}<br>
                                            @if ($row->country)
                                                Country: {{ $row->country }}
                                            @endif
                                        </td>
                                        <td>{{ $row->email }} <br> {{ $row->number }}</td>
                                        <td>{{ $row->position }}</td>
                                        <td><textarea readonly>{!! $row->message !!}</textarea></td>
                                        <td>
                                            @if($row->cv)
                                                <a href="{{ asset('uploads/cv/' . $row->cv) }}" target="_blank">📝 View CV</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($row->cover)
                                                <a href="{{ asset('uploads/coverletter/' . $row->cover) }}" target="_blank">📝 View Cover</a>
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td class="text-left">
                                            <form action="{{ route('career.delete', $row->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this career entry?');">
                                                @method('DELETE')
                                                @csrf
                                                <button class="fa fa-trash form-control" style="color:red;"></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('libraries')
<script src="{{asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')}}"></script>

<!-- Datatables Tabletools addon -->
<script src="{{asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>

<!-- Datatables ColReorder addon -->
<script src="{{asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="{{asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript">
        

/********/
  $('document').ready(function(){
    $('#checkAll').on('click',function(e){
      if($(this).is(':checked', true)){
        $('.check_box').prop('checked', true);
      }else{
        $('.check_box').prop('checked', false);
      }
    });
    $('.deleteAll').on(function(){

    });
  });


  /************/
  $('#datatable3').dataTable({
    "aoColumnDefs": [{
      'bSortable': true,
      'aTargets': [-1]

    }],
    "oLanguage": {
      "oPaginate": {
        "sPrevious": "Previous",
        "sNext": "Next"
      }
    },
    "iDisplayLength": 10,
    "aLengthMenu": [
    [5, 10, 25, 50, -1],
    [5, 10, 25, 50, "All"]
    ],
    "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
    "oTableTools": {
      "sSwfPath": "{{asset('vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf')}}"
    }
  });

</script>

@endsection


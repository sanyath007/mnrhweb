@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-top: 15px;">
    <div class="row">
        <div class="col-md-12">
            
            <form action="{{ url('checkin') }}" method="GET" class="form-inline">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">ประจำเดือน :</label>
                    <input type="text" 
                            id="month" 
                            name="month" 
                            value="{{ $month }}" 
                            class="form-control" 
                            style="text-align: center;">
                </div>
                
                <button type="submit" class="btn btn-primary">ตกลง</button>
            </form><br>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>ชื่อ-สกุล</th>
                        @for($d = 1; $d <= 31; $d++)
                            <th>{{ $d }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    <?php $index = 0; ?>
                    @foreach($employees as $employee)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $employee->emp_fname. '  ' .$employee->emp_lname}}</td>
                        @for($d = 1; $d <= 31; $d++)
                            <?php $checkin = DB::connection('checkin')
                                                ->select('select * from checkin where (emp_id=:id) and checkin_date=:date', [
                                                    'id' => $employee->emp_id,
                                                    'date' => $month.'-'.$d
                                                ]);
                            ?>
                            <!-- <td>{{ ($checkin) ? $checkin[0]->timein_score : '' }}</td> -->
                            <td>{{ ($checkin) ? $checkin[0]->timein : '' }}</td>
                        @endfor
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!--/.container -->

<script>
    $(document).ready(function($) {
        var dateNow = new Date();

        $('#month').datetimepicker({
            useCurrent: true,
            format: 'YYYY-MM',
            defaultDate: moment(dateNow),
            viewMode: "months"
        }).on('dp.change', function(e) {
            $("#frm_sentout_search").submit();
        });
    });
</script>

@endsection
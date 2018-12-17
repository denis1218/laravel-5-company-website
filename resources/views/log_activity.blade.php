    @extends('master')

@section('style')
    <style>
        #table{
            table-layout: fixed;
        }

        #table td{
            word-wrap: break-word;
         }
    </style>


@endsection

@section('content')

    <div class="wrapper wrapper-content" style="margin-top: -35px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Log Activity</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12 pull-right col-xs-12">
                                <div class="input-group">
                            <span class="input-group-btn">
                                <form action="/log_activity/search" method="post">
                                <div class="input-group col-md-12 col-xs-12">
                                        <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary" ><i
                                                            class="fa fa-search"></i>&nbsp;{{trans('file.search')}}</button> </span>
                                                <input type="text" placeholder="search User name"
                                                       id="search" name="search"
                                                       class=" form-control">

                                </div>
                              </form>
                                </div>
                            </div>
                            <br/>
                            <div class="col-lg-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" cellpadding="10px;" id="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>User</th>
                                                <th>Event</th>
                                                <th>Audible type</th>
                                                <th>New value</th>
                                                <th>Old value</th>
                                                <th>Url</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($all as $audit)
                                            <tr>
                                                <td>{{ $audit->id }}</td>
                                                <td>{{ $audit->firstname }}</td>
                                                <td><span
                                                            @if($audit->event == 'created')
                                                            class="label label-info"
                                                            @elseif($audit->event == 'deleted')
                                                                    class="label label-danger"
                                                            @elseif($audit->event == 'updated')
                                                                    class="label label-warning"
                                                            @endif
                                                            style="font-size: 15px"><label>{{ $audit->event }}</label></span></td>
                                                <td>{{ $audit->auditable_type }}</td>
                                                <td>{{ $audit->newfu_values }}</td>
                                                <td>{{ $audit->old_values }}</td>
                                                <td>{{ $audit->url }}</td>
                                                <td>{{ $audit->created_at }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

    <script>

    </script>
@endsection
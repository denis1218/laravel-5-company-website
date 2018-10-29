@extends('master')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.medicine')}}</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="#">Config option 1</a>
                                </li>
                                <li>
                                    <a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <!-- form -->
                        <div class="row">
                            <div class="col-lg-5">
                                <form method="post" action="/medicine">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>{{trans('file.id')}}</label>
                                        <div><input type="text" name="id" class="form-control" placeholder="{{trans('file.id')}}"
                                                    disabled></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.medicine_name')}}</label>
                                        <div><input type="text" name="name" class="form-control"
                                                    placeholder="{{trans('file.medicine_name')}}"></div>
                                    </div>

                                    <div class="form-group">
                                        <label>{{trans('file.unit')}}</label>
                                        <div>
                                            <input type="number" name="unit" class="form-control"
                                                   placeholder="{{trans('file.medicine_unit')}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">{{trans('file.save')}}</button>
                                            <button class="btn btn-white" type="reset">{{trans('file.reset')}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>
                        <table class="table table-striped table-bordered table-hover" id="editable"
                               style="margin-left:30px;width:95%;">
                            <thead>
                            <tr>
                                <th>{{trans('file.id')}}</th>
                                <th>{{trans('file.name')}}</th>
                                <th>{{trans('file.unit')}}</th>
                                <th>{{trans('file.edit')}}</th>
                                <th>{{trans('file.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicine as $medice)
                                <tr class="gradeX">
                                    <td>{{$medice->id}}</td>
                                    <td>{{$medice->name}}</td>
                                    <td>{{$medice->unit}}</td>
                                    <td>
                                        <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                data-target="#e{{$medice->id}}">&nbsp;{{trans('file.edit')}}
                                        </button>
                                    </td>
                                    <td>
                                        <a class="btn btn-xs btn-danger fa fa-remove" href="/medicine2/{{$medice->id}}">&nbsp;{{trans('file.delete')}}
                                        </a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- edit model -->
    @foreach($medicine as $medice)
        <div class="modal inmodal" id="e{{$medice->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        {{-- <i class="fa fa-edit modal-icon text-primary"></i> --}}
                        <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/medicine/{{$medice->id}}" method="post">
                            {{method_field('patch')}}
                            <div class="row">
                                <label class="control-label">{{trans('file.id')}}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$medice->id}}" readonly>
                                </div>
                                <label class="control-label">{{trans('file.name')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="{{$medice->name}}">
                                </div>
                                <label class="control-label">{{trans('file.unit')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="unit" value="{{$medice->unit}}">
                                </div>

                            </div>
                            <br>
                            <br>
                            <button type="button" class="btn btn-white pull-right" data-dismiss="modal"
                                    style="margin-bottom: 10px;">{{trans('file.close')}}
                            </button>
                            <button type="submit" class="btn btn-primary pull-right"
                                    style="margin-bottom: 10px;margin-right: 20px;">{{trans('file.save')}}
                            </button>

                        </form>
                        <br>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <!-- end of model -->
    @endforeach


@endsection
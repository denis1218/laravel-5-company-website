@extends('master')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{trans('file.employee')}}</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="/employee/create" class="btn btn-primary" style="margin-left:30px"><i class="fa fa-user-plus">&nbsp;{{trans('file.add_emp')}}</i></a>
                            </div>
                        </div>


                        <div class="hr-line-dashed"></div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="editable"
                                   style="margin-left:30px;width:95%;">
                                <thead>
                                <tr>
                                    <th>{{trans('file.id')}}</th>
                                    <th>{{trans('file.first_name')}}</th>
                                    <th>{{trans('file.last_name')}}</th>
                                    <th>{{trans('file.gender')}}</th>
                                    <th>{{trans('file.age')}}</th>
                                    <th>{{trans('file.phone')}}</th>
                                    <th>{{trans('file.salary')}}</th>
                                    <th>{{trans('file.address')}}</th>
                                    <th>{{trans('file.position')}}</th>
                                    <th>{{trans('file.pay_salary')}}</th>
                                    <th>{{trans('file.edit')}}</th>
                                    <th>{{trans('file.delete')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if($employee != null)
                                @foreach($employee as $emp)
                                    <tr class="gradeX">
                                        <td>{{$emp->id}}</td>
                                        <td>{{$emp->firstname}}</td>
                                        <td>{{$emp->lastname}}</td>
                                        <td>{{$emp->gender}}</td>
                                        <td>{{$emp->age}}</td>
                                        <td>{{$emp->phone}}</td>
                                        <td>{{$emp->salary}}</td>
                                        <td>{{$emp->address}}</td>
                                        <td>{{$emp->position}}</td>
                                        <form action="/pay_salary">
                                            <input type="hidden" name="id" value="{{$emp->id}}">
                                        <td>
                                            <button type="submit" class="btn btn-xs btn-primary fa fa-dollar">&nbsp;{{trans('file.pay_salary')}}</button>
                                        </td>
                                        </form>
                                        <td>
                                            <button class="btn btn-xs btn-primary fa fa-edit" data-toggle="modal"
                                                    data-target="#e{{$emp->id}}">&nbsp;{{trans('file.edit')}}
                                            </button>
                                        </td>
                                        <td>
                                            <form action="/employee/{{$emp->id}}" method="post">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}
                                            <button class="btn btn-xs btn-danger fa fa-remove" type="submit" >&nbsp;{{trans('file.delete')}}
                                            </button>
                                            </form>
                                        </td>

                                    </tr>
                                @endforeach
                                @else
                                    <h3 class="text-center" style="color:red;">There Is No Employee Registered Yet</h3>
                                @endif
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- edit model -->
    @foreach($employee as $emp)
        <div class="modal inmodal" id="e{{$emp->id}}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated fadeIn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                         <i class="fa fa-edit modal-icon text-primary"></i>
                        <h4 class="modal-title">{{trans('file.edit_content')}}</h4>
                    </div>
                    <div class="modal-body">
                        <form action="/employee/{{$emp->id}}" method="post">
                            {{method_field('patch')}}
                            <div class="row">
                                <label class="control-label">{{trans('file.id')}}</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="{{$emp->id}}" readonly>
                                </div>
                                <label class="control-label">{{trans('file.first_name')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstname" value="{{$emp->firstname}}">
                                </div>
                                <label class="control-label">{{trans('file.last_name')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" value="{{$emp->lastname}}">
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-3"><label
                                                class="control-label">{{trans('file.gender')}}
                                            :</label></div>
                                    <div class="col-sm-4">
                                        <div class="i-checks"><label><input type="radio" value="male"
                                                                            name="gender"
                                                                            class="form-control"
                                                                            required>&nbsp;&nbsp;{{trans('file.male')}}
                                            </label></div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="i-checks"><label> <input type="radio" value="female"
                                                                             name="gender"
                                                                             class="form-control"
                                                                             required>&nbsp;&nbsp; {{trans('file.female')}}
                                            </label></div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <label class="control-label pull-left" >{{trans('file.age')}}:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="age" value="{{$emp->age}}">
                                </div>
                                <label class="control-label pull-left" >{{trans('file.phone')}}:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="phone" value="{{$emp->phone}}">
                                </div>
                                <label class="control-label">{{trans('file.salary')}}:</label>
                                <div class="form-group">
                                    <input type="number" class="form-control" name="salary" value="{{$emp->salary}}">
                                </div>
                                <label class="control-label">{{trans('file.address')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" value="{{$emp->address}}">
                                </div>
                                <label class="control-label">{{trans('file.position')}}:</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="position" value="{{$emp->position}}">
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
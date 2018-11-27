@extends('master')

@section('style')
    <link href="{{ asset('dashboard/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <style>


        .list-ul {
            list-style-type: none;
            margin: 10px;
            padding: 10px;
            overflow: hidden;
        }

        .list-ul li {
            float: left;
            margin-left: 15px;
        }
    </style>

@endsection

@section('content')

    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>{{trans('file.epinfo')}}&nbsp;<i class="fa fa-info"></i></h5>
            </div>
            <div class="ibox-content" id="divone">
                <div class="container">
                    <div class="row">
                        <a class="btn btn-info" href="/patient" type="reset"><i class="fa fa-arrow-left"></i>&nbsp;&nbsp;Back</a>
                        <form action="/patient/{{ $patient->id }}" method="post">
                            @method('patch')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>ID *</label>
                                    <input name="id_patient" value="{{ $patient->id_patient }}" type="text"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input name="name" type="text" value="{{ $patient->name }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Last Name *</label>
                                    <input name="lastname" type="text" value="{{ $patient->lastname }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">

                                    @if($patient->gender == 'male')
                                        <ul class="list-ul">
                                            <li><label>Gender * : </label></li>
                                            <li>
                                                <div class="i-checks"><label>Male: <input name="gender" type="radio"
                                                                                          value="male" checked
                                                                                          class="form-control required"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>Female :<input name="gender" type="radio"
                                                                                            value="female"
                                                                                            class="form-control required"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    @elseif( $patient->gender == 'female')
                                        <ul class="list-ul">
                                            <li><label>Gender * : </label></li>
                                            <li>
                                                <div class="i-checks"><label>Male : <input name="gender" type="radio"
                                                                                           value="male"
                                                                                           class="form-control required"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>Female : <input name="gender" type="radio"
                                                                                             value="female" checked
                                                                                             class="form-control required"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Phone *</label>
                                    <input name="phone" type="phone" value="{{ $patient->phone }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input name="address" type="text" value="{{ $patient->address }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Problem Health *</label>
                                    <input name="problem_health" type="text" value="{{ $patient->problem_health }}"
                                           class="form-control required">
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="width: 200px" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Save</button>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>job *</label>
                                    <input name="job" type="text" value="{{ $patient->job }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Education *</label>
                                    <input name="education" type="text" value="{{ $patient->education }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Visits *</label>
                                    <input name="status" value="{{ $patient->status }}" type="text"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Next Appointment *</label>
                                    <input name="next_appointment" type="date" value="{{ $patient->next_appointment }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    <label>Time *</label>
                                    <input name="time" type="number" value="{{ $patient->time }}"
                                           class="form-control required">
                                </div>
                                <div class="form-group">
                                    @if( $patient->meridiem == 'AM')
                                        <ul class="list-ul">
                                            <li><label>Meridiem *</label></li>
                                            <li>
                                                <div class="i-checks"><label>AM : <input name="meridiem" type="radio"
                                                                                         checked value="AM"
                                                                                         class="form-control required"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>PM :<input name="meridiem" type="radio"
                                                                                        value="PM"
                                                                                        class="form-control required"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    @elseif( $patient->meridiem == 'PM')
                                        <ul class="list-ul">
                                            <li><label>Meridiem *</label></li>
                                            <li>
                                                <div class="i-checks"><label>AM : <input name="meridiem" type="radio"
                                                                                         value="AM"
                                                                                         class="form-control required"></label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="i-checks"><label>PM : <input name="meridiem" type="radio"
                                                                                         checked value="PM"
                                                                                         class="form-control required"></label>
                                                </div>
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Doctor *</label>
                                    <select class="form-control" name="doctor_id">
                                        <option value="{{ $patient->doctor_id }}"
                                                selected>{{ $patient->doctor->first_name }}</option>
                                        @foreach($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->first_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section('script')



@endsection

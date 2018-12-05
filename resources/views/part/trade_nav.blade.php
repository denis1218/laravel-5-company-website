@section('style')
    <style>
        .buttonList li
        {
            display: inline-block;
            /* You can also add some margins here to make it look prettier */
            zoom: 1;
            *display: inline;
            margin-left:20px;
            /* this fix is needed for IE7- */
        }
    </style>
    @endsection
<div class="row" style="margin-left:2px;margin-right: 20px;">


    <ul class="buttonList">
        <li>
            <h1 class="title-button"><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px;"
                                        href="/item">&nbsp;&nbsp;<strong>Items</strong> &nbsp;<img src="{{ asset('img/listitem.png') }}" width="20px"/></a>
            </h1>
        </li>
        <li>
            <h1><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px;"
                   href="/trader"><strong>Suppliers</strong> &nbsp;<img src="{{ asset('img/supplier.png') }}" width="20px"/></a></h1>
        </li>
        <li>
            <h1><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; "
                   href="/common">&nbsp;&nbsp;<strong>Buying and Paying</strong> &nbsp;<img src="{{ asset('img/buyingitem.png') }}" width="20px"/></a></h1>
        </li>
        <li>
            <h1><a class="btn btn-primary hvr-grow-shadow" style="font-size: 13px; "
                   href="/loan"><strong>Paid Loan list</strong>&nbsp;<img src="{{ asset('img/icon_paid.png') }}" width="25px"/></a></h1>
        </li>
    </ul>

</div>
<br/>

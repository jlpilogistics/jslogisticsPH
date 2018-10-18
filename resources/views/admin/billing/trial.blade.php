@extends('admin.partials.assets')

        <!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
@section('content')
        <h1>Billing Invoice</h1>
        @foreach($data as $charge)
            @for ($x = 0; $x < count($charge['bi']); $x++)
        <p>
            {{$charge['bi'][$x] }}
        </p>
            @endfor
        @endforeach
        <h1>Statement of Account</h1>
        @foreach($soa as $charge)
                @for ($x = 0; $x < count($charge['soa']); $x++)
                        <p>
                                {{$charge['soa'][$x] }}
                        </p>
                @endfor
        @endforeach

        <h1>Packing List</h1>
        @foreach($pl as $charge)
            @for ($x = 0; $x < count($charge['pl']); $x++)
                <p>
                    {{$charge['pl'][$x] }}
                </p>
            @endfor
        @endforeach

        {{--<h1>Delivery Receipt</h1>--}}

        {{--<h1>Acknowledgement Receipt</h1>--}}


        {{--<h1>Duties and Taxes</h1>--}}
        {{--@foreach($dat as $charge)--}}
            {{--@for ($x = 0; $x < count($charge['dat']); $x++)--}}
                {{--<p>--}}
                    {{--{{$charge['dat'][$x] }}--}}
                {{--</p>--}}
            {{--@endfor--}}
        {{--@endforeach--}}

</html>
@stop

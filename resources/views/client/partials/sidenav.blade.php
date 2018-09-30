<style>
    li.list-group-item a:hover {
        background-color: transparent;
    }

    li.list-group-item.active a {
        color: #fff;
    }

    li.list-group-item.active a:hover {
        background-color: transparent;
    }

    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        background-color: #a8a8a8;
    }
</style>
<div class="sidebar" data-background-color="black " data-active-color="danger">
    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="index.html"> <img src="{{URL::asset('app/images/Jexsanlogo.png')}}" alt="" /> </a>
        </div>

        <ul class="nav nav-sidebar list-group">
            <li class="list-group-item">

                <a href="{{route('account',$clients->id)}}">
                    <i class="ft-user-check"></i>
                    <p> My Profile</p>
                </a>
            </li>
            <li class="list-group-item" >
                <a href="{{route('status', $data->client->id)}}">
                    <i class="ft-monitor"></i>
                    <p>Request Status</p>
                </a>
            </li>
            <li class="list-group-item">
                <a href="{{url('client-bill')}}">
                    <i class="ft-file-text"></i>
                    <p>Received Billing</p>
                </a>
            </li>
            <li class="list-group-item">
                <a href="/client-request/">
                    <i class="ft-edit-3"></i>
                    <p>Request Quotation</p>
                </a>
            </li>

        </ul>
    </div>
</div>


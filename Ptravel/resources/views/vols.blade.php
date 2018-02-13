@extends ('main')
@section('stylesheets')




    <link rel="stylesheet" href="{{ URL::asset('css/AdminSideBar.css') }}">

    <!-- Scrollbar Custom CSS -->

    <link rel="stylesheet" href="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css') }} ">



@endsection

@section('content')


    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Welcome, Hadda</p>


                <li>
                    <a href="#">Manage Ports</a>
                </li>
                <li>
                    <a href="#">Manage Flights</a>
                </li>

                <li>
                    <a href="#">Manage Hotels</a>
                </li>

                <li>
                    <a href="#">l3ibat li kaymanage</a>
                </li>
            </ul>



        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar navbar-default" style="top: 100px">
                <div class="container-fluid row">

                    <h3 class="col-md-10"><center>Manage Vols</center></h3>
                    <button class="btn btn-primary col-md-2">Add New Port</button>

                </div>
            </nav>



            <nav class="navbar navbar-default" style="top: 80px">
                <div class="container-fluid row" style="padding: 15px 45px">






                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>City</th>
                            <th><center>Action</center></th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($vols as $vol)
                            <td>{{$vol['heure_depart']}}</td>
                            <td>{{$vol['heure_arrivee']}}</td>
                            <td>{{$vol['heure_arrivee']}}</td>
                            <td>
                                <div class="row">

                                    <a href="/addRes/{{$vol['id']}}"><i class="fa fa-edit fa-2x col-md-4 offset-md-3 " style="color: #ff9000"></i></a>
                                    <i class="fa fa-trash fa-2x profile-name col-md-4 " aria-hidden="true" style="color: #f20000"></i>
                                </div>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </nav>




        </div>
    </div>












@endsection




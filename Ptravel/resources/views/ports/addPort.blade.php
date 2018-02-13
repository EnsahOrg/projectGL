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
                       
                         <h3 class="col-md-10"><center>Add new port</center></h3>
                         <button class="btn btn-primary col-md-2">All ports</button>
                       
                    </div>
                </nav>



                <nav class="navbar navbar-default" style="top: 80px">
                    <div class="container-fluid row" style="padding: 15px 45px">                   
                       
                       




                        <form  class="row" method="POST" action="{{route('addPort')}}">
                            {{ csrf_field() }}
                          <div class="form-group col-md-12">
                            <label for="PortName">Port Name</label>
                            <input type="text" class="form-control" id="PortName" name="nom" placeholder="Enter Port name">
                            <small id="emailHelp" class="form-text text-muted">Sir al hadda lah yn3al..</small>
                          </div>


                          
                          <div class="form-group col-md-12">
                            <label for="exampleTextarea">adress </label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="adress"></textarea>
                          </div>


                          <button type="submit" class="btn btn-primary offset-md-5">Submit</button>
                        </form>                       
                    </div>
                </nav>




            </div>
        </div>





      






@endsection


               

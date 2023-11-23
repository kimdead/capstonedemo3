@extends('layout')

@section('content')
    

    <link rel="stylesheet" href="{{asset('assets/admin.css')}}">
    
    <div class="side-menu">
        <div class="brand-name">
            <h1>PetMalu</h1>
        </div>
        <ul>
            <li><a href="admin.html">Dashboard</a></li>
            <li><a href="accounts.html">Users</a></li>
            <li><a href="prices and services.html">Prices and Services</a></li>
            <li><a href="#">Logout</a></li>
            
            
        </ul>
    </div>
    <div class="container">
       
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Users</h2>
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Pet Name</th>
                            <th>Total amount</th>
                            <th>Pending Request</th>
                        </tr>
                        <tr>
                            <td>John Doe</td>
                            <td>blacky</td>
                            <td>1420</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    
@endsection
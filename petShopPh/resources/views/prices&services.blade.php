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
        <li><a href="admin.html">Logout</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="content">
        <div class="content-2">
          <div class="recent-payments">
            <div class="title">
              <h2>prices and services</h2>
              <a href="#" class="btn">Add</a>
            </div>
            <table>
              <tr>
                <th>services</th>
                <th>Amount</th>
              </tr>
              <tr>
                <td>grooming</td>
                <td>320</td>
                <td><a href="#" class="btn">change</a></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>

    
    @endsection

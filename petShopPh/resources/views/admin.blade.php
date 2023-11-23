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
        <div class="cards">
          <div class="card">
            <div class="box">
              <h2>2194</h2>
              <h3>Users</h3>
            </div>
            <div class="icon-case">
              <img src="students.png" alt="" />
            </div>
          </div>
          <div class="card">
            <div class="box">
              <h2>35</h2>
              <h3>Apointments</h3>
            </div>
            <div class="icon-case">
              <img src="teachers.png" alt="" />
            </div>
          </div>
          <div class="card">
            <div class="box">
              <h2>350000</h2>
              <h3>Income</h3>
            </div>
            <div class="icon-case">
              <img src="income.png" alt="" />
            </div>
          </div>
        </div>
        <div class="content-2">
          <div class="recent-payments">
            <div class="title">
              <h2>Recent Apointments</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <tr>
                <th>Name</th>
                <th>Pet Name</th>
                <th>Amount</th>
                <th>Request</th>
              </tr>
              <tr>
                <td>John Doe</td>
                <td>blacky</td>
                <td>320</td>
                <td><a href="#" class="btn">View</a></td>
              </tr>
            </table>
          </div>
          <div class="new-students">
            <div class="title">
              <h2>New users</h2>
              <a href="#" class="btn">View All</a>
            </div>
            <table>
              <tr>
                <th>Profile</th>
                <th>Name</th>
                <th>option</th>
              </tr>
              <tr>
                <td><img src="#" alt="" /></td>
                <td>John Steve Doe</td>
                <td><img src="info.png" alt="" /></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>



@endsection
@extends('layouts.master')

@section('home_style')
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 450px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>

@endsection

@section('body_content')
    <div class="col-sm-2 sidenav">
        <h4>Navigation</h4>
        <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#section1">Home</a></li>
            <li><a href="#section2">My Home</a></li>
            <li><a href="#section3">My Profile</a></li>
            <li><a href="#section3">My Courses</a></li>
        </ul><br>
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search..">
            <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
        </div>
    </div>
    <div class="col-sm-8 text-left">
        <h1>Sample Code</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <hr>
        <h3>Test</h3>
        <p>Lorem ipsum...</p>
    </div>
@endsection


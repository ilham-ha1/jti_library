@extends('layout.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
                            </li> -->
                            <li class="nav-item">
                                <form class="search-form" action="#">
                                    <i class="icon-search"></i>
                                    <input type="search" class="form-control" placeholder="Search Here" title="Search here">
                                </form>
                            </li>

                        </ul>
                    </div>
                    <div class="card card-dashboard">
                        <div class="card-body text-center">
                            <h4 class="card-title">LIBRARY INFORMATION</h4>
                            <div class="container">
                                <div class="row row-dashboard">
                                    <div class="col">
                                        <div>
                                            <p class="dashboard-information">Total Students</p>
                                            <h3 class="total">5</h3>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div>
                                            <p class="dashboard-information">Total Books</p>
                                            <h3 class="total">6</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-dashboard">
                                    <div class="col">
                                        <div>
                                            <p class="dashboard-information">Total Transactions</p>
                                            <h3 class="total">1</h3>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @endsection
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
                            <h4 class="card-title">The List of Transaction</h4>
                            @if ($message = Session::get('success'))<div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Book</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Date Borrow</th>
                                        <th scope="col">Date Return</th>
                                        <th scope="col">Status</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transaction as $trc)
                                    <tr>
                                        <td>{{ $trc ->book_id }}</td>
                                        <td>{{ $trc ->number_book_borrow}}</td> {{-- kemungkinan error karena di book_borrow_transaction model krn yang lain di borrow_transaction --}}
                                        <td>{{ $trc ->date_borrow }}</td>
                                        <td>{{ $trc ->date_returndata }}</td>
                                        <td>{{ $trc ->status }}</td>
                                        <td>
                                            {{-- <form action="{{ route('student.destroy',['student'=>$mhs->id]) }}" method="POST">
                                                <a class="btn btn-info" href="{{ route('student.show',$mhs->id) }}">Show</a>
                                                <a class="btn btn-primary" href="{{ route('student.edit',$mhs->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form> --}} 
                                            {{-- template actionnya dibuat untuk mengganti status dan route nya masih perlu dirubah --}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $transaction->links()}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @endsection
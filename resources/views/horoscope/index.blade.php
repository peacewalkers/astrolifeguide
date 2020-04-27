@extends('layouts.dashboard', ['title' => __('Horoscope')])

@section('content')

    <div class="container-fluid mt--7 databox">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Ask Astrologer Requests</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="" class="btn btn-sm btn-primary">Add Horoscope</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Submitted By</th>
                                <th scope="col">View </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($horoscopes as $horoscope)
                            <tr>
                                <td>{{ $horoscope->name }}</td>
                                <td>
                                    <a href="mailto:admin@argon.com">{{$horoscope->phone}}</a>
                                </td>
                                <td>{{$horoscope->user->name}}</td>
                                <td><a href="/horoscope/{{$horoscope->id}}"><i class="fa fa-eye"></i></a></td>

                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">

                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

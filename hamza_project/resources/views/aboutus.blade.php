@extends('master')

@section('content')

    <style>
        .text-custom{
            color: #0062ff !important;
        }
    </style>

    @if ($errors->any())    {{--!{{ error message container }} --}}
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(session()->has('message'))  {{-- session message to show instant message container  --}}
    <div class="alert alert-{{session('type')}}">
        {{session('message')}}
    </div>
    @endif
    <div class="row align-items-center">
        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="https://via.placeholder.com/241x362/FFB6C1/000000" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-12">
                            <div class="mt-4 pt-2 text-right">
                                <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 col-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="https://via.placeholder.com/337x450/87CEFA/000000" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                <img src="https://via.placeholder.com/600x401/FF7F50/000000" class="img-fluid" alt="Image" />
                                <div class="img-overlay bg-dark"></div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end col-->

        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
            <div class="section-title ml-lg-5">
                <h5 class="text-custom font-weight-normal mb-3">About Us</h5>
                <h4 class="title mb-4">
                    Our store is to <br />
                    make your outdoors easier.
                </h4>
                <p class="text-muted mb-0">Here at <a class="navbar-brand" href="/"><span style="color: #2d995b;">piassa 101</span></a>, we're passionate about keeping you prepared, and that means minimizing your impact on the trails you love.

Lighten Your Load, Deepen Your Connection with Nature:
<li>
    Gear Up for Sustainability: Choose high-quality, durable gear made from recycled materials. It'll last longer and reduce waste! ♻️ 
</li>
<li>
    Leave No Trace: Pack out all trash and practice responsible camping to leave the wilderness pristine for future adventurers.
</li>
<li>
    Pack Light, Pack Smart: Every ounce counts! Invest in lightweight, multi-functional gear that meets your needs without weighing you down.
</li>

By packing light and embracing sustainable practices, you can explore the beauty of nature while ensuring its preservation for generations to come.
                </p>

                <div class="row">
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-play h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Responsive</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-file-download h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Free Download</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-user h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Support</a></h6>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-2">
                        <div class="media align-items-center rounded shadow p-3">
                            <i class="fa fa-image h4 mb-0 text-custom"></i>
                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Development</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--enr row-->
    <br>

@stop

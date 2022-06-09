@extends('admin.layouts.app')

@section('extraCSS')
    <link href="{{asset('vendor/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('vendor/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row gy-5 g-xl-10">
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="black" />
                                    <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cProduct}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Produk</span>
                            </div>
                        </div>
                        <a href="{{url('/back-product/list-product')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
                                    <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cCategory}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Kategori</span>
                            </div>
                        </div>
                        <a href="{{url('/back-product-category/list-product-category')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
                                    <path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cSlider}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Slider</span>
                            </div>
                        </div>
                        <a href="{{url('/back-banner-slider/list-banner-slider')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="black" />
                                    <path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="black" />
                                    <path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="black" />
                                    <path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="black" />
                                    <path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cFaq}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Faq</span>
                            </div>
                        </div>
                        <a href="{{url('/back-faq/list-faq')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <span class="bullet bullet-dot bg-success h-10px w-10px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="black" />
                                    <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cFeedback}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Feedback</span>
                            </div>
                        </div>
                        <a href="{{url('/back-feedback/list-feedback')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-bold fs-3x text-gray-800 lh-1 ls-n2">{{$cTestimoni}}</span>
                            <div class="m-0">
                                <span class="fw-bold fs-6 text-gray-400">Total Testimoni</span>
                            </div>
                        </div>
                        <a href="{{url('/back-testimonial/list-testimonial')}}" class="btn btn-sm btn-light-primary m-auto">
                            <span class="svg-icon svg-icon-3">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                    <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                </svg>
                            </span>
                            Lihat
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 g-xl-10">
            <div class="col-xl-4">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">5 Produk Terbaru</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Produk terbaru yang rilis</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="{{url('back-product/list-product')}}" class="btn btn-sm btn-light">Lihat Semua</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
                            @foreach ($getProduct as $itemProduct)  
                            <div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
                                <div class="d-flex flex-stack mb-3">
                                    <div class="me-3">
                                        <img src="{{asset('image/upload/product/'.$itemProduct->thumbnail)}}" class="w-50px ms-n1 me-1" alt="" />
                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder">{{$itemProduct->title}}</a>
                                    </div>
                                </div>
                                <div class="d-flex flex-stack">
                                    <span class="text-gray-400 fw-bolder">Ukuran:
                                    <a href="#" class="text-gray-800 text-hover-primary fw-bolder">{{$itemProduct->size}}</a></span>
                                    <span class="badge badge-light-success">New</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-8">
                <div class="card card-flush h-xl-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">List Review Produk (Terbaru) </span>
                        </h3>
                        <div class="card-toolbar">
                            <div class="d-flex flex-stack flex-wrap gap-4">
                                <div class="d-flex align-items-center fw-bolder">
                                    <div class="text-muted fs-7 me-2">Rating</div>
                                    <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
                                        <option></option>
                                        <option value="Show All" selected="selected">Show All</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <a href="{{url('back-review/list-review')}}" class="btn btn-light btn-sm">Lihat Semua</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="text-center min-w-100px">Produk Item</th>
                                    <th class="text-center pe-3 min-w-100px">Nama User</th>
                                    <th class="text-center pe-3 min-w-150px">Pesan</th>
                                    <th class="text-center pe-3 min-w-50px">Rating</th>
                                    <th class="text-center pe-3 min-w-100px">Status</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bolder text-gray-600">
                                @foreach ($getReview as $itemReview) 
                                <tr>
                                    <td class="text-center">{{$itemReview->title}}</td>
                                    <td class="text-center">{{$itemReview->name}}</td>
                                    <td class="text-center">{{$itemReview->feedback}}</td>
                                    <td class="text-center">{{$itemReview->rating}}</td>
                                    <td class="text-center">
                                        <div class="badge @if ($itemReview->status == 'agree') badge-light-success @elseif ($itemReview->status == 'pending') badge-light-warning @else badge-light-danger @endif ">{{$itemReview->status}}</div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-5 g-xl-10 mt-3">
            <div class="col-xxl-12 mb-5 mb-xl-12">
                <div class="card card-flush h-xl-100">
                    <div class="card-header py-7">
                        <div class="m-0">
                            <div class="d-flex align-items-center mb-2">
                                <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                            </div>
                            <span class="fs-6 fw-bold text-gray-400">Kunjungan Website</span>
                        </div>
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-light-primary">Kunjungi Website</a>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                        <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="{{asset('vendor/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
<script src="{{asset('vendor/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script src="{{asset('vendor/js/widgets.bundle.js')}}"></script>
<script src="{{asset('vendor/js/custom/widgets.js')}}"></script>
<script src="{{asset('vendor/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/users-search.js')}}"></script>

<script src="{{asset('vendor/js/custom/documentation/documentation.js')}}"></script>
<script src="{{asset('vendor/js/custom/documentation/search.js')}}"></script>
@endsection
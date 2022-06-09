@extends('admin.layouts.app')

@section('extraCSS')
    <link href="{{asset('vendor/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dokumentasi API</h1>
        </div>
    </div>
</div>
@endsection

@section('content')
<div id="kt_content_container" class="container-xxl">
    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <h2 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">List Dokumentasi API</h2>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="text-center p-2">No</th>
                        <th class="text-center p-2">Keterangan</th>
                        <th class="text-center p-2">Method</th>
                        <th class="text-center p-2">Endpoin</th>
                        <th class="text-center p-2">Link</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">1.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Produk</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/product/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/product/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">2.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Detail Data Produk</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/product/{id}</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/product/{id}')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">3.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Testimoni</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/testimoni/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/testimoni/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">4.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Faq</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/faq/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/faq/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">5.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Banner Slider</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/banner/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/banner/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">6.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Feedback</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/feedback/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/feedback/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">7.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengambil Semua Data Produk Kategori</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">GET</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/product-category/</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/product-category/')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">8.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengirim Data Feedback</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">POST</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/feedback/store</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/feedback/store')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">8.</span>
                        </td>
                        <td class="text-left">
                            <span class="fw-bolder">Mengirim Data Review</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder text-center p-2">POST</span>
                        </td>
                        <td class="text-center">
                            <span class="fw-bolder">api/review/store</span>
                        </td>
                        <td class="text-center">
                            <a href="{{url('/api/review/store')}}" target="_blank" class="btn btn-sm btn-light-primary m-auto">
                                <span class="svg-icon svg-icon-3">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="10" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="17" y="10" width="4" height="4" rx="2" fill="black"/>
                                        <rect x="3" y="10" width="4" height="4" rx="2" fill="black"/>
                                    </svg>
                                </span>
                                Lihat
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="{{asset('vendor/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script src="{{asset('vendor/js/custom/apps/ecommerce/catalog/products.js')}}"></script>
<script src="{{asset('vendor/js/widgets.bundle.js')}}"></script>
<script src="{{asset('vendor/js/custom/widgets.js')}}"></script>
<script src="{{asset('vendor/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/users-search.js')}}"></script>
@endsection
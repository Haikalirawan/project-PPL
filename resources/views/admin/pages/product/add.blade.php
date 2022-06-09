@extends('admin.layouts.app')

@section('extraCSS')
    <link href="{{asset('vendor/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('toolbar')
<div class="toolbar" id="kt_toolbar">
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <h1 class="d-flex text-dark fw-bolder fs-5 align-items-center my-1"><span class="text-muted fw-normal">Home - Master Data - Product Category - </span>&nbsp;Tambah Product</h1>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="{{url('/back-product/list-product')}}" class="btn btn-sm btn-primary">Lihat Data</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card mb-5 mb-xl-10">
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">Tambah Data Produk</h3>
                </div>
            </div>
            <div id="kt_account_settings_profile_details" class="collapse show">
                <form id="kt_account_profile_details_form" class="form" method="POST" action="{{url('/back-product/store-product')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body border-top p-9">
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label fw-bold fs-6">Thumbnail Product</label>
                            <div class="col-lg-8">
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{asset('image/upload/product/default.png')}})"></div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="bi bi-pencil-fill fs-7"></i>
                                        <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                    </label>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                        <i class="bi bi-x fs-2"></i>
                                    </span>
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Nama Produk</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="title" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="Nama Produk" value="{{old('title')}}" />
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">File 3D</label>
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="glb_file" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('glb_file') is-invalid @enderror" placeholder="File 3D" />
                                @error('glb_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">File Webp</label>
                            <div class="col-lg-8 fv-row">
                                <input type="file" name="webp_file" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('webp_file') is-invalid @enderror" placeholder="File Webp" />
                                @error('webp_file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Harga</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="price" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('price') is-invalid @enderror" value="{{old('price')}}" />
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Terjual</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="sold" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('sold') is-invalid @enderror" placeholder="Terjual" value="{{old('sold')}}" />
                                @error('sold')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Ukuran</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="size" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('size') is-invalid @enderror" placeholder="Ukuran" value="{{old('size')}}" />
                                @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Kategori Produk</label>
                            <div class="col-lg-8 fv-row">
                                <select name="category" aria-label="Select a Timezone" data-control="select2" class="form-select form-select-solid form-select-lg">
                                    @foreach ($getCategory as $item)
                                    <option value="{{$item->id}}">{{$item->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Deskripsi</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid @error('description') is-invalid @enderror" placeholder="Lorem ipsum dolor" value="{{old('description')}}" />
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Lengan</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="sleeve" class="form-control form-control-lg form-control-solid @error('sleeve') is-invalid @enderror" placeholder="Lengan Panjang - Lengan Pendek" value="{{old('sleeve')}}" />
                                @error('sleeve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Link Tokped</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="link_tokped" class="form-control form-control-lg form-control-solid @error('link_tokped') is-invalid @enderror" placeholder="Link Tokped" value="{{old('link_tokped')}}"/>
                                @error('sleeve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-6">
                            <label class="col-lg-4 col-form-label required fw-bold fs-6">Link Shopee</label>
                            <div class="col-lg-8 fv-row">
                                <input type="text" name="link_shopee" class="form-control form-control-lg form-control-solid @error('link_shopee') is-invalid @enderror" placeholder="Link Shopee" value="{{old('link_shopee')}}"/>
                                @error('sleeve')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>&nbsp; &nbsp; &nbsp;{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extraJS')
<script src="{{asset('vendor/plugins/custom/datatables/datatables.bundle.js')}}"></script>

<script src="{{asset('vendor/js/custom/apps/projects/settings/settings.js')}}"></script>
<script src="{{asset('vendor/js/widgets.bundle.js')}}"></script>
<script src="{{asset('vendor/js/custom/widgets.js')}}"></script>
<script src="{{asset('vendor/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/create-app.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/users-search.js')}}"></script>
<script src="{{asset('vendor/js/custom/utilities/modals/new-target.js')}}"></script>
@endsection
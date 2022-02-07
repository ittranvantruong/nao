@extends('public.layout.master')
@section('title', 'Thêm địa chỉ khác hàng')
@push('css')
    <link rel="stylesheet" href="{{ asset('public/css/customer.css') }}">
@endpush
@section('content')
<header id="header-page">
    <div class="container cart-content">
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <a class="nav-page-text" href="{{route('detailCustomer',$customer->id)}}">
                <i class="fas fa-chevron-left"></i>
                Thêm địa chỉ cho 
                @if ($customer->name == null)
                    {{$customer->code_customer}}
                @else
                    {{$customer->name}}
                @endif
            </a>
        </nav>
    </div>
</header>

<div id="main">
    <div class="container">
        <form action="{{route('detailCustomer',$customer->id)}}/themdiachi" method="POST" class="form-add-address-customer">
            <div class="form-group">
                <label for="province">Tỉnh thành</label>
                <select type="text" name="sel_province" class="form-control" id="province">
                    <option>Cấp tỉnh</option>
                    @foreach ($province as $value)
                    <option value="{{ $value->matinhthanh }}">
                        {{ $value->tentinhthanh }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="district">Quận / Huyện</label>
                <select type="text" name="sel_district" class="form-control" id="district">
                    <option value="">Cấp huyện</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ward">Phường / Xã</label>
                <select type="text" name="sel_ward" class="form-control" id="ward">
                    <option value="">Cấp xã</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address-detail">Địa chỉ</label>
                <input type="text" class="form-control" id="address-detail" placeholder="Địa chỉ..."
                    name="address">
            </div>
            <div class="form-check form-group">
                <input type="checkbox" class="form-check-input" id="check-default">
                <label class="form-check-label" for="check-default">Đặt làm địa chỉ mặc định</label>
              </div>
            <div class="form-group text-center">
                <button type="submit" class="btn-submit background-primary">Lưu</button>
            </div>
        @csrf
        </form>
    </div>
</div>
<script src="{{ asset('public/js/shipping.js') }}"></script>
@endsection

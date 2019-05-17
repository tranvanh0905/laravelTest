@extends('layouts.master')
@section('title','Sản phẩm')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <form method="POST" action="saveProduct" ecntype="multipart/form-data">
                <label>Tên danh mục:</label>
                <br>
                <input type="text" name="name">
                <br>
                <label>Ảnh</label>
                <input type="file" name="image">
                <br>
                <br>
                <label >Danh mục</label>
                <select name="cate_id" style="width:150px;">
                    <option value=""></option>
                    @foreach($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                    @endforeach
                </select>
                <br>
                <label>Giá tiền</label>
                <input type="text" name="price">
                <br>
                <label>Kích cỡ:</label>
                <input type="text" name="size">
                <br>
                <label>Màu sắc:</label>
                <input type="text" name="color">
                <br>
                <label >Giới thiệu ngắn</label>
                <textarea name="short_desc" cols="30" rows="10"></textarea>
                <br>
                <label>Chi tiết sản phẩm</label>
                <textarea name="detail" cols="30" rows="10"></textarea>
                <br>
                {{ csrf_field() }}
                <button type="submit" style="padding:5px;background:tomato;color:#000;">Thêm sản phẩm</button>
            </form>
        </div>
    </div>
@stop
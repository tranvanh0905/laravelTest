@extends('layouts.master')
<style>
label{
    font-size:16px!important;
    font-weight: bold;
}
input{
    padding:5px!important;
    margin:5px!important;
    border:1px solid #000;
}
textarea{
    border:1px solid gray!important;
    padding:5px!important;
    width:250px!important;
    height:50px!important;
    vertical-align: top;
    margin:5px!important;
}
</style>
@section('title','Sản phẩm')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <form method="POST" action="saveProduct" enctype="multipart/form-data">
                <label>Sản phẩm:</label>
                <input type="text" name="name">
                <br>
                <label>Ảnh sản phẩm: </label>
                <input type="file" name="image">
                <br>
                <br>
                <label >Sản phẩm thuộc loại: </label>
                <select name="cate_id" style="width:150px;">
                    <option value=""></option>
                    @foreach($data as $item)
                    <option value="{{ $item->id }}">{{ $item->name}}</option>
                    @endforeach
                </select>
                <br>
                <label>Giá tiền sản phẩm: </label>
                <input type="text" name="price">
                <br>
                <label>Kích cỡ sản phẩm:</label>
                <input type="text" name="size">
                <br>
                <label>Màu sắc sản phẩm:</label>
                <input type="text" name="color">
                <br>
                <label >Giới thiệu ngắn về sản phẩm:</label>
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
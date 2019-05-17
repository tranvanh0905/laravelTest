@extends('layouts.master')
@section('title','Danh mục')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <form method="POST" action="saveCategories">
                <label>Tên danh mục:</label>
                <br>
                <input type="text" name="name">
                <br>
                <br>
                {{ csrf_field() }}
                <button type="submit" style="padding:5px;background:tomato;color:#000;">Thêm danh mục</button>
            </form>
        </div>
    </div>
@stop
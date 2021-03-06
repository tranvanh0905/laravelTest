@extends('layouts.master')
@section('title','Người dùng')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">Người dùng</h3>
                        <div class="table-data__tool">
                            <div class="table-data__tool-left">
                                <div class="rs-select2--light rs-select2--md">
                                    <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="#"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>Thêm người dùng</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>Tên danh mục</th>
                                                <th>Ngày khởi tạo</th>
                                                <th>Ngày cập nhật</th>
                                                <th>Người tạo</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <form method="POST" action="#">
                                            <tr class="tr-shadow">
                                                <td class="desc"></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <span class="status--process"></span>
                                                </td>
                                                
                                                <td>
                                                    <div class="table-data-feature">
                                                
                                                        <a href="#">
                                                        <button class="item" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <a href="#" ><button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop

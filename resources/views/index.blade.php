@extends('layouts.master')

@section('title','個人首頁')

@section('content')
@include('partials.nav')
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-8 text-left article">

            <p class=" word">最新消息</p>
            <hr>
            <p class="col-sm-3 title">9/15</p>
            <p class="col-sm-3 time">7:15</p>
            <p class="col-sm-6 word" onclick="alert('aaa')">XXX顧客給你的評價 4.0</p>
            <hr>
            <p class="col-sm-3 title">9/15</p>
            <p class="col-sm-3 time">7:15</p>
            <p class="col-sm-6 word" onclick="alert('aaa')">提醒:中原大學->中壢火車站乘車</p>
            <hr>
            <p class="col-sm-3 title">9/15</p>
            <p class="col-sm-3 time">7:15</p>
            <p class="col-sm-6 word" onclick="alert('aaa')">客服回覆通知</p>
            <hr>
            <p class="col-sm-3 title">9/15</p>
            <p class="col-sm-3 time">7:15</p>
            <p class="col-sm-6 word" onclick="alert('aaa')">提醒:XXX顧客願意與你共乘</p>
        </div>
        <!-- 個人基本資料 -->
        <div class="col-sm-4 sidenav">
            <div class>
                <p>
                    <a href="#">
                        <img src="{{ asset('images/north.jpg') }}" width="222px" height="218px" />
                    </a>    
                </p>
            </div>
            <div class>
                <p class="name" >姓名:North</p>
                <p class="number">學號:103XXXX</p>
                <p class="card">是否有駕照:有</p>
                <p class="scord">評價:<p>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@stop
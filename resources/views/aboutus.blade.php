@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
   <div class="breadcrumb_background">
      <div class="title_full">
         <div class="container a-center">
            <p class="title_page">Giới thiệu</p>
         </div>
      </div>
      <section class="bread-crumb">
         <span class="crumb-border"></span>
         <div class="container">
            <div class="rows">
               <div class="col-xs-12 a-left">
                  <ul class="breadcrumb" >
                     <li class="home">
                        <a  href="{{route('home')}}" ><span >Trang chủ</span></a>						
                        <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                     </li>
                     <li><strong ><span>Giới thiệu</span></strong></li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
   </div>
   <section class="page">
      <div class="container">
         <div class="pg_page padding-top-15">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="page-title category-title">
                     <h1 class="title-head hidden"><a href="#">Giới thiệu</a></h1>
                  </div>
                  <div class="content-page rte">
                     {!!$pageContent->content!!}
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
@endsection
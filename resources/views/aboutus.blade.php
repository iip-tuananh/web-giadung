@extends('layouts.main.master')
@section('title')
Giới thiệu về {{$setting->company}}
@endsection
@section('description')
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/pagestyle.scss.css')}}">

@endsection
@section('js')
@endsection
@section('content')
<section class="bread-crumb">
   <span class="crumb-border"></span>
   <div class="container">
      <div class="row">
         <div class="col-xs-12 a-left">
            <ul class="breadcrumb">
               <li class="home">
                  <a href="{{route('home')}}" ><span title="Trang chủ">Trang chủ</span></a>						
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li><strong ><span>Liên hệ</span></strong></li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="section_category_index clearfix margin-bottom-20">
   <div class="container">
     @include('menuheader')
   </div>
</section>
<section class="margin-bottom-20">
   <div class="wrap_">
      <div class="section_maps">
         <div class="container">
            <div class="template-contact clearfix">
               <div class="col-lg-12 col-md-12 col-xs-12 contact">
                  <div class="row">
                     <form method="post" action="{{route('postcontact')}}" id="contact" accept-charset="UTF-8">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="t_contact">
                              <h1>{{$setting->company}}</h1>
                              <ul class="margin-bottom-15">
                                 @if($setting->address1 != '')
                                 <li>
                                    <span class="block_fonticon"><i class="fa fa-map-marker"></i></span>
                                    <span class="title_li">
                                    Địa chỉ 1: {{$setting->address1}}
                                    </span>
                                 </li>
                                 <br>
                                 
                                 @endif
                                 @if($setting->address2 != "")
                                 <li>
                                    <span class="block_fonticon"><i class="fa fa-map-marker"></i></span>
                                    <span class="title_li">
                                    Địa chỉ 2: {{$setting->address2}}
                                    </span>
                                 </li>
                                 <br>
                                 @endif
                                 @if($setting->phone1 != "")
                                 <li>
                                    <span class="block_fonticon"><i class="fa fa-mobile"></i></span>
                                    <span class="title_li">
                                    Điện thoại  1: <a href="tel:{{$setting->phone1}}" title="Điện thoại">{{$setting->phone1}}</a>
                                    </span>
                                 </li>
                                 <br>
                                 @endif
                                 @if($setting->phone2 != "")
                                 <li>
                                    <span class="block_fonticon"><i class="fa fa-mobile"></i></span>
                                    <span class="title_li">
                                    Điện thoại  2: <a href="tel:{{$setting->phone2}}" title="Điện thoại">{{$setting->phone2}}</a>
                                    </span>
                                 </li>
                                 @endif
                                 @if($setting->email != '')
                                 <li>
                                    <span class="block_fonticon"><i class="fa fa-envelope"></i></span>
                                    <span class="title_li">
                                    Email: <a href="mailto:{{$setting->email}}" title="Email">{{$setting->email}}</a>
                                    </span>
                                 </li>
                                 @endif
                              </ul>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <h2>Liên hệ với chúng tôi</h2>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <input type="text" placeholder="Họ và tên" class="input-control" required value="" name="name">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <input type="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email2" class="input-control" value="" name="email">
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <textarea name="mess" placeholder="Nội dung" required class="input-control" cols="5" rows="4"></textarea>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-15">
                                 <button type="submit" class="button_custome_35">Gửi liên hệ của bạn</button> 
                              </div>
                           </div>
                        </div>
                     </form>
                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="google-map margin-bottom-30">
                           <div class="maps_iframe">
                         {!!$setting->iframe_map!!}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
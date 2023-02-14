@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
	<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<p class="title_page">Liên hệ</p>
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
					<li><strong ><span>Liên hệ</span></strong></li>
				</ul>
				</div>
			</div>
		</div>
	</section>
	</div>
	<div class="page_contact ">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
				<div class="single-contact a-center">
				<div class="contact-icon">
					<i class="fas fa-paper-plane"></i>
				</div>
				<div class="title-contact">
					Địa chỉ
				</div>
				<span>
					{{$setting->address1}}
				</span>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
				<div class="single-contact a-center">
				<div class="contact-icon">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="title-contact">
					Email
				</div>
				<a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
				<div class="single-contact a-center">
				<div class="contact-icon">
					<i class="fa fa-phone"></i>
				</div>
				<div class="title-contact">
					Hotline
				</div>
				<a class="fone" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12">
				<div class="single-contact a-center">
				<div class="contact-icon">
					<i class="far fa-clock"></i>
				</div>
				<div class="title-contact">
					Thời gian làm việc
				</div>
				<span>8h00: 22h00 ( kể cả T7,CN)</span>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
				<div class="box-maps">
				<div class="iFrameMap">
					<div id="contact_map" class="map">
						{!!$setting->iframe_map!!}
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="left_contact">
							<h1 class="title-head-contact a-center">Gửi thông tin cho chúng tôi!</h1>
							<p class="sum_title">
							Hãy liên hệ ngay với chúng tôi để nhận được thông tin tư vấn khuyến mãi và ưu đãi mới nhất
							</p>
							<div id="pagelogin">
							<form accept-charset="utf-8" action="{{route('postcontact')}}" id="contact" method="post">
								@csrf
								<div class="form-signup clearfix">
									<div class="row group_contact">
										<fieldset class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input placeholder="Họ và tên*" type="text" class="form-control  form-control-lg" required value="" name="name">
										</fieldset>
										<fieldset class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">						
										<input type="number" placeholder="Số điện thoại*" name="phone"  class="form-control form-control-lg" required>
										</fieldset>
										<fieldset class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<input placeholder="Email*" type="email" pattern="" required id="email1" class="form-control form-control-lg" value="" name="email">
										</fieldset>
										<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<textarea placeholder="Nội dung*" name="mess" id="comment" class="form-control content-area form-control-lg" rows="5" Required></textarea>
										</fieldset>
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<button type="submit" class="btn btn-primary btn-lienhe">Gửi thông tin</button>
										</div>
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection
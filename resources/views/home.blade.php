<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-dns-prefetch-control" content="on"/>
	<meta name="csrf-token" content="{{ csrf_token() }}" /> 
	<title>{{ trans('home.title')}}</title>	
    <link rel="stylesheet" type="text/css" charset="utf-8" href="/css/home/com.css" />
	<link rel="stylesheet" type="text/css" charset="utf-8" href="/css/home/home.css" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<style>
		/* Style The Dropdown Button */
		.dropbtn {
		/* background-color: #1d1f20; */
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
		cursor: pointer;
		}

		/* The container <div> - needed to position the dropdown content */
		.dropdown {
		position: relative;
		display: inline-block;
		}

		/* Dropdown Content (Hidden by Default) */
		.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 100px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 900;
		}

		/* Links inside the dropdown */
		.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
		text-align: left;
		}

		/* Change color of dropdown links on hover */
		.dropdown-content a:hover {background-color: #f1f1f1}

		/* Show the dropdown menu on hover */
		.dropdown:hover .dropdown-content {
		display: block;
		}

		/* Change the background color of the dropdown button when the dropdown content is shown */
		.dropdown:hover .dropbtn {
			/* background-color: #3e8e41; */
		}
	</style>
	
</head>
<body class="pr">
    <div class="header" id="J_header">
		<div class="row nav" style="width:100% !important;margin: 0 200px !important"> 
			<div class="col-sm-3"><a href="/" class="logo fl" style="margin-left: -103px;"></a> </div>
			
			<div class="col-sm-4 container-fluid bg-light " style="margin-top: 16px">
				<div class="row align-items-center justify-content-center">
					<form id="search_form" action="/search" method="post">
						{{ csrf_field() }}
						<div class="col-sm-3 pt-3">
							<div class="form-group ">
								<select id="inputCountry" name="country" class="form-control">
									<option selected>{{ trans('home.Country') }}</option>
									@foreach($countries as $country)
									<option>{{$country}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="col-sm-3 pt-3">
							<div class="form-group">
								<select id="inputGender" name="gender" class="form-control">
									<option selected>{{ trans('home.Gender') }}</option>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 pt-3">
							<div class="form-group">
								<select id="inputAge" name="age" class="form-control">
									<option selected>{{ trans('home.Age') }}</option>
									@foreach($ages as $age)
									<option>{{ $age }}</option>
									@endforeach
								</select>
							</div>
						</div>								
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-block" id="search_btn">{{ trans('home.Search') }}</button>
						</div>
					</form>
				</div>
			</div>

			<div class="col-sm-4 fr clearfix pr"> 
				<!-- <div class="search fl">
					<form action="#" onsubmit="return common.search();"> 
						<input type="search" name="search" class="secrch_key" placeholder="请输入用户名，用户ID或标题"> 
						<input type="submit" class="submit">
					</form> 
				</div> 				 -->
				
				<div class="dropdown  fl  pr" style="margin-top: 24px;    margin-left: 34px;    color: #fff;">
					@php $locale = session()->get('locale'); @endphp
					@switch($locale)
                                @case('kp')								
                                <img src="{{asset('/images/flags/kp.png')}}" width="15px" height="10px"> <span class="dropbtn">조선어<i class="fa fa-caret-down"></i></span>
                                @break
                                @case('en')
                                <img src="{{asset('/images/flags/gb.png')}}" width="15px" height="10x"> <span class="dropbtn">english<i class="fa fa-caret-down"></i></span>
                                @break
                                @case('ja')
                                <img src="{{asset('/images/flags/jp.png')}}" width="15px" height="10x"> <span class="dropbtn">日本語<i class="fa fa-caret-down"></i></span>
                                @break
                                @default
                                <img src="{{asset('/images/flags/cn.png')}}" width="15px" height="10x"> <span class="dropbtn">中国语<i class="fa fa-caret-down"></i></span>
                    @endswitch
					<div class="dropdown-content">
						<a href="/lang/en">English</a>
						<a href="/lang/zh-CN">中国语</a>
						<a href="/lang/ja">日本語</a>
					</div>
				</div>
				<div class="download fl tr pr"> 
					<span class="nav_btn">{{ trans('home.download')}}</span> 
					<div class="download_box pa nav_btn_load"> 
						<div class="download_Edition fl"> 
							<ul> 
								<li class="down_ed down_ios fl tc"> 
									<a href="javascript:common.downLoadByType(0);" title="Download a live IOS version" style="background: none" class="download_apple">
										IOS
									</a> 
								</li> 
								<li class="down_ed down_and fr tc"> 
									<a href="javascript:common.downLoadByType(1);" title="Download a live Android version" class="download_android">
										Android
									</a> 
								</li>
								<li class="down_ed down_pc fl tc"> 
									<a href="javascript:common.downLoadByType(2);" title="Download a live PC assistant">
										PC
									</a> 
								</li>  
							</ul> 
						</div>  
					</div> 
				</div>  
			
				<div class="login fl db"> 
					<span class="sign_in tc_btn J_layerlogin">
						@if(auth()->check())
						<a href="/auth/logout">{{ trans('home.logout')}}</a>
						@else
						<a href="/auth/login"> {{ trans('home.login')}} </a>
						@endif
					</span>
					 | 
					<span class="sign_up tc_btn J_layerreg">
						@if(auth()->check())
						<a href="https://pay.yizhibo.com/inpour/api/ready_inpour_background?producttype"> {{ trans('home.recharge')}} </a>
						@else
						<a href="/auth/register"> {{ trans('home.register')}} </a>
						@endif
					
					</span> 
				</div> 
				<div class="logincg fr pr dn" id="J_logincg"> </div> 
			</div> 
		</div>

	</div>
	<div class="row">
		<div class="col-sm-1"> 
			<div style="    text-align: center;    margin-top: 20px;">
				{{ AdvMng::getHTML('shoes', true) }}
			</div>
		</div>
		<div class="col-sm-10 xu_main" id="xu_main">
			<div class="row xu_mainfr">
				<div class="col-sm-9 xu_main_left main_width1 fl" style="padding-right:0px;">
					<div class="row xu_video_wall" style="margin:0px;">
						<ul>
							@if($publishers)
								@foreach($publishers as $index => $publisher)
										@if($index == 0)
										<li class="video_box xu_big fl pr">
											<img src="/upload/{{ $publisher->avartar1 }}" alt="{{ trans('home.Avatar') }}"> 
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<a href="/channel?id={{ $publisher->channel->first()->id }}" class="pa" target="_live" ></a>
											<div class="xu_mark pa">
												<div class="xu_username clearfix">
													<span class="xu_name fl">
														<span class="txt-cut fl aa">{{ $publisher->name }}</span>
														<span class="xu_vip fr"></span>
													</span>		
												</div>
												<div class="xu_int">
													<span class="xu_num fr">1.5万人</span>
													<span class="xu_title fl txt-cut">好久不见，甚是想念。直播进行中，还不快来？</span>
												</div>
											</div>
										</li>
										@else
										<li class="video_box fl pr">
											<img src="/upload/{{ $publisher->avartar1 }}" alt="陈自由🎤的头像">
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<div class="video_hover pa dn">
												<a href="/channel?id={{ $publisher->channel->first()->id }}" target="_live" title="{{ $publisher->name }}. Live room">
													<div class="video_head"><img src="/upload/{{ $publisher->avartar2 }}" alt="{{ trans('home.Avatar') }}"></div>
													<div class="xu_vip20 xuvip pa"></div>
													<div class="xu_user txt-cut tc">陈自由🎤</div>
													<div class="xu_address tc">
														<span>成都市</span><span class="num">|</span>
														<span>3106人</span>
													</div>
													<div class="xu_topic txt-cut tc">唱歌给你听</div>
												</a>
											</div>
										</li>
										@endif
									
								@endforeach
							@endif
						</ul>
					</div>				
				</div>
				<div class="col-sm-3 xu_main_right fr" style="padding-left:0px;">
					<div class="hottest">
						<span class="hottest_icon pr fr">
							<div class="explain pa">
								{{ trans('home.The current hot list is updated every 5 minutes, and the list is sorted ') }}
							</div>	
						</span>
						<font style="vertical-align: inherit;">
							<font style="vertical-align: inherit;">{{ trans('home.Hottest currently') }}</font>
						</font>
					</div>
					<ul class="hottest_list" id="J_arrive_rank_10" style="background: white">  
						@if($hot_publishers)
							@foreach($hot_publishers as $index => $hot_publisher)
								<li class="list_li1"> 
									<div class="list_medal meda{{$index+1}} fl "></div>
									<div class="list_dl fl"> 
										<div class="img fl pr">
											<a class="goto_room" href="/channel?id={{ $hot_publisher->channel->first()->id }}" target="_live" title="{{ $hot_publisher->name }}. Live room">
												<img src="/upload/{{ $hot_publisher->avartar2 }}" alt="">
												<span class="xu_vip20 pa"></span>
											</a> 
										</div>
										<div class="information fl">
											<p class="p1"> 
												<span class="surface fr">
													<span class="sur_face1 surfa fl"></span>
													<span class="sur_face2 surfa fl"></span>
													<span class="sur_face3 surfa fl"></span>
												</span>
												<a class="goto_room txt-cut" href="/channel?id={{ $hot_publisher->channel->first()->id }}" target="_live" title="{{ $hot_publisher->name }}. Live room"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $hot_publisher->name }}</font></font></a>
											</p> 
											<p class="p2">
												<span class="fire fl"></span>
												<font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $hot_publisher->rating }}</font></font>
											</p>
										</div>
									</div>								
								</li>
							@endforeach
						@endif
					</ul>
				</div>
			</div>
			
			<div class="row xu_hot ">
				<div class="col-sm-12 xu_hot_top"> {{ trans('home.Popular') }}</div>
				<div class="col-sm-12 hot_list clearfix">				
					<ul>
						@if($channels)
						@foreach($channels as $index => $channel)
							@if($channel->category_id =='1')
								@if($channel->publisher->first())
									<li class="box_con_list fl display">
										<a href="/channel?id={{ $channel->id }}" target="_live" title="{{ $channel->name }}">
										<div class="box_con_img pr">
											<img src="/upload/{{ $channel->publisher->first()->avartar1 }}" alt="{{ trans('home.Avatar') }}">
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<div class="xu_mark pa">
												<span class="bofang pa"></span>
												<p class="txt-cut tc">进来都是有缘人，相逢何必曾相识，快来我的直播间坐坐吧！</p>
											</div>
										</div>
										<div class="box_con_msg">
											<div class="box_con_msg_a fl txt-cut">
												<span class="xu_vip20 v10 fr"></span>{{ $channel->publisher->first()->name }}
											</div>
											<div class="box_con_msg_b fr txt-cut">
												<span class="box_num fl"></span>{{ $channel->users->count() }}</div>
										</div>
										</a>
									</li>
								@endif
							@endif
						@endforeach
						@endif										
					</ul>
				</div>			
			</div>

			<div class="row xu_hot ">
				<div class="xu_hot_top">{{ trans('home.Fashion') }}</div>
				<div class="hot_list clearfix">
					<ul>
					@if($channels)
						@foreach($channels as $index => $channel)
							@if($channel->category_id=='2')
								@if($channel->publisher->first())
									<li class="box_con_list fl display">
										<a href="/channel?id={{ $channel->id }}" target="_live" title="{{ $channel->name }}">
										<div class="box_con_img pr">
											<img src="/upload/{{ $channel->publisher->first()->avartar2 }}" alt="{{ trans('home.Avatar') }}">
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<div class="xu_mark pa">
												<span class="bofang pa"></span>
												<p class="txt-cut tc">进来都是有缘人，相逢何必曾相识，快来我的直播间坐坐吧！</p>
											</div>
										</div>
										<div class="box_con_msg">
											<div class="box_con_msg_a fl txt-cut">
												<span class="xu_vip20 v10 fr"></span>{{ $channel->publisher->first()->name }}
											</div>
											<div class="box_con_msg_b fr txt-cut">
												<span class="box_num fl"></span>{{ $channel->users->count() }}</div>
										</div>
										</a>
									</li>
								@endif
							@endif
						@endforeach
					@endif						
					</ul>
				</div>				
			</div>

			<div class="row xu_hot ">
				<div class="xu_hot_top">{{ trans('home.KnowHow') }}</div>
				<div class="hot_list clearfix">
					<ul>
					@if($channels)
						@foreach($channels as $index => $channel)
							@if($channel->category_id=='3')
								@if($channel->publisher->first())
									<li class="box_con_list fl display">
										<a href="/channel?id={{ $channel->id }}" target="_live" title="{{ $channel->name }}">
										<div class="box_con_img pr">
											<img src="/upload/{{ $channel->publisher->first()->avartar1 }}" alt="{{ trans('home.Avatar') }}">
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<div class="xu_mark pa">
												<span class="bofang pa"></span>
												<p class="txt-cut tc">进来都是有缘人，相逢何必曾相识，快来我的直播间坐坐吧！</p>
											</div>
										</div>
										<div class="box_con_msg">
											<div class="box_con_msg_a fl txt-cut">
												<span class="xu_vip20 v10 fr"></span>{{ $channel->publisher->first()->name }}
											</div>
											<div class="box_con_msg_b fr txt-cut">
												<span class="box_num fl"></span>{{ $channel->users->count() }}</div>
										</div>
										</a>
									</li>
								@endif
							@endif
						@endforeach
					@endif							
					</ul>
				</div>
			</div>

			<div class="row xu_hot ">

				<div class="xu_hot_top">{{ trans('home.Music') }}</div>
				<div class="hot_list clearfix">
					<ul>
					@if($channels)
						@foreach($channels as $index => $channel)
							@if($channel->category_id=='4')
								@if($channel->publisher->first())
									<li class="box_con_list fl display">
										<a href="/channel?id={{ $channel->id }}" target="_live" title="{{ $channel->name }}">
											<div class="box_con_img pr">
												<img src="/upload/{{ $channel->publisher->first()->avartar1 }}" alt="{{ trans('home.Avatar') }}">
												<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
												<div class="xu_mark pa">
													<span class="bofang pa"></span>
													<p class="txt-cut tc">进来都是有缘人，相逢何必曾相识，快来我的直播间坐坐吧！</p>
												</div>
											</div>
											<div class="box_con_msg">
												<div class="box_con_msg_a fl txt-cut">
													<span class="xu_vip20 v10 fr"></span>{{ $channel->publisher->first()->name }}
												</div>
												<div class="box_con_msg_b fr txt-cut">
													<span class="box_num fl"></span>{{ $channel->users->count() }}</div>
											</div>
										</a>
									</li>
								@endif
							@endif
						@endforeach
					@endif							
					</ul>
				</div>
			</div>

			<div class="row xu_hot ">
				<div class="xu_hot_top">{{ trans('home.Dance') }}</div>
				<div class="hot_list clearfix">
					<ul>
					@if($channels)
						@foreach($channels as $index => $channel)
							@if($channel->category_id=='5')
								@if($channel->publisher->first())
									<li class="box_con_list fl display">
										<a href="/channel?id={{ $channel->id }}" target="_live" title="{{ $channel->name }}">
										<div class="box_con_img pr">
											<img src="/upload/{{ $channel->publisher->first()->avartar1 }}" alt="{{ trans('home.Avatar') }}">
											<div class="state pa"><div>{{ trans('home.Live broadcast') }}</div></div>
											<div class="xu_mark pa">
												<span class="bofang pa"></span>
												<p class="txt-cut tc">进来都是有缘人，相逢何必曾相识，快来我的直播间坐坐吧！</p>
											</div>
										</div>
										<div class="box_con_msg">
											<div class="box_con_msg_a fl txt-cut">
												<span class="xu_vip20 v10 fr"></span>{{ $channel->publisher->first()->name }}
											</div>
											<div class="box_con_msg_b fr txt-cut">
												<span class="box_num fl"></span>{{ $channel->users->count() }}</div>
										</div>
										</a>
									</li>
								@endif
							@endif
						@endforeach
					@endif							
					</ul>
				</div>
			</div>
			
		</div>
		<div class="col-sm-1"> 
			<div style="    text-align: center;    margin-top: 20px;">
				{{ AdvMng::getHTML('shoes', true) }}
			</div>
		</div>
	</div>
	<!-- 在播达人弹窗 -->

	<div class="live_box dn">
		<h3 class="live_box_t fl">直播排期表</h3><div class="close_btn fr"><img src="/main/static.yizhibo.com/pc_live/static/img/close_btn.png" alt="关闭"></div>
		<ul class="live_box_list fl J_scroll">
		</ul>
	</div>
	<div class="dresser_box dn">
		<div class="close_btn"><img src="/main/static.yizhibo.com/pc_live/static/img/close_btn.png" alt="关闭"></div>
		<div class="dresser_box_now pr">
			<h3>在播达人</h3>
			<ul id="itemContainer">
						</ul>
			<div class="holder"></div>
		</div>
		<div class="dresser_box_uk">
			<h3>达人排行榜</h3>
			<ul class="dresser_box_list J_scroll" id="J_arrive_rank">
			</ul>
		</div>
	</div>
	<div class="footer" id="J_footer"></div> 
	<script type="text/javascript" src="/js/jquery.min.js"></script> 
	<script>
	$(document).ready(function(){
		$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
		
		// $('#search_btn').click(function(){
		// 	country = $( "#inputCountry option:selected" ).text();
		// 	gender = $( "#inputGender option:selected" ).text();
		// 	age = $( "#inputAge option:selected" ).text();
		// 	console.log(gender);
		// 	$.post('/search',
        //     {   
        //         country : country,
        //         gender : gender,
		// 		age : age
        //     },
        //     function(res){
		// 		console.log(res);

		// 	});

		// });
	});
	</script>
</body>
</html>
@extends('layouts.app')

@section('template_title')
	{{ $user->first_name }}
@endsection

@section('template_fastload_css')

	#map-canvas{
		min-height: 300px;
		height: 100%;
		width: 100%;
	}

@endsection

@section('content')

	<div class="container mt-5">
		<!-- Section: Basic Info -->
		<section class="card profile-card mb-4 text-center">
			<div class="avatar z-depth-1-half">
				<img src="@if ($user->profile && $user->profile->avatar_status == 1)
				{{ $user->profile->avatar }}
				@else {{ Gravatar::get($user->email) }}
				@endif" alt="{{ $user->name }}" class="user-avatar" width="150;">
			</div>
			<!-- Card content -->
			<div class="card-body">
				<!-- Title -->
				<h4 class="card-title"><strong>	{{ $user->first_name }}</strong></h4>
				<h5>{{ $user->phone }}</h5>
				<p class="dark-grey-text">{{ $user->email }}</p>

				@if ($user->profile)
					@if (Auth::user()->id == $user->id)

						<div class="formbutton">
							<a href="{{ url('/profile/'.Auth::user()->name.'/edit')}}">  <button class="btn text-white btn-rounded btn-block my-4 waves-effect z-depth-0 mx-auto" style="width:200px;" type="submit">
								{{trans('titles.editProfile')}}</button></a>
						</div>
					@endif
				@else

					<p>{{ trans('profile.noProfileYet') }}</p>
					{!! HTML::icon_link(URL::to('/profile/'.Auth::user()->name.'/edit'), 'fa fa-fw fa-plus ', trans('titles.createProfile'), array('class' => 'btn btn-small'))  !!}

				@endif
			</div>

		</section>
		<!-- Section: Basic Info -->

	</div>
@endsection

@section('footer_scripts')
@endsection

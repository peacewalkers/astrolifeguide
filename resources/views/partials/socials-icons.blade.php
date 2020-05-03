<div class="row">
    <div class="col-12 mb-2 text-center">
        <a href="{{ route('social.redirect','facebook') }}"> <img class="m-3" src="{{ asset('astrolifeguide')}}/img/icons/lwf.png" width="200"></a>
        <a href="{{ route('social.redirect','facebook') }}"> <img class="m-3"  src="{{ asset('astrolifeguide')}}/img/icons/lwg.png" width="200"></a>
        {{--{!! HTML::icon_link(route('social.redirect',['provider' => 'facebook']), 'btn-facebook', '', array('class' => 'btn btn-social-icon btn-lg mb-1 btn-facebook')) !!}
        {!! HTML::icon_link(route('social.redirect',['provider' => 'google']), 'fa fa-google-plus', '', array('class' => 'btn btn-social-icon btn-lg mb-1 btn-google text-danger p')) !!}--}}
    </div>
</div>

@extends('master')
@section('title', 'RPL SMKN 2 BALIKPAPAB | HOMEPAGE')
@section('content')

  <div class="rev_slider_wrapper fullscreen-container">
    <div id="slider3" class="rev_slider fullscreenbanner bg-dark" data-version="5.4.7">
      <ul>
        <li data-transition="fade">
          <img src="/style/media/swimming.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina="" />
          <div class="rs-background-video-layer"
          data-forcerewind="on"
          data-volume="mute"
          data-videowidth="100%"
          data-videoheight="100%"
          data-videomp4="/style/media/swimming.mp4"
          data-videopreload="auto"
          data-videoloop="loop"
          data-forcecover="1"
          data-aspectratio="16:9"
          data-autoplay="true"
          data-autoplayonlyfirsttime="false"
          data-nextslideatend="false"
          data-dottedoverlay="darkoverlay"></div>
          <div class="tp-caption font-weight-500 text-uppercase color-white text-center"
          data-x="center"
          data-y="middle"
          data-voffset="['-70','-70','-70','-65']"
          data-fontsize="['16','16','16','16']"
          data-lineheight="['26','26','26','26']"
          data-width="['600','600','600','450']"
          data-textAlign="['center','center','center','center']"
          data-whitespace="['normal','normal','normal','normal']"
          data-frames='[{"delay":1000,"speed":1200,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
          data-responsive="on"
          data-responsive_offset="on"
          style="z-index: 9; letter-spacing: 3px;">OFFICIAL WEBSITE</div>
          <div class="tp-caption font-weight-700  color-white text-center"
          data-x="center"
          data-y="middle"
          data-voffset="['30','30','30','25']"
          data-fontsize="['55','55','45','30']"
          data-lineheight="['70','70','60','45']"
          data-width="['900','900','700','450']"
          data-textAlign="['center','center','center','center']"
          data-whitespace="['normal','normal','normal','normal']"
          data-frames='[{"delay":1500,"speed":1200,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
          data-responsive="on"
          data-responsive_offset="on"
          style="z-index: 9; letter-spacing: -0.5px;">REKAYASA PERANGKAT LUNAK SMKN 2 BALIKPAPAN</div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
  <!-- /.rev_slider -->
  </div>

@endsection

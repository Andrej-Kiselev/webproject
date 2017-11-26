@extends('app')

@section('content')
<div class="fotorama" data-autoplay="true" data-loop="true" data-fit="contain" data-nav="false" style="float: left;">
  <img src="/images/0.jpg" width="700" height="450">
  <img src="/images/1.jpg" width="700" height="450">
  <img src="/images/2.jpg" width="700" height="450">
  <img src="/images/3.jpg" width="700" height="450">
</div>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

<!-- VK Widget -->
<div id="vk_groups" style="float: right;"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 2, wide:1, width: "400", height: "780"}, 139451775);
</script>
@stop

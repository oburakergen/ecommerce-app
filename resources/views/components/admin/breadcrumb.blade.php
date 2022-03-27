@php
   $count = count(Request::segments())
@endphp
<div class="col">
    <h4 class="page-title">{{ Request::segment($count) }}</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0);">Dastone</a></li>
        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
        <li class="breadcrumb-item active"></li>
    </ol>
</div><!--end col-->

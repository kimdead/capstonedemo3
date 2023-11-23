@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show" class="pt-5 mt-5 backround-danger d-flex w-100%">
<p class="justify-content-center fw-semibold fs-1 mx-auto">{{session('message')}}</p>
</div>
@endif
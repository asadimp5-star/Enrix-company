


@if (!request()->Is('*/contact*'))

<section data-dc-tpl="66" class="getTouch" id="getTouch">
<div data-dc-tpl="67" class="getTouchdiv">
<div data-dc-tpl="68" class="getTouchdiv1">
<p data-dc-tpl="69" class="getInTouchP">{{ __('content.Call to action') }}</p>
<h2 data-dc-tpl="70" class="getInTouchh2">
    <span class="text-danger">&#x201C;</span>
    {{ __('content.Let\'s explore what fits your programme') }}
    <span class="text-danger">&#x201E;</span>

</h2>
<p data-dc-tpl="71" class="getInTouchP1">{{ __('content.Book a free 30-minute call or send me a message.') }}</p>
</div>
<div data-dc-tpl="72" class="getTouchdiv2">
<a data-dc-tpl="73" href="#" class="getInTouchA">{{ __('content.Book a time') }}</a>
<a data-dc-tpl="74" href="{{ route('contact') }}#formC" class="getInTouchA1">{{ __('content.Send a message') }}</a>
</div>
</div>
</section>

@endif

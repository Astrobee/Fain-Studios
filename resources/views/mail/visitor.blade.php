@component('mail::message')
<h3>A New Message From a Visitor</h3>
<p>
<pre>
	Name: <b style="color:black">{{ $visitor->name }}</b>
	Email: <b style="color:blue">{{ $visitor->email }}</b>
</pre>
</p>

<h1 style="color:red">Message</h1>
<p>{{ $visitor->message }}</p>



Thanks,<br>
{{ config('app.name') }}
@endcomponent

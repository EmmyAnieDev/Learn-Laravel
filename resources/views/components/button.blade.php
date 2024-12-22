
{{-- To use default data in the attribute, we use the merge() method--}}
<button {{ $attributes->merge(['style' => 'border:1px solid green;']) }}>Test button</button>

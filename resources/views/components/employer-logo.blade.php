@props(['size' => 90, 'employer'])

<img src="https://api.dicebear.com/9.x/icons/svg?backgroundType=gradientLinear&seed={{ $employer->name }}" alt=""
    class="rounded-xl" width="{{ $size }}">
{{-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $size }}"> --}}

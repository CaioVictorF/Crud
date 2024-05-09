@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@elseif (session('error'))
    <p style="color: red;">{{ session('error') }}</p>
@endif





{{--@if(session('danger'))
    
@endif--}}


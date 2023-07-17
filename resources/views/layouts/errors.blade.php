@if (Session::has('success'))
<p id="notif" style="background-color:  #203c2d; color:white">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p id="notif" style="background-color:  #3e1d1d;color:white">{{Session::get('fail')}}</p>
@endif

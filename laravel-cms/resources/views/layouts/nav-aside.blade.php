

@section('css')
@import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap');
@endsection

<!-- SIDE MENU BAR -->
<aside class="app-sidebar"> 
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/')}}">
          <h1 style="font-family: 'Libre Baskerville', serif; color:#fff;">STOCK</h1>
            {{-- <img src="{{URL::asset('img/brand/logo-3.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo"> --}}
            <img src="{{URL::asset('img/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        {{-- @role('admin') --}}
            <li class="side-item side-item-category mt-4">{{ __('Folders') }}</li>
            
    </ul>
</aside>


<!-- END SIDE MENU BAR -->
<section class="sidebar-dash">

    <ul>
        <li>

            <a class=" {{ (Request::route()->getName() == 'dashboard-dottore') ? 'active-dash' : '' }} " href="{{ route('dashboard-dottore')}} "> <i class="fas fa-user"></i> Il tuo profilo</a>
        </li>
        <li>
            <a class=" {{ (Request::route()->getName() == 'admin.message') ? 'active-dash' : '' }} " href="{{ route('admin.message')}}"><i class="fas fa-envelope"></i> Messaggi</a>
        </li>
        <li>
            <a class=" {{ (Request::route()->getName() == 'review.index') ? 'active-dash' : '' }} " href="{{ route('review.index')}}"><i class="fas fa-star"></i> Recensioni</a>
        </li>
        <li>
            <a class=" {{ (Request::route()->getName() == 'admin.statistics') ? 'active-dash' : '' }} " href="{{ route('admin.statistics')}}"><i class="fas fa-chart-pie"></i> Statistiche</a>
        </li>

        <li>
            <a class=" {{ (Request::route()->getName() == 'crea-dottore') ? 'active-dash' : '' }} " href="{{ route('crea-dottore') }}"><i class="fas fa-chart-pie"></i> Completa profilo</a>
        </li>
    </ul>


</section>

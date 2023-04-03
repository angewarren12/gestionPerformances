<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                
                <li> 
                    <a href="index.html"><i class="la la-home"></i> <span>Back to Home</span></a>
                </li>
                @foreach ($objectifListe as $objectifListes)
                <li> 
                    <a href="{{ route('admin.tacheView',$objectifListes->id) }}"> <span>{{ $objectifListes->titre }}</span></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
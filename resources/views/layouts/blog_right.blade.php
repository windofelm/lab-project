<div class="col-md-3 col-md-offset-1 right-col-rv">
    <div class="widget sidebar_widget">
        <form class="search-form" method="GET" action="{{route('blog-articles')}}">
            <input type="text" name="search" class="form-control search-field" id="search" placeholder="Aramak için başlayın..">
            <button type="submit" class="fa fa-search search-submit"></button>
        </form>
    </div>
    <div class="widget widget_about">
        <h4 class="widget-title">Hakkında</h4>
        <p>Blogda yer alan makaleler ilgili teknik konuda yeterli arkadaşlarımız tarafından özenle ve günün teknolojik beklentileri göz önünde bulundurularak hazırlanmaktadır.</p>
    </div>
    <div class="widget sidebar_widget widget_archive">
        <h4 class="widget-title">AYLAR</h4>
        <ul>
            @for($i = 0; $i <= 5; $i++)
                <li> <a href="{{route('blog-articles')."?month=".date("m", strtotime( date( 'Y-m-01' )." -$i months"))}}">{{Config::get("custom.months")[date("m", strtotime( date( 'Y-m-01' )." -$i months"))]}} 2017</a> </li>
            @endfor

        </ul>
    </div>
    <div class="widget sidebar_widget widget_categories">
        <h4 class="widget-title">KATEGORİLER</h4>
        <ul>
            @foreach(\App\Category::all() as $category)
                <li> <a href="{{route('blog-articles', $category->slug)}}">{{$category->category_name}}</a> </li>
            @endforeach
        </ul>
    </div>
    <div class="widget sidebar_widget widget_tag_cloud">
        <h4 class="widget-title">ETİKETLER</h4>
        <div class="post-tags"> <a href="#">Design</a> <a href="#">Envato</a> <a href="#">Photography</a> <a href="#">Videos</a> <a href="#">Creative</a> <a href="#">Apps</a> </div>
    </div>
</div>
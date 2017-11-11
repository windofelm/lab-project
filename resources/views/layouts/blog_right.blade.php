<div class="col-md-3 col-md-offset-1 right-col-rv">
    <div class="widget sidebar_widget">
        <form class="search-form" method="get">
            <input type="text" name="name" class="form-control search-field" id="search" placeholder="Type what it's your mind...">
            <button type="submit" class="fa fa-search search-submit"></button>
        </form>
    </div>
    <div class="widget widget_about">
        <h4 class="widget-title">About</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat.</p>
    </div>
    <div class="widget sidebar_widget widget_archive">
        <h4 class="widget-title">Archive</h4>
        <ul>
            <li> <a href="#">January 2017</a> </li>
            <li> <a href="#">May 2016</a> </li>
            <li> <a href="#">June 2015</a> </li>
            <li> <a href="#">Febuary 2017</a> </li>
            <li> <a href="#">April 2015</a> </li>
        </ul>
    </div>
    <div class="widget sidebar_widget widget_categories">
        <h4 class="widget-title">Categories</h4>
        <ul>
            @foreach(\App\Category::all() as $category)
                <li> <a href="{{route('blog-articles', $category->slug)}}">{{$category->category_name}}</a> </li>
            @endforeach
        </ul>
    </div>
    <div class="widget sidebar_widget widget_tag_cloud">
        <h4 class="widget-title">Tags</h4>
        <div class="post-tags"> <a href="#">Design</a> <a href="#">Envato</a> <a href="#">Photography</a> <a href="#">Videos</a> <a href="#">Creative</a> <a href="#">Apps</a> </div>
    </div>
</div>
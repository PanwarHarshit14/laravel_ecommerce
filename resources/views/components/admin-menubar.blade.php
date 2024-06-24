<ul class="m-0 p-0 main-navbar">
    @foreach ($menus as $menu)
    <li {{empty($menu['url']) ? 'class=has-dropdown' : ''}}>
        <a class="d-flex align-items-center" href="{{ !empty($menu['url']) ? $menu['url'] : '#' }}">
        @if (!empty($menu['icon']))
            <i class="{{$menu['icon']}} me-2"></i>
        @endif
        {{$menu['label']}}
    @if (!empty($menu['children']))
    <span class="bi bi-chevron-right bi-nav ms-auto"></span>
    @endif
    </a>
    @if (!empty($menu['children']))
    <ul class="m-0">
        @foreach ($menu['children'] as $sMenu)
        <li><a href="{{$sMenu['url']}}">
            <i class="{{$sMenu['icon']}} me-1   "></i>
            {{$sMenu['label']}}</a></li>
        @endforeach
        </ul>
    @endif
    </li>
    @endforeach
        </ul>
    
        @push('extra_scripts')
        <script>
            $(function (){
                // Jqurey
                $(document).on("click", "li.has-dropdown > a", function (event){
                    event.preventDefault();
                    let parent = $(this).closest("li");
                    parent.find("ul").slideToggle();
                    parent.toggleClass("open");

                    let other_parent = $("li.has-dropdown > a").not(this).closest("li");
                    other_parent.find("ul").slideUp();
                    other_parent.removeClass("open");
                });
            });
        </script>
        @endpush
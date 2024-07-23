<nav class="navbar navbar-expand-lg bg-body-tertiary py-0">
    <div class="container-fluid navbar_theme">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-1 mb-lg-0">
                <li class="nav-item mx-3 py-2">
                    <a class="nav-link text-light active" aria-current="page" href="{{ route('home') }}">HOME</a>
                </li>
                @foreach ($categories as $mCat)
                    <li class="nav-item dropdown dropdown_mega mx-3 py-2">
                        <a class="nav-link text-light dropdown-toggle" href="{{ route('product.index', [$mCat]) }}"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $mCat->name }}
                        </a>
                        @if (!empty($mCat->subcategories))
                            <div class="dropdown-menu">
                                @foreach ($mCat->subcategories as $subCat)
                                    <ul>
                                        <li>
                                            <a class="dropdown-item"
                                                href="{{ route('product.index', [$mCat, $subCat]) }}">
                                                {{ $subCat->name }}
                                            </a>
                                            @if (!empty($subCat->subcategories))
                                                <ul>
                                                    @foreach ($subCat->subcategories as $subCat2)
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('product.index', [$mCat, $subCat, $subCat2]) }}">
                                                                {{ $subCat2->name }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        @endif
                    </li>
                @endforeach
                <li class="nav-item mx-3 py-2">
                    <a class="nav-link text-light" href="#">WHOLESALE</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@foreach ($routes as $route)

    {{-- SINGLE URL --}}
    @if ($route['type'] === 'single')

        @if ($viewType !== 'mobile')
            <a href="{{ $route['url'] }}" class="link-primary text-sm uppercase font-semibold {{ $route['isActive'] ? 'text-primary' : 'text-black' }}">
                {{ $route['name'] }}
            </a>

        @else
            <a href="{{ $route['url'] }}" class="link-primary text-sm uppercase font-semibold {{ $route['isActive'] ? 'text-primary' : 'text-black' }}">
                {{ $route['name'] }}
            </a>

        @endif


    {{-- MICRO MODAL --}}
    @elseif ($route['type'] === 'modal-button')

        @if ($viewType !== 'mobile')
            <button type="button" data-micromodal-trigger="{{ $route['data-micromodal-trigger'] }}" class="btn link-primary text-black text-sm uppercase font-semibold">
                {{ $route['name'] }}
            </button>

        @else
            <button type="button" data-micromodal-trigger="{{ $route['data-micromodal-trigger'] }}" onclick="window.history.back()" class="text-left btn link-primary text-black text-sm uppercase font-semibold">
                {{ $route['name'] }}
            </button>

        @endif


    {{-- GROUPED ROUTE --}}
    @elseif ($route['type'] === 'multi')

        @if ($viewType !== 'mobile')
            <div class="relative dropdown-nav">
                <button class="btn link-primary text-black text-sm uppercase font-semibold {{ $route['isActive'] ? 'text-primary' : 'text-black' }}">
                    <div>{{ $route['name'] }} <i class="ml-2 fa fa-angle-down fa-lg"></i></div>
                </button>
                <div class="dropdown-nav-menu {{ $route['isActive'] ? 'top-5' : 'top-5' }} absolute hidden h-auto pt-4">
                    <ul class="block w-full bg-white shadow border border-gray-100 py-3 px-5 rounded-lg">
                        @foreach ($route['group'] as $childRoute)
                            <li class="py-3">
                                <a href="{{ $childRoute['url'] }}" class="link-primary cursor-pointer font-semibold whitespace-nowrap">
                                    {{ $childRoute['name'] }}
                                </a>
                            </li>
                            <hr/>
                        @endforeach
                    </ul>
                </div>
            </div>

        @else
            <div class="">
                <button type="button" class="dropdown-menu-mobile-btn text-left w-full btn link-primary text-black text-sm uppercase font-semibold {{ $route['isActive'] ? 'text-primary' : 'text-black' }}">
                    <div class="flex justify-between items-center">
                        <div>{{ $route['name'] }}</div>
                        <i class="fa fa-angle-down fa-lg"></i>
                    </div>
                </button>
                <div class="h-auto w-full overflow-hidden">
                    <div class="w-full mt-2 flex flex-col h-auto max-h-0 bg-gray-200 px-4 transition-all duration-500 ease-in-out">
                        @foreach ($route['group'] as $childRoute)
                            <a href="{{ $childRoute['url'] }}" class="link-primary w-full py-1">{{ $childRoute['name'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>

        @endif

    @endif
@endforeach

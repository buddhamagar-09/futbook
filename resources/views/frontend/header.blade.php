 <header class="border-b border-white/10 bg-slate-950/40 backdrop-blur">
                <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4 lg:px-8">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 text-lg font-semibold tracking-tight">
                        <span class="flex h-10 w-10 items-center justify-center rounded-2xl bg-white/10 ring-1 ring-white/15">F</span>
                        Futbook
                    </a>

                    <nav class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
                        <a href="#featured" class="transition hover:text-white">Featured</a>
                        <a href="{{ route('products') }}" class="transition hover:text-white">Products</a>
                        <a href="#contact" class="transition hover:text-white">Contact</a>
                    </nav>

                    <div class="flex items-center gap-3 text-sm font-medium">
                            @if(Auth::check())
                          <span class="inline-flex items-center rounded-full border border-white/15 bg-white/10 px-3 py-2 text-sm font-medium text-white shadow-sm">
                              Welcome, {{ Auth::user()?->name }}
                          </span>
                                  <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
                            @else
                                <a href="{{ route('login') }}" class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-white transition hover:bg-white/10">
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="rounded-full bg-pink-500 px-4 py-2 text-white transition hover:bg-pink-400">
                                        Register
                                    </a>
                                @endif
                            @endif
                    </div>
                </div>
            </header>
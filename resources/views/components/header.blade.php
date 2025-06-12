     <!-- Header -->
     @php
     $activeClass = 'text-yellow-500 hover:text-yellow-600 border-b-2 border-yellow-500';
     @endphp
     <header class="bg-blue-900 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-semibold">
                <a href={{url('/')}}>Workopia</a>
            </h1>
            <nav class="hidden md:flex items-center space-x-4">

                <x-nav-link :active="request()->is('jobs')" url="/jobs">All Jobs</x-nav-link>
                <x-nav-link :active="request()->is('saved-jobs')" url="/saved-jobs">Saved Jobs</x-nav-link>
                <x-nav-link :active="request()->is('login')" url="/login" icon='user'>Login</x-nav-link>
                <x-nav-link :active="request()->is('register')" url="/register">Register</x-nav-link>
                <x-nav-link :active="request()->is('dashboard')" url='/dashboard' icon="gauge"> Dashboard         </x-nav-link>
                <x-button-link
                    url="/jobs/create"
                    icon="edit">
                    Create Job
                </x-button-link>

            </nav>
            <button
                id="hamburger"
                class="text-white md:hidden flex items-center"
            >
                <i class="fa fa-bars text-2xl"></i>
            </button>
        </div>
        <!-- Mobile Menu -->
        <nav
            id="mobile-menu"
            class="hidden md:hidden bg-blue-900 text-white mt-5 pb-4 space-y-2"
        >

            <x-nav-link :active="request()->is('/jobs')" url="/jobs" :mobile=true>Jobs</x-nav-link>
            <x-nav-link :active="request()->is('/saved-jobs')" url="/saved-jobs" :mobile=true>Saved Jobs</x-nav-link>
            <x-nav-link :active="request()->is('/login')" url="/login" :mobile=true>Login</x-nav-link>
                <x-button-link
                    url="/jobs/create"
                    :block="true"
                    icon="edit">
                    Create Job
                </x-button-link>
        </nav>
    </header>

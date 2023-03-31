<li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="avatar avatar-l ">
            <img class="rounded-circle " src="{{ asset('assets/img/team/57.png') }}" alt="" />
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border border-300"
        aria-labelledby="navbarDropdownUser">
        <div class="card position-relative border-0">
            <div class="card-body p-0">
                @auth

                <div class="text-center pt-4 pb-3">
                    <div class="avatar avatar-xl ">
                        <img class="rounded-circle " src="{{ asset('assets/img/team/57.png') }}" alt="" />
                    </div>
                    <h6 class="mt-4 text-black">{{ auth()->user()->nama }}</h6>
                    <small>{{ auth()->user()->email }}</small>
                </div>
                {{-- <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput"
                        type="text" placeholder="Update your status" />
                </div> --}}
            </div>
            <div class="overflow-auto scrollbar" style="height: 10rem;">
                <ul class="nav d-flex flex-column mb-2 pb-1">
                    <li class="nav-item"><a class="nav-link px-3" href="/profile"> <span class="me-2 text-900"
                                data-feather="user"></span>Profile</a>
                    </li>
                    {{--
                    <li class="nav-item"><a class="nav-link px-3" href="/dashboard"><span class="me-2 text-900"
                                data-feather="pie-chart"></span>Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                data-feather="lock"></span>Posts &amp;
                            Activity</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                data-feather="settings"></span>Settings
                            &amp; Privacy </a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                data-feather="help-circle"></span>Help
                            Center</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                data-feather="globe"></span>Language</a>
                    </li>
                </ul>
            </div> --}}
            <div class="card-footer p-0 border-top">
                {{-- <ul class="nav d-flex flex-column my-3">
                    <li class="nav-item"><a class="nav-link px-3" href="#!"> <span class="me-2 text-900"
                                data-feather="user-plus"></span>Add
                            another account</a></li>
                </ul> --}}

                <div class="px-3 py-2">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-phoenix-secondary d-flex flex-center w-100">
                            <span class="me-2" data-feather="log-out"></span>
                            Signout</button>
                    </form>
                </div>
                <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy
                        policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1"
                        href="#!">Cookies</a>
                </div>
            </div>
        </div>
    </div>
</li>
@endauth
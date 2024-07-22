<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable" href="#" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <span class="position-relative pt-1">
            <i class="bi bi-bell"></i>
            <span
                class="p-1 bg-danger border border-light rounded-circle position-absolute top-0 start-100 translate-middle">
                <span class="visually-hidden">New Notifications</span>
            </span>
        </span>
    </a>
    <ul class="dropdown-menu dropdown-menu-md-end bsb-dropdown-animation bsb-fadeIn">
        <li>
            <h6 class="dropdown-header fs-7 text-center">18 Notifications</h6>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="#!">
                <span>
                    <i class="bi bi-envelope-fill me-2"></i>
                    <span class="fs-7">New Messages</span>
                </span>
                <span class="fs-7 ms-auto text-secondary">5 mins</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="#!">
                <span>
                    <i class="bi bi-person-fill me-2"></i>
                    <span class="fs-7">Friend Requests</span>
                </span>
                <span class="fs-7 ms-auto text-secondary">17 hours</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <a class="dropdown-item d-flex align-items-center" href="#!">
                <span>
                    <i class="bi bi-file-earmark-fill me-2"></i>
                    <span class="fs-7">New Reports</span>
                </span>
                <span class="fs-7 ms-auto text-secondary">3 days</span>
            </a>
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item fs-7 text-center" href="{{ route('contacts.index') }}">See All Notifications</a></li>
    </ul>
</li>

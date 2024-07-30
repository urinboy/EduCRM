<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle bsb-dropdown-toggle-caret-disable d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="position-relative pt-1">
            {{-- <i class="bi bi-globe"></i> --}}
            <i class="bi bi-translate"></i>
            <span class="fw-bold mx-1">{{ strtoupper(app()->getLocale()) }}</span>
        </span>
    </a>
    <div class="bg-white dropdown-menu dropdown-menu-md-end bsb-dropdown-sm bsb-dropdown-animation bsb-fadeIn">
        <div class="list-group list-group-flush">
            @foreach (App\Models\Language::all() as $language)
            <form action="{{ route('locale.change') }}" method="POST">
                @csrf
                <button type="submit" name="locale" value="{{ $language->code }}" class="d-flex align-items-center justify-content-start list-group-item list-group-item-action @if (app()->getLocale() === $language->code) fw-bold active @endif">
                    <img src="{{ asset('/dist/flags/' . $language->code . '.png') }}" alt="{{ $language->name }}"  width="20px" class="me-2">
                    {{ $language->name }}
                </button>
            </form>
            @endforeach
        </div>
    </div>
</li>
